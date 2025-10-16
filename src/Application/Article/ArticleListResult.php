<?php

declare(strict_types=1);

namespace App\Application\Article;

use App\Domain\Article\Article;

final class ArticleListResult
{
    /**
     * @param list<Article> $articles
     */
    public function __construct(
        private readonly array $articles,
        private readonly int $count,
    ) {
    }

    /**
     * @return list<Article>
     */
    public function getArticles(): array
    {
        return $this->articles;
    }

    public function getCount(): int
    {
        return $this->count;
    }
}
