<?php
return [
    'backend' => [
        'frontName' => 'admin'
    ],
    'remote_storage' => [
        'driver' => 'file'
    ],
    'queue' => [
        'consumers_wait_for_messages' => 1
    ],
    'crypt' => [
        'key' => 'ed5ad408049c946994e916a3691f4a6e'
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => 'magentotestbo4e4hbvcxd2qdatabase.mysql.database.azure.com:3306',
                'dbname' => 'bitnami_magento',
                'username' => 'bn_magento@magentotestbo4e4hbvcxd2qdatabase.mysql.database.azure.com',
                'password' => '3585427929318a06af7b090b0a59344f26f7c83dbfba4bc0096bbe7378b7f35e',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'driver_options' => [
                    1009 => '/opt/bitnami/mysql/certs/ca.crt.pem',
                    1014 => true
                ]
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'default',
    'http_cache_hosts' => [
        [
            'host' => 'localhost',
            'port' => '80'
        ]
    ],
    'session' => [
        'save' => 'files'
    ],
    'cache' => [
        'frontend' => [
            'default' => [
                'id_prefix' => '000_'
            ],
            'page_cache' => [
                'id_prefix' => '000_'
            ]
        ],
        'allow_parallel_generation' => false
    ],
    'lock' => [
        'provider' => 'db',
        'config' => [
            'prefix' => null
        ]
    ],
    'directories' => [
        'document_root_is_pub' => true
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'full_page' => 1,
        'config_webservice' => 1,
        'translate' => 1,
        'vertex' => 1
    ],
    'downloadable_domains' => [

    ],
    'install' => [
        'date' => 'Thu, 27 May 2021 12:17:47 +0000'
    ]
];
