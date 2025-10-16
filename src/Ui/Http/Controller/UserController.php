<?php

declare(strict_types=1);

namespace App\Ui\Http\Controller;

use App\Application\Exception\UnauthorizedException;
use App\Application\User\UserService;
use App\Domain\User\User;
use App\Ui\Http\Request\JsonRequestBodyParser;
use App\Ui\Http\Response\RealWorldResponseFactory;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

final class UserController
{
    public function __construct(
        private readonly UserService $userService,
        private readonly JsonRequestBodyParser $bodyParser,
        private readonly RealWorldResponseFactory $responseFactory,
        private readonly Security $security,
    ) {
    }

    #[Route('/api/user', name: 'realworld_user_current', methods: ['GET'])]
    public function current(): JsonResponse
    {
        $user = $this->requireUser();
        $token = $this->userService->generateToken($user);

        return new JsonResponse($this->responseFactory->user($user, $token));
    }

    #[Route('/api/user', name: 'realworld_user_update', methods: ['PUT'])]
    public function update(Request $request): JsonResponse
    {
        $user = $this->requireUser();
        $payload = $this->bodyParser->parse($request, 'user');

        $updated = $this->userService->update($user, $payload);
        $token = $this->userService->generateToken($updated);

        return new JsonResponse($this->responseFactory->user($updated, $token));
    }

    private function requireUser(): User
    {
        $user = $this->security->getUser();

        if (!$user instanceof User) {
            throw new UnauthorizedException('Authentication required');
        }

        return $user;
    }
}
