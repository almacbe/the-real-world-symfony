<?php

declare(strict_types=1);

namespace App\Domain\Comment;

use App\Domain\Article\Article;

interface CommentRepositoryInterface
{
    public function save(Comment $comment): void;

    public function remove(Comment $comment): void;

    public function findById(int $id): ?Comment;

    /**
     * @return list<Comment>
     */
    public function findForArticle(Article $article): array;
}
