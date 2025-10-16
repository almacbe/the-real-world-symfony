<?php

declare(strict_types=1);

namespace App\Infrastructure\Persistence\Doctrine\Repository;

use App\Domain\Article\Article;
use App\Domain\Article\ArticleRepositoryInterface;
use App\Domain\User\User;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\QueryBuilder;
use Doctrine\Persistence\ObjectRepository;

final class ArticleRepository implements ArticleRepositoryInterface
{
    private ObjectRepository $repository;

    public function __construct(private readonly EntityManagerInterface $entityManager)
    {
        $this->repository = $this->entityManager->getRepository(Article::class);
    }

    public function save(Article $article): void
    {
        $this->entityManager->persist($article);
        $this->entityManager->flush();
    }

    public function remove(Article $article): void
    {
        $this->entityManager->remove($article);
        $this->entityManager->flush();
    }

    public function findBySlug(string $slug): ?Article
    {
        /** @var Article|null $article */
        $article = $this->repository->findOneBy(['slug' => $slug]);

        return $article;
    }

    public function countByFilters(?string $tag, ?string $author, ?string $favoritedBy): int
    {
        $qb = $this->createFilteredQueryBuilder($tag, $author, $favoritedBy)
            ->select('COUNT(DISTINCT a.id)');

        return (int) $qb->getQuery()->getSingleScalarResult();
    }

    public function findByFilters(?string $tag, ?string $author, ?string $favoritedBy, int $limit, int $offset): array
    {
        $qb = $this->createFilteredQueryBuilder($tag, $author, $favoritedBy)
            ->select('DISTINCT a')
            ->orderBy('a.createdAt', 'DESC')
            ->setFirstResult($offset)
            ->setMaxResults($limit);

        /** @var list<Article> $articles */
        $articles = $qb->getQuery()->getResult();

        return $articles;
    }

    public function countFeed(User $user): int
    {
        $followingIds = $this->extractFollowingIds($user);

        if ($followingIds === []) {
            return 0;
        }

        $qb = $this->entityManager->createQueryBuilder()
            ->select('COUNT(DISTINCT a.id)')
            ->from(Article::class, 'a')
            ->join('a.author', 'author')
            ->where('author.id IN (:followingIds)')
            ->setParameter('followingIds', $followingIds);

        return (int) $qb->getQuery()->getSingleScalarResult();
    }

    public function findFeed(User $user, int $limit, int $offset): array
    {
        $followingIds = $this->extractFollowingIds($user);

        if ($followingIds === []) {
            return [];
        }

        $qb = $this->entityManager->createQueryBuilder()
            ->select('a')
            ->from(Article::class, 'a')
            ->join('a.author', 'author')
            ->where('author.id IN (:followingIds)')
            ->orderBy('a.createdAt', 'DESC')
            ->setFirstResult($offset)
            ->setMaxResults($limit)
            ->setParameter('followingIds', $followingIds);

        /** @var list<Article> $articles */
        $articles = $qb->getQuery()->getResult();

        return $articles;
    }

    private function createFilteredQueryBuilder(?string $tag, ?string $author, ?string $favoritedBy): QueryBuilder
    {
        $qb = $this->entityManager->createQueryBuilder()
            ->from(Article::class, 'a')
            ->leftJoin('a.author', 'author');

        if ($tag !== null) {
            $qb->leftJoin('a.tags', 'tag')
                ->andWhere('LOWER(tag.name) = LOWER(:tag)')
                ->setParameter('tag', $tag);
        }

        if ($author !== null) {
            $qb->andWhere('LOWER(author.username) = LOWER(:author)')
                ->setParameter('author', $author);
        }

        if ($favoritedBy !== null) {
            $qb->leftJoin('a.favoritedBy', 'favorite_user')
                ->andWhere('LOWER(favorite_user.username) = LOWER(:favoritedBy)')
                ->setParameter('favoritedBy', $favoritedBy);
        }

        return $qb;
    }

    /**
     * @return list<int>
     */
    private function extractFollowingIds(User $user): array
    {
        $ids = [];

        foreach ($user->getFollowing() as $followed) {
            if (null !== $followed->getId()) {
                $ids[] = $followed->getId();
            }
        }

        return $ids;
    }
}
