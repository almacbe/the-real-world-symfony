<?php

declare(strict_types=1);

namespace App\Ui\Http\Controller;

use App\Application\Article\ArticleService;
use App\Application\Comment\CommentService;
use App\Application\Exception\ForbiddenException;
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
final class CommentController
{
    public function __construct(
        private readonly ArticleService $articleService,
        private readonly CommentService $commentService,
        private readonly JsonRequestBodyParser $bodyParser,
        private readonly RealWorldResponseFactory $responseFactory,
        private readonly Security $security,
    ) {
    }

    #[Route('/{slug}/comments', name: 'realworld_comments_list', methods: ['GET'])]
    public function list(string $slug): JsonResponse
    {
        $article = $this->articleService->getBySlug($slug);
        $currentUser = $this->security->getUser();

        $comments = $this->commentService->listForArticle($article);

        return new JsonResponse(
            $this->responseFactory->comments($comments, $currentUser instanceof User ? $currentUser : null)
        );
    }

    #[Route('/{slug}/comments', name: 'realworld_comments_create', methods: ['POST'])]
    public function create(Request $request, string $slug): JsonResponse
    {
        $user = $this->requireUser();
        $article = $this->articleService->getBySlug($slug);
        $payload = $this->bodyParser->parse($request, 'comment');

        $comment = $this->commentService->create($user, $article, $payload);

        return new JsonResponse(
            $this->responseFactory->comment($comment, $user),
            JsonResponse::HTTP_CREATED
        );
    }

    #[Route('/{slug}/comments/{id}', name: 'realworld_comments_delete', methods: ['DELETE'])]
    public function delete(string $slug, int $id): Response
    {
        $user = $this->requireUser();
        $article = $this->articleService->getBySlug($slug);
        $comment = $this->commentService->getById($id);

        if ($comment->getArticle()->getId() !== $article->getId()) {
            throw new ForbiddenException('Comment does not belong to article');
        }

        $this->commentService->delete($user, $comment);

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
