<?php declare(strict_types = 1);

return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/home/alfonso/projects/test-codex/vendor/psr/log/src/LoggerInterface.php-1760628993',
   'data' => 
  array (
    '14b2731ea64b8adbc772f773b3244b1b' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Describes a logger instance.
 *
 * The message MUST be a string or object implementing __toString().
 *
 * The message MAY contain placeholders in the form: {foo} where foo
 * will be replaced by the context data in key "foo".
 *
 * The context array can contain arbitrary data. The only assumption that
 * can be made by implementors is that if an Exception instance is given
 * to produce a stack trace, it MUST be in a key named "exception".
 *
 * See https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-3-logger-interface.md
 * for the full interface specification.
 */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Psr\\Log',
         'uses' => 
        array (
        ),
         'className' => 'Psr\\Log\\LoggerInterface',
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
    'e49c14ea10f3864b0c04802ad8cf78e6' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * System is unusable.
     *
     * @param mixed[] $context
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Psr\\Log',
         'uses' => 
        array (
        ),
         'className' => 'Psr\\Log\\LoggerInterface',
         'functionName' => 'emergency',
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
    'f1fc7b4ea02a68b4035962b9e2487785' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Action must be taken immediately.
     *
     * Example: Entire website down, database unavailable, etc. This should
     * trigger the SMS alerts and wake you up.
     *
     * @param mixed[] $context
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Psr\\Log',
         'uses' => 
        array (
        ),
         'className' => 'Psr\\Log\\LoggerInterface',
         'functionName' => 'alert',
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
    'ac3911c26d79dd89cc1a6b8e77ea3384' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Critical conditions.
     *
     * Example: Application component unavailable, unexpected exception.
     *
     * @param mixed[] $context
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Psr\\Log',
         'uses' => 
        array (
        ),
         'className' => 'Psr\\Log\\LoggerInterface',
         'functionName' => 'critical',
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
    '4ca45fc1751bac62e9a2b5a67f717b4c' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Runtime errors that do not require immediate action but should typically
     * be logged and monitored.
     *
     * @param mixed[] $context
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Psr\\Log',
         'uses' => 
        array (
        ),
         'className' => 'Psr\\Log\\LoggerInterface',
         'functionName' => 'error',
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
    'e25becb7e928b0b39ce902dcbc9ff71f' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Exceptional occurrences that are not errors.
     *
     * Example: Use of deprecated APIs, poor use of an API, undesirable things
     * that are not necessarily wrong.
     *
     * @param mixed[] $context
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Psr\\Log',
         'uses' => 
        array (
        ),
         'className' => 'Psr\\Log\\LoggerInterface',
         'functionName' => 'warning',
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
    'd7517e5522ddeb569295c919e4476b12' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Normal but significant events.
     *
     * @param mixed[] $context
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Psr\\Log',
         'uses' => 
        array (
        ),
         'className' => 'Psr\\Log\\LoggerInterface',
         'functionName' => 'notice',
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
    'd431c949af8cec8c01208600e02437cd' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Interesting events.
     *
     * Example: User logs in, SQL logs.
     *
     * @param mixed[] $context
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Psr\\Log',
         'uses' => 
        array (
        ),
         'className' => 'Psr\\Log\\LoggerInterface',
         'functionName' => 'info',
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
    '01339567f063c9b1d1c6ca3a9c81770f' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Detailed debug information.
     *
     * @param mixed[] $context
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Psr\\Log',
         'uses' => 
        array (
        ),
         'className' => 'Psr\\Log\\LoggerInterface',
         'functionName' => 'debug',
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
    '073084b4427589ac6db158f3b3a75ea1' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Logs with an arbitrary level.
     *
     * @param mixed $level
     * @param mixed[] $context
     *
     * @throws \\Psr\\Log\\InvalidArgumentException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Psr\\Log',
         'uses' => 
        array (
        ),
         'className' => 'Psr\\Log\\LoggerInterface',
         'functionName' => 'log',
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