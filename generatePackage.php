<?php

require_once('PEAR/PackageFileManager2.php');

PEAR::setErrorHandling(PEAR_ERROR_DIE);

$packagexml = new PEAR_PackageFileManager2;

$packagexml->setOptions(array(
    'baseinstalldir'    => '/',
    'simpleoutput'      => true,
    'packagedirectory'  => './',
    'filelistgenerator' => 'file',
    'ignore'            => array('generatePackage.php'),
    'dir_roles' => array(
        'tests'     => 'test',
        'examples'  => 'doc'
    ),
));

$packagexml->setPackage('Services_Digg2');
$packagexml->setSummary('Second generation Digg API client)');
$packagexml->setDescription('A PHP client for Digg\'s second generation API.  Works with versions 1.0 and above');

$packagexml->setChannel('pear.php.net');
$packagexml->setAPIVersion('0.0.9');
$packagexml->setReleaseVersion('0.0.9');

$packagexml->setReleaseStability('alpha');

$packagexml->setAPIStability('alpha');

$packagexml->setNotes('initial release');
$packagexml->setPackageType('php');
$packagexml->addRelease();

$packagexml->detectDependencies();

$packagexml->addMaintainer('lead',
                           'shupp',
                           'Bill Shupp',
                           'shupp@php.net');
$packagexml->addMaintainer('lead',
                           'jeffhodsdon',
                           'Jeff Hodsdon',
                           'jeffhodsdon@gmail.com');

$packagexml->setLicense('New BSD License',
                        'http://www.opensource.org/licenses/bsd-license.php');

$packagexml->setPhpDep('5.1.2');
$packagexml->setPearinstallerDep('1.4.0b1');
$packagexml->addExtensionDep('required', 'json');
$packagexml->addPackageDepWithChannel('required', 'PEAR', 'pear.php.net', '1.4.0');
$packagexml->addPackageDepWithChannel('required', 'HTTP_Request2', 'pear.php.net', '0.4.1');
$packagexml->addPackageDepWithChannel('required', 'HTTP_OAuth', 'pear.php.net');
$packagexml->addPackageDepWithChannel('required', 'Validate', 'pear.php.net');
$packagexml->addPackageDepWithChannel('optional', 'Log', 'pear.php.net');

$packagexml->generateContents();
$packagexml->writePackageFile();

?>
