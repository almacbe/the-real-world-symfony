<?php

declare(strict_types=1);

namespace App\Ui\Http\Controller;

use App\Application\Article\ArticleService;
use App\Application\Exception\UnauthorizedException;
use App\Domain\User\User;
use App\Ui\Http\Response\RealWorldResponseFactory;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api/articles')]
final class ArticleFavoriteController
{
    public function __construct(
        private readonly ArticleService $articleService,
        private readonly RealWorldResponseFactory $responseFactory,
        private readonly Security $security,
    ) {
    }

    #[Route('/{slug}/favorite', name: 'realworld_articles_favorite', methods: ['POST'])]
    public function favorite(string $slug): JsonResponse
    {
        $user = $this->requireUser();
        $article = $this->articleService->getBySlug($slug);
        $updated = $this->articleService->favorite($user, $article);

        return new JsonResponse($this->responseFactory->article($updated, $user));
    }

    #[Route('/{slug}/favorite', name: 'realworld_articles_unfavorite', methods: ['DELETE'])]
    public function unfavorite(string $slug): JsonResponse
    {
        $user = $this->requireUser();
        $article = $this->articleService->getBySlug($slug);
        $updated = $this->articleService->unfavorite($user, $article);

        return new JsonResponse($this->responseFactory->article($updated, $user));
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
