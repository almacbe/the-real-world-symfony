<?php

declare(strict_types=1);

namespace App\Ui\Http\Controller;

use App\Application\Tag\TagService;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

final class TagController
{
    public function __construct(private readonly TagService $tagService)
    {
    }

    #[Route('/api/tags', name: 'realworld_tags_list', methods: ['GET'])]
    public function list(): JsonResponse
    {
        return new JsonResponse([
            'tags' => $this->tagService->list(),
        ]);
    }
}
