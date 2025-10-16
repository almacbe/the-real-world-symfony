<?php declare(strict_types = 1);

return \PHPStan\Cache\CacheItem::__set_state(array(
   'variableKey' => '/home/alfonso/projects/test-codex/vendor/phpunit/phpunit/src/Framework/Assert.php-1760018909',
   'data' => 
  array (
    '4e61abd0e7c716acfcf29c12cfdf797d' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
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
    'd503aa8f5b81f4e742962108283464bd' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two arrays are equal while only considering a list of keys.
     *
     * @param array<mixed>              $expected
     * @param array<mixed>              $actual
     * @param non-empty-list<array-key> $keysToBeConsidered
     *
     * @throws Exception
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertArrayIsEqualToArrayOnlyConsideringListOfKeys',
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
    'de72e2a76c9c20d48b4a35f6a3863366' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two arrays are equal while ignoring a list of keys.
     *
     * @param array<mixed>              $expected
     * @param array<mixed>              $actual
     * @param non-empty-list<array-key> $keysToBeIgnored
     *
     * @throws Exception
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertArrayIsEqualToArrayIgnoringListOfKeys',
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
    '55a22f84f02d99aa5b58f72d685b8bd1' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two arrays are identical while only considering a list of keys.
     *
     * @param array<mixed>              $expected
     * @param array<mixed>              $actual
     * @param non-empty-list<array-key> $keysToBeConsidered
     *
     * @throws Exception
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertArrayIsIdenticalToArrayOnlyConsideringListOfKeys',
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
    '71987f85d96a43b2e4a3b70cfdf0dc1a' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two arrays are equal while ignoring a list of keys.
     *
     * @param array<mixed>              $expected
     * @param array<mixed>              $actual
     * @param non-empty-list<array-key> $keysToBeIgnored
     *
     * @throws Exception
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertArrayIsIdenticalToArrayIgnoringListOfKeys',
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
    '5b9bfa533c9d5c4db2a0fdc04a2c89e0' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that an array has a specified key.
     *
     * @param array<mixed>|ArrayAccess<array-key, mixed> $array
     *
     * @throws Exception
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertArrayHasKey',
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
    'f055873d55964614036fccb343daa0d5' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that an array does not have a specified key.
     *
     * @param array<mixed>|ArrayAccess<array-key, mixed> $array
     *
     * @throws Exception
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertArrayNotHasKey',
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
    '88111f81ddf246960186a912a7c446af' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @phpstan-assert list<mixed> $array
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsList',
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
    '599fb61f3fc1a88967e9b9ca90b05a72' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a haystack contains a needle.
     *
     * @param iterable<mixed> $haystack
     *
     * @throws Exception
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertContains',
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
    '9150c5824e8246207bcfb3e5bc2374f6' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param iterable<mixed> $haystack
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertContainsEquals',
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
    'a1dd57d817d7f07fe139be144893387b' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a haystack does not contain a needle.
     *
     * @param iterable<mixed> $haystack
     *
     * @throws Exception
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertNotContains',
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
    'bc1c437c369a3071aead1b758c11d997' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param iterable<mixed> $haystack
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertNotContainsEquals',
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
    'd0225a808514569254137055126c7d8a' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a haystack contains only values of a given type.
     *
     * @param \'array\'|\'bool\'|\'boolean\'|\'callable\'|\'double\'|\'float\'|\'int\'|\'integer\'|\'iterable\'|\'null\'|\'numeric\'|\'object\'|\'real\'|\'resource (closed)\'|\'resource\'|\'scalar\'|\'string\' $type
     * @param iterable<mixed>                                                                                                                                                   $haystack
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/6056
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertContainsOnly',
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
    '910f910375754f86068e6b07840ed48b' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @phpstan-ignore argument.type */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertContainsOnly',
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
    '0725f65d54b78f7a4ce95b21dd56b7d8' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a haystack contains only values of type array.
     *
     * @phpstan-assert iterable<array<mixed>> $haystack
     *
     * @param iterable<mixed> $haystack
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertContainsOnlyArray',
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
    '1b953964226b2f7a3af9ba37f57c2695' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a haystack contains only values of type bool.
     *
     * @phpstan-assert iterable<bool> $haystack
     *
     * @param iterable<mixed> $haystack
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertContainsOnlyBool',
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
    'e647ee0b12c0872b03b4fe0be1a96276' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a haystack contains only values of type callable.
     *
     * @phpstan-assert iterable<callable> $haystack
     *
     * @param iterable<mixed> $haystack
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertContainsOnlyCallable',
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
    'c38fdd7916807408142f3f557f5ce0cc' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a haystack contains only values of type float.
     *
     * @phpstan-assert iterable<float> $haystack
     *
     * @param iterable<mixed> $haystack
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertContainsOnlyFloat',
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
    '30396f7df8334c284122d5bd9a90c34c' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a haystack contains only values of type int.
     *
     * @phpstan-assert iterable<int> $haystack
     *
     * @param iterable<mixed> $haystack
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertContainsOnlyInt',
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
    '487c8d8378f9f9931eb60b1be1ea5650' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a haystack contains only values of type iterable.
     *
     * @phpstan-assert iterable<iterable<mixed>> $haystack
     *
     * @param iterable<mixed> $haystack
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertContainsOnlyIterable',
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
    '6b7f2580e63f4fc52cfbc32b26e1b603' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a haystack contains only values of type null.
     *
     * @phpstan-assert iterable<null> $haystack
     *
     * @param iterable<mixed> $haystack
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertContainsOnlyNull',
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
    'b9908f3fc6becd2453a57b374aad1568' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a haystack contains only values of type numeric.
     *
     * @phpstan-assert iterable<numeric> $haystack
     *
     * @param iterable<mixed> $haystack
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertContainsOnlyNumeric',
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
    '24d4f76ffc0f16a85d037a2871cc7a8c' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a haystack contains only values of type object.
     *
     * @phpstan-assert iterable<object> $haystack
     *
     * @param iterable<mixed> $haystack
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertContainsOnlyObject',
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
    '39839a419810f367a5fdeb83404a2e8d' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a haystack contains only values of type resource.
     *
     * @phpstan-assert iterable<resource> $haystack
     *
     * @param iterable<mixed> $haystack
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertContainsOnlyResource',
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
    '2fe6b00866ab43fdd71caef79f982a09' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a haystack contains only values of type closed resource.
     *
     * @phpstan-assert iterable<resource> $haystack
     *
     * @param iterable<mixed> $haystack
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertContainsOnlyClosedResource',
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
    'c3acb6e0dd64cc8b907163d31f4f7548' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a haystack contains only values of type scalar.
     *
     * @phpstan-assert iterable<scalar> $haystack
     *
     * @param iterable<mixed> $haystack
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertContainsOnlyScalar',
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
    '500ac28b5eeb46dccd7f9424e7077f5e' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a haystack contains only values of type string.
     *
     * @phpstan-assert iterable<string> $haystack
     *
     * @param iterable<mixed> $haystack
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertContainsOnlyString',
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
    '0cc8a57f01153b05fe0e41cac0d3ec0b' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a haystack contains only instances of a specified interface or class name.
     *
     * @template T
     *
     * @phpstan-assert iterable<T> $haystack
     *
     * @param class-string<T> $className
     * @param iterable<mixed> $haystack
     *
     * @throws Exception
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertContainsOnlyInstancesOf',
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
    '6a971f45762a59839fc89d79efe7f4ab' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a haystack does not contain only values of a given type.
     *
     * @param \'array\'|\'bool\'|\'boolean\'|\'callable\'|\'double\'|\'float\'|\'int\'|\'integer\'|\'iterable\'|\'null\'|\'numeric\'|\'object\'|\'real\'|\'resource (closed)\'|\'resource\'|\'scalar\'|\'string\' $type
     * @param iterable<mixed>                                                                                                                                                   $haystack
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/6056
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertNotContainsOnly',
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
    'cc6a80f52c73711df5b43762242b966e' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @phpstan-ignore argument.type */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertNotContainsOnly',
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
    'a7b4656098cc7b6bf3423c8ac7c6440e' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a haystack does not contain only values of type array.
     *
     * @param iterable<mixed> $haystack
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertContainsNotOnlyArray',
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
    '03a5fee71e91e9cc8e90af5e2c9105e9' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a haystack does not contain only values of type bool.
     *
     * @param iterable<mixed> $haystack
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertContainsNotOnlyBool',
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
    '411204ea2659fb3e063bbc7c5789ce0c' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a haystack does not contain only values of type callable.
     *
     * @param iterable<mixed> $haystack
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertContainsNotOnlyCallable',
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
    '3c6fa2cd3d091a5d1ba30ab764fc11ed' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a haystack does not contain only values of type float.
     *
     * @param iterable<mixed> $haystack
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertContainsNotOnlyFloat',
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
    'd0c26006c6312570fe049ee9be3cf1e8' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a haystack does not contain only values of type int.
     *
     * @param iterable<mixed> $haystack
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertContainsNotOnlyInt',
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
    '825d73e10a4fc3b19ed9904ea3f6b73d' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a haystack does not contain only values of type iterable.
     *
     * @param iterable<mixed> $haystack
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertContainsNotOnlyIterable',
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
    'de4ca1743e9c9b4c3e5447e7a819b1ee' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a haystack does not contain only values of type null.
     *
     * @param iterable<mixed> $haystack
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertContainsNotOnlyNull',
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
    '013ca613590afae75a859ffb3f5484d2' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a haystack does not contain only values of type numeric.
     *
     * @param iterable<mixed> $haystack
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertContainsNotOnlyNumeric',
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
    '574595d179f440acb35e7e2a21debd63' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a haystack does not contain only values of type object.
     *
     * @param iterable<mixed> $haystack
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertContainsNotOnlyObject',
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
    '46bc8cfdafa9a366bbf42792a2aeddc3' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a haystack does not contain only values of type resource.
     *
     * @param iterable<mixed> $haystack
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertContainsNotOnlyResource',
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
    '3cf897fc91379026f34fe57c41a27bb1' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a haystack does not contain only values of type closed resource.
     *
     * @param iterable<mixed> $haystack
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertContainsNotOnlyClosedResource',
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
    '1c8dd71a3fe0898e75a867da242c6790' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a haystack does not contain only values of type scalar.
     *
     * @param iterable<mixed> $haystack
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertContainsNotOnlyScalar',
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
    '715542cf323e79c9d2df254f8c391da9' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a haystack does not contain only values of type string.
     *
     * @param iterable<mixed> $haystack
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertContainsNotOnlyString',
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
    '452ec7feea84236a1957679ec3fc210c' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a haystack does not contain only instances of a specified interface or class name.
     *
     * @param class-string    $className
     * @param iterable<mixed> $haystack
     *
     * @throws Exception
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertContainsNotOnlyInstancesOf',
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
    'd6954ac100208107b53f9e5326c38dd2' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts the number of elements of an array, Countable or Traversable.
     *
     * @param Countable|iterable<mixed> $haystack
     *
     * @throws Exception
     * @throws ExpectationFailedException
     * @throws GeneratorNotSupportedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertCount',
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
    'b7311daf5c9947182050bb3d17d00168' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts the number of elements of an array, Countable or Traversable.
     *
     * @param Countable|iterable<mixed> $haystack
     *
     * @throws Exception
     * @throws ExpectationFailedException
     * @throws GeneratorNotSupportedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertNotCount',
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
    'cec53d6e5f884df1012f70495cbfcb59' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two variables are equal.
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertEquals',
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
    'f20c93b7925b3cd8d07ac572b448adf6' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two variables are equal (canonicalizing).
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertEqualsCanonicalizing',
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
    'a3e0823c857587262b49ddd9fde9d9d1' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two variables are equal (ignoring case).
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertEqualsIgnoringCase',
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
    '0d8ce2ada21ac91c39ade3cf832dc1a7' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two variables are equal (with delta).
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertEqualsWithDelta',
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
    '084aa647335a3f2ad1f6d69e5b2b8056' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two variables are not equal.
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertNotEquals',
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
    'bc13d25e1654c2ad9fae731dcc1ec338' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two variables are not equal (canonicalizing).
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertNotEqualsCanonicalizing',
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
    'a9da6d177ff4239d69d79247a771034f' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two variables are not equal (ignoring case).
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertNotEqualsIgnoringCase',
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
    '4cae44da6e4f8b576b81193f945ec313' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two variables are not equal (with delta).
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertNotEqualsWithDelta',
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
    '25bccea1f48e3e8ba208ed4416029dc4' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertObjectEquals',
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
    '951e0ddd5184e3fa00e73c4f4f6156f9' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertObjectNotEquals',
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
    '6225850f8bf89e2f41b8f210e0d60d75' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is empty.
     *
     * @throws ExpectationFailedException
     * @throws GeneratorNotSupportedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertEmpty',
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
    '63b554b376a9be86edb265b322ddd3df' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is not empty.
     *
     * @throws ExpectationFailedException
     * @throws GeneratorNotSupportedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertNotEmpty',
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
    '6eab282d618459555a7bb156fb94d21a' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a value is greater than another value.
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertGreaterThan',
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
    'c2999480ff44ebf1673b2390f4635854' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a value is greater than or equal to another value.
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertGreaterThanOrEqual',
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
    'e0d46f2bcf5fa69827ea801de0ea7657' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a value is smaller than another value.
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertLessThan',
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
    'd8abadc4287bc2a0077935f2544e3cf4' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a value is smaller than or equal to another value.
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertLessThanOrEqual',
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
    'b8ba54d4ac52004574c9346f87b74237' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that the contents of one file is equal to the contents of another
     * file.
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertFileEquals',
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
    '684b5acdf7b655c76d344d24e286f7f5' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that the contents of one file is equal to the contents of another
     * file (canonicalizing).
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertFileEqualsCanonicalizing',
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
    '4b218769389f52834d69a41d3f2c2904' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that the contents of one file is equal to the contents of another
     * file (ignoring case).
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertFileEqualsIgnoringCase',
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
    '696f55e9da9b855e3afd3ec52073de5c' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that the contents of one file is not equal to the contents of
     * another file.
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertFileNotEquals',
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
    '1f35f86dbc94e68f4d1898df6e945432' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that the contents of one file is not equal to the contents of another
     * file (canonicalizing).
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertFileNotEqualsCanonicalizing',
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
    '554e43993c6d88b0f1681892423790ff' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that the contents of one file is not equal to the contents of another
     * file (ignoring case).
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertFileNotEqualsIgnoringCase',
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
    'd44f041934e28d0dcd3e45f11d70f538' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that the contents of a string is equal
     * to the contents of a file.
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertStringEqualsFile',
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
    'e1292dfb4c1fa48571ea47f9a56abe88' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that the contents of a string is equal
     * to the contents of a file (canonicalizing).
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertStringEqualsFileCanonicalizing',
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
    'dc72c54031b139f4dd4b5a88fda29cc1' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that the contents of a string is equal
     * to the contents of a file (ignoring case).
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertStringEqualsFileIgnoringCase',
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
    'ebf1f23668fb7c111394e15a7951934c' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that the contents of a string is not equal
     * to the contents of a file.
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertStringNotEqualsFile',
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
    'c522ba04705d92031a65b4db364c3a08' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that the contents of a string is not equal
     * to the contents of a file (canonicalizing).
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertStringNotEqualsFileCanonicalizing',
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
    'fe5a3ea52da2f7e36b2ce4cef34950f7' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that the contents of a string is not equal
     * to the contents of a file (ignoring case).
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertStringNotEqualsFileIgnoringCase',
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
    '69c7edbad62df96ecb1482d6ef72c441' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a file/dir is readable.
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsReadable',
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
    'acaa85195328ce5504e82c6708a7ad67' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a file/dir exists and is not readable.
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsNotReadable',
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
    'ae6c13addd31cdaf134f519a88866f03' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a file/dir exists and is writable.
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsWritable',
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
    'b1a881a8460e88bc7c9ef5a422a29004' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a file/dir exists and is not writable.
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsNotWritable',
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
    '031fb91ad27e9e2b7196b19f24520a14' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a directory exists.
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertDirectoryExists',
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
    '085a2244b8c79d7bd5c393537e74fa2e' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a directory does not exist.
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertDirectoryDoesNotExist',
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
    '543782248777af70b15cfd55a4c8f0b1' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a directory exists and is readable.
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertDirectoryIsReadable',
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
    'cc10241c027e9a92b52f2b3a29df093e' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a directory exists and is not readable.
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertDirectoryIsNotReadable',
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
    'c565203d30ecd78fa9c14cc33bfafa53' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a directory exists and is writable.
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertDirectoryIsWritable',
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
    'aa500392f089609a99f91fbf5a2ba7db' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a directory exists and is not writable.
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertDirectoryIsNotWritable',
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
    '79a07a16ea44f44066127fac2d278835' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a file exists.
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertFileExists',
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
    '9e8000a83e05d62e6b14e5bd278c1df2' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a file does not exist.
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertFileDoesNotExist',
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
    '409a5edfe3f3928d8bca1fd4912c3983' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a file exists and is readable.
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertFileIsReadable',
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
    'f627caab2257483a20cef55824f5c5fa' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a file exists and is not readable.
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertFileIsNotReadable',
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
    '818e3a1c51f76ea8a4733694892c7168' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a file exists and is writable.
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertFileIsWritable',
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
    '58d8f0ecdfd35aeea5861d48e5c5dfec' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a file exists and is not writable.
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertFileIsNotWritable',
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
    '80d86965ec2a9ad9e4c70fdf7a1e0038' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a condition is true.
     *
     * @throws ExpectationFailedException
     *
     * @phpstan-assert true $condition
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertTrue',
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
    '06ddb837b000d5f3cb4fdb9ad5e2a7af' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a condition is not true.
     *
     * @throws ExpectationFailedException
     *
     * @phpstan-assert !true $condition
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertNotTrue',
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
    '52e545231bdb0132c9a9ae43b1b24461' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a condition is false.
     *
     * @throws ExpectationFailedException
     *
     * @phpstan-assert false $condition
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertFalse',
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
    'c3ab1e24822a8734722632be40d61cb3' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a condition is not false.
     *
     * @throws ExpectationFailedException
     *
     * @phpstan-assert !false $condition
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertNotFalse',
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
    '0d1bc003db6ef633338803b5aaa1c6bb' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is null.
     *
     * @throws ExpectationFailedException
     *
     * @phpstan-assert null $actual
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertNull',
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
    '879333f173ca619b40fe15c9c01cdca2' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is not null.
     *
     * @throws ExpectationFailedException
     *
     * @phpstan-assert !null $actual
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertNotNull',
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
    '2841f497cc8245f02993e7be92acfee3' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is finite.
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertFinite',
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
    '1e7ac0149e766985737e7ead28c1253b' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is infinite.
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertInfinite',
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
    'a400a1f8e39b1c5133f9036141042af6' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is nan.
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertNan',
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
    'b7e998779cf2e3a2121c3d2570dd9562' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that an object has a specified property.
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertObjectHasProperty',
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
    '707efbadb6f3ad856fd34b71648cd9ea' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that an object does not have a specified property.
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertObjectNotHasProperty',
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
    '926fda5d265b8cc0e9ade6a8d5a98054' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two variables have the same type and value.
     * Used on objects, it asserts that two variables reference
     * the same object.
     *
     * @template ExpectedType
     *
     * @param ExpectedType $expected
     *
     * @throws ExpectationFailedException
     *
     * @phpstan-assert =ExpectedType $actual
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertSame',
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
    'af768878a0aef683b4a35d58c0b2122f' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two variables do not have the same type and value.
     * Used on objects, it asserts that two variables do not reference
     * the same object.
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertNotSame',
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
    '2d51ffdcc2d55f1bb604d813b91ef64e' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is of a given type.
     *
     * @template ExpectedType of object
     *
     * @param class-string<ExpectedType> $expected
     *
     * @throws Exception
     * @throws ExpectationFailedException
     * @throws UnknownClassOrInterfaceException
     *
     * @phpstan-assert =ExpectedType $actual
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertInstanceOf',
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
    '8fe84ac5c611791fcb758df8a43f0b4b' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is not of a given type.
     *
     * @template ExpectedType of object
     *
     * @param class-string<ExpectedType> $expected
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
     * @phpstan-assert !ExpectedType $actual
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertNotInstanceOf',
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
    '875fc0a9d9f3488c4669ece40b378f5b' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is of type array.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
     * @phpstan-assert array<mixed> $actual
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsArray',
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
    '6b1ed0c0d65ae886b954eb2b1511b57d' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is of type bool.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
     * @phpstan-assert bool $actual
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsBool',
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
    '90cb28c298c9188f2beb1daeadac4c40' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is of type float.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
     * @phpstan-assert float $actual
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsFloat',
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
    '7fd2ebe782e745be21f44c33c18c9bce' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is of type int.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
     * @phpstan-assert int $actual
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsInt',
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
    '7236e74d3b5474e9dc00d83393cd6b97' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is of type numeric.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
     * @phpstan-assert numeric $actual
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsNumeric',
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
    '28a46633c45adf457f431e71f7964a98' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is of type object.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
     * @phpstan-assert object $actual
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsObject',
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
    '65d3784569061bdde955101ee1811e7d' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is of type resource.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
     * @phpstan-assert resource $actual
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsResource',
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
    'b1071170b79a172d8aea13b2e4e146f7' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is of type resource and is closed.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
     * @phpstan-assert resource $actual
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsClosedResource',
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
    'd7cf8289a9d056c8e72b43c3e37a3e24' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is of type string.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
     * @phpstan-assert string $actual
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsString',
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
    '8b0a10dca82cadcec0a47420fbcebef9' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is of type scalar.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
     * @phpstan-assert scalar $actual
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsScalar',
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
    '8c26a130c23197b3352d423241d22308' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is of type callable.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
     * @phpstan-assert callable $actual
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsCallable',
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
    '9c3f28c31f8564ecfa5a226d6db5fe89' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is of type iterable.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
     * @phpstan-assert iterable<mixed> $actual
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsIterable',
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
    '86b030d33b042bfe25bc5aaaa78a38d8' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is not of type array.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
     * @phpstan-assert !array<mixed> $actual
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsNotArray',
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
    '558962c8891af2cc89ffbaa553d16e0a' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is not of type bool.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
     * @phpstan-assert !bool $actual
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsNotBool',
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
    '1b638d58cad1532ed36d668178e4b5f1' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is not of type float.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
     * @phpstan-assert !float $actual
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsNotFloat',
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
    'c93db647d463faf3c6aabcb5afd67c6d' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is not of type int.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
     * @phpstan-assert !int $actual
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsNotInt',
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
    '79d5aabd86ca6226a11e8878cbfc2b5f' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is not of type numeric.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
     * @phpstan-assert !numeric $actual
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsNotNumeric',
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
    '6bfecfb3a4e08d0470c7295db347cebb' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is not of type object.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
     * @phpstan-assert !object $actual
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsNotObject',
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
    '759922e0b49595999a94368b9ab7ce66' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is not of type resource.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
     * @phpstan-assert !resource $actual
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsNotResource',
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
    'd777fb35083805af1df2b0be362a1c1a' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is not of type resource.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
     * @phpstan-assert !resource $actual
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsNotClosedResource',
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
    'f5bcd7327c0754da30f72eb4f1a49fbe' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is not of type string.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
     * @phpstan-assert !string $actual
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsNotString',
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
    '0efd942b7ffb5a5acb22af14bef484c0' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is not of type scalar.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
     * @phpstan-assert !scalar $actual
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsNotScalar',
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
    '236313872d9e76bb954cb497a5c8c2c6' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is not of type callable.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
     * @phpstan-assert !callable $actual
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsNotCallable',
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
    'c2408c9bcd2a3dd9c89e788f3980010f' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a variable is not of type iterable.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     *
     * @phpstan-assert !iterable<mixed> $actual
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertIsNotIterable',
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
    'caca59665a7d600c583841c280a5890c' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a string matches a given regular expression.
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertMatchesRegularExpression',
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
    '49484462b6ceef72607375efe66ef626' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a string does not match a given regular expression.
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertDoesNotMatchRegularExpression',
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
    '701192990c0c959e0b626e73b501440c' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Assert that the size of two arrays (or `Countable` or `Traversable` objects)
     * is the same.
     *
     * @param Countable|iterable<mixed> $expected
     * @param Countable|iterable<mixed> $actual
     *
     * @throws Exception
     * @throws ExpectationFailedException
     * @throws GeneratorNotSupportedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertSameSize',
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
    '02449b98ff99c6e1a6aa72ca7c6364d9' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Assert that the size of two arrays (or `Countable` or `Traversable` objects)
     * is not the same.
     *
     * @param Countable|iterable<mixed> $expected
     * @param Countable|iterable<mixed> $actual
     *
     * @throws Exception
     * @throws ExpectationFailedException
     * @throws GeneratorNotSupportedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertNotSameSize',
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
    'ce76507ef5ff553f74293dca111b1bf1' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertStringContainsStringIgnoringLineEndings',
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
    '6be23d5d3fa9d8c6bb20ef91a1857b57' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two strings are equal except for line endings.
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertStringEqualsStringIgnoringLineEndings',
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
    'a4dbc5f2b4531a0c26b0fa2f7e681ec9' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a string matches a given format string.
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertFileMatchesFormat',
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
    '9922cef3f703a3cb6bbc877cfc34b70c' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a string matches a given format string.
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertFileMatchesFormatFile',
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
    '60af020ba59746a0c2d8af16bbb04c0b' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a string matches a given format string.
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertStringMatchesFormat',
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
    'ff25da408b5ea207b8f8246427d8b984' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a string matches a given format file.
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertStringMatchesFormatFile',
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
    '061a9a6d8292194f721bfc537f2822f2' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a string starts with a given prefix.
     *
     * @param non-empty-string $prefix
     *
     * @throws ExpectationFailedException
     * @throws InvalidArgumentException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertStringStartsWith',
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
    '1f7f05f6d8007aa4fdc3ea51c2b5a2fa' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a string starts not with a given prefix.
     *
     * @param non-empty-string $prefix
     *
     * @throws ExpectationFailedException
     * @throws InvalidArgumentException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertStringStartsNotWith',
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
    '25b22c742694754ac28a24de23de2106' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertStringContainsString',
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
    '5cb5e30a3ea6c1cfa17aa008f76db5ed' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertStringContainsStringIgnoringCase',
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
    '66b8ddf9269d8378523bce0ef3efcabf' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertStringNotContainsString',
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
    '5c8fd4f4e5f74cfa02f7c7cadaa3562f' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertStringNotContainsStringIgnoringCase',
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
    'cbf232dcd2b547fa7367d0b9692b14b6' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a string ends with a given suffix.
     *
     * @param non-empty-string $suffix
     *
     * @throws ExpectationFailedException
     * @throws InvalidArgumentException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertStringEndsWith',
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
    '336356160e3fbf031d9970ecc9a8939b' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a string ends not with a given suffix.
     *
     * @param non-empty-string $suffix
     *
     * @throws ExpectationFailedException
     * @throws InvalidArgumentException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertStringEndsNotWith',
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
    '9717a447565bd1d30f907a77b2c27d0f' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two XML files are equal.
     *
     * @throws Exception
     * @throws ExpectationFailedException
     * @throws XmlException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertXmlFileEqualsXmlFile',
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
    '779b3b4c60ac24f50dca3e03a58b7379' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two XML files are not equal.
     *
     * @throws \\PHPUnit\\Util\\Exception
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertXmlFileNotEqualsXmlFile',
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
    'e8c458433c5ab4ae7bfc57785791187f' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two XML documents are equal.
     *
     * @throws ExpectationFailedException
     * @throws XmlException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertXmlStringEqualsXmlFile',
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
    '94dd9a6626214cc36cd46658355e866b' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two XML documents are not equal.
     *
     * @throws ExpectationFailedException
     * @throws XmlException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertXmlStringNotEqualsXmlFile',
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
    '37a3cb5988da5593301cfbb43d93bb98' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two XML documents are equal.
     *
     * @throws ExpectationFailedException
     * @throws XmlException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertXmlStringEqualsXmlString',
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
    '0ba64260c5c23b23e092da8f364dbb27' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two XML documents are not equal.
     *
     * @throws ExpectationFailedException
     * @throws XmlException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertXmlStringNotEqualsXmlString',
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
    '2154facda25e9aea2d794d93b43ed48a' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Evaluates a PHPUnit\\Framework\\Constraint matcher object.
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertThat',
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
    '792e036c76a82a4e9659b9139175df5f' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that a string is a valid JSON string.
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertJson',
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
    'de2ad1318ce74256aac0824234405abb' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two given JSON encoded objects or arrays are equal.
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertJsonStringEqualsJsonString',
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
    'c3dc95c260c08a166595e764ed4caa65' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two given JSON encoded objects or arrays are not equal.
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertJsonStringNotEqualsJsonString',
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
    '594512b574b8d0dc12dccf8996301455' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that the generated JSON encoded object and the content of the given file are equal.
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertJsonStringEqualsJsonFile',
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
    '508be314c90bde9769a478543472cc56' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that the generated JSON encoded object and the content of the given file are not equal.
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertJsonStringNotEqualsJsonFile',
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
    '89b7017bd2887dfd05f3ac3d1d7f422e' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two JSON files are equal.
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertJsonFileEqualsJsonFile',
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
    'defecca6f9a6faaee43da590c5a84443' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Asserts that two JSON files are not equal.
     *
     * @throws ExpectationFailedException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'assertJsonFileNotEqualsJsonFile',
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
    'ae75686e9cfa1f0be47671502696a665' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @throws Exception
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'logicalAnd',
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
    '99934cf521e0131ca72cb7bc4c85a9e4' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @template CallbackInput of mixed
     *
     * @param callable(CallbackInput $callback): bool $callback
     *
     * @return Callback<CallbackInput>
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'callback',
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
    '9755175eeaf7f1371e36d7ac9919d125' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param \'array\'|\'bool\'|\'boolean\'|\'callable\'|\'double\'|\'float\'|\'int\'|\'integer\'|\'iterable\'|\'null\'|\'numeric\'|\'object\'|\'real\'|\'resource (closed)\'|\'resource\'|\'scalar\'|\'string\' $type
     *
     * @throws Exception
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/6060
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'containsOnly',
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
    '5525697d75deb53908a352f41707795e' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param class-string $className
     *
     * @throws Exception
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'containsOnlyInstancesOf',
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
    'a0d31a0012a8af386f4e57fbdd8cdd53' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @throws UnknownClassOrInterfaceException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'isInstanceOf',
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
    '96bf840a6e708923e52206bfd684c174' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param \'array\'|\'bool\'|\'boolean\'|\'callable\'|\'double\'|\'float\'|\'int\'|\'integer\'|\'iterable\'|\'null\'|\'numeric\'|\'object\'|\'real\'|\'resource (closed)\'|\'resource\'|\'scalar\'|\'string\' $type
     *
     * @throws UnknownNativeTypeException
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/6053
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'isType',
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
    'c8bbcbcc7b0d1a2d1a397276d30c0411' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param non-empty-string $prefix
     *
     * @throws InvalidArgumentException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'stringStartsWith',
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
    '315483cdce1984783dfab242fb86797f' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @param non-empty-string $suffix
     *
     * @throws InvalidArgumentException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'stringEndsWith',
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
    '44a07f37c789aba315263b8383aa956b' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Fails a test with the given message.
     *
     * @throws AssertionFailedError
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'fail',
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
    '9ea7f49bcd0bede8a355ba89ef38c146' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Mark the test as incomplete.
     *
     * @throws IncompleteTestError
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'markTestIncomplete',
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
    '48ff57395d757658b7de072c6b2009ec' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Mark the test as skipped.
     *
     * @throws SkippedWithMessageException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'markTestSkipped',
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
    '9cd4c781d3c7ca9a1e9ac26d1375d140' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Return the current assertion count.
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'getCount',
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
    '186f29e0e98bb8da5ab671f7442e25a2' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * Reset the assertion counter.
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'resetCount',
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
    '379d3c033773511044c9490917111559' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/**
     * @throws UnknownNativeTypeException
     */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'mapNativeType',
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
    'f0c6b84d54efd348b32d24cf3fc32779' => 
    \PHPStan\PhpDoc\NameScopedPhpDocString::__set_state(array(
       'phpDocString' => '/** @phpstan-ignore match.unhandled */',
       'nameScope' => 
      \PHPStan\Analyser\NameScope::__set_state(array(
         'namespace' => 'PHPUnit\\Framework',
         'uses' => 
        array (
          'arrayaccess' => 'ArrayAccess',
          'countable' => 'Countable',
          'generator' => 'Generator',
          'eventfacade' => 'PHPUnit\\Event\\Facade',
          'arrayhaskey' => 'PHPUnit\\Framework\\Constraint\\ArrayHasKey',
          'callback' => 'PHPUnit\\Framework\\Constraint\\Callback',
          'constraint' => 'PHPUnit\\Framework\\Constraint\\Constraint',
          'count' => 'PHPUnit\\Framework\\Constraint\\Count',
          'directoryexists' => 'PHPUnit\\Framework\\Constraint\\DirectoryExists',
          'fileexists' => 'PHPUnit\\Framework\\Constraint\\FileExists',
          'greaterthan' => 'PHPUnit\\Framework\\Constraint\\GreaterThan',
          'isanything' => 'PHPUnit\\Framework\\Constraint\\IsAnything',
          'isempty' => 'PHPUnit\\Framework\\Constraint\\IsEmpty',
          'isequal' => 'PHPUnit\\Framework\\Constraint\\IsEqual',
          'isequalcanonicalizing' => 'PHPUnit\\Framework\\Constraint\\IsEqualCanonicalizing',
          'isequalignoringcase' => 'PHPUnit\\Framework\\Constraint\\IsEqualIgnoringCase',
          'isequalwithdelta' => 'PHPUnit\\Framework\\Constraint\\IsEqualWithDelta',
          'isfalse' => 'PHPUnit\\Framework\\Constraint\\IsFalse',
          'isfinite' => 'PHPUnit\\Framework\\Constraint\\IsFinite',
          'isidentical' => 'PHPUnit\\Framework\\Constraint\\IsIdentical',
          'isinfinite' => 'PHPUnit\\Framework\\Constraint\\IsInfinite',
          'isinstanceof' => 'PHPUnit\\Framework\\Constraint\\IsInstanceOf',
          'isjson' => 'PHPUnit\\Framework\\Constraint\\IsJson',
          'islist' => 'PHPUnit\\Framework\\Constraint\\IsList',
          'isnan' => 'PHPUnit\\Framework\\Constraint\\IsNan',
          'isnull' => 'PHPUnit\\Framework\\Constraint\\IsNull',
          'isreadable' => 'PHPUnit\\Framework\\Constraint\\IsReadable',
          'istrue' => 'PHPUnit\\Framework\\Constraint\\IsTrue',
          'istype' => 'PHPUnit\\Framework\\Constraint\\IsType',
          'iswritable' => 'PHPUnit\\Framework\\Constraint\\IsWritable',
          'jsonmatches' => 'PHPUnit\\Framework\\Constraint\\JsonMatches',
          'lessthan' => 'PHPUnit\\Framework\\Constraint\\LessThan',
          'logicaland' => 'PHPUnit\\Framework\\Constraint\\LogicalAnd',
          'logicalnot' => 'PHPUnit\\Framework\\Constraint\\LogicalNot',
          'logicalor' => 'PHPUnit\\Framework\\Constraint\\LogicalOr',
          'logicalxor' => 'PHPUnit\\Framework\\Constraint\\LogicalXor',
          'objectequals' => 'PHPUnit\\Framework\\Constraint\\ObjectEquals',
          'objecthasproperty' => 'PHPUnit\\Framework\\Constraint\\ObjectHasProperty',
          'regularexpression' => 'PHPUnit\\Framework\\Constraint\\RegularExpression',
          'samesize' => 'PHPUnit\\Framework\\Constraint\\SameSize',
          'stringcontains' => 'PHPUnit\\Framework\\Constraint\\StringContains',
          'stringendswith' => 'PHPUnit\\Framework\\Constraint\\StringEndsWith',
          'stringequalsstringignoringlineendings' => 'PHPUnit\\Framework\\Constraint\\StringEqualsStringIgnoringLineEndings',
          'stringmatchesformatdescription' => 'PHPUnit\\Framework\\Constraint\\StringMatchesFormatDescription',
          'stringstartswith' => 'PHPUnit\\Framework\\Constraint\\StringStartsWith',
          'traversablecontainsequal' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsEqual',
          'traversablecontainsidentical' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsIdentical',
          'traversablecontainsonly' => 'PHPUnit\\Framework\\Constraint\\TraversableContainsOnly',
          'xmlloader' => 'PHPUnit\\Util\\Xml\\Loader',
          'xmlexception' => 'PHPUnit\\Util\\Xml\\XmlException',
        ),
         'className' => 'PHPUnit\\Framework\\Assert',
         'functionName' => 'mapNativeType',
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