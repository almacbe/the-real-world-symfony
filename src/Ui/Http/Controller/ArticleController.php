<?php

declare(strict_types=1);

namespace App\Ui\Http\Controller;

use App\Application\Article\ArticleService;
use App\Application\Exception\UnauthorizedException;
use App\Domain\User\User;
use App\Ui\Http\Request\JsonRequestBodyParser;
use App\Ui\Http\Response\RealWorldResponseFactory;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api/articles')]
final class ArticleController
{
    public function __construct(
        private readonly ArticleService $articleService,
        private readonly JsonRequestBodyParser $bodyParser,
        private readonly RealWorldResponseFactory $responseFactory,
        private readonly Security $security,
    ) {
    }

    #[Route('', name: 'realworld_articles_list', methods: ['GET'])]
    public function list(Request $request): JsonResponse
    {
        $tag = $request->query->get('tag');
        $author = $request->query->get('author');
        $favorited = $request->query->get('favorited');

        $limit = (int) $request->query->get('limit', 20);
        $offset = (int) $request->query->get('offset', 0);

        if ($limit <= 0) {
            $limit = 20;
        }

        if ($limit > 100) {
            $limit = 100;
        }

        if ($offset < 0) {
            $offset = 0;
        }

        $currentUser = $this->security->getUser();

        $result = $this->articleService->list(
            $tag ? (string) $tag : null,
            $author ? (string) $author : null,
            $favorited ? (string) $favorited : null,
            $limit,
            $offset
        );

        return new JsonResponse(
            $this->responseFactory->articles(
                $result->getArticles(),
                $result->getCount(),
                $currentUser instanceof User ? $currentUser : null
            )
        );
    }

    #[Route('/feed', name: 'realworld_articles_feed', methods: ['GET'])]
    public function feed(Request $request): JsonResponse
    {
        $user = $this->requireUser();

        $limit = (int) $request->query->get('limit', 20);
        $offset = (int) $request->query->get('offset', 0);

        if ($limit <= 0) {
            $limit = 20;
        }

        if ($limit > 100) {
            $limit = 100;
        }

        if ($offset < 0) {
            $offset = 0;
        }

        $result = $this->articleService->feed($user, $limit, $offset);

        return new JsonResponse(
            $this->responseFactory->articles($result->getArticles(), $result->getCount(), $user)
        );
    }

    #[Route('', name: 'realworld_articles_create', methods: ['POST'])]
    public function create(Request $request): JsonResponse
    {
        $user = $this->requireUser();
        $payload = $this->bodyParser->parse($request, 'article');

        $article = $this->articleService->create($user, $payload);

        return new JsonResponse(
            $this->responseFactory->article($article, $user),
            JsonResponse::HTTP_CREATED
        );
    }

    #[Route('/{slug}', name: 'realworld_articles_get', methods: ['GET'])]
    public function get(string $slug): JsonResponse
    {
        $article = $this->articleService->getBySlug($slug);
        $currentUser = $this->security->getUser();

        return new JsonResponse(
            $this->responseFactory->article($article, $currentUser instanceof User ? $currentUser : null)
        );
    }

    #[Route('/{slug}', name: 'realworld_articles_update', methods: ['PUT'])]
    public function update(Request $request, string $slug): JsonResponse
    {
        $user = $this->requireUser();
        $payload = $this->bodyParser->parse($request, 'article');
        $article = $this->articleService->getBySlug($slug);

        $updated = $this->articleService->update($user, $article, $payload);

        return new JsonResponse($this->responseFactory->article($updated, $user));
    }

    #[Route('/{slug}', name: 'realworld_articles_delete', methods: ['DELETE'])]
    public function delete(string $slug): Response
    {
        $user = $this->requireUser();
        $article = $this->articleService->getBySlug($slug);
        $this->articleService->delete($user, $article);

        return new Response('', Response::HTTP_NO_CONTENT);
    }

    private function requireUser(): User
    {
        $user = $this->security->getUser();

        if (!$user instanceof User) {
            throw new UnauthorizedException('Authentication required');
        }

        return $user;
    }
}
