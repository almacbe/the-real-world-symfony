<?php

declare(strict_types=1);

namespace App\Ui\Http\EventSubscriber;

use App\Application\Exception\ApplicationException;
use App\Application\Exception\ForbiddenException;
use App\Application\Exception\NotFoundException;
use App\Application\Exception\UnauthorizedException;
use App\Application\Exception\ValidationException;
use Psr\Log\LoggerInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Core\Exception\AuthenticationException;

final class JsonExceptionSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private readonly LoggerInterface $logger,
        private readonly bool $debug,
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::EXCEPTION => 'onKernelException',
        ];
    }

    public function onKernelException(ExceptionEvent $event): void
    {
        $throwable = $event->getThrowable();

        if ($throwable instanceof ValidationException) {
            $response = $this->createErrorResponse($throwable->getMessages(), JsonResponse::HTTP_UNPROCESSABLE_ENTITY);
            $event->setResponse($response);

            return;
        }

        if ($throwable instanceof UnauthorizedException || $throwable instanceof AuthenticationException) {
            $response = $this->createErrorResponse([$throwable->getMessage()], JsonResponse::HTTP_UNAUTHORIZED);
            $event->setResponse($response);

            return;
        }

        if ($throwable instanceof ForbiddenException || $throwable instanceof AccessDeniedException) {
            $response = $this->createErrorResponse([$throwable->getMessage()], JsonResponse::HTTP_FORBIDDEN);
            $event->setResponse($response);

            return;
        }

        if ($throwable instanceof NotFoundException) {
            $response = $this->createErrorResponse([$throwable->getMessage()], JsonResponse::HTTP_NOT_FOUND);
            $event->setResponse($response);

            return;
        }

        if ($throwable instanceof ApplicationException) {
            $response = $this->createErrorResponse([$throwable->getMessage()], $throwable->getCode() > 0 ? $throwable->getCode() : JsonResponse::HTTP_BAD_REQUEST);
            $event->setResponse($response);

            return;
        }

        if ($this->debug) {
            return;
        }

        $this->logger->error('Unhandled exception', [
            'exception' => $throwable,
        ]);

        $event->setResponse($this->createErrorResponse(['internal server error'], JsonResponse::HTTP_INTERNAL_SERVER_ERROR));
    }

    /**
     * @param array<int, string> $messages
     */
    private function createErrorResponse(array $messages, int $status): JsonResponse
    {
        return new JsonResponse([
            'errors' => [
                'body' => $messages,
            ],
        ], $status);
    }
}
