<?php

declare(strict_types=1);

namespace App\Domain\User;

interface UserRepositoryInterface
{
    public function save(User $user): void;

    public function remove(User $user): void;

    public function findByEmail(string $email): ?User;

    public function findByUsername(string $username): ?User;

    public function find(int $id): ?User;
}
