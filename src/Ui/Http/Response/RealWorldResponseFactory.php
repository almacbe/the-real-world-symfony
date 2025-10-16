<?php

declare(strict_types=1);

namespace App\Ui\Http\Response;

use App\Domain\Article\Article;
use App\Domain\Comment\Comment;
use App\Domain\User\User;

final class RealWorldResponseFactory
{
    public function user(User $user, string $token): array
    {
        return [
            'user' => [
                'email' => $user->getEmail(),
                'token' => $token,
                'username' => $user->getUsername(),
                'bio' => $user->getBio(),
                'image' => $user->getImage(),
            ],
        ];
    }

    public function profile(User $profile, ?User $currentUser = null): array
    {
        return [
            'profile' => [
                'username' => $profile->getUsername(),
                'bio' => $profile->getBio(),
                'image' => $profile->getImage(),
                'following' => $currentUser ? $currentUser->isFollowing($profile) : false,
            ],
        ];
    }

    public function article(Article $article, ?User $currentUser = null): array
    {
        return [
            'article' => $this->normalizeArticle($article, $currentUser),
        ];
    }

    /**
     * @param list<Article> $articles
     */
    public function articles(array $articles, int $count, ?User $currentUser = null): array
    {
        return [
            'articles' => array_map(
                fn (Article $article) => $this->normalizeArticle($article, $currentUser),
                $articles
            ),
            'articlesCount' => $count,
        ];
    }

    public function comment(Comment $comment, ?User $currentUser = null): array
    {
        return [
            'comment' => $this->normalizeComment($comment, $currentUser),
        ];
    }

    /**
     * @param list<Comment> $comments
     */
    public function comments(array $comments, ?User $currentUser = null): array
    {
        return [
            'comments' => array_map(
                fn (Comment $comment) => $this->normalizeComment($comment, $currentUser),
                $comments
            ),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    private function normalizeArticle(Article $article, ?User $currentUser): array
    {
        $tagList = [];

        foreach ($article->getTags() as $tag) {
            $tagList[] = $tag->getName();
        }

        return [
            'slug' => $article->getSlug(),
            'title' => $article->getTitle(),
            'description' => $article->getDescription(),
            'body' => $article->getBody(),
            'tagList' => $tagList,
            'createdAt' => $article->getCreatedAt()->format(\DateTimeInterface::ATOM),
            'updatedAt' => $article->getUpdatedAt()->format(\DateTimeInterface::ATOM),
            'favorited' => $currentUser ? $article->isFavoritedBy($currentUser) : false,
            'favoritesCount' => $article->getFavoritesCount(),
            'author' => $this->profile($article->getAuthor(), $currentUser)['profile'],
        ];
    }

    /**
     * @return array<string, mixed>
     */
    private function normalizeComment(Comment $comment, ?User $currentUser): array
    {
        return [
            'id' => $comment->getId(),
            'createdAt' => $comment->getCreatedAt()->format(\DateTimeInterface::ATOM),
            'updatedAt' => $comment->getUpdatedAt()->format(\DateTimeInterface::ATOM),
            'body' => $comment->getBody(),
            'author' => $this->profile($comment->getAuthor(), $currentUser)['profile'],
        ];
    }
}
