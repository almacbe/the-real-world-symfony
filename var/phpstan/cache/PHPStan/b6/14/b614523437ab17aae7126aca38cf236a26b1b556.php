<?php declare(strict_types = 1);

return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/home/alfonso/projects/test-codex/vendor/symfony/security-core/User/PasswordAuthenticatedUserInterface.php-1760629439',
   'data' => 
  array (
    '3b228ae340371da2e1caa4beca5a355f' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * For users that can be authenticated using a password.
 *
 * The __serialize/__unserialize() magic methods can be implemented on the user
 * class to prevent hashed passwords from being put in the session storage.
 * If the password is not stored at all in the session, getPassword() should
 * return null after unserialization, and then, changing the user\'s password
 * won\'t invalidate its sessions.
 * In order to invalidate the user sessions while not storing the password hash
 * in the session, it\'s also possible to hash the password hash before
 * serializing it; crc32c is the only algorithm supported.
 * For example:
 *
 *     public function __serialize(): array
 *     {
 *         $data = (array) $this;
 *         $data["\\0".self::class."\\0password"] = hash(\'crc32c\', $this->password);
 *
 *         return $data;
 *     }
 *
 * Implement EquatableInteface if you need another logic.
 *
 * @author Robin Chalas <robin.chalas@gmail.com>
 * @author Wouter de Jong <wouter@wouterj.nl>
 */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Security\\Core\\User',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\Security\\Core\\User\\PasswordAuthenticatedUserInterface',
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
    '44c3dd518d74996780381ff9a07dca50' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Returns the hashed password used to authenticate the user.
     *
     * Usually on authentication, a plain-text password will be compared to this value.
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'Symfony\\Component\\Security\\Core\\User',
         'uses' => 
        array (
        ),
         'className' => 'Symfony\\Component\\Security\\Core\\User\\PasswordAuthenticatedUserInterface',
         'functionName' => 'getPassword',
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