<?php declare(strict_types = 1);

return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/home/alfonso/projects/test-codex/vendor/symfony/security-core/Authorization/AuthorizationCheckerInterface.php-1760629439',
   'data' => 
  array (
    'c9cf61b4e26aea9c6b46800d5e96050c' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * The AuthorizationCheckerInterface.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Security\\Core\\Authorization',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface',
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
    '5558bea86cf5f80491bf43cbc9f6dfb5' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks if the attribute is granted against the current authentication token and optionally supplied subject.
     *
     * @param mixed               $attribute      A single attribute to vote on (can be of any type; strings, Expression and Closure instances are supported by the core)
     * @param AccessDecision|null $accessDecision Should be used to explain the decision
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Security\\Core\\Authorization',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface',
         'functionName' => 'isGranted',
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