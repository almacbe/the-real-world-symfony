<?php

declare(strict_types=1);

namespace App\Infrastructure\Persistence\DataFixtures;

use App\Application\Article\ArticleService;
use App\Application\Comment\CommentService;
use App\Application\Exception\ValidationException;
use App\Application\Profile\ProfileService;
use App\Application\User\UserService;
use App\Domain\Article\Article;
use App\Domain\User\User;
use Doctrine\ORM\EntityManagerInterface;

final class DatabaseSeeder
{
    public function __construct(
        private readonly EntityManagerInterface $entityManager,
        private readonly UserService $userService,
        private readonly ProfileService $profileService,
        private readonly ArticleService $articleService,
        private readonly CommentService $commentService,
    ) {
    }

    public function seed(): void
    {
        if ($this->hasExistingData()) {
            return;
        }

        $demoUser = $this->createUser('demo@example.com', 'demo', 'password', 'Demo user of the RealWorld API');
        $janeUser = $this->createUser('jane@example.com', 'jane', 'password', 'Product manager and writer');

        if (!$demoUser || !$janeUser) {
            return;
        }

        $this->profileService->follow($demoUser, $janeUser->getUsername());

        $article1 = $this->articleService->create($demoUser, [
            'title' => 'RealWorld con Symfony',
            'description' => 'Una guía para construir el clon RealWorld con Symfony 7',
            'body' => 'Este artículo muestra cómo implementar la API RealWorld con Symfony siguiendo principios DDD.',
            'tagList' => ['symfony', 'ddd', 'realworld'],
        ]);

        $article2 = $this->articleService->create($janeUser, [
            'title' => 'Cómo escribir artículos efectivos',
            'description' => 'Consejos prácticos para escribir en Conduit',
            'body' => 'Comparte tu historia, sé conciso y aporta ejemplos reales.',
            'tagList' => ['writing', 'community'],
        ]);

        $this->commentService->create($janeUser, $article1, ['body' => '¡Gran trabajo!']);
        $this->commentService->create($demoUser, $article2, ['body' => 'Excelente lectura, gracias por compartir.']);

        $this->articleService->favorite($janeUser, $article1);
    }

    private function hasExistingData(): bool
    {
        return (bool) $this->entityManager->getRepository(Article::class)->count([]);
    }

    private function createUser(string $email, string $username, string $password, string $bio): ?User
    {
        try {
            $user = $this->userService->register([
                'email' => $email,
                'username' => $username,
                'password' => $password,
            ]);
        } catch (ValidationException) {
            $user = $this->entityManager->getRepository(User::class)->findOneBy(['email' => $email]);
        }

        if (!$user instanceof User) {
            return null;
        }

        $this->userService->update($user, ['bio' => $bio]);

        return $user;
    }
}
