<?php

declare(strict_types=1);

namespace App\Domain\Article;

use App\Domain\User\User;

interface ArticleRepositoryInterface
{
    public function save(Article $article): void;

    public function remove(Article $article): void;

    public function findBySlug(string $slug): ?Article;

    public function countByFilters(?string $tag, ?string $author, ?string $favoritedBy): int;

    /**
     * @return list<Article>
     */
    public function findByFilters(?string $tag, ?string $author, ?string $favoritedBy, int $limit, int $offset): array;

    public function countFeed(User $user): int;

    /**
     * @return list<Article>
     */
    public function findFeed(User $user, int $limit, int $offset): array;
}
