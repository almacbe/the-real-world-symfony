<?php

declare(strict_types=1);

namespace App\Application\Profile;

use App\Application\Exception\NotFoundException;
use App\Domain\User\User;
use App\Domain\User\UserRepositoryInterface;

final class ProfileService
{
    public function __construct(private readonly UserRepositoryInterface $userRepository)
    {
    }

    public function getProfile(string $username): User
    {
        $user = $this->userRepository->findByUsername($username);

        if (!$user) {
            throw new NotFoundException('Profile not found');
        }

        return $user;
    }

    public function follow(User $currentUser, string $username): User
    {
        $profile = $this->getProfile($username);

        if ($profile === $currentUser) {
            return $profile;
        }

        $currentUser->follow($profile);
        $this->userRepository->save($currentUser);

        return $profile;
    }

    public function unfollow(User $currentUser, string $username): User
    {
        $profile = $this->getProfile($username);

        if ($profile === $currentUser) {
            return $profile;
        }

        $currentUser->unfollow($profile);
        $this->userRepository->save($currentUser);

        return $profile;
    }
}
