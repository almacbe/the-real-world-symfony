<?php declare(strict_types = 1);

return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/home/alfonso/projects/test-codex/vendor/doctrine/persistence/src/Persistence/ObjectManager.php-1760629440',
   'data' => 
  array (
    '21b0e40654a3295a86f71b69773b94e0' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** Contract for a Doctrine persistence layer ObjectManager class to implement. */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\Persistence',
         'uses' => 
        array (
          'classmetadata' => 'Doctrine\\Persistence\\Mapping\\ClassMetadata',
          'classmetadatafactory' => 'Doctrine\\Persistence\\Mapping\\ClassMetadataFactory',
        ),
         'className' => 'Doctrine\\Persistence\\ObjectManager',
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
    '368db852a2b96d763db4b9f1a245d80b' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Finds an object by its identifier.
     *
     * This is just a convenient shortcut for getRepository($className)->find($id).
     *
     * @param string $className The class name of the object to find.
     * @param mixed  $id        The identity of the object to find.
     * @phpstan-param class-string<T> $className
     *
     * @return object|null The found object.
     * @phpstan-return T|null
     *
     * @template T of object
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\Persistence',
         'uses' => 
        array (
          'classmetadata' => 'Doctrine\\Persistence\\Mapping\\ClassMetadata',
          'classmetadatafactory' => 'Doctrine\\Persistence\\Mapping\\ClassMetadataFactory',
        ),
         'className' => 'Doctrine\\Persistence\\ObjectManager',
         'functionName' => 'find',
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
    '934693aa286a46eff1c9592620c22a64' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Tells the ObjectManager to make an instance managed and persistent.
     *
     * The object will be entered into the database as a result of the flush operation.
     *
     * NOTE: The persist operation always considers objects that are not yet known to
     * this ObjectManager as NEW. Do not pass detached objects to the persist operation.
     *
     * @param object $object The instance to make managed and persistent.
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\Persistence',
         'uses' => 
        array (
          'classmetadata' => 'Doctrine\\Persistence\\Mapping\\ClassMetadata',
          'classmetadatafactory' => 'Doctrine\\Persistence\\Mapping\\ClassMetadataFactory',
        ),
         'className' => 'Doctrine\\Persistence\\ObjectManager',
         'functionName' => 'persist',
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
    'e171af273b2499d6d9f871c3e9629d1a' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Removes an object instance.
     *
     * A removed object will be removed from the database as a result of the flush operation.
     *
     * @param object $object The object instance to remove.
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\Persistence',
         'uses' => 
        array (
          'classmetadata' => 'Doctrine\\Persistence\\Mapping\\ClassMetadata',
          'classmetadatafactory' => 'Doctrine\\Persistence\\Mapping\\ClassMetadataFactory',
        ),
         'className' => 'Doctrine\\Persistence\\ObjectManager',
         'functionName' => 'remove',
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
    '4b576af0712d9e671b9219a9e387e203' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Clears the ObjectManager. All objects that are currently managed
     * by this ObjectManager become detached.
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\Persistence',
         'uses' => 
        array (
          'classmetadata' => 'Doctrine\\Persistence\\Mapping\\ClassMetadata',
          'classmetadatafactory' => 'Doctrine\\Persistence\\Mapping\\ClassMetadataFactory',
        ),
         'className' => 'Doctrine\\Persistence\\ObjectManager',
         'functionName' => 'clear',
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
    '46da13f3f565ec24b66851000a461d88' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Detaches an object from the ObjectManager, causing a managed object to
     * become detached. Unflushed changes made to the object if any
     * (including removal of the object), will not be synchronized to the database.
     * Objects which previously referenced the detached object will continue to
     * reference it.
     *
     * @param object $object The object to detach.
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\Persistence',
         'uses' => 
        array (
          'classmetadata' => 'Doctrine\\Persistence\\Mapping\\ClassMetadata',
          'classmetadatafactory' => 'Doctrine\\Persistence\\Mapping\\ClassMetadataFactory',
        ),
         'className' => 'Doctrine\\Persistence\\ObjectManager',
         'functionName' => 'detach',
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
    '61c4026b04e263d08dfdf0deb2319e6d' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Refreshes the persistent state of an object from the database,
     * overriding any local changes that have not yet been persisted.
     *
     * @param object $object The object to refresh.
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\Persistence',
         'uses' => 
        array (
          'classmetadata' => 'Doctrine\\Persistence\\Mapping\\ClassMetadata',
          'classmetadatafactory' => 'Doctrine\\Persistence\\Mapping\\ClassMetadataFactory',
        ),
         'className' => 'Doctrine\\Persistence\\ObjectManager',
         'functionName' => 'refresh',
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
    '9c6b1d548d52c0ce12efe2dc3cf86fe1' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Flushes all changes to objects that have been queued up to now to the database.
     * This effectively synchronizes the in-memory state of managed objects with the
     * database.
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\Persistence',
         'uses' => 
        array (
          'classmetadata' => 'Doctrine\\Persistence\\Mapping\\ClassMetadata',
          'classmetadatafactory' => 'Doctrine\\Persistence\\Mapping\\ClassMetadataFactory',
        ),
         'className' => 'Doctrine\\Persistence\\ObjectManager',
         'functionName' => 'flush',
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
    '29aca8269fae723e96e06e9a3e3ae0cb' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the repository for a class.
     *
     * @phpstan-param class-string<T> $className
     *
     * @phpstan-return ObjectRepository<T>
     *
     * @template T of object
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\Persistence',
         'uses' => 
        array (
          'classmetadata' => 'Doctrine\\Persistence\\Mapping\\ClassMetadata',
          'classmetadatafactory' => 'Doctrine\\Persistence\\Mapping\\ClassMetadataFactory',
        ),
         'className' => 'Doctrine\\Persistence\\ObjectManager',
         'functionName' => 'getRepository',
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
    '8d480fc4efbe7145701c2102fe7ae966' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the ClassMetadata descriptor for a class.
     *
     * The class name must be the fully-qualified class name without a leading backslash
     * (as it is returned by get_class($obj)).
     *
     * @phpstan-param class-string<T> $className
     *
     * @phpstan-return ClassMetadata<T>
     *
     * @template T of object
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\Persistence',
         'uses' => 
        array (
          'classmetadata' => 'Doctrine\\Persistence\\Mapping\\ClassMetadata',
          'classmetadatafactory' => 'Doctrine\\Persistence\\Mapping\\ClassMetadataFactory',
        ),
         'className' => 'Doctrine\\Persistence\\ObjectManager',
         'functionName' => 'getClassMetadata',
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
    '77aad78fe37f173344824e3fa6755603' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the metadata factory used to gather the metadata of classes.
     *
     * @phpstan-return ClassMetadataFactory<ClassMetadata<object>>
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\Persistence',
         'uses' => 
        array (
          'classmetadata' => 'Doctrine\\Persistence\\Mapping\\ClassMetadata',
          'classmetadatafactory' => 'Doctrine\\Persistence\\Mapping\\ClassMetadataFactory',
        ),
         'className' => 'Doctrine\\Persistence\\ObjectManager',
         'functionName' => 'getMetadataFactory',
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
    'c1ebdcf7171b95ee76f9c51b2b9adb99' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Helper method to initialize a lazy loading proxy or persistent collection.
     *
     * This method is a no-op for other objects.
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\Persistence',
         'uses' => 
        array (
          'classmetadata' => 'Doctrine\\Persistence\\Mapping\\ClassMetadata',
          'classmetadatafactory' => 'Doctrine\\Persistence\\Mapping\\ClassMetadataFactory',
        ),
         'className' => 'Doctrine\\Persistence\\ObjectManager',
         'functionName' => 'initializeObject',
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
    '42bd80044633324fd107850c2398ec1f' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** Helper method to check whether a lazy loading proxy or persistent collection has been initialized. */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\Persistence',
         'uses' => 
        array (
          'classmetadata' => 'Doctrine\\Persistence\\Mapping\\ClassMetadata',
          'classmetadatafactory' => 'Doctrine\\Persistence\\Mapping\\ClassMetadataFactory',
        ),
         'className' => 'Doctrine\\Persistence\\ObjectManager',
         'functionName' => 'isUninitializedObject',
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
    '58304e758f7b975621b794c82488d17f' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks if the object is part of the current UnitOfWork and therefore managed.
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\Persistence',
         'uses' => 
        array (
          'classmetadata' => 'Doctrine\\Persistence\\Mapping\\ClassMetadata',
          'classmetadatafactory' => 'Doctrine\\Persistence\\Mapping\\ClassMetadataFactory',
        ),
         'className' => 'Doctrine\\Persistence\\ObjectManager',
         'functionName' => 'contains',
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