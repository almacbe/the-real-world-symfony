<?php declare(strict_types = 1);

return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/home/alfonso/projects/test-codex/vendor/doctrine/collections/src/ReadableCollection.php-1760629437',
   'data' => 
  array (
    '601a19580ac6ce9da3bb3e3e75543b82' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * @phpstan-template TKey of array-key
 * @template-covariant T
 * @template-extends IteratorAggregate<TKey, T>
 */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\Common\\Collections',
         'uses' => 
        array (
          'closure' => 'Closure',
          'countable' => 'Countable',
          'iteratoraggregate' => 'IteratorAggregate',
        ),
         'className' => 'Doctrine\\Common\\Collections\\ReadableCollection',
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
    '3d25374ae2d15ebe6ed63b1ae3522ae0' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks whether an element is contained in the collection.
     * This is an O(n) operation, where n is the size of the collection.
     *
     * @param mixed $element The element to search for.
     * @phpstan-param TMaybeContained $element
     *
     * @return bool TRUE if the collection contains the element, FALSE otherwise.
     * @phpstan-return (TMaybeContained is T ? bool : false)
     *
     * @template TMaybeContained
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\Common\\Collections',
         'uses' => 
        array (
          'closure' => 'Closure',
          'countable' => 'Countable',
          'iteratoraggregate' => 'IteratorAggregate',
        ),
         'className' => 'Doctrine\\Common\\Collections\\ReadableCollection',
         'functionName' => 'contains',
         'templateTypeMap' => 
        \PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TKey' => 
            \PHPStan\Type\Generic\TemplateBenevolentUnionType::__set_state(array(
               'types' => 
              array (
                0 => 
                \PHPStan\Type\IntegerType::__set_state(array(
                )),
                1 => 
                \PHPStan\Type\StringType::__set_state(array(
                )),
              ),
               'name' => 'TKey',
               'scope' => 
              \PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Doctrine\\Common\\Collections\\ReadableCollection',
                 'functionName' => NULL,
              )),
               'strategy' => 
              \PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              \PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => 
              \PHPStan\Type\BenevolentUnionType::__set_state(array(
                 'types' => 
                array (
                  0 => 
                  \PHPStan\Type\IntegerType::__set_state(array(
                  )),
                  1 => 
                  \PHPStan\Type\StringType::__set_state(array(
                  )),
                ),
              )),
            )),
            'T' => 
            \PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
               'name' => 'T',
               'scope' => 
              \PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Doctrine\\Common\\Collections\\ReadableCollection',
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
              \PHPStan\Type\MixedType::__set_state(array(
                 'isExplicitMixed' => false,
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
    '81d1bc42f735fa406891c7c94252fb3e' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks whether the collection is empty (contains no elements).
     *
     * @return bool TRUE if the collection is empty, FALSE otherwise.
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\Common\\Collections',
         'uses' => 
        array (
          'closure' => 'Closure',
          'countable' => 'Countable',
          'iteratoraggregate' => 'IteratorAggregate',
        ),
         'className' => 'Doctrine\\Common\\Collections\\ReadableCollection',
         'functionName' => 'isEmpty',
         'templateTypeMap' => 
        \PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TKey' => 
            \PHPStan\Type\Generic\TemplateBenevolentUnionType::__set_state(array(
               'types' => 
              array (
                0 => 
                \PHPStan\Type\IntegerType::__set_state(array(
                )),
                1 => 
                \PHPStan\Type\StringType::__set_state(array(
                )),
              ),
               'name' => 'TKey',
               'scope' => 
              \PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Doctrine\\Common\\Collections\\ReadableCollection',
                 'functionName' => NULL,
              )),
               'strategy' => 
              \PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              \PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => 
              \PHPStan\Type\BenevolentUnionType::__set_state(array(
                 'types' => 
                array (
                  0 => 
                  \PHPStan\Type\IntegerType::__set_state(array(
                  )),
                  1 => 
                  \PHPStan\Type\StringType::__set_state(array(
                  )),
                ),
              )),
            )),
            'T' => 
            \PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
               'name' => 'T',
               'scope' => 
              \PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Doctrine\\Common\\Collections\\ReadableCollection',
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
              \PHPStan\Type\MixedType::__set_state(array(
                 'isExplicitMixed' => false,
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
    'd202f112f60b394e389cee250b0e5908' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks whether the collection contains an element with the specified key/index.
     *
     * @param string|int $key The key/index to check for.
     * @phpstan-param TKey $key
     *
     * @return bool TRUE if the collection contains an element with the specified key/index,
     *              FALSE otherwise.
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\Common\\Collections',
         'uses' => 
        array (
          'closure' => 'Closure',
          'countable' => 'Countable',
          'iteratoraggregate' => 'IteratorAggregate',
        ),
         'className' => 'Doctrine\\Common\\Collections\\ReadableCollection',
         'functionName' => 'containsKey',
         'templateTypeMap' => 
        \PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TKey' => 
            \PHPStan\Type\Generic\TemplateBenevolentUnionType::__set_state(array(
               'types' => 
              array (
                0 => 
                \PHPStan\Type\IntegerType::__set_state(array(
                )),
                1 => 
                \PHPStan\Type\StringType::__set_state(array(
                )),
              ),
               'name' => 'TKey',
               'scope' => 
              \PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Doctrine\\Common\\Collections\\ReadableCollection',
                 'functionName' => NULL,
              )),
               'strategy' => 
              \PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              \PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => 
              \PHPStan\Type\BenevolentUnionType::__set_state(array(
                 'types' => 
                array (
                  0 => 
                  \PHPStan\Type\IntegerType::__set_state(array(
                  )),
                  1 => 
                  \PHPStan\Type\StringType::__set_state(array(
                  )),
                ),
              )),
            )),
            'T' => 
            \PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
               'name' => 'T',
               'scope' => 
              \PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Doctrine\\Common\\Collections\\ReadableCollection',
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
              \PHPStan\Type\MixedType::__set_state(array(
                 'isExplicitMixed' => false,
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
    '8e569b9d0f15f8859546b2d42acf5aa6' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the element at the specified key/index.
     *
     * @param string|int $key The key/index of the element to retrieve.
     * @phpstan-param TKey $key
     *
     * @return mixed
     * @phpstan-return T|null
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\Common\\Collections',
         'uses' => 
        array (
          'closure' => 'Closure',
          'countable' => 'Countable',
          'iteratoraggregate' => 'IteratorAggregate',
        ),
         'className' => 'Doctrine\\Common\\Collections\\ReadableCollection',
         'functionName' => 'get',
         'templateTypeMap' => 
        \PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TKey' => 
            \PHPStan\Type\Generic\TemplateBenevolentUnionType::__set_state(array(
               'types' => 
              array (
                0 => 
                \PHPStan\Type\IntegerType::__set_state(array(
                )),
                1 => 
                \PHPStan\Type\StringType::__set_state(array(
                )),
              ),
               'name' => 'TKey',
               'scope' => 
              \PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Doctrine\\Common\\Collections\\ReadableCollection',
                 'functionName' => NULL,
              )),
               'strategy' => 
              \PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              \PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => 
              \PHPStan\Type\BenevolentUnionType::__set_state(array(
                 'types' => 
                array (
                  0 => 
                  \PHPStan\Type\IntegerType::__set_state(array(
                  )),
                  1 => 
                  \PHPStan\Type\StringType::__set_state(array(
                  )),
                ),
              )),
            )),
            'T' => 
            \PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
               'name' => 'T',
               'scope' => 
              \PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Doctrine\\Common\\Collections\\ReadableCollection',
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
              \PHPStan\Type\MixedType::__set_state(array(
                 'isExplicitMixed' => false,
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
    '24e30ff1a30ffaf253fcbbcebfa9bc84' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets all keys/indices of the collection.
     *
     * @return int[]|string[] The keys/indices of the collection, in the order of the corresponding
     *               elements in the collection.
     * @phpstan-return list<TKey>
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\Common\\Collections',
         'uses' => 
        array (
          'closure' => 'Closure',
          'countable' => 'Countable',
          'iteratoraggregate' => 'IteratorAggregate',
        ),
         'className' => 'Doctrine\\Common\\Collections\\ReadableCollection',
         'functionName' => 'getKeys',
         'templateTypeMap' => 
        \PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TKey' => 
            \PHPStan\Type\Generic\TemplateBenevolentUnionType::__set_state(array(
               'types' => 
              array (
                0 => 
                \PHPStan\Type\IntegerType::__set_state(array(
                )),
                1 => 
                \PHPStan\Type\StringType::__set_state(array(
                )),
              ),
               'name' => 'TKey',
               'scope' => 
              \PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Doctrine\\Common\\Collections\\ReadableCollection',
                 'functionName' => NULL,
              )),
               'strategy' => 
              \PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              \PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => 
              \PHPStan\Type\BenevolentUnionType::__set_state(array(
                 'types' => 
                array (
                  0 => 
                  \PHPStan\Type\IntegerType::__set_state(array(
                  )),
                  1 => 
                  \PHPStan\Type\StringType::__set_state(array(
                  )),
                ),
              )),
            )),
            'T' => 
            \PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
               'name' => 'T',
               'scope' => 
              \PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Doctrine\\Common\\Collections\\ReadableCollection',
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
              \PHPStan\Type\MixedType::__set_state(array(
                 'isExplicitMixed' => false,
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
    '3055937818fc0383c8324b1510cde5cc' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets all values of the collection.
     *
     * @return mixed[] The values of all elements in the collection, in the
     *                 order they appear in the collection.
     * @phpstan-return list<T>
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\Common\\Collections',
         'uses' => 
        array (
          'closure' => 'Closure',
          'countable' => 'Countable',
          'iteratoraggregate' => 'IteratorAggregate',
        ),
         'className' => 'Doctrine\\Common\\Collections\\ReadableCollection',
         'functionName' => 'getValues',
         'templateTypeMap' => 
        \PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TKey' => 
            \PHPStan\Type\Generic\TemplateBenevolentUnionType::__set_state(array(
               'types' => 
              array (
                0 => 
                \PHPStan\Type\IntegerType::__set_state(array(
                )),
                1 => 
                \PHPStan\Type\StringType::__set_state(array(
                )),
              ),
               'name' => 'TKey',
               'scope' => 
              \PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Doctrine\\Common\\Collections\\ReadableCollection',
                 'functionName' => NULL,
              )),
               'strategy' => 
              \PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              \PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => 
              \PHPStan\Type\BenevolentUnionType::__set_state(array(
                 'types' => 
                array (
                  0 => 
                  \PHPStan\Type\IntegerType::__set_state(array(
                  )),
                  1 => 
                  \PHPStan\Type\StringType::__set_state(array(
                  )),
                ),
              )),
            )),
            'T' => 
            \PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
               'name' => 'T',
               'scope' => 
              \PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Doctrine\\Common\\Collections\\ReadableCollection',
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
              \PHPStan\Type\MixedType::__set_state(array(
                 'isExplicitMixed' => false,
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
    'ee5645f742a1bac60bc2871ab5cd7f87' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets a native PHP array representation of the collection.
     *
     * @return mixed[]
     * @phpstan-return array<TKey,T>
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\Common\\Collections',
         'uses' => 
        array (
          'closure' => 'Closure',
          'countable' => 'Countable',
          'iteratoraggregate' => 'IteratorAggregate',
        ),
         'className' => 'Doctrine\\Common\\Collections\\ReadableCollection',
         'functionName' => 'toArray',
         'templateTypeMap' => 
        \PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TKey' => 
            \PHPStan\Type\Generic\TemplateBenevolentUnionType::__set_state(array(
               'types' => 
              array (
                0 => 
                \PHPStan\Type\IntegerType::__set_state(array(
                )),
                1 => 
                \PHPStan\Type\StringType::__set_state(array(
                )),
              ),
               'name' => 'TKey',
               'scope' => 
              \PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Doctrine\\Common\\Collections\\ReadableCollection',
                 'functionName' => NULL,
              )),
               'strategy' => 
              \PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              \PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => 
              \PHPStan\Type\BenevolentUnionType::__set_state(array(
                 'types' => 
                array (
                  0 => 
                  \PHPStan\Type\IntegerType::__set_state(array(
                  )),
                  1 => 
                  \PHPStan\Type\StringType::__set_state(array(
                  )),
                ),
              )),
            )),
            'T' => 
            \PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
               'name' => 'T',
               'scope' => 
              \PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Doctrine\\Common\\Collections\\ReadableCollection',
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
              \PHPStan\Type\MixedType::__set_state(array(
                 'isExplicitMixed' => false,
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
    'b8aa673a3f1890bdc29e90b2e079a283' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets the internal iterator to the first element in the collection and returns this element.
     *
     * @return mixed
     * @phpstan-return T|false
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\Common\\Collections',
         'uses' => 
        array (
          'closure' => 'Closure',
          'countable' => 'Countable',
          'iteratoraggregate' => 'IteratorAggregate',
        ),
         'className' => 'Doctrine\\Common\\Collections\\ReadableCollection',
         'functionName' => 'first',
         'templateTypeMap' => 
        \PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TKey' => 
            \PHPStan\Type\Generic\TemplateBenevolentUnionType::__set_state(array(
               'types' => 
              array (
                0 => 
                \PHPStan\Type\IntegerType::__set_state(array(
                )),
                1 => 
                \PHPStan\Type\StringType::__set_state(array(
                )),
              ),
               'name' => 'TKey',
               'scope' => 
              \PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Doctrine\\Common\\Collections\\ReadableCollection',
                 'functionName' => NULL,
              )),
               'strategy' => 
              \PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              \PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => 
              \PHPStan\Type\BenevolentUnionType::__set_state(array(
                 'types' => 
                array (
                  0 => 
                  \PHPStan\Type\IntegerType::__set_state(array(
                  )),
                  1 => 
                  \PHPStan\Type\StringType::__set_state(array(
                  )),
                ),
              )),
            )),
            'T' => 
            \PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
               'name' => 'T',
               'scope' => 
              \PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Doctrine\\Common\\Collections\\ReadableCollection',
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
              \PHPStan\Type\MixedType::__set_state(array(
                 'isExplicitMixed' => false,
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
    '70526b0d389af555f4f94a230bde9026' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets the internal iterator to the last element in the collection and returns this element.
     *
     * @return mixed
     * @phpstan-return T|false
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\Common\\Collections',
         'uses' => 
        array (
          'closure' => 'Closure',
          'countable' => 'Countable',
          'iteratoraggregate' => 'IteratorAggregate',
        ),
         'className' => 'Doctrine\\Common\\Collections\\ReadableCollection',
         'functionName' => 'last',
         'templateTypeMap' => 
        \PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TKey' => 
            \PHPStan\Type\Generic\TemplateBenevolentUnionType::__set_state(array(
               'types' => 
              array (
                0 => 
                \PHPStan\Type\IntegerType::__set_state(array(
                )),
                1 => 
                \PHPStan\Type\StringType::__set_state(array(
                )),
              ),
               'name' => 'TKey',
               'scope' => 
              \PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Doctrine\\Common\\Collections\\ReadableCollection',
                 'functionName' => NULL,
              )),
               'strategy' => 
              \PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              \PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => 
              \PHPStan\Type\BenevolentUnionType::__set_state(array(
                 'types' => 
                array (
                  0 => 
                  \PHPStan\Type\IntegerType::__set_state(array(
                  )),
                  1 => 
                  \PHPStan\Type\StringType::__set_state(array(
                  )),
                ),
              )),
            )),
            'T' => 
            \PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
               'name' => 'T',
               'scope' => 
              \PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Doctrine\\Common\\Collections\\ReadableCollection',
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
              \PHPStan\Type\MixedType::__set_state(array(
                 'isExplicitMixed' => false,
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
    'a032b7ee1507dcd1bbdcfdce15bb0d87' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the key/index of the element at the current iterator position.
     *
     * @return int|string|null
     * @phpstan-return TKey|null
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\Common\\Collections',
         'uses' => 
        array (
          'closure' => 'Closure',
          'countable' => 'Countable',
          'iteratoraggregate' => 'IteratorAggregate',
        ),
         'className' => 'Doctrine\\Common\\Collections\\ReadableCollection',
         'functionName' => 'key',
         'templateTypeMap' => 
        \PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TKey' => 
            \PHPStan\Type\Generic\TemplateBenevolentUnionType::__set_state(array(
               'types' => 
              array (
                0 => 
                \PHPStan\Type\IntegerType::__set_state(array(
                )),
                1 => 
                \PHPStan\Type\StringType::__set_state(array(
                )),
              ),
               'name' => 'TKey',
               'scope' => 
              \PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Doctrine\\Common\\Collections\\ReadableCollection',
                 'functionName' => NULL,
              )),
               'strategy' => 
              \PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              \PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => 
              \PHPStan\Type\BenevolentUnionType::__set_state(array(
                 'types' => 
                array (
                  0 => 
                  \PHPStan\Type\IntegerType::__set_state(array(
                  )),
                  1 => 
                  \PHPStan\Type\StringType::__set_state(array(
                  )),
                ),
              )),
            )),
            'T' => 
            \PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
               'name' => 'T',
               'scope' => 
              \PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Doctrine\\Common\\Collections\\ReadableCollection',
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
              \PHPStan\Type\MixedType::__set_state(array(
                 'isExplicitMixed' => false,
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
    'cceafd4d4e14e30c7835e5ee2b7df9d3' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the element of the collection at the current iterator position.
     *
     * @return mixed
     * @phpstan-return T|false
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\Common\\Collections',
         'uses' => 
        array (
          'closure' => 'Closure',
          'countable' => 'Countable',
          'iteratoraggregate' => 'IteratorAggregate',
        ),
         'className' => 'Doctrine\\Common\\Collections\\ReadableCollection',
         'functionName' => 'current',
         'templateTypeMap' => 
        \PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TKey' => 
            \PHPStan\Type\Generic\TemplateBenevolentUnionType::__set_state(array(
               'types' => 
              array (
                0 => 
                \PHPStan\Type\IntegerType::__set_state(array(
                )),
                1 => 
                \PHPStan\Type\StringType::__set_state(array(
                )),
              ),
               'name' => 'TKey',
               'scope' => 
              \PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Doctrine\\Common\\Collections\\ReadableCollection',
                 'functionName' => NULL,
              )),
               'strategy' => 
              \PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              \PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => 
              \PHPStan\Type\BenevolentUnionType::__set_state(array(
                 'types' => 
                array (
                  0 => 
                  \PHPStan\Type\IntegerType::__set_state(array(
                  )),
                  1 => 
                  \PHPStan\Type\StringType::__set_state(array(
                  )),
                ),
              )),
            )),
            'T' => 
            \PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
               'name' => 'T',
               'scope' => 
              \PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Doctrine\\Common\\Collections\\ReadableCollection',
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
              \PHPStan\Type\MixedType::__set_state(array(
                 'isExplicitMixed' => false,
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
    '85d34cc29cc5111440249c40060cd31e' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Moves the internal iterator position to the next element and returns this element.
     *
     * @return mixed
     * @phpstan-return T|false
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\Common\\Collections',
         'uses' => 
        array (
          'closure' => 'Closure',
          'countable' => 'Countable',
          'iteratoraggregate' => 'IteratorAggregate',
        ),
         'className' => 'Doctrine\\Common\\Collections\\ReadableCollection',
         'functionName' => 'next',
         'templateTypeMap' => 
        \PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TKey' => 
            \PHPStan\Type\Generic\TemplateBenevolentUnionType::__set_state(array(
               'types' => 
              array (
                0 => 
                \PHPStan\Type\IntegerType::__set_state(array(
                )),
                1 => 
                \PHPStan\Type\StringType::__set_state(array(
                )),
              ),
               'name' => 'TKey',
               'scope' => 
              \PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Doctrine\\Common\\Collections\\ReadableCollection',
                 'functionName' => NULL,
              )),
               'strategy' => 
              \PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              \PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => 
              \PHPStan\Type\BenevolentUnionType::__set_state(array(
                 'types' => 
                array (
                  0 => 
                  \PHPStan\Type\IntegerType::__set_state(array(
                  )),
                  1 => 
                  \PHPStan\Type\StringType::__set_state(array(
                  )),
                ),
              )),
            )),
            'T' => 
            \PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
               'name' => 'T',
               'scope' => 
              \PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Doctrine\\Common\\Collections\\ReadableCollection',
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
              \PHPStan\Type\MixedType::__set_state(array(
                 'isExplicitMixed' => false,
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
    '151f0115b04f8dbb25893df9ba2f1572' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Extracts a slice of $length elements starting at position $offset from the Collection.
     *
     * If $length is null it returns all elements from $offset to the end of the Collection.
     * Keys have to be preserved by this method. Calling this method will only return the
     * selected slice and NOT change the elements contained in the collection slice is called on.
     *
     * @param int      $offset The offset to start from.
     * @param int|null $length The maximum number of elements to return, or null for no limit.
     *
     * @return mixed[]
     * @phpstan-return array<TKey,T>
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\Common\\Collections',
         'uses' => 
        array (
          'closure' => 'Closure',
          'countable' => 'Countable',
          'iteratoraggregate' => 'IteratorAggregate',
        ),
         'className' => 'Doctrine\\Common\\Collections\\ReadableCollection',
         'functionName' => 'slice',
         'templateTypeMap' => 
        \PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TKey' => 
            \PHPStan\Type\Generic\TemplateBenevolentUnionType::__set_state(array(
               'types' => 
              array (
                0 => 
                \PHPStan\Type\IntegerType::__set_state(array(
                )),
                1 => 
                \PHPStan\Type\StringType::__set_state(array(
                )),
              ),
               'name' => 'TKey',
               'scope' => 
              \PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Doctrine\\Common\\Collections\\ReadableCollection',
                 'functionName' => NULL,
              )),
               'strategy' => 
              \PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              \PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => 
              \PHPStan\Type\BenevolentUnionType::__set_state(array(
                 'types' => 
                array (
                  0 => 
                  \PHPStan\Type\IntegerType::__set_state(array(
                  )),
                  1 => 
                  \PHPStan\Type\StringType::__set_state(array(
                  )),
                ),
              )),
            )),
            'T' => 
            \PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
               'name' => 'T',
               'scope' => 
              \PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Doctrine\\Common\\Collections\\ReadableCollection',
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
              \PHPStan\Type\MixedType::__set_state(array(
                 'isExplicitMixed' => false,
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
    '862f420cb6ca90fa62f4470437318ff3' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Tests for the existence of an element that satisfies the given predicate.
     *
     * @param Closure $p The predicate.
     * @phpstan-param Closure(TKey, T):bool $p
     *
     * @return bool TRUE if the predicate is TRUE for at least one element, FALSE otherwise.
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\Common\\Collections',
         'uses' => 
        array (
          'closure' => 'Closure',
          'countable' => 'Countable',
          'iteratoraggregate' => 'IteratorAggregate',
        ),
         'className' => 'Doctrine\\Common\\Collections\\ReadableCollection',
         'functionName' => 'exists',
         'templateTypeMap' => 
        \PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TKey' => 
            \PHPStan\Type\Generic\TemplateBenevolentUnionType::__set_state(array(
               'types' => 
              array (
                0 => 
                \PHPStan\Type\IntegerType::__set_state(array(
                )),
                1 => 
                \PHPStan\Type\StringType::__set_state(array(
                )),
              ),
               'name' => 'TKey',
               'scope' => 
              \PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Doctrine\\Common\\Collections\\ReadableCollection',
                 'functionName' => NULL,
              )),
               'strategy' => 
              \PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              \PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => 
              \PHPStan\Type\BenevolentUnionType::__set_state(array(
                 'types' => 
                array (
                  0 => 
                  \PHPStan\Type\IntegerType::__set_state(array(
                  )),
                  1 => 
                  \PHPStan\Type\StringType::__set_state(array(
                  )),
                ),
              )),
            )),
            'T' => 
            \PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
               'name' => 'T',
               'scope' => 
              \PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Doctrine\\Common\\Collections\\ReadableCollection',
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
              \PHPStan\Type\MixedType::__set_state(array(
                 'isExplicitMixed' => false,
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
    '08aa04db93943f23f6d19a73c3469935' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns all the elements of this collection that satisfy the predicate p.
     * The order of the elements is preserved.
     *
     * @param Closure $p The predicate used for filtering.
     * @phpstan-param Closure(T, TKey):bool $p
     *
     * @return ReadableCollection<mixed> A collection with the results of the filter operation.
     * @phpstan-return ReadableCollection<TKey, T>
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\Common\\Collections',
         'uses' => 
        array (
          'closure' => 'Closure',
          'countable' => 'Countable',
          'iteratoraggregate' => 'IteratorAggregate',
        ),
         'className' => 'Doctrine\\Common\\Collections\\ReadableCollection',
         'functionName' => 'filter',
         'templateTypeMap' => 
        \PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TKey' => 
            \PHPStan\Type\Generic\TemplateBenevolentUnionType::__set_state(array(
               'types' => 
              array (
                0 => 
                \PHPStan\Type\IntegerType::__set_state(array(
                )),
                1 => 
                \PHPStan\Type\StringType::__set_state(array(
                )),
              ),
               'name' => 'TKey',
               'scope' => 
              \PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Doctrine\\Common\\Collections\\ReadableCollection',
                 'functionName' => NULL,
              )),
               'strategy' => 
              \PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              \PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => 
              \PHPStan\Type\BenevolentUnionType::__set_state(array(
                 'types' => 
                array (
                  0 => 
                  \PHPStan\Type\IntegerType::__set_state(array(
                  )),
                  1 => 
                  \PHPStan\Type\StringType::__set_state(array(
                  )),
                ),
              )),
            )),
            'T' => 
            \PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
               'name' => 'T',
               'scope' => 
              \PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Doctrine\\Common\\Collections\\ReadableCollection',
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
              \PHPStan\Type\MixedType::__set_state(array(
                 'isExplicitMixed' => false,
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
    '50e68f32670e900fbdaeb5c950bec85c' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Applies the given function to each element in the collection and returns
     * a new collection with the elements returned by the function.
     *
     * @phpstan-param Closure(T):U $func
     *
     * @return ReadableCollection<mixed>
     * @phpstan-return ReadableCollection<TKey, U>
     *
     * @phpstan-template U
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\Common\\Collections',
         'uses' => 
        array (
          'closure' => 'Closure',
          'countable' => 'Countable',
          'iteratoraggregate' => 'IteratorAggregate',
        ),
         'className' => 'Doctrine\\Common\\Collections\\ReadableCollection',
         'functionName' => 'map',
         'templateTypeMap' => 
        \PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TKey' => 
            \PHPStan\Type\Generic\TemplateBenevolentUnionType::__set_state(array(
               'types' => 
              array (
                0 => 
                \PHPStan\Type\IntegerType::__set_state(array(
                )),
                1 => 
                \PHPStan\Type\StringType::__set_state(array(
                )),
              ),
               'name' => 'TKey',
               'scope' => 
              \PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Doctrine\\Common\\Collections\\ReadableCollection',
                 'functionName' => NULL,
              )),
               'strategy' => 
              \PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              \PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => 
              \PHPStan\Type\BenevolentUnionType::__set_state(array(
                 'types' => 
                array (
                  0 => 
                  \PHPStan\Type\IntegerType::__set_state(array(
                  )),
                  1 => 
                  \PHPStan\Type\StringType::__set_state(array(
                  )),
                ),
              )),
            )),
            'T' => 
            \PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
               'name' => 'T',
               'scope' => 
              \PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Doctrine\\Common\\Collections\\ReadableCollection',
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
              \PHPStan\Type\MixedType::__set_state(array(
                 'isExplicitMixed' => false,
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
    'deeb3ed8c868bba5a44ae2a9c4b0c937' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Partitions this collection in two collections according to a predicate.
     * Keys are preserved in the resulting collections.
     *
     * @param Closure $p The predicate on which to partition.
     * @phpstan-param Closure(TKey, T):bool $p
     *
     * @return ReadableCollection<mixed>[] An array with two elements. The first element contains the collection
     *                      of elements where the predicate returned TRUE, the second element
     *                      contains the collection of elements where the predicate returned FALSE.
     * @phpstan-return array{0: ReadableCollection<TKey, T>, 1: ReadableCollection<TKey, T>}
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\Common\\Collections',
         'uses' => 
        array (
          'closure' => 'Closure',
          'countable' => 'Countable',
          'iteratoraggregate' => 'IteratorAggregate',
        ),
         'className' => 'Doctrine\\Common\\Collections\\ReadableCollection',
         'functionName' => 'partition',
         'templateTypeMap' => 
        \PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TKey' => 
            \PHPStan\Type\Generic\TemplateBenevolentUnionType::__set_state(array(
               'types' => 
              array (
                0 => 
                \PHPStan\Type\IntegerType::__set_state(array(
                )),
                1 => 
                \PHPStan\Type\StringType::__set_state(array(
                )),
              ),
               'name' => 'TKey',
               'scope' => 
              \PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Doctrine\\Common\\Collections\\ReadableCollection',
                 'functionName' => NULL,
              )),
               'strategy' => 
              \PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              \PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => 
              \PHPStan\Type\BenevolentUnionType::__set_state(array(
                 'types' => 
                array (
                  0 => 
                  \PHPStan\Type\IntegerType::__set_state(array(
                  )),
                  1 => 
                  \PHPStan\Type\StringType::__set_state(array(
                  )),
                ),
              )),
            )),
            'T' => 
            \PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
               'name' => 'T',
               'scope' => 
              \PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Doctrine\\Common\\Collections\\ReadableCollection',
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
              \PHPStan\Type\MixedType::__set_state(array(
                 'isExplicitMixed' => false,
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
    '4c08d469afb06c9db5ba880ce22757dc' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Tests whether the given predicate p holds for all elements of this collection.
     *
     * @param Closure $p The predicate.
     * @phpstan-param Closure(TKey, T):bool $p
     *
     * @return bool TRUE, if the predicate yields TRUE for all elements, FALSE otherwise.
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\Common\\Collections',
         'uses' => 
        array (
          'closure' => 'Closure',
          'countable' => 'Countable',
          'iteratoraggregate' => 'IteratorAggregate',
        ),
         'className' => 'Doctrine\\Common\\Collections\\ReadableCollection',
         'functionName' => 'forAll',
         'templateTypeMap' => 
        \PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TKey' => 
            \PHPStan\Type\Generic\TemplateBenevolentUnionType::__set_state(array(
               'types' => 
              array (
                0 => 
                \PHPStan\Type\IntegerType::__set_state(array(
                )),
                1 => 
                \PHPStan\Type\StringType::__set_state(array(
                )),
              ),
               'name' => 'TKey',
               'scope' => 
              \PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Doctrine\\Common\\Collections\\ReadableCollection',
                 'functionName' => NULL,
              )),
               'strategy' => 
              \PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              \PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => 
              \PHPStan\Type\BenevolentUnionType::__set_state(array(
                 'types' => 
                array (
                  0 => 
                  \PHPStan\Type\IntegerType::__set_state(array(
                  )),
                  1 => 
                  \PHPStan\Type\StringType::__set_state(array(
                  )),
                ),
              )),
            )),
            'T' => 
            \PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
               'name' => 'T',
               'scope' => 
              \PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Doctrine\\Common\\Collections\\ReadableCollection',
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
              \PHPStan\Type\MixedType::__set_state(array(
                 'isExplicitMixed' => false,
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
    'fa6123b2f462587920e440deb5e4d72d' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the index/key of a given element. The comparison of two elements is strict,
     * that means not only the value but also the type must match.
     * For objects this means reference equality.
     *
     * @param mixed $element The element to search for.
     * @phpstan-param TMaybeContained $element
     *
     * @return int|string|bool The key/index of the element or FALSE if the element was not found.
     * @phpstan-return (TMaybeContained is T ? TKey|false : false)
     *
     * @template TMaybeContained
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\Common\\Collections',
         'uses' => 
        array (
          'closure' => 'Closure',
          'countable' => 'Countable',
          'iteratoraggregate' => 'IteratorAggregate',
        ),
         'className' => 'Doctrine\\Common\\Collections\\ReadableCollection',
         'functionName' => 'indexOf',
         'templateTypeMap' => 
        \PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TKey' => 
            \PHPStan\Type\Generic\TemplateBenevolentUnionType::__set_state(array(
               'types' => 
              array (
                0 => 
                \PHPStan\Type\IntegerType::__set_state(array(
                )),
                1 => 
                \PHPStan\Type\StringType::__set_state(array(
                )),
              ),
               'name' => 'TKey',
               'scope' => 
              \PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Doctrine\\Common\\Collections\\ReadableCollection',
                 'functionName' => NULL,
              )),
               'strategy' => 
              \PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              \PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => 
              \PHPStan\Type\BenevolentUnionType::__set_state(array(
                 'types' => 
                array (
                  0 => 
                  \PHPStan\Type\IntegerType::__set_state(array(
                  )),
                  1 => 
                  \PHPStan\Type\StringType::__set_state(array(
                  )),
                ),
              )),
            )),
            'T' => 
            \PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
               'name' => 'T',
               'scope' => 
              \PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Doctrine\\Common\\Collections\\ReadableCollection',
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
              \PHPStan\Type\MixedType::__set_state(array(
                 'isExplicitMixed' => false,
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
    '8ad2801a8e0b83276f5bc2392e0acb94' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the first element of this collection that satisfies the predicate p.
     *
     * @param Closure $p The predicate.
     * @phpstan-param Closure(TKey, T):bool $p
     *
     * @return mixed The first element respecting the predicate,
     *               null if no element respects the predicate.
     * @phpstan-return T|null
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\Common\\Collections',
         'uses' => 
        array (
          'closure' => 'Closure',
          'countable' => 'Countable',
          'iteratoraggregate' => 'IteratorAggregate',
        ),
         'className' => 'Doctrine\\Common\\Collections\\ReadableCollection',
         'functionName' => 'findFirst',
         'templateTypeMap' => 
        \PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TKey' => 
            \PHPStan\Type\Generic\TemplateBenevolentUnionType::__set_state(array(
               'types' => 
              array (
                0 => 
                \PHPStan\Type\IntegerType::__set_state(array(
                )),
                1 => 
                \PHPStan\Type\StringType::__set_state(array(
                )),
              ),
               'name' => 'TKey',
               'scope' => 
              \PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Doctrine\\Common\\Collections\\ReadableCollection',
                 'functionName' => NULL,
              )),
               'strategy' => 
              \PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              \PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => 
              \PHPStan\Type\BenevolentUnionType::__set_state(array(
                 'types' => 
                array (
                  0 => 
                  \PHPStan\Type\IntegerType::__set_state(array(
                  )),
                  1 => 
                  \PHPStan\Type\StringType::__set_state(array(
                  )),
                ),
              )),
            )),
            'T' => 
            \PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
               'name' => 'T',
               'scope' => 
              \PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Doctrine\\Common\\Collections\\ReadableCollection',
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
              \PHPStan\Type\MixedType::__set_state(array(
                 'isExplicitMixed' => false,
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
    'fa7ebd4f1571034a8758da5edd73b5d8' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Applies iteratively the given function to each element in the collection,
     * so as to reduce the collection to a single value.
     *
     * @phpstan-param Closure(TReturn|TInitial, T):TReturn $func
     * @phpstan-param TInitial $initial
     *
     * @return mixed
     * @phpstan-return TReturn|TInitial
     *
     * @phpstan-template TReturn
     * @phpstan-template TInitial
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\Common\\Collections',
         'uses' => 
        array (
          'closure' => 'Closure',
          'countable' => 'Countable',
          'iteratoraggregate' => 'IteratorAggregate',
        ),
         'className' => 'Doctrine\\Common\\Collections\\ReadableCollection',
         'functionName' => 'reduce',
         'templateTypeMap' => 
        \PHPStan\Type\Generic\TemplateTypeMap::__set_state(array(
           'types' => 
          array (
            'TKey' => 
            \PHPStan\Type\Generic\TemplateBenevolentUnionType::__set_state(array(
               'types' => 
              array (
                0 => 
                \PHPStan\Type\IntegerType::__set_state(array(
                )),
                1 => 
                \PHPStan\Type\StringType::__set_state(array(
                )),
              ),
               'name' => 'TKey',
               'scope' => 
              \PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Doctrine\\Common\\Collections\\ReadableCollection',
                 'functionName' => NULL,
              )),
               'strategy' => 
              \PHPStan\Type\Generic\TemplateTypeParameterStrategy::__set_state(array(
              )),
               'variance' => 
              \PHPStan\Type\Generic\TemplateTypeVariance::__set_state(array(
                 'value' => 1,
              )),
               'bound' => 
              \PHPStan\Type\BenevolentUnionType::__set_state(array(
                 'types' => 
                array (
                  0 => 
                  \PHPStan\Type\IntegerType::__set_state(array(
                  )),
                  1 => 
                  \PHPStan\Type\StringType::__set_state(array(
                  )),
                ),
              )),
            )),
            'T' => 
            \PHPStan\Type\Generic\TemplateMixedType::__set_state(array(
               'isExplicitMixed' => true,
               'subtractedType' => NULL,
               'name' => 'T',
               'scope' => 
              \PHPStan\Type\Generic\TemplateTypeScope::__set_state(array(
                 'className' => 'Doctrine\\Common\\Collections\\ReadableCollection',
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
              \PHPStan\Type\MixedType::__set_state(array(
                 'isExplicitMixed' => false,
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