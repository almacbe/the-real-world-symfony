<?php

declare(strict_types=1);

namespace App\Application\Tag;

use App\Domain\Tag\TagRepositoryInterface;

final class TagService
{
    public function __construct(private readonly TagRepositoryInterface $tagRepository)
    {
    }

    /**
     * @return list<string>
     */
    public function list(): array
    {
        return $this->tagRepository->findAllNames();
    }
}
