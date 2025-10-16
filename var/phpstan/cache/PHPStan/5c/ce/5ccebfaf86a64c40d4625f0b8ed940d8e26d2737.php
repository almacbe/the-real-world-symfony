<?php declare(strict_types = 1);

return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/home/alfonso/projects/test-codex/vendor/symfony/http-kernel/Kernel.php-1760628993',
   'data' => 
  array (
    '0b0d785d5aa7e1bfa98f3fdac0af4c76' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * The Kernel is the heart of the Symfony system.
 *
 * It manages an environment made of bundles.
 *
 * Environment names must always start with a letter and
 * they must only contain letters and numbers.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'configbuildergenerator' => 'Symfony\\Component\\Config\\Builder\\ConfigBuilderGenerator',
          'configcache' => 'Symfony\\Component\\Config\\ConfigCache',
          'delegatingloader' => 'Symfony\\Component\\Config\\Loader\\DelegatingLoader',
          'loaderresolver' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'removebuildparameterspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\RemoveBuildParametersPass',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'phpdumper' => 'Symfony\\Component\\DependencyInjection\\Dumper\\PhpDumper',
          'preloader' => 'Symfony\\Component\\DependencyInjection\\Dumper\\Preloader',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'closureloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\ClosureLoader',
          'directoryloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\DirectoryLoader',
          'globfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\GlobFileLoader',
          'inifileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\IniFileLoader',
          'phpfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader',
          'xmlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader',
          'yamlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\YamlFileLoader',
          'debugclassloader' => 'Symfony\\Component\\ErrorHandler\\DebugClassLoader',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
          'warmableinterface' => 'Symfony\\Component\\HttpKernel\\CacheWarmer\\WarmableInterface',
          'filelocator' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
          'mergeextensionconfigurationpass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\MergeExtensionConfigurationPass',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Kernel',
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
    '5b42cc9f02daaa9b2b0cfe0a74ec523a' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var array<string, BundleInterface>
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'configbuildergenerator' => 'Symfony\\Component\\Config\\Builder\\ConfigBuilderGenerator',
          'configcache' => 'Symfony\\Component\\Config\\ConfigCache',
          'delegatingloader' => 'Symfony\\Component\\Config\\Loader\\DelegatingLoader',
          'loaderresolver' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'removebuildparameterspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\RemoveBuildParametersPass',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'phpdumper' => 'Symfony\\Component\\DependencyInjection\\Dumper\\PhpDumper',
          'preloader' => 'Symfony\\Component\\DependencyInjection\\Dumper\\Preloader',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'closureloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\ClosureLoader',
          'directoryloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\DirectoryLoader',
          'globfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\GlobFileLoader',
          'inifileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\IniFileLoader',
          'phpfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader',
          'xmlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader',
          'yamlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\YamlFileLoader',
          'debugclassloader' => 'Symfony\\Component\\ErrorHandler\\DebugClassLoader',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
          'warmableinterface' => 'Symfony\\Component\\HttpKernel\\CacheWarmer\\WarmableInterface',
          'filelocator' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
          'mergeextensionconfigurationpass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\MergeExtensionConfigurationPass',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Kernel',
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
    'f29beab417b6cf8209b2fc9387194189' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @var array<string, bool>
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'configbuildergenerator' => 'Symfony\\Component\\Config\\Builder\\ConfigBuilderGenerator',
          'configcache' => 'Symfony\\Component\\Config\\ConfigCache',
          'delegatingloader' => 'Symfony\\Component\\Config\\Loader\\DelegatingLoader',
          'loaderresolver' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'removebuildparameterspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\RemoveBuildParametersPass',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'phpdumper' => 'Symfony\\Component\\DependencyInjection\\Dumper\\PhpDumper',
          'preloader' => 'Symfony\\Component\\DependencyInjection\\Dumper\\Preloader',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'closureloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\ClosureLoader',
          'directoryloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\DirectoryLoader',
          'globfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\GlobFileLoader',
          'inifileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\IniFileLoader',
          'phpfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader',
          'xmlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader',
          'yamlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\YamlFileLoader',
          'debugclassloader' => 'Symfony\\Component\\ErrorHandler\\DebugClassLoader',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
          'warmableinterface' => 'Symfony\\Component\\HttpKernel\\CacheWarmer\\WarmableInterface',
          'filelocator' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
          'mergeextensionconfigurationpass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\MergeExtensionConfigurationPass',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Kernel',
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
    '34fff38c12e15303eb845a53fecbb91c' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets an HTTP kernel from the container.
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'configbuildergenerator' => 'Symfony\\Component\\Config\\Builder\\ConfigBuilderGenerator',
          'configcache' => 'Symfony\\Component\\Config\\ConfigCache',
          'delegatingloader' => 'Symfony\\Component\\Config\\Loader\\DelegatingLoader',
          'loaderresolver' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'removebuildparameterspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\RemoveBuildParametersPass',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'phpdumper' => 'Symfony\\Component\\DependencyInjection\\Dumper\\PhpDumper',
          'preloader' => 'Symfony\\Component\\DependencyInjection\\Dumper\\Preloader',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'closureloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\ClosureLoader',
          'directoryloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\DirectoryLoader',
          'globfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\GlobFileLoader',
          'inifileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\IniFileLoader',
          'phpfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader',
          'xmlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader',
          'yamlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\YamlFileLoader',
          'debugclassloader' => 'Symfony\\Component\\ErrorHandler\\DebugClassLoader',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
          'warmableinterface' => 'Symfony\\Component\\HttpKernel\\CacheWarmer\\WarmableInterface',
          'filelocator' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
          'mergeextensionconfigurationpass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\MergeExtensionConfigurationPass',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Kernel',
         'functionName' => 'getHttpKernel',
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
    '8077bc89742445cdd64104c55c6fa260' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the application root dir (path of the project\'s composer file).
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'configbuildergenerator' => 'Symfony\\Component\\Config\\Builder\\ConfigBuilderGenerator',
          'configcache' => 'Symfony\\Component\\Config\\ConfigCache',
          'delegatingloader' => 'Symfony\\Component\\Config\\Loader\\DelegatingLoader',
          'loaderresolver' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'removebuildparameterspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\RemoveBuildParametersPass',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'phpdumper' => 'Symfony\\Component\\DependencyInjection\\Dumper\\PhpDumper',
          'preloader' => 'Symfony\\Component\\DependencyInjection\\Dumper\\Preloader',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'closureloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\ClosureLoader',
          'directoryloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\DirectoryLoader',
          'globfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\GlobFileLoader',
          'inifileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\IniFileLoader',
          'phpfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader',
          'xmlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader',
          'yamlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\YamlFileLoader',
          'debugclassloader' => 'Symfony\\Component\\ErrorHandler\\DebugClassLoader',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
          'warmableinterface' => 'Symfony\\Component\\HttpKernel\\CacheWarmer\\WarmableInterface',
          'filelocator' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
          'mergeextensionconfigurationpass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\MergeExtensionConfigurationPass',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Kernel',
         'functionName' => 'getProjectDir',
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
    '7002fc166f4ced59674fb63945f53bb2' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @internal
     *
     * @deprecated since Symfony 7.1, to be removed in 8.0
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'configbuildergenerator' => 'Symfony\\Component\\Config\\Builder\\ConfigBuilderGenerator',
          'configcache' => 'Symfony\\Component\\Config\\ConfigCache',
          'delegatingloader' => 'Symfony\\Component\\Config\\Loader\\DelegatingLoader',
          'loaderresolver' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'removebuildparameterspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\RemoveBuildParametersPass',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'phpdumper' => 'Symfony\\Component\\DependencyInjection\\Dumper\\PhpDumper',
          'preloader' => 'Symfony\\Component\\DependencyInjection\\Dumper\\Preloader',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'closureloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\ClosureLoader',
          'directoryloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\DirectoryLoader',
          'globfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\GlobFileLoader',
          'inifileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\IniFileLoader',
          'phpfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader',
          'xmlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader',
          'yamlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\YamlFileLoader',
          'debugclassloader' => 'Symfony\\Component\\ErrorHandler\\DebugClassLoader',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
          'warmableinterface' => 'Symfony\\Component\\HttpKernel\\CacheWarmer\\WarmableInterface',
          'filelocator' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
          'mergeextensionconfigurationpass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\MergeExtensionConfigurationPass',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Kernel',
         'functionName' => 'setAnnotatedClassCache',
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
    '1364ab6b32e690a3dc1494fb4279dba9' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the patterns defining the classes to parse and cache for annotations.
     *
     * @return string[]
     *
     * @deprecated since Symfony 7.1, to be removed in 8.0
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'configbuildergenerator' => 'Symfony\\Component\\Config\\Builder\\ConfigBuilderGenerator',
          'configcache' => 'Symfony\\Component\\Config\\ConfigCache',
          'delegatingloader' => 'Symfony\\Component\\Config\\Loader\\DelegatingLoader',
          'loaderresolver' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'removebuildparameterspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\RemoveBuildParametersPass',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'phpdumper' => 'Symfony\\Component\\DependencyInjection\\Dumper\\PhpDumper',
          'preloader' => 'Symfony\\Component\\DependencyInjection\\Dumper\\Preloader',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'closureloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\ClosureLoader',
          'directoryloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\DirectoryLoader',
          'globfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\GlobFileLoader',
          'inifileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\IniFileLoader',
          'phpfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader',
          'xmlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader',
          'yamlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\YamlFileLoader',
          'debugclassloader' => 'Symfony\\Component\\ErrorHandler\\DebugClassLoader',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
          'warmableinterface' => 'Symfony\\Component\\HttpKernel\\CacheWarmer\\WarmableInterface',
          'filelocator' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
          'mergeextensionconfigurationpass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\MergeExtensionConfigurationPass',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Kernel',
         'functionName' => 'getAnnotatedClassesToCompile',
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
    'de13e49499ccd2eda8660d8e4004e2b1' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Initializes bundles.
     *
     * @throws \\LogicException if two bundles share a common name
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'configbuildergenerator' => 'Symfony\\Component\\Config\\Builder\\ConfigBuilderGenerator',
          'configcache' => 'Symfony\\Component\\Config\\ConfigCache',
          'delegatingloader' => 'Symfony\\Component\\Config\\Loader\\DelegatingLoader',
          'loaderresolver' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'removebuildparameterspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\RemoveBuildParametersPass',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'phpdumper' => 'Symfony\\Component\\DependencyInjection\\Dumper\\PhpDumper',
          'preloader' => 'Symfony\\Component\\DependencyInjection\\Dumper\\Preloader',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'closureloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\ClosureLoader',
          'directoryloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\DirectoryLoader',
          'globfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\GlobFileLoader',
          'inifileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\IniFileLoader',
          'phpfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader',
          'xmlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader',
          'yamlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\YamlFileLoader',
          'debugclassloader' => 'Symfony\\Component\\ErrorHandler\\DebugClassLoader',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
          'warmableinterface' => 'Symfony\\Component\\HttpKernel\\CacheWarmer\\WarmableInterface',
          'filelocator' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
          'mergeextensionconfigurationpass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\MergeExtensionConfigurationPass',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Kernel',
         'functionName' => 'initializeBundles',
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
    '5d8543823ba51b638359d8de29cb9067' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * The extension point similar to the Bundle::build() method.
     *
     * Use this method to register compiler passes and manipulate the container during the building process.
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'configbuildergenerator' => 'Symfony\\Component\\Config\\Builder\\ConfigBuilderGenerator',
          'configcache' => 'Symfony\\Component\\Config\\ConfigCache',
          'delegatingloader' => 'Symfony\\Component\\Config\\Loader\\DelegatingLoader',
          'loaderresolver' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'removebuildparameterspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\RemoveBuildParametersPass',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'phpdumper' => 'Symfony\\Component\\DependencyInjection\\Dumper\\PhpDumper',
          'preloader' => 'Symfony\\Component\\DependencyInjection\\Dumper\\Preloader',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'closureloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\ClosureLoader',
          'directoryloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\DirectoryLoader',
          'globfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\GlobFileLoader',
          'inifileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\IniFileLoader',
          'phpfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader',
          'xmlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader',
          'yamlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\YamlFileLoader',
          'debugclassloader' => 'Symfony\\Component\\ErrorHandler\\DebugClassLoader',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
          'warmableinterface' => 'Symfony\\Component\\HttpKernel\\CacheWarmer\\WarmableInterface',
          'filelocator' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
          'mergeextensionconfigurationpass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\MergeExtensionConfigurationPass',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Kernel',
         'functionName' => 'build',
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
    'aff86411f7b630901f027ad28d826207' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the container class.
     *
     * @throws \\InvalidArgumentException If the generated classname is invalid
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'configbuildergenerator' => 'Symfony\\Component\\Config\\Builder\\ConfigBuilderGenerator',
          'configcache' => 'Symfony\\Component\\Config\\ConfigCache',
          'delegatingloader' => 'Symfony\\Component\\Config\\Loader\\DelegatingLoader',
          'loaderresolver' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'removebuildparameterspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\RemoveBuildParametersPass',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'phpdumper' => 'Symfony\\Component\\DependencyInjection\\Dumper\\PhpDumper',
          'preloader' => 'Symfony\\Component\\DependencyInjection\\Dumper\\Preloader',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'closureloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\ClosureLoader',
          'directoryloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\DirectoryLoader',
          'globfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\GlobFileLoader',
          'inifileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\IniFileLoader',
          'phpfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader',
          'xmlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader',
          'yamlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\YamlFileLoader',
          'debugclassloader' => 'Symfony\\Component\\ErrorHandler\\DebugClassLoader',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
          'warmableinterface' => 'Symfony\\Component\\HttpKernel\\CacheWarmer\\WarmableInterface',
          'filelocator' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
          'mergeextensionconfigurationpass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\MergeExtensionConfigurationPass',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Kernel',
         'functionName' => 'getContainerClass',
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
    'e6ab8a91d502896b46ea361efc3d1f99' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the container\'s base class.
     *
     * All names except Container must be fully qualified.
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'configbuildergenerator' => 'Symfony\\Component\\Config\\Builder\\ConfigBuilderGenerator',
          'configcache' => 'Symfony\\Component\\Config\\ConfigCache',
          'delegatingloader' => 'Symfony\\Component\\Config\\Loader\\DelegatingLoader',
          'loaderresolver' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'removebuildparameterspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\RemoveBuildParametersPass',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'phpdumper' => 'Symfony\\Component\\DependencyInjection\\Dumper\\PhpDumper',
          'preloader' => 'Symfony\\Component\\DependencyInjection\\Dumper\\Preloader',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'closureloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\ClosureLoader',
          'directoryloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\DirectoryLoader',
          'globfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\GlobFileLoader',
          'inifileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\IniFileLoader',
          'phpfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader',
          'xmlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader',
          'yamlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\YamlFileLoader',
          'debugclassloader' => 'Symfony\\Component\\ErrorHandler\\DebugClassLoader',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
          'warmableinterface' => 'Symfony\\Component\\HttpKernel\\CacheWarmer\\WarmableInterface',
          'filelocator' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
          'mergeextensionconfigurationpass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\MergeExtensionConfigurationPass',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Kernel',
         'functionName' => 'getContainerBaseClass',
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
    'cc62f4600e20e56ee84fb5d42d09ea95' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Initializes the service container.
     *
     * The built version of the service container is used when fresh, otherwise the
     * container is built.
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'configbuildergenerator' => 'Symfony\\Component\\Config\\Builder\\ConfigBuilderGenerator',
          'configcache' => 'Symfony\\Component\\Config\\ConfigCache',
          'delegatingloader' => 'Symfony\\Component\\Config\\Loader\\DelegatingLoader',
          'loaderresolver' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'removebuildparameterspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\RemoveBuildParametersPass',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'phpdumper' => 'Symfony\\Component\\DependencyInjection\\Dumper\\PhpDumper',
          'preloader' => 'Symfony\\Component\\DependencyInjection\\Dumper\\Preloader',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'closureloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\ClosureLoader',
          'directoryloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\DirectoryLoader',
          'globfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\GlobFileLoader',
          'inifileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\IniFileLoader',
          'phpfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader',
          'xmlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader',
          'yamlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\YamlFileLoader',
          'debugclassloader' => 'Symfony\\Component\\ErrorHandler\\DebugClassLoader',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
          'warmableinterface' => 'Symfony\\Component\\HttpKernel\\CacheWarmer\\WarmableInterface',
          'filelocator' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
          'mergeextensionconfigurationpass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\MergeExtensionConfigurationPass',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Kernel',
         'functionName' => 'initializeContainer',
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
    '3ad2ec72492f34cf8e5bb8f34cc43cad' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the kernel parameters.
     *
     * @return array<string, array|bool|string|int|float|\\UnitEnum|null>
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'configbuildergenerator' => 'Symfony\\Component\\Config\\Builder\\ConfigBuilderGenerator',
          'configcache' => 'Symfony\\Component\\Config\\ConfigCache',
          'delegatingloader' => 'Symfony\\Component\\Config\\Loader\\DelegatingLoader',
          'loaderresolver' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'removebuildparameterspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\RemoveBuildParametersPass',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'phpdumper' => 'Symfony\\Component\\DependencyInjection\\Dumper\\PhpDumper',
          'preloader' => 'Symfony\\Component\\DependencyInjection\\Dumper\\Preloader',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'closureloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\ClosureLoader',
          'directoryloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\DirectoryLoader',
          'globfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\GlobFileLoader',
          'inifileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\IniFileLoader',
          'phpfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader',
          'xmlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader',
          'yamlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\YamlFileLoader',
          'debugclassloader' => 'Symfony\\Component\\ErrorHandler\\DebugClassLoader',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
          'warmableinterface' => 'Symfony\\Component\\HttpKernel\\CacheWarmer\\WarmableInterface',
          'filelocator' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
          'mergeextensionconfigurationpass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\MergeExtensionConfigurationPass',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Kernel',
         'functionName' => 'getKernelParameters',
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
    'bbb26eba8635642dc9d291e38cff397e' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Builds the service container.
     *
     * @throws \\RuntimeException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'configbuildergenerator' => 'Symfony\\Component\\Config\\Builder\\ConfigBuilderGenerator',
          'configcache' => 'Symfony\\Component\\Config\\ConfigCache',
          'delegatingloader' => 'Symfony\\Component\\Config\\Loader\\DelegatingLoader',
          'loaderresolver' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'removebuildparameterspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\RemoveBuildParametersPass',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'phpdumper' => 'Symfony\\Component\\DependencyInjection\\Dumper\\PhpDumper',
          'preloader' => 'Symfony\\Component\\DependencyInjection\\Dumper\\Preloader',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'closureloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\ClosureLoader',
          'directoryloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\DirectoryLoader',
          'globfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\GlobFileLoader',
          'inifileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\IniFileLoader',
          'phpfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader',
          'xmlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader',
          'yamlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\YamlFileLoader',
          'debugclassloader' => 'Symfony\\Component\\ErrorHandler\\DebugClassLoader',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
          'warmableinterface' => 'Symfony\\Component\\HttpKernel\\CacheWarmer\\WarmableInterface',
          'filelocator' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
          'mergeextensionconfigurationpass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\MergeExtensionConfigurationPass',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Kernel',
         'functionName' => 'buildContainer',
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
    '18c083f734ef43a90e50338e18044f3c' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Prepares the ContainerBuilder before it is compiled.
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'configbuildergenerator' => 'Symfony\\Component\\Config\\Builder\\ConfigBuilderGenerator',
          'configcache' => 'Symfony\\Component\\Config\\ConfigCache',
          'delegatingloader' => 'Symfony\\Component\\Config\\Loader\\DelegatingLoader',
          'loaderresolver' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'removebuildparameterspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\RemoveBuildParametersPass',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'phpdumper' => 'Symfony\\Component\\DependencyInjection\\Dumper\\PhpDumper',
          'preloader' => 'Symfony\\Component\\DependencyInjection\\Dumper\\Preloader',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'closureloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\ClosureLoader',
          'directoryloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\DirectoryLoader',
          'globfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\GlobFileLoader',
          'inifileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\IniFileLoader',
          'phpfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader',
          'xmlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader',
          'yamlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\YamlFileLoader',
          'debugclassloader' => 'Symfony\\Component\\ErrorHandler\\DebugClassLoader',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
          'warmableinterface' => 'Symfony\\Component\\HttpKernel\\CacheWarmer\\WarmableInterface',
          'filelocator' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
          'mergeextensionconfigurationpass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\MergeExtensionConfigurationPass',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Kernel',
         'functionName' => 'prepareContainer',
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
    '74437767538b70ad9991cdc0bfa95074' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets a new ContainerBuilder instance used to build the service container.
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'configbuildergenerator' => 'Symfony\\Component\\Config\\Builder\\ConfigBuilderGenerator',
          'configcache' => 'Symfony\\Component\\Config\\ConfigCache',
          'delegatingloader' => 'Symfony\\Component\\Config\\Loader\\DelegatingLoader',
          'loaderresolver' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'removebuildparameterspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\RemoveBuildParametersPass',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'phpdumper' => 'Symfony\\Component\\DependencyInjection\\Dumper\\PhpDumper',
          'preloader' => 'Symfony\\Component\\DependencyInjection\\Dumper\\Preloader',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'closureloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\ClosureLoader',
          'directoryloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\DirectoryLoader',
          'globfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\GlobFileLoader',
          'inifileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\IniFileLoader',
          'phpfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader',
          'xmlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader',
          'yamlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\YamlFileLoader',
          'debugclassloader' => 'Symfony\\Component\\ErrorHandler\\DebugClassLoader',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
          'warmableinterface' => 'Symfony\\Component\\HttpKernel\\CacheWarmer\\WarmableInterface',
          'filelocator' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
          'mergeextensionconfigurationpass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\MergeExtensionConfigurationPass',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Kernel',
         'functionName' => 'getContainerBuilder',
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
    '5a9499086c470206929756e476daf020' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Dumps the service container to PHP code in the cache.
     *
     * @param string $class     The name of the class to generate
     * @param string $baseClass The name of the container\'s base class
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'configbuildergenerator' => 'Symfony\\Component\\Config\\Builder\\ConfigBuilderGenerator',
          'configcache' => 'Symfony\\Component\\Config\\ConfigCache',
          'delegatingloader' => 'Symfony\\Component\\Config\\Loader\\DelegatingLoader',
          'loaderresolver' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'removebuildparameterspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\RemoveBuildParametersPass',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'phpdumper' => 'Symfony\\Component\\DependencyInjection\\Dumper\\PhpDumper',
          'preloader' => 'Symfony\\Component\\DependencyInjection\\Dumper\\Preloader',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'closureloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\ClosureLoader',
          'directoryloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\DirectoryLoader',
          'globfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\GlobFileLoader',
          'inifileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\IniFileLoader',
          'phpfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader',
          'xmlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader',
          'yamlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\YamlFileLoader',
          'debugclassloader' => 'Symfony\\Component\\ErrorHandler\\DebugClassLoader',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
          'warmableinterface' => 'Symfony\\Component\\HttpKernel\\CacheWarmer\\WarmableInterface',
          'filelocator' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
          'mergeextensionconfigurationpass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\MergeExtensionConfigurationPass',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Kernel',
         'functionName' => 'dumpContainer',
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
    'dcadc220dba90f78d332fd24d4476207' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a loader for the container.
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'configbuildergenerator' => 'Symfony\\Component\\Config\\Builder\\ConfigBuilderGenerator',
          'configcache' => 'Symfony\\Component\\Config\\ConfigCache',
          'delegatingloader' => 'Symfony\\Component\\Config\\Loader\\DelegatingLoader',
          'loaderresolver' => 'Symfony\\Component\\Config\\Loader\\LoaderResolver',
          'compilerpassinterface' => 'Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface',
          'passconfig' => 'Symfony\\Component\\DependencyInjection\\Compiler\\PassConfig',
          'removebuildparameterspass' => 'Symfony\\Component\\DependencyInjection\\Compiler\\RemoveBuildParametersPass',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'phpdumper' => 'Symfony\\Component\\DependencyInjection\\Dumper\\PhpDumper',
          'preloader' => 'Symfony\\Component\\DependencyInjection\\Dumper\\Preloader',
          'extensioninterface' => 'Symfony\\Component\\DependencyInjection\\Extension\\ExtensionInterface',
          'closureloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\ClosureLoader',
          'directoryloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\DirectoryLoader',
          'globfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\GlobFileLoader',
          'inifileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\IniFileLoader',
          'phpfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader',
          'xmlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\XmlFileLoader',
          'yamlfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\YamlFileLoader',
          'debugclassloader' => 'Symfony\\Component\\ErrorHandler\\DebugClassLoader',
          'filesystem' => 'Symfony\\Component\\Filesystem\\Filesystem',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
          'warmableinterface' => 'Symfony\\Component\\HttpKernel\\CacheWarmer\\WarmableInterface',
          'filelocator' => 'Symfony\\Component\\HttpKernel\\Config\\FileLocator',
          'mergeextensionconfigurationpass' => 'Symfony\\Component\\HttpKernel\\DependencyInjection\\MergeExtensionConfigurationPass',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\Kernel',
         'functionName' => 'getContainerLoader',
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