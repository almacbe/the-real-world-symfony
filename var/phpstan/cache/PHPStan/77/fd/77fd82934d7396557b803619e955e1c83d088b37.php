<?php declare(strict_types = 1);

return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/home/alfonso/projects/test-codex/vendor/symfony/http-kernel/KernelEvents.php-1760628993',
   'data' => 
  array (
    '7dc9bd13ac670cbf5fd11e071d12049a' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Contains all events thrown in the HttpKernel component.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'controllerargumentsevent' => 'Symfony\\Component\\HttpKernel\\Event\\ControllerArgumentsEvent',
          'controllerevent' => 'Symfony\\Component\\HttpKernel\\Event\\ControllerEvent',
          'exceptionevent' => 'Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent',
          'finishrequestevent' => 'Symfony\\Component\\HttpKernel\\Event\\FinishRequestEvent',
          'requestevent' => 'Symfony\\Component\\HttpKernel\\Event\\RequestEvent',
          'responseevent' => 'Symfony\\Component\\HttpKernel\\Event\\ResponseEvent',
          'terminateevent' => 'Symfony\\Component\\HttpKernel\\Event\\TerminateEvent',
          'viewevent' => 'Symfony\\Component\\HttpKernel\\Event\\ViewEvent',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\KernelEvents',
         'functionName' => NULL,
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
    '5626b015e401f8da0b89c35389af1407' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * The REQUEST event occurs at the very beginning of request
     * dispatching.
     *
     * This event allows you to create a response for a request before any
     * other code in the framework is executed.
     *
     * @Event("Symfony\\Component\\HttpKernel\\Event\\RequestEvent")
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'controllerargumentsevent' => 'Symfony\\Component\\HttpKernel\\Event\\ControllerArgumentsEvent',
          'controllerevent' => 'Symfony\\Component\\HttpKernel\\Event\\ControllerEvent',
          'exceptionevent' => 'Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent',
          'finishrequestevent' => 'Symfony\\Component\\HttpKernel\\Event\\FinishRequestEvent',
          'requestevent' => 'Symfony\\Component\\HttpKernel\\Event\\RequestEvent',
          'responseevent' => 'Symfony\\Component\\HttpKernel\\Event\\ResponseEvent',
          'terminateevent' => 'Symfony\\Component\\HttpKernel\\Event\\TerminateEvent',
          'viewevent' => 'Symfony\\Component\\HttpKernel\\Event\\ViewEvent',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\KernelEvents',
         'functionName' => NULL,
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
    '1d0c9f2f927524d669dcf32b258d2d8f' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * The EXCEPTION event occurs when an uncaught exception appears.
     *
     * This event allows you to create a response for a thrown exception or
     * to modify the thrown exception.
     *
     * @Event("Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent")
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'controllerargumentsevent' => 'Symfony\\Component\\HttpKernel\\Event\\ControllerArgumentsEvent',
          'controllerevent' => 'Symfony\\Component\\HttpKernel\\Event\\ControllerEvent',
          'exceptionevent' => 'Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent',
          'finishrequestevent' => 'Symfony\\Component\\HttpKernel\\Event\\FinishRequestEvent',
          'requestevent' => 'Symfony\\Component\\HttpKernel\\Event\\RequestEvent',
          'responseevent' => 'Symfony\\Component\\HttpKernel\\Event\\ResponseEvent',
          'terminateevent' => 'Symfony\\Component\\HttpKernel\\Event\\TerminateEvent',
          'viewevent' => 'Symfony\\Component\\HttpKernel\\Event\\ViewEvent',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\KernelEvents',
         'functionName' => NULL,
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
    '56b3881de3d50cf95a32a9b32dad575e' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * The CONTROLLER event occurs once a controller was found for
     * handling a request.
     *
     * This event allows you to change the controller that will handle the
     * request.
     *
     * @Event("Symfony\\Component\\HttpKernel\\Event\\ControllerEvent")
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'controllerargumentsevent' => 'Symfony\\Component\\HttpKernel\\Event\\ControllerArgumentsEvent',
          'controllerevent' => 'Symfony\\Component\\HttpKernel\\Event\\ControllerEvent',
          'exceptionevent' => 'Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent',
          'finishrequestevent' => 'Symfony\\Component\\HttpKernel\\Event\\FinishRequestEvent',
          'requestevent' => 'Symfony\\Component\\HttpKernel\\Event\\RequestEvent',
          'responseevent' => 'Symfony\\Component\\HttpKernel\\Event\\ResponseEvent',
          'terminateevent' => 'Symfony\\Component\\HttpKernel\\Event\\TerminateEvent',
          'viewevent' => 'Symfony\\Component\\HttpKernel\\Event\\ViewEvent',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\KernelEvents',
         'functionName' => NULL,
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
    'bdbbe0fc4005b8ebc6926bb8b6bb39f8' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * The CONTROLLER_ARGUMENTS event occurs once controller arguments have been resolved.
     *
     * This event allows you to change the arguments that will be passed to
     * the controller.
     *
     * @Event("Symfony\\Component\\HttpKernel\\Event\\ControllerArgumentsEvent")
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'controllerargumentsevent' => 'Symfony\\Component\\HttpKernel\\Event\\ControllerArgumentsEvent',
          'controllerevent' => 'Symfony\\Component\\HttpKernel\\Event\\ControllerEvent',
          'exceptionevent' => 'Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent',
          'finishrequestevent' => 'Symfony\\Component\\HttpKernel\\Event\\FinishRequestEvent',
          'requestevent' => 'Symfony\\Component\\HttpKernel\\Event\\RequestEvent',
          'responseevent' => 'Symfony\\Component\\HttpKernel\\Event\\ResponseEvent',
          'terminateevent' => 'Symfony\\Component\\HttpKernel\\Event\\TerminateEvent',
          'viewevent' => 'Symfony\\Component\\HttpKernel\\Event\\ViewEvent',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\KernelEvents',
         'functionName' => NULL,
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
    'f9966c03b4286a3f3e72235f2b33a80f' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * The VIEW event occurs when the return value of a controller
     * is not a Response instance.
     *
     * This event allows you to create a response for the return value of the
     * controller.
     *
     * @Event("Symfony\\Component\\HttpKernel\\Event\\ViewEvent")
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'controllerargumentsevent' => 'Symfony\\Component\\HttpKernel\\Event\\ControllerArgumentsEvent',
          'controllerevent' => 'Symfony\\Component\\HttpKernel\\Event\\ControllerEvent',
          'exceptionevent' => 'Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent',
          'finishrequestevent' => 'Symfony\\Component\\HttpKernel\\Event\\FinishRequestEvent',
          'requestevent' => 'Symfony\\Component\\HttpKernel\\Event\\RequestEvent',
          'responseevent' => 'Symfony\\Component\\HttpKernel\\Event\\ResponseEvent',
          'terminateevent' => 'Symfony\\Component\\HttpKernel\\Event\\TerminateEvent',
          'viewevent' => 'Symfony\\Component\\HttpKernel\\Event\\ViewEvent',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\KernelEvents',
         'functionName' => NULL,
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
    'a5f62b889b8d2e9af6f5f0ea744cbad5' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * The RESPONSE event occurs once a response was created for
     * replying to a request.
     *
     * This event allows you to modify or replace the response that will be
     * replied.
     *
     * @Event("Symfony\\Component\\HttpKernel\\Event\\ResponseEvent")
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'controllerargumentsevent' => 'Symfony\\Component\\HttpKernel\\Event\\ControllerArgumentsEvent',
          'controllerevent' => 'Symfony\\Component\\HttpKernel\\Event\\ControllerEvent',
          'exceptionevent' => 'Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent',
          'finishrequestevent' => 'Symfony\\Component\\HttpKernel\\Event\\FinishRequestEvent',
          'requestevent' => 'Symfony\\Component\\HttpKernel\\Event\\RequestEvent',
          'responseevent' => 'Symfony\\Component\\HttpKernel\\Event\\ResponseEvent',
          'terminateevent' => 'Symfony\\Component\\HttpKernel\\Event\\TerminateEvent',
          'viewevent' => 'Symfony\\Component\\HttpKernel\\Event\\ViewEvent',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\KernelEvents',
         'functionName' => NULL,
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
    '484604c78291af08c096f1c2090f20f5' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * The FINISH_REQUEST event occurs when a response was generated for a request.
     *
     * This event allows you to reset the global and environmental state of
     * the application, when it was changed during the request.
     *
     * @Event("Symfony\\Component\\HttpKernel\\Event\\FinishRequestEvent")
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'controllerargumentsevent' => 'Symfony\\Component\\HttpKernel\\Event\\ControllerArgumentsEvent',
          'controllerevent' => 'Symfony\\Component\\HttpKernel\\Event\\ControllerEvent',
          'exceptionevent' => 'Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent',
          'finishrequestevent' => 'Symfony\\Component\\HttpKernel\\Event\\FinishRequestEvent',
          'requestevent' => 'Symfony\\Component\\HttpKernel\\Event\\RequestEvent',
          'responseevent' => 'Symfony\\Component\\HttpKernel\\Event\\ResponseEvent',
          'terminateevent' => 'Symfony\\Component\\HttpKernel\\Event\\TerminateEvent',
          'viewevent' => 'Symfony\\Component\\HttpKernel\\Event\\ViewEvent',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\KernelEvents',
         'functionName' => NULL,
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
    '5592f0d8d019968d804e4b35cb22353e' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * The TERMINATE event occurs once a response was sent.
     *
     * This event allows you to run expensive post-response jobs.
     *
     * @Event("Symfony\\Component\\HttpKernel\\Event\\TerminateEvent")
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'controllerargumentsevent' => 'Symfony\\Component\\HttpKernel\\Event\\ControllerArgumentsEvent',
          'controllerevent' => 'Symfony\\Component\\HttpKernel\\Event\\ControllerEvent',
          'exceptionevent' => 'Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent',
          'finishrequestevent' => 'Symfony\\Component\\HttpKernel\\Event\\FinishRequestEvent',
          'requestevent' => 'Symfony\\Component\\HttpKernel\\Event\\RequestEvent',
          'responseevent' => 'Symfony\\Component\\HttpKernel\\Event\\ResponseEvent',
          'terminateevent' => 'Symfony\\Component\\HttpKernel\\Event\\TerminateEvent',
          'viewevent' => 'Symfony\\Component\\HttpKernel\\Event\\ViewEvent',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\KernelEvents',
         'functionName' => NULL,
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
    '79f1b7e1f514dea0bfec89f8f229348b' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Event aliases.
     *
     * These aliases can be consumed by RegisterListenersPass.
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'controllerargumentsevent' => 'Symfony\\Component\\HttpKernel\\Event\\ControllerArgumentsEvent',
          'controllerevent' => 'Symfony\\Component\\HttpKernel\\Event\\ControllerEvent',
          'exceptionevent' => 'Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent',
          'finishrequestevent' => 'Symfony\\Component\\HttpKernel\\Event\\FinishRequestEvent',
          'requestevent' => 'Symfony\\Component\\HttpKernel\\Event\\RequestEvent',
          'responseevent' => 'Symfony\\Component\\HttpKernel\\Event\\ResponseEvent',
          'terminateevent' => 'Symfony\\Component\\HttpKernel\\Event\\TerminateEvent',
          'viewevent' => 'Symfony\\Component\\HttpKernel\\Event\\ViewEvent',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\KernelEvents',
         'functionName' => NULL,
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