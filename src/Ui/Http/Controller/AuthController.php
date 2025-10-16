<?php

declare(strict_types=1);

namespace App\Ui\Http\Controller;

use App\Application\User\UserService;
use App\Ui\Http\Request\JsonRequestBodyParser;
use App\Ui\Http\Response\RealWorldResponseFactory;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

final class AuthController
{
    public function __construct(
        private readonly UserService $userService,
        private readonly JsonRequestBodyParser $bodyParser,
        private readonly RealWorldResponseFactory $responseFactory,
    ) {
    }

    #[Route('/api/users', name: 'realworld_user_register', methods: ['POST'])]
    public function register(Request $request): JsonResponse
    {
        $payload = $this->bodyParser->parse($request, 'user');
        $user = $this->userService->register($payload);
        $token = $this->userService->generateToken($user);

        return new JsonResponse(
            $this->responseFactory->user($user, $token),
            JsonResponse::HTTP_CREATED
        );
    }

    #[Route('/api/users/login', name: 'realworld_user_login', methods: ['POST'])]
    public function login(Request $request): JsonResponse
    {
        $payload = $this->bodyParser->parse($request, 'user');
        $email = trim((string) ($payload['email'] ?? ''));
        $password = (string) ($payload['password'] ?? '');

        $user = $this->userService->authenticate($email, $password);
        $token = $this->userService->generateToken($user);

        return new JsonResponse($this->responseFactory->user($user, $token));
    }
}
