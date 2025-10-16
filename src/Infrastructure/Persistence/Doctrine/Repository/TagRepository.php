<?php

declare(strict_types=1);

namespace App\Infrastructure\Persistence\Doctrine\Repository;

use App\Domain\Tag\Tag;
use App\Domain\Tag\TagRepositoryInterface;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ObjectRepository;

final class TagRepository implements TagRepositoryInterface
{
    private ObjectRepository $repository;

    public function __construct(private readonly EntityManagerInterface $entityManager)
    {
        $this->repository = $this->entityManager->getRepository(Tag::class);
    }

    public function save(Tag $tag): void
    {
        $this->entityManager->persist($tag);
        $this->entityManager->flush();
    }

    public function findOneByName(string $name): ?Tag
    {
        /** @var Tag|null $tag */
        $tag = $this->repository->findOneBy(['name' => $name]);

        return $tag;
    }

    public function findAllNames(): array
    {
        $queryBuilder = $this->entityManager->createQueryBuilder()
            ->select('t.name')
            ->from(Tag::class, 't')
            ->orderBy('t.name', 'ASC');

        /** @var list<array{name: string}> $result */
        $result = $queryBuilder->getQuery()->getArrayResult();

        return array_map(static fn (array $row): string => $row['name'], $result);
    }
}
