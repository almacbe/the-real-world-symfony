<?php

declare(strict_types=1);

namespace App\Tests\Functional;

final class UserApiTest extends ApiTestCase
{
    public function testUserRegistrationAndLoginFlow(): void
    {
        $registration = $this->registerUser('tester@example.com', 'tester');
        self::assertResponseStatusCodeSame(201);

        self::assertArrayHasKey('user', $registration);
        self::assertSame('tester@example.com', $registration['user']['email']);
        self::assertSame('tester', $registration['user']['username']);
        self::assertArrayHasKey('token', $registration['user']);

        $login = $this->loginUser('tester@example.com');
        self::assertResponseStatusCodeSame(200);

        self::assertArrayHasKey('user', $login);
        self::assertSame('tester', $login['user']['username']);
        self::assertIsString($login['user']['token']);

        $token = $login['user']['token'];
        $currentUser = $this->get('/api/user', $token);
        self::assertResponseStatusCodeSame(200);

        self::assertSame('tester@example.com', $currentUser['user']['email']);
    }
}
