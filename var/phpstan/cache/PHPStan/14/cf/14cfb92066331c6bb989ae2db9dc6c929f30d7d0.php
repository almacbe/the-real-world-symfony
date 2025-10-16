<?php declare(strict_types = 1);

return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/home/alfonso/projects/test-codex/src/Application/Article/ArticleService.php-1760631472',
   'data' => 
  array (
    'e4dbe1d38018f50c5a294961d5cd1566' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param array<int, mixed> $tagList
     *
     * @return list<Tag>
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'App\\Application\\Article',
         'uses' => 
        array (
          'forbiddenexception' => 'App\\Application\\Exception\\ForbiddenException',
          'notfoundexception' => 'App\\Application\\Exception\\NotFoundException',
          'validationexception' => 'App\\Application\\Exception\\ValidationException',
          'article' => 'App\\Domain\\Article\\Article',
          'articlerepositoryinterface' => 'App\\Domain\\Article\\ArticleRepositoryInterface',
          'tag' => 'App\\Domain\\Tag\\Tag',
          'tagrepositoryinterface' => 'App\\Domain\\Tag\\TagRepositoryInterface',
          'user' => 'App\\Domain\\User\\User',
          'userrepositoryinterface' => 'App\\Domain\\User\\UserRepositoryInterface',
          'slugifyinterface' => 'Cocur\\Slugify\\SlugifyInterface',
        ),
         'className' => 'App\\Application\\Article\\ArticleService',
         'functionName' => 'resolveTags',
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