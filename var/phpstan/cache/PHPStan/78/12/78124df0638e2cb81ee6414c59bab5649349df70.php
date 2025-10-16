<?php declare(strict_types = 1);

return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/home/alfonso/projects/test-codex/vendor/symfony/doctrine-bridge/Validator/Constraints/UniqueEntity.php-1760629441',
   'data' => 
  array (
    '925fc7b3fb6f9a5771410260ae9b88f8' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Constraint for the Unique Entity validator.
 *
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints',
         'uses' => 
        array (
          'hasnamedarguments' => 'Symfony\\Component\\Validator\\Attribute\\HasNamedArguments',
          'constraint' => 'Symfony\\Component\\Validator\\Constraint',
        ),
         'className' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntity',
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
    '6860692d2b25e7fef87c5f51f8b430b6' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param array|string         $fields           The combination of fields that must contain unique values or a set of options
     * @param bool|string[]|string $ignoreNull       The combination of fields that ignore null values
     * @param string|null          $em               The entity manager used to query for uniqueness instead of the manager of this class
     * @param string|null          $entityClass      The entity class to enforce uniqueness on instead of the current class
     * @param string|null          $repositoryMethod The repository method to check uniqueness instead of findBy. The method will receive as its argument
     *                                               a fieldName => value associative array according to the fields option configuration
     * @param string|null          $errorPath        Bind the constraint violation to this field instead of the first one in the fields option configuration
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints',
         'uses' => 
        array (
          'hasnamedarguments' => 'Symfony\\Component\\Validator\\Attribute\\HasNamedArguments',
          'constraint' => 'Symfony\\Component\\Validator\\Constraint',
        ),
         'className' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntity',
         'functionName' => '__construct',
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
    '6aff90ba024f82251d52a35c1e633f8d' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * The validator must be defined as a service with this name.
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints',
         'uses' => 
        array (
          'hasnamedarguments' => 'Symfony\\Component\\Validator\\Attribute\\HasNamedArguments',
          'constraint' => 'Symfony\\Component\\Validator\\Constraint',
        ),
         'className' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntity',
         'functionName' => 'validatedBy',
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