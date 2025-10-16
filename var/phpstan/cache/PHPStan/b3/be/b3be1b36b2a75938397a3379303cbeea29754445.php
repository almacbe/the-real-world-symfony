<?php declare(strict_types = 1);

return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/home/alfonso/projects/test-codex/vendor/symfony/http-kernel/Event/ExceptionEvent.php-1760628993',
   'data' => 
  array (
    'd4e124868322b9596e7d61b4e6e4cbb3' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Allows to create a response for a thrown exception.
 *
 * Call setResponse() to set the response that will be returned for the
 * current request. The propagation of this event is stopped as soon as a
 * response is set.
 *
 * You can also call setThrowable() to replace the thrown exception. This
 * exception will be thrown if no response is set during processing of this
 * event.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel\\Event',
         'uses' => 
        array (
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent',
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
    '57c0a987e2dce202f873b48361e43018' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Replaces the thrown exception.
     *
     * This exception will be thrown if no response is set in the event.
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel\\Event',
         'uses' => 
        array (
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent',
         'functionName' => 'setThrowable',
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
    '717dfb9c5f7a80d3a0161fa28142fb87' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Mark the event as allowing a custom response code.
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel\\Event',
         'uses' => 
        array (
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent',
         'functionName' => 'allowCustomResponseCode',
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
    '7b5948f791bef38065033142f46331d9' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns true if the event allows a custom response code.
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel\\Event',
         'uses' => 
        array (
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'httpkernelinterface' => 'Symfony\\Component\\HttpKernel\\HttpKernelInterface',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Event\\ExceptionEvent',
         'functionName' => 'isAllowingCustomResponseCode',
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