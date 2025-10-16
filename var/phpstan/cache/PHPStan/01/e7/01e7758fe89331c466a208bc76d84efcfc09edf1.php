<?php declare(strict_types = 1);

return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/home/alfonso/projects/test-codex/vendor/symfony/framework-bundle/Kernel/MicroKernelTrait.php-1760628995',
   'data' => 
  array (
    '27f18756bded7cf10de0499c1015d7c7' => 
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
         'className' => 'Symfony\\Bundle\\FrameworkBundle\\Kernel\\MicroKernelTrait',
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
    'e27357a29d5fcce5ecf17a7c72d3ec7a' => 
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
         'className' => 'Symfony\\Bundle\\FrameworkBundle\\Kernel\\MicroKernelTrait',
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
    '22a36b2fd6a8a26c3f6044cf7fe8c980' => 
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
         'className' => 'Symfony\\Bundle\\FrameworkBundle\\Kernel\\MicroKernelTrait',
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
    '40aca6783cb1cb09f5e01b8ee314b508' => 
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
         'className' => 'Symfony\\Bundle\\FrameworkBundle\\Kernel\\MicroKernelTrait',
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
    '5d6045b8722071853f70ac59ecf65a78' => 
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
         'className' => 'Symfony\\Bundle\\FrameworkBundle\\Kernel\\MicroKernelTrait',
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
    '3839481d959d5d891553a9d38608c2d8' => 
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
         'className' => 'Symfony\\Bundle\\FrameworkBundle\\Kernel\\MicroKernelTrait',
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
    '71ab8275a2952e531a9a7e608d7cf71b' => 
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
         'className' => 'Symfony\\Bundle\\FrameworkBundle\\Kernel\\MicroKernelTrait',
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
    'd3c79d6a8c8dc04b465b796a138b0b05' => 
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
         'className' => 'Symfony\\Bundle\\FrameworkBundle\\Kernel\\MicroKernelTrait',
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