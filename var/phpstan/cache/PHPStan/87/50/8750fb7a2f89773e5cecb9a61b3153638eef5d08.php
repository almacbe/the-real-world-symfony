<?php declare(strict_types = 1);

return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/home/alfonso/projects/test-codex/vendor/symfony/security-core/Exception/AuthenticationException.php-1760629439',
   'data' => 
  array (
    'a1d7e229895697fa01732c012a4411cc' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * AuthenticationException is the base class for all authentication exceptions.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Alexander <iam.asm89@gmail.com>
 */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Security\\Core\\Exception',
         'uses' => 
        array (
          'withhttpstatus' => 'Symfony\\Component\\HttpKernel\\Attribute\\WithHttpStatus',
          'tokeninterface' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface',
        ),
         'className' => 'Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException',
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
    'c00fccb1daca735def2a21a33680d4da' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns all the necessary state of the object for serialization purposes.
     *
     * There is no need to serialize any entry, they should be returned as-is.
     * If you extend this method, keep in mind you MUST guarantee parent data is present in the state.
     * Here is an example of how to extend this method:
     * <code>
     *     public function __serialize(): array
     *     {
     *         return [$this->childAttribute, parent::__serialize()];
     *     }
     * </code>
     *
     * @see __unserialize()
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Security\\Core\\Exception',
         'uses' => 
        array (
          'withhttpstatus' => 'Symfony\\Component\\HttpKernel\\Attribute\\WithHttpStatus',
          'tokeninterface' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface',
        ),
         'className' => 'Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException',
         'functionName' => '__serialize',
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
    '9d5efb6372b066e5309dbf209c8d09ce' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Restores the object state from an array given by __serialize().
     *
     * There is no need to unserialize any entry in $data, they are already ready-to-use.
     * If you extend this method, keep in mind you MUST pass the parent data to its respective class.
     * Here is an example of how to extend this method:
     * <code>
     *     public function __unserialize(array $data): void
     *     {
     *         [$this->childAttribute, $parentData] = $data;
     *         parent::__unserialize($parentData);
     *     }
     * </code>
     *
     * @see __serialize()
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Security\\Core\\Exception',
         'uses' => 
        array (
          'withhttpstatus' => 'Symfony\\Component\\HttpKernel\\Attribute\\WithHttpStatus',
          'tokeninterface' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface',
        ),
         'className' => 'Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException',
         'functionName' => '__unserialize',
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
    '7939be4d2a2e1b2b3913917374e17618' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Message key to be used by the translation component.
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Security\\Core\\Exception',
         'uses' => 
        array (
          'withhttpstatus' => 'Symfony\\Component\\HttpKernel\\Attribute\\WithHttpStatus',
          'tokeninterface' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface',
        ),
         'className' => 'Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException',
         'functionName' => 'getMessageKey',
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
    'acb8ae3d5a8fb5b1bcc8936678053a19' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Message data to be used by the translation component.
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Security\\Core\\Exception',
         'uses' => 
        array (
          'withhttpstatus' => 'Symfony\\Component\\HttpKernel\\Attribute\\WithHttpStatus',
          'tokeninterface' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface',
        ),
         'className' => 'Symfony\\Component\\Security\\Core\\Exception\\AuthenticationException',
         'functionName' => 'getMessageData',
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