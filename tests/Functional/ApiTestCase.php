<?php

declare(strict_types=1);

namespace App\Tests\Functional;

use App\Kernel;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\SchemaTool;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

abstract class ApiTestCase extends KernelTestCase
{
    private ?Response $lastResponse = null;

    protected static function getKernelClass(): string
    {
        return Kernel::class;
    }

    protected function setUp(): void
    {
        self::bootKernel();
        $this->resetDatabase();
    }

    protected function tearDown(): void
    {
        parent::tearDown();
        self::ensureKernelShutdown();
        $this->lastResponse = null;
    }

    protected function post(string $uri, array $payload, ?string $token = null): array
    {
        return $this->jsonRequest('POST', $uri, $payload, $token);
    }

    protected function put(string $uri, array $payload, ?string $token = null): array
    {
        return $this->jsonRequest('PUT', $uri, $payload, $token);
    }

    protected function delete(string $uri, ?string $token = null): void
    {
        $this->jsonRequest('DELETE', $uri, [], $token);
    }

    protected function get(string $uri, ?string $token = null): array
    {
        return $this->jsonRequest('GET', $uri, [], $token);
    }

    protected function decodeResponse(): array
    {
        self::assertNotNull($this->lastResponse, 'No HTTP response available.');
        $content = $this->lastResponse->getContent();

        if ($content === '' || $content === false) {
            return [];
        }

        /** @var array<string, mixed> $data */
        $data = json_decode($content, true, 512, \JSON_THROW_ON_ERROR);

        return $data;
    }

    protected function jsonRequest(string $method, string $uri, array $payload, ?string $token): array
    {
        $server = $this->buildHeaders($token);
        $content = $payload !== [] ? json_encode($payload, \JSON_THROW_ON_ERROR) : null;

        $request = Request::create($uri, $method, server: $server, content: $content);
        $kernel = self::bootKernel();
        $response = $kernel->handle($request);
        $kernel->terminate($request, $response);

        $this->lastResponse = $response;

        if ($response->getStatusCode() >= Response::HTTP_INTERNAL_SERVER_ERROR) {
            self::fail(sprintf('Unexpected %d response: %s', $response->getStatusCode(), (string) $response->getContent()));
        }

        if ($response->getContent() === '' || $response->getStatusCode() === Response::HTTP_NO_CONTENT) {
            return [];
        }

        return $this->decodeResponse();
    }

    protected function registerUser(string $email, string $username, string $password = 'password'): array
    {
        return $this->post('/api/users', [
            'user' => [
                'email' => $email,
                'username' => $username,
                'password' => $password,
            ],
        ]);
    }

    protected function loginUser(string $email, string $password = 'password'): array
    {
        return $this->post('/api/users/login', [
            'user' => [
                'email' => $email,
                'password' => $password,
            ],
        ]);
    }

    protected function assertResponseStatusCodeSame(int $expected, string $message = ''): void
    {
        self::assertNotNull($this->lastResponse, 'No HTTP response available.');
        self::assertSame($expected, $this->lastResponse->getStatusCode(), $message);
    }

    /**
     * @return array<string, string>
     */
    private function buildHeaders(?string $token): array
    {
        $headers = [
            'CONTENT_TYPE' => 'application/json',
        ];

        if ($token) {
            $headers['HTTP_AUTHORIZATION'] = 'Token '.$token;
        }

        return $headers;
    }

    private function resetDatabase(): void
    {
        /** @var EntityManagerInterface $entityManager */
        $entityManager = static::getContainer()->get(EntityManagerInterface::class);
        $metadata = $entityManager->getMetadataFactory()->getAllMetadata();

        if ($metadata === []) {
            return;
        }

        $schemaTool = new SchemaTool($entityManager);
        $schemaTool->dropDatabase();
        $schemaTool->createSchema($metadata);
    }
}
