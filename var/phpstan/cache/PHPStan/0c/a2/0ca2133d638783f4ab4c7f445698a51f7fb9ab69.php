<?php declare(strict_types = 1);

return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/home/alfonso/projects/test-codex/vendor/symfony/http-kernel/KernelInterface.php-1760628993',
   'data' => 
  array (
    'add78c33baf46cfa8639efb8470b7034' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * The Kernel is the heart of the Symfony system.
 *
 * It manages an environment made of application kernel and bundles.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'loaderinterface' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\KernelInterface',
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
    '60e1ee1c6d4fc98f4d7bfe595f3ffffc' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns an array of bundles to register.
     *
     * @return iterable<mixed, BundleInterface>
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'loaderinterface' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\KernelInterface',
         'functionName' => 'registerBundles',
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
    '27301b3a9f1f307857999f4420ab3cae' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Loads the container configuration.
     *
     * @return void
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'loaderinterface' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\KernelInterface',
         'functionName' => 'registerContainerConfiguration',
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
    'beedfb958a2ed6ee6e1b415da391dd9a' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Boots the current kernel.
     *
     * @return void
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'loaderinterface' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\KernelInterface',
         'functionName' => 'boot',
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
    '50703e2a925d4f4be94f21e39ba7db4d' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Shutdowns the kernel.
     *
     * This method is mainly useful when doing functional testing.
     *
     * @return void
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'loaderinterface' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\KernelInterface',
         'functionName' => 'shutdown',
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
    'b13acfe7c82d846dca69b91ad2d19e7e' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the registered bundle instances.
     *
     * @return array<string, BundleInterface>
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'loaderinterface' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\KernelInterface',
         'functionName' => 'getBundles',
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
    '0fce449d81c4d95b685b476625c95c17' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns a bundle.
     *
     * @throws \\InvalidArgumentException when the bundle is not enabled
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'loaderinterface' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\KernelInterface',
         'functionName' => 'getBundle',
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
    '009ab4410e7cd0ee4d465b5cb3f370b2' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the file path for a given bundle resource.
     *
     * A Resource can be a file or a directory.
     *
     * The resource name must follow the following pattern:
     *
     *     "@BundleName/path/to/a/file.something"
     *
     * where BundleName is the name of the bundle
     * and the remaining part is the relative path in the bundle.
     *
     * @throws \\InvalidArgumentException if the file cannot be found or the name is not valid
     * @throws \\RuntimeException         if the name contains invalid/unsafe characters
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'loaderinterface' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\KernelInterface',
         'functionName' => 'locateResource',
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
    'e7296a4d6534ff28e2a98fdbcadbaac8' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the environment.
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'loaderinterface' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\KernelInterface',
         'functionName' => 'getEnvironment',
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
    '9645f2240dae44db2704da3c771b2db8' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks if debug mode is enabled.
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'loaderinterface' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\KernelInterface',
         'functionName' => 'isDebug',
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
    '9729d74e7c8e71cbec31c376e0cb8eb8' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the project dir (path of the project\'s composer file).
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'loaderinterface' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\KernelInterface',
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
    'c8f5ca62f36ec5b41a2b130b13ddaa22' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the current container.
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'loaderinterface' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\KernelInterface',
         'functionName' => 'getContainer',
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
    'd481fa2e4a4ebefbb9d68d5f7fa8f20f' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the request start time (not available if debug is disabled).
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'loaderinterface' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\KernelInterface',
         'functionName' => 'getStartTime',
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
    '20450cce90bd1bd12e95d21f990b117c' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the cache directory.
     *
     * Since Symfony 5.2, the cache directory should be used for caches that are written at runtime.
     * For caches and artifacts that can be warmed at compile-time and deployed as read-only,
     * use the new "build directory" returned by the {@see getBuildDir()} method.
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'loaderinterface' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\KernelInterface',
         'functionName' => 'getCacheDir',
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
    '3f3d99d8f9f98a323efedaca83126b0c' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the build directory.
     *
     * This directory should be used to store build artifacts, and can be read-only at runtime.
     * Caches written at runtime should be stored in the "cache directory" ({@see KernelInterface::getCacheDir()}).
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'loaderinterface' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\KernelInterface',
         'functionName' => 'getBuildDir',
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
    '09bec42141058945124cfe19527b1950' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the log directory.
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'loaderinterface' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\KernelInterface',
         'functionName' => 'getLogDir',
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
    'bfc4c3849d3c76429dd53ffc63bd2e11' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the charset of the application.
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\HttpKernel',
         'uses' => 
        array (
          'loaderinterface' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
          'containerinterface' => 'Symfony\\Component\\DependencyInjection\\ContainerInterface',
          'bundleinterface' => 'Symfony\\Component\\HttpKernel\\Bundle\\BundleInterface',
        ),
         'className' => 'Symfony\\Component\\HttpKernel\\KernelInterface',
         'functionName' => 'getCharset',
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