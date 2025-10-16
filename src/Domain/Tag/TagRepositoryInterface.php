<?php

declare(strict_types=1);

namespace App\Domain\Tag;

interface TagRepositoryInterface
{
    public function save(Tag $tag): void;

    public function findOneByName(string $name): ?Tag;

    /**
     * @return list<string>
     */
    public function findAllNames(): array;
}
