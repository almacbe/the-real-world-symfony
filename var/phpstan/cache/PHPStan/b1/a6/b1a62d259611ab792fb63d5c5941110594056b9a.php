<?php declare(strict_types = 1);

return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/home/alfonso/projects/test-codex/src/Application/Comment/CommentService.php-1760631512',
   'data' => 
  array (
    'f70a5503a00e2361a46f53343b924bd4' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @return list<Comment>
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'App\\Application\\Comment',
         'uses' => 
        array (
          'forbiddenexception' => 'App\\Application\\Exception\\ForbiddenException',
          'notfoundexception' => 'App\\Application\\Exception\\NotFoundException',
          'validationexception' => 'App\\Application\\Exception\\ValidationException',
          'article' => 'App\\Domain\\Article\\Article',
          'comment' => 'App\\Domain\\Comment\\Comment',
          'commentrepositoryinterface' => 'App\\Domain\\Comment\\CommentRepositoryInterface',
          'user' => 'App\\Domain\\User\\User',
        ),
         'className' => 'App\\Application\\Comment\\CommentService',
         'functionName' => 'listForArticle',
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