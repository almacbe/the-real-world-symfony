<?php declare(strict_types = 1);

return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/home/alfonso/projects/test-codex/vendor/doctrine/orm/src/EntityManagerInterface.php-1760629442',
   'data' => 
  array (
    'd0a857a7859bbc7df08a23cb5bdbbb70' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * {@inheritDoc}
     *
     * @param class-string<T> $className
     *
     * @return EntityRepository<T>
     *
     * @template T of object
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\ORM',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'eventmanager' => 'Doctrine\\Common\\EventManager',
          'connection' => 'Doctrine\\DBAL\\Connection',
          'lockmode' => 'Doctrine\\DBAL\\LockMode',
          'ormexception' => 'Doctrine\\ORM\\Exception\\ORMException',
          'abstracthydrator' => 'Doctrine\\ORM\\Internal\\Hydration\\AbstractHydrator',
          'classmetadatafactory' => 'Doctrine\\ORM\\Mapping\\ClassMetadataFactory',
          'proxyfactory' => 'Doctrine\\ORM\\Proxy\\ProxyFactory',
          'expr' => 'Doctrine\\ORM\\Query\\Expr',
          'filtercollection' => 'Doctrine\\ORM\\Query\\FilterCollection',
          'resultsetmapping' => 'Doctrine\\ORM\\Query\\ResultSetMapping',
          'objectmanager' => 'Doctrine\\Persistence\\ObjectManager',
        ),
         'className' => 'Doctrine\\ORM\\EntityManagerInterface',
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
    '359df1e26e620707455ba677c66ceb06' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the cache API for managing the second level cache regions or NULL if the cache is not enabled.
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\ORM',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'eventmanager' => 'Doctrine\\Common\\EventManager',
          'connection' => 'Doctrine\\DBAL\\Connection',
          'lockmode' => 'Doctrine\\DBAL\\LockMode',
          'ormexception' => 'Doctrine\\ORM\\Exception\\ORMException',
          'abstracthydrator' => 'Doctrine\\ORM\\Internal\\Hydration\\AbstractHydrator',
          'classmetadatafactory' => 'Doctrine\\ORM\\Mapping\\ClassMetadataFactory',
          'proxyfactory' => 'Doctrine\\ORM\\Proxy\\ProxyFactory',
          'expr' => 'Doctrine\\ORM\\Query\\Expr',
          'filtercollection' => 'Doctrine\\ORM\\Query\\FilterCollection',
          'resultsetmapping' => 'Doctrine\\ORM\\Query\\ResultSetMapping',
          'objectmanager' => 'Doctrine\\Persistence\\ObjectManager',
        ),
         'className' => 'Doctrine\\ORM\\EntityManagerInterface',
         'functionName' => 'getCache',
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
    '869ff9b2aa5f4327eac8cd01fefea201' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the database connection object used by the EntityManager.
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\ORM',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'eventmanager' => 'Doctrine\\Common\\EventManager',
          'connection' => 'Doctrine\\DBAL\\Connection',
          'lockmode' => 'Doctrine\\DBAL\\LockMode',
          'ormexception' => 'Doctrine\\ORM\\Exception\\ORMException',
          'abstracthydrator' => 'Doctrine\\ORM\\Internal\\Hydration\\AbstractHydrator',
          'classmetadatafactory' => 'Doctrine\\ORM\\Mapping\\ClassMetadataFactory',
          'proxyfactory' => 'Doctrine\\ORM\\Proxy\\ProxyFactory',
          'expr' => 'Doctrine\\ORM\\Query\\Expr',
          'filtercollection' => 'Doctrine\\ORM\\Query\\FilterCollection',
          'resultsetmapping' => 'Doctrine\\ORM\\Query\\ResultSetMapping',
          'objectmanager' => 'Doctrine\\Persistence\\ObjectManager',
        ),
         'className' => 'Doctrine\\ORM\\EntityManagerInterface',
         'functionName' => 'getConnection',
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
    '5785147fd724cab98b6bc0488436f359' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets an ExpressionBuilder used for object-oriented construction of query expressions.
     *
     * Example:
     *
     * <code>
     *     $qb = $em->createQueryBuilder();
     *     $expr = $em->getExpressionBuilder();
     *     $qb->select(\'u\')->from(\'User\', \'u\')
     *         ->where($expr->orX($expr->eq(\'u.id\', 1), $expr->eq(\'u.id\', 2)));
     * </code>
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\ORM',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'eventmanager' => 'Doctrine\\Common\\EventManager',
          'connection' => 'Doctrine\\DBAL\\Connection',
          'lockmode' => 'Doctrine\\DBAL\\LockMode',
          'ormexception' => 'Doctrine\\ORM\\Exception\\ORMException',
          'abstracthydrator' => 'Doctrine\\ORM\\Internal\\Hydration\\AbstractHydrator',
          'classmetadatafactory' => 'Doctrine\\ORM\\Mapping\\ClassMetadataFactory',
          'proxyfactory' => 'Doctrine\\ORM\\Proxy\\ProxyFactory',
          'expr' => 'Doctrine\\ORM\\Query\\Expr',
          'filtercollection' => 'Doctrine\\ORM\\Query\\FilterCollection',
          'resultsetmapping' => 'Doctrine\\ORM\\Query\\ResultSetMapping',
          'objectmanager' => 'Doctrine\\Persistence\\ObjectManager',
        ),
         'className' => 'Doctrine\\ORM\\EntityManagerInterface',
         'functionName' => 'getExpressionBuilder',
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
    'c460ad61afd9e29e9fb511d1f77e916a' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Starts a transaction on the underlying database connection.
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\ORM',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'eventmanager' => 'Doctrine\\Common\\EventManager',
          'connection' => 'Doctrine\\DBAL\\Connection',
          'lockmode' => 'Doctrine\\DBAL\\LockMode',
          'ormexception' => 'Doctrine\\ORM\\Exception\\ORMException',
          'abstracthydrator' => 'Doctrine\\ORM\\Internal\\Hydration\\AbstractHydrator',
          'classmetadatafactory' => 'Doctrine\\ORM\\Mapping\\ClassMetadataFactory',
          'proxyfactory' => 'Doctrine\\ORM\\Proxy\\ProxyFactory',
          'expr' => 'Doctrine\\ORM\\Query\\Expr',
          'filtercollection' => 'Doctrine\\ORM\\Query\\FilterCollection',
          'resultsetmapping' => 'Doctrine\\ORM\\Query\\ResultSetMapping',
          'objectmanager' => 'Doctrine\\Persistence\\ObjectManager',
        ),
         'className' => 'Doctrine\\ORM\\EntityManagerInterface',
         'functionName' => 'beginTransaction',
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
    '7d2acc14bad1965e2e849ddd07937a2f' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Executes a function in a transaction.
     *
     * The function gets passed this EntityManager instance as an (optional) parameter.
     *
     * {@link flush} is invoked prior to transaction commit.
     *
     * If an exception occurs during execution of the function or flushing or transaction commit,
     * the transaction is rolled back, the EntityManager closed and the exception re-thrown.
     *
     * @phpstan-param callable(self): T $func The function to execute transactionally.
     *
     * @return mixed The value returned from the closure.
     * @phpstan-return T
     *
     * @template T
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\ORM',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'eventmanager' => 'Doctrine\\Common\\EventManager',
          'connection' => 'Doctrine\\DBAL\\Connection',
          'lockmode' => 'Doctrine\\DBAL\\LockMode',
          'ormexception' => 'Doctrine\\ORM\\Exception\\ORMException',
          'abstracthydrator' => 'Doctrine\\ORM\\Internal\\Hydration\\AbstractHydrator',
          'classmetadatafactory' => 'Doctrine\\ORM\\Mapping\\ClassMetadataFactory',
          'proxyfactory' => 'Doctrine\\ORM\\Proxy\\ProxyFactory',
          'expr' => 'Doctrine\\ORM\\Query\\Expr',
          'filtercollection' => 'Doctrine\\ORM\\Query\\FilterCollection',
          'resultsetmapping' => 'Doctrine\\ORM\\Query\\ResultSetMapping',
          'objectmanager' => 'Doctrine\\Persistence\\ObjectManager',
        ),
         'className' => 'Doctrine\\ORM\\EntityManagerInterface',
         'functionName' => 'wrapInTransaction',
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
    'b6b5138b77058727ba92b37ae76e7526' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Commits a transaction on the underlying database connection.
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\ORM',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'eventmanager' => 'Doctrine\\Common\\EventManager',
          'connection' => 'Doctrine\\DBAL\\Connection',
          'lockmode' => 'Doctrine\\DBAL\\LockMode',
          'ormexception' => 'Doctrine\\ORM\\Exception\\ORMException',
          'abstracthydrator' => 'Doctrine\\ORM\\Internal\\Hydration\\AbstractHydrator',
          'classmetadatafactory' => 'Doctrine\\ORM\\Mapping\\ClassMetadataFactory',
          'proxyfactory' => 'Doctrine\\ORM\\Proxy\\ProxyFactory',
          'expr' => 'Doctrine\\ORM\\Query\\Expr',
          'filtercollection' => 'Doctrine\\ORM\\Query\\FilterCollection',
          'resultsetmapping' => 'Doctrine\\ORM\\Query\\ResultSetMapping',
          'objectmanager' => 'Doctrine\\Persistence\\ObjectManager',
        ),
         'className' => 'Doctrine\\ORM\\EntityManagerInterface',
         'functionName' => 'commit',
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
    '1d30117f8c9f27fa98832dce198e76d0' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Performs a rollback on the underlying database connection.
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\ORM',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'eventmanager' => 'Doctrine\\Common\\EventManager',
          'connection' => 'Doctrine\\DBAL\\Connection',
          'lockmode' => 'Doctrine\\DBAL\\LockMode',
          'ormexception' => 'Doctrine\\ORM\\Exception\\ORMException',
          'abstracthydrator' => 'Doctrine\\ORM\\Internal\\Hydration\\AbstractHydrator',
          'classmetadatafactory' => 'Doctrine\\ORM\\Mapping\\ClassMetadataFactory',
          'proxyfactory' => 'Doctrine\\ORM\\Proxy\\ProxyFactory',
          'expr' => 'Doctrine\\ORM\\Query\\Expr',
          'filtercollection' => 'Doctrine\\ORM\\Query\\FilterCollection',
          'resultsetmapping' => 'Doctrine\\ORM\\Query\\ResultSetMapping',
          'objectmanager' => 'Doctrine\\Persistence\\ObjectManager',
        ),
         'className' => 'Doctrine\\ORM\\EntityManagerInterface',
         'functionName' => 'rollback',
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
    'fc79a1360f9d1508ada9f44b57535d9d' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Creates a new Query object.
     *
     * @param string $dql The DQL string.
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\ORM',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'eventmanager' => 'Doctrine\\Common\\EventManager',
          'connection' => 'Doctrine\\DBAL\\Connection',
          'lockmode' => 'Doctrine\\DBAL\\LockMode',
          'ormexception' => 'Doctrine\\ORM\\Exception\\ORMException',
          'abstracthydrator' => 'Doctrine\\ORM\\Internal\\Hydration\\AbstractHydrator',
          'classmetadatafactory' => 'Doctrine\\ORM\\Mapping\\ClassMetadataFactory',
          'proxyfactory' => 'Doctrine\\ORM\\Proxy\\ProxyFactory',
          'expr' => 'Doctrine\\ORM\\Query\\Expr',
          'filtercollection' => 'Doctrine\\ORM\\Query\\FilterCollection',
          'resultsetmapping' => 'Doctrine\\ORM\\Query\\ResultSetMapping',
          'objectmanager' => 'Doctrine\\Persistence\\ObjectManager',
        ),
         'className' => 'Doctrine\\ORM\\EntityManagerInterface',
         'functionName' => 'createQuery',
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
    '84e56247d471e562de72612fa78979ff' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Creates a native SQL query.
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\ORM',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'eventmanager' => 'Doctrine\\Common\\EventManager',
          'connection' => 'Doctrine\\DBAL\\Connection',
          'lockmode' => 'Doctrine\\DBAL\\LockMode',
          'ormexception' => 'Doctrine\\ORM\\Exception\\ORMException',
          'abstracthydrator' => 'Doctrine\\ORM\\Internal\\Hydration\\AbstractHydrator',
          'classmetadatafactory' => 'Doctrine\\ORM\\Mapping\\ClassMetadataFactory',
          'proxyfactory' => 'Doctrine\\ORM\\Proxy\\ProxyFactory',
          'expr' => 'Doctrine\\ORM\\Query\\Expr',
          'filtercollection' => 'Doctrine\\ORM\\Query\\FilterCollection',
          'resultsetmapping' => 'Doctrine\\ORM\\Query\\ResultSetMapping',
          'objectmanager' => 'Doctrine\\Persistence\\ObjectManager',
        ),
         'className' => 'Doctrine\\ORM\\EntityManagerInterface',
         'functionName' => 'createNativeQuery',
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
    '943973b7a97c3cc9cd2916c6cb8c7d1c' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Create a QueryBuilder instance
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\ORM',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'eventmanager' => 'Doctrine\\Common\\EventManager',
          'connection' => 'Doctrine\\DBAL\\Connection',
          'lockmode' => 'Doctrine\\DBAL\\LockMode',
          'ormexception' => 'Doctrine\\ORM\\Exception\\ORMException',
          'abstracthydrator' => 'Doctrine\\ORM\\Internal\\Hydration\\AbstractHydrator',
          'classmetadatafactory' => 'Doctrine\\ORM\\Mapping\\ClassMetadataFactory',
          'proxyfactory' => 'Doctrine\\ORM\\Proxy\\ProxyFactory',
          'expr' => 'Doctrine\\ORM\\Query\\Expr',
          'filtercollection' => 'Doctrine\\ORM\\Query\\FilterCollection',
          'resultsetmapping' => 'Doctrine\\ORM\\Query\\ResultSetMapping',
          'objectmanager' => 'Doctrine\\Persistence\\ObjectManager',
        ),
         'className' => 'Doctrine\\ORM\\EntityManagerInterface',
         'functionName' => 'createQueryBuilder',
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
    '33146e2e1e7c57c6b42d4190abb94a18' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Finds an Entity by its identifier.
     *
     * @param string            $className   The class name of the entity to find.
     * @param mixed             $id          The identity of the entity to find.
     * @param LockMode|int|null $lockMode    One of the \\Doctrine\\DBAL\\LockMode::* constants
     *                                       or NULL if no specific lock mode should be used
     *                                       during the search.
     * @param int|null          $lockVersion The version of the entity to find when using
     *                                       optimistic locking.
     * @phpstan-param class-string<T> $className
     * @phpstan-param LockMode::*|null $lockMode
     *
     * @return object|null The entity instance or NULL if the entity can not be found.
     * @phpstan-return T|null
     *
     * @throws OptimisticLockException
     * @throws ORMInvalidArgumentException
     * @throws TransactionRequiredException
     * @throws ORMException
     *
     * @template T of object
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\ORM',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'eventmanager' => 'Doctrine\\Common\\EventManager',
          'connection' => 'Doctrine\\DBAL\\Connection',
          'lockmode' => 'Doctrine\\DBAL\\LockMode',
          'ormexception' => 'Doctrine\\ORM\\Exception\\ORMException',
          'abstracthydrator' => 'Doctrine\\ORM\\Internal\\Hydration\\AbstractHydrator',
          'classmetadatafactory' => 'Doctrine\\ORM\\Mapping\\ClassMetadataFactory',
          'proxyfactory' => 'Doctrine\\ORM\\Proxy\\ProxyFactory',
          'expr' => 'Doctrine\\ORM\\Query\\Expr',
          'filtercollection' => 'Doctrine\\ORM\\Query\\FilterCollection',
          'resultsetmapping' => 'Doctrine\\ORM\\Query\\ResultSetMapping',
          'objectmanager' => 'Doctrine\\Persistence\\ObjectManager',
        ),
         'className' => 'Doctrine\\ORM\\EntityManagerInterface',
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
    '900e19ee21570d66f73b0c7d03232b59' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Refreshes the persistent state of an object from the database,
     * overriding any local changes that have not yet been persisted.
     *
     * @param LockMode|int|null $lockMode One of the \\Doctrine\\DBAL\\LockMode::* constants
     *                                    or NULL if no specific lock mode should be used
     *                                    during the search.
     * @phpstan-param LockMode::*|null $lockMode
     *
     * @throws ORMInvalidArgumentException
     * @throws ORMException
     * @throws TransactionRequiredException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\ORM',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'eventmanager' => 'Doctrine\\Common\\EventManager',
          'connection' => 'Doctrine\\DBAL\\Connection',
          'lockmode' => 'Doctrine\\DBAL\\LockMode',
          'ormexception' => 'Doctrine\\ORM\\Exception\\ORMException',
          'abstracthydrator' => 'Doctrine\\ORM\\Internal\\Hydration\\AbstractHydrator',
          'classmetadatafactory' => 'Doctrine\\ORM\\Mapping\\ClassMetadataFactory',
          'proxyfactory' => 'Doctrine\\ORM\\Proxy\\ProxyFactory',
          'expr' => 'Doctrine\\ORM\\Query\\Expr',
          'filtercollection' => 'Doctrine\\ORM\\Query\\FilterCollection',
          'resultsetmapping' => 'Doctrine\\ORM\\Query\\ResultSetMapping',
          'objectmanager' => 'Doctrine\\Persistence\\ObjectManager',
        ),
         'className' => 'Doctrine\\ORM\\EntityManagerInterface',
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
    'ca430eb334afc22d83d0e428d5ba829c' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets a reference to the entity identified by the given type and identifier
     * without actually loading it, if the entity is not yet loaded.
     *
     * @param class-string<T> $entityName The name of the entity type.
     * @param mixed           $id         The entity identifier.
     *
     * @return T|null The entity reference.
     *
     * @throws ORMException
     *
     * @template T of object
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\ORM',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'eventmanager' => 'Doctrine\\Common\\EventManager',
          'connection' => 'Doctrine\\DBAL\\Connection',
          'lockmode' => 'Doctrine\\DBAL\\LockMode',
          'ormexception' => 'Doctrine\\ORM\\Exception\\ORMException',
          'abstracthydrator' => 'Doctrine\\ORM\\Internal\\Hydration\\AbstractHydrator',
          'classmetadatafactory' => 'Doctrine\\ORM\\Mapping\\ClassMetadataFactory',
          'proxyfactory' => 'Doctrine\\ORM\\Proxy\\ProxyFactory',
          'expr' => 'Doctrine\\ORM\\Query\\Expr',
          'filtercollection' => 'Doctrine\\ORM\\Query\\FilterCollection',
          'resultsetmapping' => 'Doctrine\\ORM\\Query\\ResultSetMapping',
          'objectmanager' => 'Doctrine\\Persistence\\ObjectManager',
        ),
         'className' => 'Doctrine\\ORM\\EntityManagerInterface',
         'functionName' => 'getReference',
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
    'd80e63af0eb486cbd95fc79f8ebaacca' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Closes the EntityManager. All entities that are currently managed
     * by this EntityManager become detached. The EntityManager may no longer
     * be used after it is closed.
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\ORM',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'eventmanager' => 'Doctrine\\Common\\EventManager',
          'connection' => 'Doctrine\\DBAL\\Connection',
          'lockmode' => 'Doctrine\\DBAL\\LockMode',
          'ormexception' => 'Doctrine\\ORM\\Exception\\ORMException',
          'abstracthydrator' => 'Doctrine\\ORM\\Internal\\Hydration\\AbstractHydrator',
          'classmetadatafactory' => 'Doctrine\\ORM\\Mapping\\ClassMetadataFactory',
          'proxyfactory' => 'Doctrine\\ORM\\Proxy\\ProxyFactory',
          'expr' => 'Doctrine\\ORM\\Query\\Expr',
          'filtercollection' => 'Doctrine\\ORM\\Query\\FilterCollection',
          'resultsetmapping' => 'Doctrine\\ORM\\Query\\ResultSetMapping',
          'objectmanager' => 'Doctrine\\Persistence\\ObjectManager',
        ),
         'className' => 'Doctrine\\ORM\\EntityManagerInterface',
         'functionName' => 'close',
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
    '3edf14efd7241f41e5fd4d3404a33ff0' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Acquire a lock on the given entity.
     *
     * @phpstan-param LockMode::* $lockMode
     *
     * @throws OptimisticLockException
     * @throws PessimisticLockException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\ORM',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'eventmanager' => 'Doctrine\\Common\\EventManager',
          'connection' => 'Doctrine\\DBAL\\Connection',
          'lockmode' => 'Doctrine\\DBAL\\LockMode',
          'ormexception' => 'Doctrine\\ORM\\Exception\\ORMException',
          'abstracthydrator' => 'Doctrine\\ORM\\Internal\\Hydration\\AbstractHydrator',
          'classmetadatafactory' => 'Doctrine\\ORM\\Mapping\\ClassMetadataFactory',
          'proxyfactory' => 'Doctrine\\ORM\\Proxy\\ProxyFactory',
          'expr' => 'Doctrine\\ORM\\Query\\Expr',
          'filtercollection' => 'Doctrine\\ORM\\Query\\FilterCollection',
          'resultsetmapping' => 'Doctrine\\ORM\\Query\\ResultSetMapping',
          'objectmanager' => 'Doctrine\\Persistence\\ObjectManager',
        ),
         'className' => 'Doctrine\\ORM\\EntityManagerInterface',
         'functionName' => 'lock',
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
    'beb33ba2ebc1bc3b9d02ea9dc74bb0bf' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the EventManager used by the EntityManager.
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\ORM',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'eventmanager' => 'Doctrine\\Common\\EventManager',
          'connection' => 'Doctrine\\DBAL\\Connection',
          'lockmode' => 'Doctrine\\DBAL\\LockMode',
          'ormexception' => 'Doctrine\\ORM\\Exception\\ORMException',
          'abstracthydrator' => 'Doctrine\\ORM\\Internal\\Hydration\\AbstractHydrator',
          'classmetadatafactory' => 'Doctrine\\ORM\\Mapping\\ClassMetadataFactory',
          'proxyfactory' => 'Doctrine\\ORM\\Proxy\\ProxyFactory',
          'expr' => 'Doctrine\\ORM\\Query\\Expr',
          'filtercollection' => 'Doctrine\\ORM\\Query\\FilterCollection',
          'resultsetmapping' => 'Doctrine\\ORM\\Query\\ResultSetMapping',
          'objectmanager' => 'Doctrine\\Persistence\\ObjectManager',
        ),
         'className' => 'Doctrine\\ORM\\EntityManagerInterface',
         'functionName' => 'getEventManager',
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
    '150a8fe152bd1da48993ed64cb8da371' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the Configuration used by the EntityManager.
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\ORM',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'eventmanager' => 'Doctrine\\Common\\EventManager',
          'connection' => 'Doctrine\\DBAL\\Connection',
          'lockmode' => 'Doctrine\\DBAL\\LockMode',
          'ormexception' => 'Doctrine\\ORM\\Exception\\ORMException',
          'abstracthydrator' => 'Doctrine\\ORM\\Internal\\Hydration\\AbstractHydrator',
          'classmetadatafactory' => 'Doctrine\\ORM\\Mapping\\ClassMetadataFactory',
          'proxyfactory' => 'Doctrine\\ORM\\Proxy\\ProxyFactory',
          'expr' => 'Doctrine\\ORM\\Query\\Expr',
          'filtercollection' => 'Doctrine\\ORM\\Query\\FilterCollection',
          'resultsetmapping' => 'Doctrine\\ORM\\Query\\ResultSetMapping',
          'objectmanager' => 'Doctrine\\Persistence\\ObjectManager',
        ),
         'className' => 'Doctrine\\ORM\\EntityManagerInterface',
         'functionName' => 'getConfiguration',
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
    'a9525405b48337daf1f6d6892717475f' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Check if the Entity manager is open or closed.
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\ORM',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'eventmanager' => 'Doctrine\\Common\\EventManager',
          'connection' => 'Doctrine\\DBAL\\Connection',
          'lockmode' => 'Doctrine\\DBAL\\LockMode',
          'ormexception' => 'Doctrine\\ORM\\Exception\\ORMException',
          'abstracthydrator' => 'Doctrine\\ORM\\Internal\\Hydration\\AbstractHydrator',
          'classmetadatafactory' => 'Doctrine\\ORM\\Mapping\\ClassMetadataFactory',
          'proxyfactory' => 'Doctrine\\ORM\\Proxy\\ProxyFactory',
          'expr' => 'Doctrine\\ORM\\Query\\Expr',
          'filtercollection' => 'Doctrine\\ORM\\Query\\FilterCollection',
          'resultsetmapping' => 'Doctrine\\ORM\\Query\\ResultSetMapping',
          'objectmanager' => 'Doctrine\\Persistence\\ObjectManager',
        ),
         'className' => 'Doctrine\\ORM\\EntityManagerInterface',
         'functionName' => 'isOpen',
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
    '25f2157b86d1226a85ce499360b65d7d' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the UnitOfWork used by the EntityManager to coordinate operations.
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\ORM',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'eventmanager' => 'Doctrine\\Common\\EventManager',
          'connection' => 'Doctrine\\DBAL\\Connection',
          'lockmode' => 'Doctrine\\DBAL\\LockMode',
          'ormexception' => 'Doctrine\\ORM\\Exception\\ORMException',
          'abstracthydrator' => 'Doctrine\\ORM\\Internal\\Hydration\\AbstractHydrator',
          'classmetadatafactory' => 'Doctrine\\ORM\\Mapping\\ClassMetadataFactory',
          'proxyfactory' => 'Doctrine\\ORM\\Proxy\\ProxyFactory',
          'expr' => 'Doctrine\\ORM\\Query\\Expr',
          'filtercollection' => 'Doctrine\\ORM\\Query\\FilterCollection',
          'resultsetmapping' => 'Doctrine\\ORM\\Query\\ResultSetMapping',
          'objectmanager' => 'Doctrine\\Persistence\\ObjectManager',
        ),
         'className' => 'Doctrine\\ORM\\EntityManagerInterface',
         'functionName' => 'getUnitOfWork',
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
    '5636891c4601f7e1fd46a898f81de8e9' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Create a new instance for the given hydration mode.
     *
     * @phpstan-param string|AbstractQuery::HYDRATE_* $hydrationMode
     *
     * @throws ORMException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\ORM',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'eventmanager' => 'Doctrine\\Common\\EventManager',
          'connection' => 'Doctrine\\DBAL\\Connection',
          'lockmode' => 'Doctrine\\DBAL\\LockMode',
          'ormexception' => 'Doctrine\\ORM\\Exception\\ORMException',
          'abstracthydrator' => 'Doctrine\\ORM\\Internal\\Hydration\\AbstractHydrator',
          'classmetadatafactory' => 'Doctrine\\ORM\\Mapping\\ClassMetadataFactory',
          'proxyfactory' => 'Doctrine\\ORM\\Proxy\\ProxyFactory',
          'expr' => 'Doctrine\\ORM\\Query\\Expr',
          'filtercollection' => 'Doctrine\\ORM\\Query\\FilterCollection',
          'resultsetmapping' => 'Doctrine\\ORM\\Query\\ResultSetMapping',
          'objectmanager' => 'Doctrine\\Persistence\\ObjectManager',
        ),
         'className' => 'Doctrine\\ORM\\EntityManagerInterface',
         'functionName' => 'newHydrator',
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
    '795da79eaa8a324679e510c7a5ffb60c' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the proxy factory used by the EntityManager to create entity proxies.
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\ORM',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'eventmanager' => 'Doctrine\\Common\\EventManager',
          'connection' => 'Doctrine\\DBAL\\Connection',
          'lockmode' => 'Doctrine\\DBAL\\LockMode',
          'ormexception' => 'Doctrine\\ORM\\Exception\\ORMException',
          'abstracthydrator' => 'Doctrine\\ORM\\Internal\\Hydration\\AbstractHydrator',
          'classmetadatafactory' => 'Doctrine\\ORM\\Mapping\\ClassMetadataFactory',
          'proxyfactory' => 'Doctrine\\ORM\\Proxy\\ProxyFactory',
          'expr' => 'Doctrine\\ORM\\Query\\Expr',
          'filtercollection' => 'Doctrine\\ORM\\Query\\FilterCollection',
          'resultsetmapping' => 'Doctrine\\ORM\\Query\\ResultSetMapping',
          'objectmanager' => 'Doctrine\\Persistence\\ObjectManager',
        ),
         'className' => 'Doctrine\\ORM\\EntityManagerInterface',
         'functionName' => 'getProxyFactory',
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
    '527a4a72f77804b12796c6d185fc494d' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the enabled filters.
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\ORM',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'eventmanager' => 'Doctrine\\Common\\EventManager',
          'connection' => 'Doctrine\\DBAL\\Connection',
          'lockmode' => 'Doctrine\\DBAL\\LockMode',
          'ormexception' => 'Doctrine\\ORM\\Exception\\ORMException',
          'abstracthydrator' => 'Doctrine\\ORM\\Internal\\Hydration\\AbstractHydrator',
          'classmetadatafactory' => 'Doctrine\\ORM\\Mapping\\ClassMetadataFactory',
          'proxyfactory' => 'Doctrine\\ORM\\Proxy\\ProxyFactory',
          'expr' => 'Doctrine\\ORM\\Query\\Expr',
          'filtercollection' => 'Doctrine\\ORM\\Query\\FilterCollection',
          'resultsetmapping' => 'Doctrine\\ORM\\Query\\ResultSetMapping',
          'objectmanager' => 'Doctrine\\Persistence\\ObjectManager',
        ),
         'className' => 'Doctrine\\ORM\\EntityManagerInterface',
         'functionName' => 'getFilters',
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
    'd789ac7c333d46cc74c63aa244a6d7f5' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks whether the state of the filter collection is clean.
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\ORM',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'eventmanager' => 'Doctrine\\Common\\EventManager',
          'connection' => 'Doctrine\\DBAL\\Connection',
          'lockmode' => 'Doctrine\\DBAL\\LockMode',
          'ormexception' => 'Doctrine\\ORM\\Exception\\ORMException',
          'abstracthydrator' => 'Doctrine\\ORM\\Internal\\Hydration\\AbstractHydrator',
          'classmetadatafactory' => 'Doctrine\\ORM\\Mapping\\ClassMetadataFactory',
          'proxyfactory' => 'Doctrine\\ORM\\Proxy\\ProxyFactory',
          'expr' => 'Doctrine\\ORM\\Query\\Expr',
          'filtercollection' => 'Doctrine\\ORM\\Query\\FilterCollection',
          'resultsetmapping' => 'Doctrine\\ORM\\Query\\ResultSetMapping',
          'objectmanager' => 'Doctrine\\Persistence\\ObjectManager',
        ),
         'className' => 'Doctrine\\ORM\\EntityManagerInterface',
         'functionName' => 'isFiltersStateClean',
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
    'e1fefe2fae22d66f060f00ae54e1352a' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks whether the Entity Manager has filters.
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\ORM',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'eventmanager' => 'Doctrine\\Common\\EventManager',
          'connection' => 'Doctrine\\DBAL\\Connection',
          'lockmode' => 'Doctrine\\DBAL\\LockMode',
          'ormexception' => 'Doctrine\\ORM\\Exception\\ORMException',
          'abstracthydrator' => 'Doctrine\\ORM\\Internal\\Hydration\\AbstractHydrator',
          'classmetadatafactory' => 'Doctrine\\ORM\\Mapping\\ClassMetadataFactory',
          'proxyfactory' => 'Doctrine\\ORM\\Proxy\\ProxyFactory',
          'expr' => 'Doctrine\\ORM\\Query\\Expr',
          'filtercollection' => 'Doctrine\\ORM\\Query\\FilterCollection',
          'resultsetmapping' => 'Doctrine\\ORM\\Query\\ResultSetMapping',
          'objectmanager' => 'Doctrine\\Persistence\\ObjectManager',
        ),
         'className' => 'Doctrine\\ORM\\EntityManagerInterface',
         'functionName' => 'hasFilters',
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
    'bdb14aaad2a95b47631c658582a9309f' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * {@inheritDoc}
     *
     * @param string|class-string<T> $className
     *
     * @phpstan-return ($className is class-string<T> ? Mapping\\ClassMetadata<T> : Mapping\\ClassMetadata<object>)
     *
     * @phpstan-template T of object
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Doctrine\\ORM',
         'uses' => 
        array (
          'datetimeinterface' => 'DateTimeInterface',
          'eventmanager' => 'Doctrine\\Common\\EventManager',
          'connection' => 'Doctrine\\DBAL\\Connection',
          'lockmode' => 'Doctrine\\DBAL\\LockMode',
          'ormexception' => 'Doctrine\\ORM\\Exception\\ORMException',
          'abstracthydrator' => 'Doctrine\\ORM\\Internal\\Hydration\\AbstractHydrator',
          'classmetadatafactory' => 'Doctrine\\ORM\\Mapping\\ClassMetadataFactory',
          'proxyfactory' => 'Doctrine\\ORM\\Proxy\\ProxyFactory',
          'expr' => 'Doctrine\\ORM\\Query\\Expr',
          'filtercollection' => 'Doctrine\\ORM\\Query\\FilterCollection',
          'resultsetmapping' => 'Doctrine\\ORM\\Query\\ResultSetMapping',
          'objectmanager' => 'Doctrine\\Persistence\\ObjectManager',
        ),
         'className' => 'Doctrine\\ORM\\EntityManagerInterface',
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
  ),
));