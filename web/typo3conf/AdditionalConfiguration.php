<?php

$context = \TYPO3\CMS\Core\Utility\GeneralUtility::getApplicationContext()->isProduction() ? 'production' : 'development';
$rootDir = dirname(dirname(__DIR__));
$confDir = $rootDir.'/config/';
$cacheDir = $rootDir.'/var/cache/';

$configurationFiles = [
    $rootDir.'/web/typo3conf/LocalConfiguration.php',
    $rootDir.'/web/typo3conf/AdditionalConfiguration.php',
    $confDir.'default.php',
    $confDir.$context.'.php',
];


$configLoader = new \Helhum\ConfigLoader\ConfigurationLoader(
    [
        new \Helhum\ConfigLoader\Reader\PhpFileReader($confDir.'default.php'),
        new \Helhum\ConfigLoader\Reader\PhpFileReader($confDir.$context.'.php'),
    ]
);

$GLOBALS['TYPO3_CONF_VARS'] = array_replace_recursive(
    $GLOBALS['TYPO3_CONF_VARS'],
    $configLoader->load()
);