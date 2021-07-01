<?php
return [
    'SYS' => [
        // Debug
        'displayErrors' => 1,
        'devIPmask' => '*',
        'sqlDebug' => 1,
        'enableDeprecationLog' => 'file',
        'exceptionalErrors' => E_WARNING | E_USER_ERROR | E_RECOVERABLE_ERROR | E_DEPRECATED | E_USER_DEPRECATED,
        'systemLogLevel' => 0,
        'systemLog' => 'error_log',
        'syslogErrorReporting' => 1,
        'belogErrorReporting' => 0,
        'clearCacheSystem' => true,
    ],
    'BE' => [
        'debug' => true,
        // Convenience
        'sessionTimeout' => 60 * 60 * 24 // 1 Day
    ],
    'FE' => [
        'debug' => true,
    ],
    'LOG' => [
        'writerConfiguration' => [
            \TYPO3\CMS\Core\Log\LogLevel::DEBUG => [
                \TYPO3\CMS\Core\Log\Writer\FileWriter::class => [
                    'logFile' => dirname(PATH_site).'/var/log/typo3-development.log'
                ]
            ]
        ]
    ],
];
