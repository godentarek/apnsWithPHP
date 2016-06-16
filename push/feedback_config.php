<?php

// Configuration file for feedback.php

$config = [
    // These are the settings for development mode
    'development' => [

        // The APNS feedback server that we will use
        'server' => 'feedback.sandbox.push.apple.com:2196',

        // The SSL certificate that allows us to connect to the APNS servers
        'certificate' => 'ck_development.pem',
        'passphrase'  => 'pushchat',

        // Configuration of the MySQL database
        'db' => [
            'host'     => '68.225.30.194',
            'dbname'   => 'mobiledb',
            'username' => 'root',
            'password' => '',
            ],
        ],

    // These are the settings for production mode
    'production' => [

        // The APNS feedback server that we will use
        'server' => 'feedback.push.apple.com:2196',

        // The SSL certificate that allows us to connect to the APNS servers
        'certificate' => 'ck_production.pem',
        'passphrase'  => 'pushchat',

        // Configuration of the MySQL database
        'db' => [
            'host'     => '68.225.30.194',
            'dbname'   => 'mobiledb',
            'username' => 'root',
            'password' => '',
            ],
        ],
    ];
