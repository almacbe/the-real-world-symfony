<?php declare(strict_types = 1);

return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/home/alfonso/projects/test-codex/vendor/symfony/security-bundle/Security.php-1760629440',
   'data' => 
  array (
    '6221d2aaf74ec9de670e17c54697ab09' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * Helper class for commonly-needed security tasks.
 *
 * @author Ryan Weaver <ryan@symfonycasts.com>
 * @author Robin Chalas <robin.chalas@gmail.com>
 * @author Arnaud Frézet <arnaud@larriereguichet.fr>
 *
 * @final
 */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Bundle\\SecurityBundle',
         'uses' => 
        array (
          'containerinterface' => 'Psr\\Container\\ContainerInterface',
          'firewallconfig' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallConfig',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'tokenstorageinterface' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface',
          'tokeninterface' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface',
          'accessdecision' => 'Symfony\\Component\\Security\\Core\\Authorization\\AccessDecision',
          'authorizationcheckerinterface' => 'Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface',
          'userauthorizationcheckerinterface' => 'Symfony\\Component\\Security\\Core\\Authorization\\UserAuthorizationCheckerInterface',
          'logicexception' => 'Symfony\\Component\\Security\\Core\\Exception\\LogicException',
          'logoutexception' => 'Symfony\\Component\\Security\\Core\\Exception\\LogoutException',
          'userinterface' => 'Symfony\\Component\\Security\\Core\\User\\UserInterface',
          'csrftoken' => 'Symfony\\Component\\Security\\Csrf\\CsrfToken',
          'authenticatorinterface' => 'Symfony\\Component\\Security\\Http\\Authenticator\\AuthenticatorInterface',
          'badgeinterface' => 'Symfony\\Component\\Security\\Http\\Authenticator\\Passport\\Badge\\BadgeInterface',
          'logoutevent' => 'Symfony\\Component\\Security\\Http\\Event\\LogoutEvent',
          'parameterbagutils' => 'Symfony\\Component\\Security\\Http\\ParameterBagUtils',
          'serviceproviderinterface' => 'Symfony\\Contracts\\Service\\ServiceProviderInterface',
        ),
         'className' => 'Symfony\\Bundle\\SecurityBundle\\Security',
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
    '9048034d88837a12451a0cfc07d95f8f' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks if the attributes are granted against the current authentication token and optionally supplied subject.
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Bundle\\SecurityBundle',
         'uses' => 
        array (
          'containerinterface' => 'Psr\\Container\\ContainerInterface',
          'firewallconfig' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallConfig',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'tokenstorageinterface' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface',
          'tokeninterface' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface',
          'accessdecision' => 'Symfony\\Component\\Security\\Core\\Authorization\\AccessDecision',
          'authorizationcheckerinterface' => 'Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface',
          'userauthorizationcheckerinterface' => 'Symfony\\Component\\Security\\Core\\Authorization\\UserAuthorizationCheckerInterface',
          'logicexception' => 'Symfony\\Component\\Security\\Core\\Exception\\LogicException',
          'logoutexception' => 'Symfony\\Component\\Security\\Core\\Exception\\LogoutException',
          'userinterface' => 'Symfony\\Component\\Security\\Core\\User\\UserInterface',
          'csrftoken' => 'Symfony\\Component\\Security\\Csrf\\CsrfToken',
          'authenticatorinterface' => 'Symfony\\Component\\Security\\Http\\Authenticator\\AuthenticatorInterface',
          'badgeinterface' => 'Symfony\\Component\\Security\\Http\\Authenticator\\Passport\\Badge\\BadgeInterface',
          'logoutevent' => 'Symfony\\Component\\Security\\Http\\Event\\LogoutEvent',
          'parameterbagutils' => 'Symfony\\Component\\Security\\Http\\ParameterBagUtils',
          'serviceproviderinterface' => 'Symfony\\Contracts\\Service\\ServiceProviderInterface',
        ),
         'className' => 'Symfony\\Bundle\\SecurityBundle\\Security',
         'functionName' => 'isGranted',
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
    'fa01df25b408600a5a813ab2ceb0c705' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Checks if the attribute is granted against the user and optionally supplied subject.
     *
     * This should be used over isGranted() when checking permissions against a user that is not currently logged in or while in a CLI context.
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Bundle\\SecurityBundle',
         'uses' => 
        array (
          'containerinterface' => 'Psr\\Container\\ContainerInterface',
          'firewallconfig' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallConfig',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'tokenstorageinterface' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface',
          'tokeninterface' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface',
          'accessdecision' => 'Symfony\\Component\\Security\\Core\\Authorization\\AccessDecision',
          'authorizationcheckerinterface' => 'Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface',
          'userauthorizationcheckerinterface' => 'Symfony\\Component\\Security\\Core\\Authorization\\UserAuthorizationCheckerInterface',
          'logicexception' => 'Symfony\\Component\\Security\\Core\\Exception\\LogicException',
          'logoutexception' => 'Symfony\\Component\\Security\\Core\\Exception\\LogoutException',
          'userinterface' => 'Symfony\\Component\\Security\\Core\\User\\UserInterface',
          'csrftoken' => 'Symfony\\Component\\Security\\Csrf\\CsrfToken',
          'authenticatorinterface' => 'Symfony\\Component\\Security\\Http\\Authenticator\\AuthenticatorInterface',
          'badgeinterface' => 'Symfony\\Component\\Security\\Http\\Authenticator\\Passport\\Badge\\BadgeInterface',
          'logoutevent' => 'Symfony\\Component\\Security\\Http\\Event\\LogoutEvent',
          'parameterbagutils' => 'Symfony\\Component\\Security\\Http\\ParameterBagUtils',
          'serviceproviderinterface' => 'Symfony\\Contracts\\Service\\ServiceProviderInterface',
        ),
         'className' => 'Symfony\\Bundle\\SecurityBundle\\Security',
         'functionName' => 'isGrantedForUser',
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
    'e14852f8aec3dc02c19b058ffb585e3a' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param UserInterface        $user              The user to authenticate
     * @param string|null          $authenticatorName The authenticator name (e.g. "form_login") or service id (e.g. SomeApiKeyAuthenticator::class) - required only if multiple authenticators are configured
     * @param string|null          $firewallName      The firewall name - required only if multiple firewalls are configured
     * @param BadgeInterface[]     $badges            Badges to add to the user\'s passport
     * @param array<string, mixed> $attributes        Attributes to add to the user\'s passport
     *
     * @return Response|null The authenticator success response if any
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Bundle\\SecurityBundle',
         'uses' => 
        array (
          'containerinterface' => 'Psr\\Container\\ContainerInterface',
          'firewallconfig' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallConfig',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'tokenstorageinterface' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface',
          'tokeninterface' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface',
          'accessdecision' => 'Symfony\\Component\\Security\\Core\\Authorization\\AccessDecision',
          'authorizationcheckerinterface' => 'Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface',
          'userauthorizationcheckerinterface' => 'Symfony\\Component\\Security\\Core\\Authorization\\UserAuthorizationCheckerInterface',
          'logicexception' => 'Symfony\\Component\\Security\\Core\\Exception\\LogicException',
          'logoutexception' => 'Symfony\\Component\\Security\\Core\\Exception\\LogoutException',
          'userinterface' => 'Symfony\\Component\\Security\\Core\\User\\UserInterface',
          'csrftoken' => 'Symfony\\Component\\Security\\Csrf\\CsrfToken',
          'authenticatorinterface' => 'Symfony\\Component\\Security\\Http\\Authenticator\\AuthenticatorInterface',
          'badgeinterface' => 'Symfony\\Component\\Security\\Http\\Authenticator\\Passport\\Badge\\BadgeInterface',
          'logoutevent' => 'Symfony\\Component\\Security\\Http\\Event\\LogoutEvent',
          'parameterbagutils' => 'Symfony\\Component\\Security\\Http\\ParameterBagUtils',
          'serviceproviderinterface' => 'Symfony\\Contracts\\Service\\ServiceProviderInterface',
        ),
         'className' => 'Symfony\\Bundle\\SecurityBundle\\Security',
         'functionName' => 'login',
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
    '719e20d1ab06fb999b07788dc1a88180' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Logout the current user by dispatching the LogoutEvent.
     *
     * @param bool $validateCsrfToken Whether to look for a valid CSRF token based on the `logout` listener configuration
     *
     * @return Response|null The LogoutEvent\'s Response if any
     *
     * @throws LogoutException When $validateCsrfToken is true and the CSRF token is not found or invalid
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Bundle\\SecurityBundle',
         'uses' => 
        array (
          'containerinterface' => 'Psr\\Container\\ContainerInterface',
          'firewallconfig' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallConfig',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'tokenstorageinterface' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface',
          'tokeninterface' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface',
          'accessdecision' => 'Symfony\\Component\\Security\\Core\\Authorization\\AccessDecision',
          'authorizationcheckerinterface' => 'Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface',
          'userauthorizationcheckerinterface' => 'Symfony\\Component\\Security\\Core\\Authorization\\UserAuthorizationCheckerInterface',
          'logicexception' => 'Symfony\\Component\\Security\\Core\\Exception\\LogicException',
          'logoutexception' => 'Symfony\\Component\\Security\\Core\\Exception\\LogoutException',
          'userinterface' => 'Symfony\\Component\\Security\\Core\\User\\UserInterface',
          'csrftoken' => 'Symfony\\Component\\Security\\Csrf\\CsrfToken',
          'authenticatorinterface' => 'Symfony\\Component\\Security\\Http\\Authenticator\\AuthenticatorInterface',
          'badgeinterface' => 'Symfony\\Component\\Security\\Http\\Authenticator\\Passport\\Badge\\BadgeInterface',
          'logoutevent' => 'Symfony\\Component\\Security\\Http\\Event\\LogoutEvent',
          'parameterbagutils' => 'Symfony\\Component\\Security\\Http\\ParameterBagUtils',
          'serviceproviderinterface' => 'Symfony\\Contracts\\Service\\ServiceProviderInterface',
        ),
         'className' => 'Symfony\\Bundle\\SecurityBundle\\Security',
         'functionName' => 'logout',
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
    'bcdf3c1d2624e4f143167a956e5ccda4' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var TokenStorageInterface $tokenStorage */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Bundle\\SecurityBundle',
         'uses' => 
        array (
          'containerinterface' => 'Psr\\Container\\ContainerInterface',
          'firewallconfig' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallConfig',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'tokenstorageinterface' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface',
          'tokeninterface' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface',
          'accessdecision' => 'Symfony\\Component\\Security\\Core\\Authorization\\AccessDecision',
          'authorizationcheckerinterface' => 'Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface',
          'userauthorizationcheckerinterface' => 'Symfony\\Component\\Security\\Core\\Authorization\\UserAuthorizationCheckerInterface',
          'logicexception' => 'Symfony\\Component\\Security\\Core\\Exception\\LogicException',
          'logoutexception' => 'Symfony\\Component\\Security\\Core\\Exception\\LogoutException',
          'userinterface' => 'Symfony\\Component\\Security\\Core\\User\\UserInterface',
          'csrftoken' => 'Symfony\\Component\\Security\\Csrf\\CsrfToken',
          'authenticatorinterface' => 'Symfony\\Component\\Security\\Http\\Authenticator\\AuthenticatorInterface',
          'badgeinterface' => 'Symfony\\Component\\Security\\Http\\Authenticator\\Passport\\Badge\\BadgeInterface',
          'logoutevent' => 'Symfony\\Component\\Security\\Http\\Event\\LogoutEvent',
          'parameterbagutils' => 'Symfony\\Component\\Security\\Http\\ParameterBagUtils',
          'serviceproviderinterface' => 'Symfony\\Contracts\\Service\\ServiceProviderInterface',
        ),
         'className' => 'Symfony\\Bundle\\SecurityBundle\\Security',
         'functionName' => 'logout',
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
    'cde76eed70605bae3bc85abf70f32393' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @var ServiceProviderInterface $firewallAuthenticatorLocator */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Bundle\\SecurityBundle',
         'uses' => 
        array (
          'containerinterface' => 'Psr\\Container\\ContainerInterface',
          'firewallconfig' => 'Symfony\\Bundle\\SecurityBundle\\Security\\FirewallConfig',
          'request' => 'Symfony\\Component\\HttpFoundation\\Request',
          'response' => 'Symfony\\Component\\HttpFoundation\\Response',
          'tokenstorageinterface' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\Storage\\TokenStorageInterface',
          'tokeninterface' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface',
          'accessdecision' => 'Symfony\\Component\\Security\\Core\\Authorization\\AccessDecision',
          'authorizationcheckerinterface' => 'Symfony\\Component\\Security\\Core\\Authorization\\AuthorizationCheckerInterface',
          'userauthorizationcheckerinterface' => 'Symfony\\Component\\Security\\Core\\Authorization\\UserAuthorizationCheckerInterface',
          'logicexception' => 'Symfony\\Component\\Security\\Core\\Exception\\LogicException',
          'logoutexception' => 'Symfony\\Component\\Security\\Core\\Exception\\LogoutException',
          'userinterface' => 'Symfony\\Component\\Security\\Core\\User\\UserInterface',
          'csrftoken' => 'Symfony\\Component\\Security\\Csrf\\CsrfToken',
          'authenticatorinterface' => 'Symfony\\Component\\Security\\Http\\Authenticator\\AuthenticatorInterface',
          'badgeinterface' => 'Symfony\\Component\\Security\\Http\\Authenticator\\Passport\\Badge\\BadgeInterface',
          'logoutevent' => 'Symfony\\Component\\Security\\Http\\Event\\LogoutEvent',
          'parameterbagutils' => 'Symfony\\Component\\Security\\Http\\ParameterBagUtils',
          'serviceproviderinterface' => 'Symfony\\Contracts\\Service\\ServiceProviderInterface',
        ),
         'className' => 'Symfony\\Bundle\\SecurityBundle\\Security',
         'functionName' => 'getAuthenticator',
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