<?php declare(strict_types = 1);

return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/home/alfonso/projects/test-codex/vendor/doctrine/persistence/src/Persistence/ObjectRepository.php-1760629440',
   'data' => 
  array (
    'd018dfd3a63e7abdc647ea6018cd3dee' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Contract for a Doctrine persistence layer ObjectRepository class to implement.
 *
 * @template-covariant T of object
 */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\Persistence',
         'uses' => 
        array (
          'unexpectedvalueexception' => 'UnexpectedValueException',
        ),
         'className' => 'Doctrine\\Persistence\\ObjectRepository',
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
    '319fa357f85e7d3b6dcb80b7ee43fc09' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Finds an object by its primary key / identifier.
     *
     * @param mixed $id The identifier.
     *
     * @return object|null The object.
     * @phpstan-return T|null
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\Persistence',
         'uses' => 
        array (
          'unexpectedvalueexception' => 'UnexpectedValueException',
        ),
         'className' => 'Doctrine\\Persistence\\ObjectRepository',
         'functionName' => 'find',
         'templateTypeMap' => 
        \PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'T' => 
            \PHPStan\Type\Generic\TemplateObjectWithoutClassType::__set_state(array(
               'subtractedType' => NULL,
               'name' => 'T',
               'scope' => 
              \PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Doctrine\\Persistence\\ObjectRepository',
                 'functionName' => NULL,
              )),
               'strategy' => 
              \PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              \PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 2,
              )),
               'bound' => 
              \PHPStan\Type\ObjectWithoutClassType::__set_state(array(
                 'subtractedType' => NULL,
              )),
            )),
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
    'e9c6b7acb16a134c0025be39e2df1c77' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Finds all objects in the repository.
     *
     * @return array<int, object> The objects.
     * @phpstan-return T[]
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\Persistence',
         'uses' => 
        array (
          'unexpectedvalueexception' => 'UnexpectedValueException',
        ),
         'className' => 'Doctrine\\Persistence\\ObjectRepository',
         'functionName' => 'findAll',
         'templateTypeMap' => 
        \PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'T' => 
            \PHPStan\Type\Generic\TemplateObjectWithoutClassType::__set_state(array(
               'subtractedType' => NULL,
               'name' => 'T',
               'scope' => 
              \PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Doctrine\\Persistence\\ObjectRepository',
                 'functionName' => NULL,
              )),
               'strategy' => 
              \PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              \PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 2,
              )),
               'bound' => 
              \PHPStan\Type\ObjectWithoutClassType::__set_state(array(
                 'subtractedType' => NULL,
              )),
            )),
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
    '318b4f9165391a8848ab8a16a8cc632a' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Finds objects by a set of criteria.
     *
     * Optionally sorting and limiting details can be passed. An implementation may throw
     * an UnexpectedValueException if certain values of the sorting or limiting details are
     * not supported.
     *
     * @param array<string, mixed>       $criteria
     * @param array<string, string>|null $orderBy
     * @phpstan-param array<string, \'asc\'|\'desc\'|\'ASC\'|\'DESC\'>|null $orderBy
     *
     * @return array<int, object> The objects.
     * @phpstan-return T[]
     *
     * @throws UnexpectedValueException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\Persistence',
         'uses' => 
        array (
          'unexpectedvalueexception' => 'UnexpectedValueException',
        ),
         'className' => 'Doctrine\\Persistence\\ObjectRepository',
         'functionName' => 'findBy',
         'templateTypeMap' => 
        \PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'T' => 
            \PHPStan\Type\Generic\TemplateObjectWithoutClassType::__set_state(array(
               'subtractedType' => NULL,
               'name' => 'T',
               'scope' => 
              \PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Doctrine\\Persistence\\ObjectRepository',
                 'functionName' => NULL,
              )),
               'strategy' => 
              \PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              \PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 2,
              )),
               'bound' => 
              \PHPStan\Type\ObjectWithoutClassType::__set_state(array(
                 'subtractedType' => NULL,
              )),
            )),
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
    '627c37d168d96e5d5c179192b620b366' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Finds a single object by a set of criteria.
     *
     * @param array<string, mixed> $criteria The criteria.
     *
     * @return object|null The object.
     * @phpstan-return T|null
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\Persistence',
         'uses' => 
        array (
          'unexpectedvalueexception' => 'UnexpectedValueException',
        ),
         'className' => 'Doctrine\\Persistence\\ObjectRepository',
         'functionName' => 'findOneBy',
         'templateTypeMap' => 
        \PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'T' => 
            \PHPStan\Type\Generic\TemplateObjectWithoutClassType::__set_state(array(
               'subtractedType' => NULL,
               'name' => 'T',
               'scope' => 
              \PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Doctrine\\Persistence\\ObjectRepository',
                 'functionName' => NULL,
              )),
               'strategy' => 
              \PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              \PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 2,
              )),
               'bound' => 
              \PHPStan\Type\ObjectWithoutClassType::__set_state(array(
                 'subtractedType' => NULL,
              )),
            )),
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
    '7b9699d9acac95b59d84162a7efd6335' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the class name of the object managed by the repository.
     *
     * @phpstan-return class-string<T>
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\Persistence',
         'uses' => 
        array (
          'unexpectedvalueexception' => 'UnexpectedValueException',
        ),
         'className' => 'Doctrine\\Persistence\\ObjectRepository',
         'functionName' => 'getClassName',
         'templateTypeMap' => 
        \PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'T' => 
            \PHPStan\Type\Generic\TemplateObjectWithoutClassType::__set_state(array(
               'subtractedType' => NULL,
               'name' => 'T',
               'scope' => 
              \PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Doctrine\\Persistence\\ObjectRepository',
                 'functionName' => NULL,
              )),
               'strategy' => 
              \PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              \PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 2,
              )),
               'bound' => 
              \PHPStan\Type\ObjectWithoutClassType::__set_state(array(
                 'subtractedType' => NULL,
              )),
            )),
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