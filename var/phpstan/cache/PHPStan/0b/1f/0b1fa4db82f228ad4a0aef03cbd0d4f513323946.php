<?php declare(strict_types = 1);

return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/home/alfonso/projects/test-codex/src/Ui/Http/EventSubscriber/JsonExceptionSubscriber.php-1760631670',
   'data' => 
  array (
    '71f71b3c9af0c55a7caf8c46ddfa792e' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param array<int, string> $messages
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'App\\Ui\\Http\\EventSubscriber',
         'uses' => 
        array (
          'applicationexception' => 'App\\Application\\Exception\\ApplicationException',
          'forbiddenexception' => 'App\\Application\\Exception\\ForbiddenException',
          'notfoundexception' => 'App\\Application\\Exception\\NotFoundException',
          'unauthorizedexception' => 'App\\Application\\Exception\\UnauthorizedException',
          'validationexception' => 'App\\Application\\Exception\\ValidationException',
          'loggerinterface' => 'Psr\\Log\\LoggerInterface',
          'eventsubscriberinterface' => 'Symfony\\Component\\EventDispatcher\\EventSubscriberInterface',
          'jsonresponse' => 'Symfony\\Component\\HttpFoundation\\JsonResponse',
          'exceptionevent' => 'Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent',
          'kernelevents' => 'Symfony\\Component\\HttpKernel\\KernelEvents',
          'accessdeniedexception' => 'Symfony\\Component\\Security\\Core\\Exception\\AccessDeniedException',
          'authenticationexception' => 'Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException',
        ),
         'className' => 'App\\Ui\\Http\\EventSubscriber\\JsonExceptionSubscriber',
         'functionName' => 'createErrorResponse',
         'templateTypeMap' => 
        \PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
          ),
           'lowerBoundTypes' => 
          array (
          ),
        )),
         'typeAliasesMap' => 
        array (
        ),
         'bypassTypeAliases' => false,
      )),
    )),
  ),
));