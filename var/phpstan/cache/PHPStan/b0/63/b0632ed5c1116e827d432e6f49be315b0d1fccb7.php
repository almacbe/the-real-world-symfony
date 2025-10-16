<?php declare(strict_types = 1);

return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/home/alfonso/projects/test-codex/vendor/symfony/security-core/Authorization/UserAuthorizationCheckerInterface.php-1760629439',
   'data' => 
  array (
    '7a82f3c7632ec7e5c1430880afb75628' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Interface is used to check user authorization without a session.
 *
 * @author Nate Wiebe <nate@northern.co>
 */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Security\\Core\\Authorization',
         'uses' => 
        array (
          'userinterface' => 'Symfony\\Component\\Security\\Core\\User\\UserInterface',
        ),
         'className' => 'Symfony\\Component\\Security\\Core\\Authorization\\UserAuthorizationCheckerInterface',
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
    '746ab44471f31c78080d57cec70ee0d9' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks if the attribute is granted against the user and optionally supplied subject.
     *
     * @param mixed               $attribute      A single attribute to vote on (can be of any type, string and instance of Expression are supported by the core)
     * @param AccessDecision|null $accessDecision Should be used to explain the decision
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Security\\Core\\Authorization',
         'uses' => 
        array (
          'userinterface' => 'Symfony\\Component\\Security\\Core\\User\\UserInterface',
        ),
         'className' => 'Symfony\\Component\\Security\\Core\\Authorization\\UserAuthorizationCheckerInterface',
         'functionName' => 'isGrantedForUser',
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