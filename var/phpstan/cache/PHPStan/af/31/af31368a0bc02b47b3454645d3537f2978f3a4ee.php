<?php declare(strict_types = 1);

return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/home/alfonso/projects/test-codex/src/Infrastructure/Persistence/Doctrine/Repository/CommentRepository.php-1760631374',
   'data' => 
  array (
    '8ca12c570feabf110a336db56b0e69a1' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var Comment|null $comment */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'App\\Infrastructure\\Persistence\\Doctrine\\Repository',
         'uses' => 
        array (
          'article' => 'App\\Domain\\Article\\Article',
          'comment' => 'App\\Domain\\Comment\\Comment',
          'commentrepositoryinterface' => 'App\\Domain\\Comment\\CommentRepositoryInterface',
          'entitymanagerinterface' => 'Doctrine\\ORM\\EntityManagerInterface',
          'objectrepository' => 'Doctrine\\Persistence\\ObjectRepository',
        ),
         'className' => 'App\\Infrastructure\\Persistence\\Doctrine\\Repository\\CommentRepository',
         'functionName' => 'findById',
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
    '796377c17b429f4eaabd78cafa3ac7ad' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var list<Comment> $comments */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'App\\Infrastructure\\Persistence\\Doctrine\\Repository',
         'uses' => 
        array (
          'article' => 'App\\Domain\\Article\\Article',
          'comment' => 'App\\Domain\\Comment\\Comment',
          'commentrepositoryinterface' => 'App\\Domain\\Comment\\CommentRepositoryInterface',
          'entitymanagerinterface' => 'Doctrine\\ORM\\EntityManagerInterface',
          'objectrepository' => 'Doctrine\\Persistence\\ObjectRepository',
        ),
         'className' => 'App\\Infrastructure\\Persistence\\Doctrine\\Repository\\CommentRepository',
         'functionName' => 'findForArticle',
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