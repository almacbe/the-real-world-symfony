<?php

declare(strict_types=1);

namespace App\Application\Comment;

use App\Application\Exception\ForbiddenException;
use App\Application\Exception\NotFoundException;
use App\Application\Exception\ValidationException;
use App\Domain\Article\Article;
use App\Domain\Comment\Comment;
use App\Domain\Comment\CommentRepositoryInterface;
use App\Domain\User\User;

final class CommentService
{
    public function __construct(private readonly CommentRepositoryInterface $commentRepository)
    {
    }

    public function create(User $author, Article $article, array $payload): Comment
    {
        $body = trim((string) ($payload['body'] ?? ''));

        if ($body === '') {
            throw new ValidationException(['body is required']);
        }

        $comment = new Comment($article, $author, $body);
        $this->commentRepository->save($comment);

        return $comment;
    }

    public function delete(User $user, Comment $comment): void
    {
        if ($comment->getAuthor()->getId() !== $user->getId()) {
            throw new ForbiddenException('You are not allowed to delete this comment');
        }

        $this->commentRepository->remove($comment);
    }

    public function getById(int $id): Comment
    {
        $comment = $this->commentRepository->findById($id);

        if (!$comment) {
            throw new NotFoundException('Comment not found');
        }

        return $comment;
    }

    /**
     * @return list<Comment>
     */
    public function listForArticle(Article $article): array
    {
        return $this->commentRepository->findForArticle($article);
    }
}
