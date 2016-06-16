<?php

// Configuration file for push.php

$config = [
    // These are the settings for development mode
    'development' => [

        // The APNS server that we will use
        'server' => 'gateway.sandbox.push.apple.com:2195',

        // The SSL certificate that allows us to connect to the APNS servers
        'certificate' => 'server_certificates_bundle_sandbox.pem',
        'passphrase'  => '',

        // Configuration of the MySQL database
        'db' => [
            'host'     => '68.225.30.194',
            'dbname'   => 'mobiledb',
            'username' => 'root',
            'password' => '',
            ],

        // Name and path of our log file
        'logfile' => '../log/push_development.log',
        ],

    // These are the settings for production mode
    'production' => [

        // The APNS server that we will use
        'server' => 'gateway.push.apple.com:2195',

        // The SSL certificate that allows us to connect to the APNS servers
        'certificate' => 'ck.pem',
        'passphrase'  => 'welcome45',

        // Configuration of the MySQL database
        'db' => [
            'host'     => '68.225.30.194',
            'dbname'   => 'mobiledb',
            'username' => 'root',
            'password' => '',
            ],

        // Name and path of our log file
        'logfile' => '../log/push_production.log',
        ],
    ];
