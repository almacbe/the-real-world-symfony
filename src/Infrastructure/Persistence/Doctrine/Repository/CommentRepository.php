<?php

declare(strict_types=1);

namespace App\Infrastructure\Persistence\Doctrine\Repository;

use App\Domain\Article\Article;
use App\Domain\Comment\Comment;
use App\Domain\Comment\CommentRepositoryInterface;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ObjectRepository;

final class CommentRepository implements CommentRepositoryInterface
{
    private ObjectRepository $repository;

    public function __construct(private readonly EntityManagerInterface $entityManager)
    {
        $this->repository = $this->entityManager->getRepository(Comment::class);
    }

    public function save(Comment $comment): void
    {
        $this->entityManager->persist($comment);
        $this->entityManager->flush();
    }

    public function remove(Comment $comment): void
    {
        $this->entityManager->remove($comment);
        $this->entityManager->flush();
    }

    public function findById(int $id): ?Comment
    {
        /** @var Comment|null $comment */
        $comment = $this->repository->find($id);

        return $comment;
    }

    public function findForArticle(Article $article): array
    {
        /** @var list<Comment> $comments */
        $comments = $this->repository->findBy(
            ['article' => $article],
            ['createdAt' => 'ASC']
        );

        return $comments;
    }
}
