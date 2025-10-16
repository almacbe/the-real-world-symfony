<?php

declare(strict_types=1);

namespace App\Application\Article;

use App\Application\Exception\ForbiddenException;
use App\Application\Exception\NotFoundException;
use App\Application\Exception\ValidationException;
use App\Domain\Article\Article;
use App\Domain\Article\ArticleRepositoryInterface;
use App\Domain\Tag\Tag;
use App\Domain\Tag\TagRepositoryInterface;
use App\Domain\User\User;
use App\Domain\User\UserRepositoryInterface;
use Cocur\Slugify\SlugifyInterface;

final class ArticleService
{
    public function __construct(
        private readonly ArticleRepositoryInterface $articleRepository,
        private readonly TagRepositoryInterface $tagRepository,
        private readonly UserRepositoryInterface $userRepository,
        private readonly SlugifyInterface $slugify,
    ) {
    }

    public function create(User $author, array $payload): Article
    {
        $title = trim((string) ($payload['title'] ?? ''));
        $description = trim((string) ($payload['description'] ?? ''));
        $body = trim((string) ($payload['body'] ?? ''));
        $tagList = $payload['tagList'] ?? [];

        $errors = [];
        if ($title === '') {
            $errors[] = 'title is required';
        }
        if ($description === '') {
            $errors[] = 'description is required';
        }
        if ($body === '') {
            $errors[] = 'body is required';
        }

        if ($errors !== []) {
            throw new ValidationException($errors);
        }

        $slug = $this->generateUniqueSlug($title);
        $article = new Article($author, $title, $slug, $description, $body);
        $tags = $this->resolveTags($tagList);
        $article->syncTags($tags);

        $this->articleRepository->save($article);

        return $article;
    }

    public function update(User $user, Article $article, array $payload): Article
    {
        $this->guardArticleOwner($user, $article);

        if (isset($payload['title'])) {
            $title = trim((string) $payload['title']);

            if ($title === '') {
                throw new ValidationException(['title is required']);
            }

            if ($title !== $article->getTitle()) {
                $article->setTitle($title);
                $article->setSlug($this->generateUniqueSlug($title, $article->getSlug()));
            }
        }

        if (isset($payload['description'])) {
            $description = trim((string) $payload['description']);

            if ($description === '') {
                throw new ValidationException(['description is required']);
            }

            $article->setDescription($description);
        }

        if (isset($payload['body'])) {
            $body = trim((string) $payload['body']);

            if ($body === '') {
                throw new ValidationException(['body is required']);
            }

            $article->setBody($body);
        }

        if (array_key_exists('tagList', $payload)) {
            $tagList = \is_array($payload['tagList']) ? $payload['tagList'] : [];
            $tags = $this->resolveTags($tagList);
            $article->syncTags($tags);
        }

        $this->articleRepository->save($article);

        return $article;
    }

    public function delete(User $user, Article $article): void
    {
        $this->guardArticleOwner($user, $article);
        $this->articleRepository->remove($article);
    }

    public function favorite(User $user, Article $article): Article
    {
        $article->favorite($user);
        $this->articleRepository->save($article);

        return $article;
    }

    public function unfavorite(User $user, Article $article): Article
    {
        $article->unfavorite($user);
        $this->articleRepository->save($article);

        return $article;
    }

    public function getBySlug(string $slug): Article
    {
        $article = $this->articleRepository->findBySlug($slug);

        if (!$article) {
            throw new NotFoundException('Article not found');
        }

        return $article;
    }

    public function list(?string $tag, ?string $authorUsername, ?string $favoritedBy, int $limit, int $offset): ArticleListResult
    {
        $author = $authorUsername ? $this->userRepository->findByUsername($authorUsername) : null;
        $favoritedUser = $favoritedBy ? $this->userRepository->findByUsername($favoritedBy) : null;

        $authorFilter = $author ? $author->getUsername() : null;
        $favoritedFilter = $favoritedUser ? $favoritedUser->getUsername() : ($favoritedBy ? '__not_found__' : null);

        $count = $this->articleRepository->countByFilters($tag, $authorFilter, $favoritedFilter);
        $articles = $this->articleRepository->findByFilters($tag, $authorFilter, $favoritedFilter, $limit, $offset);

        return new ArticleListResult($articles, $count);
    }

    public function feed(User $user, int $limit, int $offset): ArticleListResult
    {
        $count = $this->articleRepository->countFeed($user);
        $articles = $this->articleRepository->findFeed($user, $limit, $offset);

        return new ArticleListResult($articles, $count);
    }

    /**
     * @param array<int, mixed> $tagList
     *
     * @return list<Tag>
     */
    private function resolveTags(array $tagList): array
    {
        $tags = [];

        foreach ($tagList as $rawTag) {
            $name = trim((string) $rawTag);

            if ($name === '') {
                continue;
            }

            $existing = $this->tagRepository->findOneByName($name);

            if ($existing) {
                $tags[] = $existing;
                continue;
            }

            $tag = new Tag($name);
            $this->tagRepository->save($tag);
            $tags[] = $tag;
        }

        return $tags;
    }

    private function guardArticleOwner(User $user, Article $article): void
    {
        if ($article->getAuthor()->getId() !== $user->getId()) {
            throw new ForbiddenException('You are not allowed to modify this article');
        }
    }

    private function generateUniqueSlug(string $title, ?string $currentSlug = null): string
    {
        $baseSlug = $this->slugify->slugify($title) ?: bin2hex(random_bytes(5));
        $slug = $baseSlug;
        $index = 1;

        while (null !== ($existing = $this->articleRepository->findBySlug($slug))) {
            if ($currentSlug !== null && $existing->getSlug() === $currentSlug) {
                break;
            }

            ++$index;
            $slug = sprintf('%s-%d', $baseSlug, $index);
        }

        return $slug;
    }
}
