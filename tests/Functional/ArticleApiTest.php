<?php

declare(strict_types=1);

namespace App\Tests\Functional;

final class ArticleApiTest extends ApiTestCase
{
    public function testArticleLifecycle(): void
    {
        $this->registerUser('author@example.com', 'author');
        self::assertResponseStatusCodeSame(201);
        $authorLogin = $this->loginUser('author@example.com');
        $authorToken = $authorLogin['user']['token'];

        $articleResponse = $this->post('/api/articles', [
            'article' => [
                'title' => 'Testing RealWorld',
                'description' => 'How to write API tests',
                'body' => 'This article explains how to exercise the RealWorld API.',
                'tagList' => ['testing', 'symfony'],
            ],
        ], $authorToken);

        self::assertResponseStatusCodeSame(201);
        self::assertArrayHasKey('article', $articleResponse);
        $slug = $articleResponse['article']['slug'];

        $fetched = $this->get('/api/articles/'.$slug);
        self::assertResponseStatusCodeSame(200);
        self::assertSame('Testing RealWorld', $fetched['article']['title']);

        $this->registerUser('reader@example.com', 'reader');
        self::assertResponseStatusCodeSame(201);
        $readerLogin = $this->loginUser('reader@example.com');
        $readerToken = $readerLogin['user']['token'];

        $followed = $this->post('/api/profiles/author/follow', ['profile' => []], $readerToken);
        self::assertResponseStatusCodeSame(200);
        self::assertTrue($followed['profile']['following']);

        $feed = $this->get('/api/articles/feed', $readerToken);
        self::assertResponseStatusCodeSame(200);
        self::assertCount(1, $feed['articles']);

        $favoriteResponse = $this->post('/api/articles/'.$slug.'/favorite', ['article' => []], $readerToken);
        self::assertResponseStatusCodeSame(200);
        self::assertTrue($favoriteResponse['article']['favorited']);
        self::assertSame(1, $favoriteResponse['article']['favoritesCount']);

        $commentResponse = $this->post('/api/articles/'.$slug.'/comments', [
            'comment' => ['body' => 'Nice article!'],
        ], $readerToken);
        self::assertResponseStatusCodeSame(201);
        self::assertSame('Nice article!', $commentResponse['comment']['body']);

        $comments = $this->get('/api/articles/'.$slug.'/comments');
        self::assertResponseStatusCodeSame(200);
        self::assertCount(1, $comments['comments']);

        $this->delete('/api/articles/'.$slug.'/comments/'.$commentResponse['comment']['id'], $readerToken);
        self::assertResponseStatusCodeSame(204);

        $this->delete('/api/articles/'.$slug, $authorToken);
        self::assertResponseStatusCodeSame(204);

        $listAfterDelete = $this->get('/api/articles');
        self::assertResponseStatusCodeSame(200);
        self::assertSame(0, $listAfterDelete['articlesCount']);
    }
}
