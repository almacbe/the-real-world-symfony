<?php declare(strict_types = 1);

return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/home/alfonso/projects/test-codex/src/Infrastructure/Persistence/Doctrine/Repository/TagRepository.php-1760631379',
   'data' => 
  array (
    '69f6f809b3c81c33ae17adc10ca5fa84' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var Tag|null $tag */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'App\\Infrastructure\\Persistence\\Doctrine\\Repository',
         'uses' => 
        array (
          'tag' => 'App\\Domain\\Tag\\Tag',
          'tagrepositoryinterface' => 'App\\Domain\\Tag\\TagRepositoryInterface',
          'entitymanagerinterface' => 'Doctrine\\ORM\\EntityManagerInterface',
          'objectrepository' => 'Doctrine\\Persistence\\ObjectRepository',
        ),
         'className' => 'App\\Infrastructure\\Persistence\\Doctrine\\Repository\\TagRepository',
         'functionName' => 'findOneByName',
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
    'faccfdab2bb40b56b19cb8f306b94cab' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var list<array{name: string}> $result */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'App\\Infrastructure\\Persistence\\Doctrine\\Repository',
         'uses' => 
        array (
          'tag' => 'App\\Domain\\Tag\\Tag',
          'tagrepositoryinterface' => 'App\\Domain\\Tag\\TagRepositoryInterface',
          'entitymanagerinterface' => 'Doctrine\\ORM\\EntityManagerInterface',
          'objectrepository' => 'Doctrine\\Persistence\\ObjectRepository',
        ),
         'className' => 'App\\Infrastructure\\Persistence\\Doctrine\\Repository\\TagRepository',
         'functionName' => 'findAllNames',
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