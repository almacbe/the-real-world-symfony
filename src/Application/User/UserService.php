<?php

declare(strict_types=1);

namespace App\Application\User;

use App\Application\Exception\NotFoundException;
use App\Application\Exception\ValidationException;
use App\Domain\User\User;
use App\Domain\User\UserRepositoryInterface;
use Lexik\Bundle\JWTAuthenticationBundle\Services\JWTTokenManagerInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

final class UserService
{
    public function __construct(
        private readonly UserRepositoryInterface $userRepository,
        private readonly UserPasswordHasherInterface $passwordHasher,
        private readonly JWTTokenManagerInterface $jwtManager,
    ) {
    }

    public function register(array $payload): User
    {
        $email = trim((string) ($payload['email'] ?? ''));
        $username = trim((string) ($payload['username'] ?? ''));
        $password = (string) ($payload['password'] ?? '');

        $errors = [];
        if ($email === '') {
            $errors[] = 'email is required';
        } elseif (!filter_var($email, \FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'email is invalid';
        }

        if ($username === '') {
            $errors[] = 'username is required';
        }

        if ($password === '' || \strlen($password) < 6) {
            $errors[] = 'password must be at least 6 characters';
        }

        if ($this->userRepository->findByEmail($email) instanceof User) {
            $errors[] = 'email has already been taken';
        }

        if ($this->userRepository->findByUsername($username) instanceof User) {
            $errors[] = 'username has already been taken';
        }

        if ($errors !== []) {
            throw new ValidationException($errors);
        }

        $user = new User($email, $username, '');
        $passwordHash = $this->passwordHasher->hashPassword($user, $password);
        $user->setPassword($passwordHash);

        $this->userRepository->save($user);

        return $user;
    }

    public function authenticate(string $email, string $plainPassword): User
    {
        $user = $this->userRepository->findByEmail($email);

        if (!$user || !$this->passwordHasher->isPasswordValid($user, $plainPassword)) {
            throw new ValidationException(['email or password is invalid']);
        }

        return $user;
    }

    public function update(User $user, array $payload): User
    {
        $newEmail = isset($payload['email']) ? trim((string) $payload['email']) : null;
        $newUsername = isset($payload['username']) ? trim((string) $payload['username']) : null;
        $newPassword = $payload['password'] ?? null;
        $newBio = $payload['bio'] ?? null;
        $newImage = $payload['image'] ?? null;

        $errors = [];

        if ($newEmail !== null) {
            if ($newEmail === '') {
                $errors[] = 'email is required';
            } elseif (!filter_var($newEmail, \FILTER_VALIDATE_EMAIL)) {
                $errors[] = 'email is invalid';
            } elseif ($newEmail !== $user->getEmail() && $this->userRepository->findByEmail($newEmail) instanceof User) {
                $errors[] = 'email has already been taken';
            }
        }

        if ($newUsername !== null) {
            if ($newUsername === '') {
                $errors[] = 'username is required';
            } elseif ($newUsername !== $user->getUsername() && $this->userRepository->findByUsername($newUsername) instanceof User) {
                $errors[] = 'username has already been taken';
            }
        }

        if ($errors !== []) {
            throw new ValidationException($errors);
        }

        if ($newEmail !== null && $newEmail !== $user->getEmail()) {
            $user->setEmail($newEmail);
        }

        if ($newUsername !== null && $newUsername !== $user->getUsername()) {
            $user->setUsername($newUsername);
        }

        if (\is_string($newPassword) && $newPassword !== '') {
            if (\strlen($newPassword) < 6) {
                throw new ValidationException(['password must be at least 6 characters']);
            }

            $user->setPassword($this->passwordHasher->hashPassword($user, $newPassword));
        }

        if (\is_string($newBio) || $newBio === null) {
            $user->setBio($newBio);
        }

        if (\is_string($newImage) || $newImage === null) {
            $user->setImage($newImage);
        }

        $this->userRepository->save($user);

        return $user;
    }

    public function getByUsername(string $username): User
    {
        $user = $this->userRepository->findByUsername($username);

        if (!$user) {
            throw new NotFoundException('Profile not found');
        }

        return $user;
    }

    public function generateToken(User $user): string
    {
        return $this->jwtManager->create($user);
    }
}
