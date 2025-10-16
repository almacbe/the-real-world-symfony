<?php declare(strict_types = 1);

return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/home/alfonso/projects/test-codex/src/Kernel.php-1760631048,/home/alfonso/projects/test-codex/vendor/symfony/framework-bundle/Kernel/MicroKernelTrait.php-1760628995',
   'data' => 
  array (
    '04d7c5cfd98d2629c1686a4646f92609' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * A Kernel that provides configuration hooks.
 *
 * @author Ryan Weaver <ryan@knpuniversity.com>
 * @author Fabien Potencier <fabien@symfony.com>
 */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Bundle\\FrameworkBundle\\Kernel',
         'uses' => 
        array (
          'frameworkbundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
          'loaderinterface' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'abstractconfigurator' => 'Symfony\\Component\\DependencyInjection\\Loader\\Configurator\\AbstractConfigurator',
          'containerconfigurator' => 'Symfony\\Component\\DependencyInjection\\Loader\\Configurator\\ContainerConfigurator',
          'containerphpfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'routingconfigurator' => 'Symfony\\Component\\Routing\\Loader\\Configurator\\RoutingConfigurator',
          'routingphpfileloader' => 'Symfony\\Component\\Routing\\Loader\\PhpFileLoader',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
        ),
         'className' => 'App\\Kernel',
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
    'faba6167929d01ddf399afee2b5612a3' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Configures the container.
     *
     * You can register extensions:
     *
     *     $container->extension(\'framework\', [
     *         \'secret\' => \'%secret%\'
     *     ]);
     *
     * Or services:
     *
     *     $container->services()->set(\'halloween\', \'FooBundle\\HalloweenProvider\');
     *
     * Or parameters:
     *
     *     $container->parameters()->set(\'halloween\', \'lot of fun\');
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Bundle\\FrameworkBundle\\Kernel',
         'uses' => 
        array (
          'frameworkbundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
          'loaderinterface' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'abstractconfigurator' => 'Symfony\\Component\\DependencyInjection\\Loader\\Configurator\\AbstractConfigurator',
          'containerconfigurator' => 'Symfony\\Component\\DependencyInjection\\Loader\\Configurator\\ContainerConfigurator',
          'containerphpfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'routingconfigurator' => 'Symfony\\Component\\Routing\\Loader\\Configurator\\RoutingConfigurator',
          'routingphpfileloader' => 'Symfony\\Component\\Routing\\Loader\\PhpFileLoader',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
        ),
         'className' => 'App\\Kernel',
         'functionName' => 'configureContainer',
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
    '0a15a7b19faf2a76570568b9a8f55c10' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Adds or imports routes into your application.
     *
     *     $routes->import($this->getConfigDir().\'/*.{yaml,php}\');
     *     $routes
     *         ->add(\'admin_dashboard\', \'/admin\')
     *         ->controller(\'App\\Controller\\AdminController::dashboard\')
     *     ;
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Bundle\\FrameworkBundle\\Kernel',
         'uses' => 
        array (
          'frameworkbundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
          'loaderinterface' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'abstractconfigurator' => 'Symfony\\Component\\DependencyInjection\\Loader\\Configurator\\AbstractConfigurator',
          'containerconfigurator' => 'Symfony\\Component\\DependencyInjection\\Loader\\Configurator\\ContainerConfigurator',
          'containerphpfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'routingconfigurator' => 'Symfony\\Component\\Routing\\Loader\\Configurator\\RoutingConfigurator',
          'routingphpfileloader' => 'Symfony\\Component\\Routing\\Loader\\PhpFileLoader',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
        ),
         'className' => 'App\\Kernel',
         'functionName' => 'configureRoutes',
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
    'b188fb2364fa7d0690fd06f41c393062' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the path to the configuration directory.
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Bundle\\FrameworkBundle\\Kernel',
         'uses' => 
        array (
          'frameworkbundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
          'loaderinterface' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'abstractconfigurator' => 'Symfony\\Component\\DependencyInjection\\Loader\\Configurator\\AbstractConfigurator',
          'containerconfigurator' => 'Symfony\\Component\\DependencyInjection\\Loader\\Configurator\\ContainerConfigurator',
          'containerphpfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'routingconfigurator' => 'Symfony\\Component\\Routing\\Loader\\Configurator\\RoutingConfigurator',
          'routingphpfileloader' => 'Symfony\\Component\\Routing\\Loader\\PhpFileLoader',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
        ),
         'className' => 'App\\Kernel',
         'functionName' => 'getConfigDir',
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
    '840d650e7535593d63ca7654a249140d' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Gets the path to the bundles configuration file.
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Bundle\\FrameworkBundle\\Kernel',
         'uses' => 
        array (
          'frameworkbundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
          'loaderinterface' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'abstractconfigurator' => 'Symfony\\Component\\DependencyInjection\\Loader\\Configurator\\AbstractConfigurator',
          'containerconfigurator' => 'Symfony\\Component\\DependencyInjection\\Loader\\Configurator\\ContainerConfigurator',
          'containerphpfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'routingconfigurator' => 'Symfony\\Component\\Routing\\Loader\\Configurator\\RoutingConfigurator',
          'routingphpfileloader' => 'Symfony\\Component\\Routing\\Loader\\PhpFileLoader',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
        ),
         'className' => 'App\\Kernel',
         'functionName' => 'getBundlesPath',
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
    '45d082a939ebf91bd0da8626ed663f38' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var ContainerPhpFileLoader $kernelLoader */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Bundle\\FrameworkBundle\\Kernel',
         'uses' => 
        array (
          'frameworkbundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
          'loaderinterface' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'abstractconfigurator' => 'Symfony\\Component\\DependencyInjection\\Loader\\Configurator\\AbstractConfigurator',
          'containerconfigurator' => 'Symfony\\Component\\DependencyInjection\\Loader\\Configurator\\ContainerConfigurator',
          'containerphpfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'routingconfigurator' => 'Symfony\\Component\\Routing\\Loader\\Configurator\\RoutingConfigurator',
          'routingphpfileloader' => 'Symfony\\Component\\Routing\\Loader\\PhpFileLoader',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
        ),
         'className' => 'App\\Kernel',
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
    'd1da28e1415b31077d861a25263a03f9' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @internal
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Bundle\\FrameworkBundle\\Kernel',
         'uses' => 
        array (
          'frameworkbundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
          'loaderinterface' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'abstractconfigurator' => 'Symfony\\Component\\DependencyInjection\\Loader\\Configurator\\AbstractConfigurator',
          'containerconfigurator' => 'Symfony\\Component\\DependencyInjection\\Loader\\Configurator\\ContainerConfigurator',
          'containerphpfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'routingconfigurator' => 'Symfony\\Component\\Routing\\Loader\\Configurator\\RoutingConfigurator',
          'routingphpfileloader' => 'Symfony\\Component\\Routing\\Loader\\PhpFileLoader',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
        ),
         'className' => 'App\\Kernel',
         'functionName' => 'loadRoutes',
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
    'cd29b532cf246603f1849f8769d19ca2' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var RoutingPhpFileLoader $kernelLoader */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Bundle\\FrameworkBundle\\Kernel',
         'uses' => 
        array (
          'frameworkbundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
          'loaderinterface' => 'Symfony\\Component\\Config\\Loader\\LoaderInterface',
          'containerbuilder' => 'Symfony\\Component\\DependencyInjection\\ContainerBuilder',
          'abstractconfigurator' => 'Symfony\\Component\\DependencyInjection\\Loader\\Configurator\\AbstractConfigurator',
          'containerconfigurator' => 'Symfony\\Component\\DependencyInjection\\Loader\\Configurator\\ContainerConfigurator',
          'containerphpfileloader' => 'Symfony\\Component\\DependencyInjection\\Loader\\PhpFileLoader',
          'reference' => 'Symfony\\Component\\DependencyInjection\\Reference',
          'routingconfigurator' => 'Symfony\\Component\\Routing\\Loader\\Configurator\\RoutingConfigurator',
          'routingphpfileloader' => 'Symfony\\Component\\Routing\\Loader\\PhpFileLoader',
          'routecollection' => 'Symfony\\Component\\Routing\\RouteCollection',
        ),
         'className' => 'App\\Kernel',
         'functionName' => 'loadRoutes',
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