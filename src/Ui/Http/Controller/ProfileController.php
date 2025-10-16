<?php

declare(strict_types=1);

namespace App\Ui\Http\Controller;

use App\Application\Exception\UnauthorizedException;
use App\Application\Profile\ProfileService;
use App\Domain\User\User;
use App\Ui\Http\Response\RealWorldResponseFactory;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api/profiles')]
final class ProfileController
{
    public function __construct(
        private readonly ProfileService $profileService,
        private readonly RealWorldResponseFactory $responseFactory,
        private readonly Security $security,
    ) {
    }

    #[Route('/{username}', name: 'realworld_profile_get', methods: ['GET'])]
    public function show(string $username): JsonResponse
    {
        $profile = $this->profileService->getProfile($username);
        $currentUser = $this->security->getUser();

        return new JsonResponse(
            $this->responseFactory->profile($profile, $currentUser instanceof User ? $currentUser : null)
        );
    }

    #[Route('/{username}/follow', name: 'realworld_profile_follow', methods: ['POST'])]
    public function follow(string $username): JsonResponse
    {
        $user = $this->requireUser();
        $profile = $this->profileService->follow($user, $username);

        return new JsonResponse($this->responseFactory->profile($profile, $user));
    }

    #[Route('/{username}/follow', name: 'realworld_profile_unfollow', methods: ['DELETE'])]
    public function unfollow(string $username): JsonResponse
    {
        $user = $this->requireUser();
        $profile = $this->profileService->unfollow($user, $username);

        return new JsonResponse($this->responseFactory->profile($profile, $user));
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
