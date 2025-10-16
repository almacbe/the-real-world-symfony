<?php declare(strict_types = 1);

return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/home/alfonso/projects/test-codex/vendor/doctrine/collections/src/Collection.php-1760629437',
   'data' => 
  array (
    '4fc9093b3feb75abaf46ff5b1c2327cf' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * The missing (SPL) Collection/Array/OrderedMap interface.
 *
 * A Collection resembles the nature of a regular PHP array. That is,
 * it is essentially an <b>ordered map</b> that can also be used
 * like a list.
 *
 * A Collection has an internal iterator just like a PHP array. In addition,
 * a Collection can be iterated with external iterators, which is preferable.
 * To use an external iterator simply use the foreach language construct to
 * iterate over the collection (which calls {@link getIterator()} internally) or
 * explicitly retrieve an iterator though {@link getIterator()} which can then be
 * used to iterate over the collection.
 * You can not rely on the internal iterator of the collection being at a certain
 * position unless you explicitly positioned it before. Prefer iteration with
 * external iterators.
 *
 * @phpstan-template TKey of array-key
 * @phpstan-template T
 * @template-extends ReadableCollection<TKey, T>
 * @template-extends ArrayAccess<TKey, T>
 */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\Common\\Collections',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'closure' => 'Closure',
        ),
         'className' => 'Doctrine\\Common\\Collections\\Collection',
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
    'cfef0b17d932b319d08f02d3ef4a32cb' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Adds an element at the end of the collection.
     *
     * @param mixed $element The element to add.
     * @phpstan-param T $element
     *
     * @return void we will require a native return type declaration in 3.0
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\Common\\Collections',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'closure' => 'Closure',
        ),
         'className' => 'Doctrine\\Common\\Collections\\Collection',
         'functionName' => 'add',
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
                 'className' => 'Doctrine\\Common\\Collections\\Collection',
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
                 'className' => 'Doctrine\\Common\\Collections\\Collection',
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
    '949ed1ffbce010fcaf0dcb676f7a14a1' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Clears the collection, removing all elements.
     *
     * @return void
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\Common\\Collections',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'closure' => 'Closure',
        ),
         'className' => 'Doctrine\\Common\\Collections\\Collection',
         'functionName' => 'clear',
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
                 'className' => 'Doctrine\\Common\\Collections\\Collection',
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
                 'className' => 'Doctrine\\Common\\Collections\\Collection',
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
    'e5db69789e77ccec667ffa7345dfac6e' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Removes the element at the specified index from the collection.
     *
     * @param string|int $key The key/index of the element to remove.
     * @phpstan-param TKey $key
     *
     * @return mixed The removed element or NULL, if the collection did not contain the element.
     * @phpstan-return T|null
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\Common\\Collections',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'closure' => 'Closure',
        ),
         'className' => 'Doctrine\\Common\\Collections\\Collection',
         'functionName' => 'remove',
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
                 'className' => 'Doctrine\\Common\\Collections\\Collection',
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
                 'className' => 'Doctrine\\Common\\Collections\\Collection',
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
    '803c3bc2d807b5ed5a19ac0a51f8eea8' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Removes the specified element from the collection, if it is found.
     *
     * @param mixed $element The element to remove.
     * @phpstan-param T $element
     *
     * @return bool TRUE if this collection contained the specified element, FALSE otherwise.
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\Common\\Collections',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'closure' => 'Closure',
        ),
         'className' => 'Doctrine\\Common\\Collections\\Collection',
         'functionName' => 'removeElement',
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
                 'className' => 'Doctrine\\Common\\Collections\\Collection',
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
                 'className' => 'Doctrine\\Common\\Collections\\Collection',
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
    'abc89e6e684430d8ebe19764ecbe88b0' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Sets an element in the collection at the specified key/index.
     *
     * @param string|int $key   The key/index of the element to set.
     * @param mixed      $value The element to set.
     * @phpstan-param TKey $key
     * @phpstan-param T $value
     *
     * @return void
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\Common\\Collections',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'closure' => 'Closure',
        ),
         'className' => 'Doctrine\\Common\\Collections\\Collection',
         'functionName' => 'set',
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
                 'className' => 'Doctrine\\Common\\Collections\\Collection',
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
                 'className' => 'Doctrine\\Common\\Collections\\Collection',
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
    '2b46a532cfc50e1ba98128ed9a8f056d' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * {@inheritDoc}
     *
     * @phpstan-param Closure(T):U $func
     *
     * @return Collection<mixed>
     * @phpstan-return Collection<TKey, U>
     *
     * @phpstan-template U
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\Common\\Collections',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'closure' => 'Closure',
        ),
         'className' => 'Doctrine\\Common\\Collections\\Collection',
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
                 'className' => 'Doctrine\\Common\\Collections\\Collection',
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
                 'className' => 'Doctrine\\Common\\Collections\\Collection',
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
    '0b754876e29ba4d4bc5a6a26f108f79e' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * {@inheritDoc}
     *
     * @phpstan-param Closure(T, TKey):bool $p
     *
     * @return Collection<mixed> A collection with the results of the filter operation.
     * @phpstan-return Collection<TKey, T>
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\Common\\Collections',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'closure' => 'Closure',
        ),
         'className' => 'Doctrine\\Common\\Collections\\Collection',
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
                 'className' => 'Doctrine\\Common\\Collections\\Collection',
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
                 'className' => 'Doctrine\\Common\\Collections\\Collection',
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
    'd8ef9c4222ffb83038cab0a7af7ec1c8' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * {@inheritDoc}
     *
     * @phpstan-param Closure(TKey, T):bool $p
     *
     * @return Collection<mixed>[] An array with two elements. The first element contains the collection
     *                      of elements where the predicate returned TRUE, the second element
     *                      contains the collection of elements where the predicate returned FALSE.
     * @phpstan-return array{0: Collection<TKey, T>, 1: Collection<TKey, T>}
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\Common\\Collections',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'closure' => 'Closure',
        ),
         'className' => 'Doctrine\\Common\\Collections\\Collection',
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
                 'className' => 'Doctrine\\Common\\Collections\\Collection',
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
                 'className' => 'Doctrine\\Common\\Collections\\Collection',
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