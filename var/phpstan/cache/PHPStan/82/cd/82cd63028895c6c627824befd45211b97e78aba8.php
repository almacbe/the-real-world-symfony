<?php declare(strict_types = 1);

return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/home/alfonso/projects/test-codex/vendor/lexik/jwt-authentication-bundle/Services/JWTTokenManagerInterface.php-1760629440',
   'data' => 
  array (
    '73420c5da215e1a06936cb360d742626' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * JWTTokenManagerInterface must be implemented by classes able to create/decode
 * JWT tokens.
 *
 * @author Robin Chalas <robin.chalas@gmail.com>
 * @author Eric Lannez <eric.lannez@gmail.com>
 */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Lexik\\Bundle\\JWTAuthenticationBundle\\Services',
         'uses' => 
        array (
          'jwtdecodefailureexception' => 'Lexik\\Bundle\\JWTAuthenticationBundle\\Exception\\JWTDecodeFailureException',
          'tokeninterface' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface',
          'userinterface' => 'Symfony\\Component\\Security\\Core\\User\\UserInterface',
        ),
         'className' => 'Lexik\\Bundle\\JWTAuthenticationBundle\\Services\\JWTTokenManagerInterface',
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
    'c2f57a2cb3dada4f03fce1e3a839eb23' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @return string The JWT token
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Lexik\\Bundle\\JWTAuthenticationBundle\\Services',
         'uses' => 
        array (
          'jwtdecodefailureexception' => 'Lexik\\Bundle\\JWTAuthenticationBundle\\Exception\\JWTDecodeFailureException',
          'tokeninterface' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface',
          'userinterface' => 'Symfony\\Component\\Security\\Core\\User\\UserInterface',
        ),
         'className' => 'Lexik\\Bundle\\JWTAuthenticationBundle\\Services\\JWTTokenManagerInterface',
         'functionName' => 'create',
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
    '9e5dd5c2cd24ed8a48526397b915e604' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @return array|false The JWT token payload or false if an error occurs
     * @throws JWTDecodeFailureException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Lexik\\Bundle\\JWTAuthenticationBundle\\Services',
         'uses' => 
        array (
          'jwtdecodefailureexception' => 'Lexik\\Bundle\\JWTAuthenticationBundle\\Exception\\JWTDecodeFailureException',
          'tokeninterface' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface',
          'userinterface' => 'Symfony\\Component\\Security\\Core\\User\\UserInterface',
        ),
         'className' => 'Lexik\\Bundle\\JWTAuthenticationBundle\\Services\\JWTTokenManagerInterface',
         'functionName' => 'decode',
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
    'dea56dfb009f07415e8d95dbd859b0c5' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Parses a raw JWT token and returns its payload
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Lexik\\Bundle\\JWTAuthenticationBundle\\Services',
         'uses' => 
        array (
          'jwtdecodefailureexception' => 'Lexik\\Bundle\\JWTAuthenticationBundle\\Exception\\JWTDecodeFailureException',
          'tokeninterface' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface',
          'userinterface' => 'Symfony\\Component\\Security\\Core\\User\\UserInterface',
        ),
         'className' => 'Lexik\\Bundle\\JWTAuthenticationBundle\\Services\\JWTTokenManagerInterface',
         'functionName' => 'parse',
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
    '837680a053bd8934e6f4f281b4117ad0' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the claim used as identifier to load an user from a JWT payload.
     *
     * @return string
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Lexik\\Bundle\\JWTAuthenticationBundle\\Services',
         'uses' => 
        array (
          'jwtdecodefailureexception' => 'Lexik\\Bundle\\JWTAuthenticationBundle\\Exception\\JWTDecodeFailureException',
          'tokeninterface' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface',
          'userinterface' => 'Symfony\\Component\\Security\\Core\\User\\UserInterface',
        ),
         'className' => 'Lexik\\Bundle\\JWTAuthenticationBundle\\Services\\JWTTokenManagerInterface',
         'functionName' => 'getUserIdClaim',
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