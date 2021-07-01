<?php

use TYPO3\CMS\Core\Log\Writer\FileWriter;
use TYPO3\CMS\Core\Log\LogLevel;

return [
    'SYS' => [
        'errorHandlerErrors' => E_STRICT | E_WARNING | E_USER_ERROR | E_USER_WARNING | E_USER_NOTICE | E_RECOVERABLE_ERROR | E_DEPRECATED | E_USER_DEPRECATED,
        'exceptionalErrors' => E_USER_ERROR | E_RECOVERABLE_ERROR,
        'systemLogLevel' => 2,
        'systemLog' => 'error_log',
    ],
    'LOG' => [
        'writerConfiguration' => [
            LogLevel::WARNING => [
                FileWriter::class => [
                    'logFile' => dirname(PATH_site).'/var/log/typo3-default.log'
                ]
            ]
        ]
    ],
];