<?php return [

    'file'    => env( 'FILEMAKER_FILE', 'FilemakerFilename' ),
    'host'    => env( 'FILEMAKER_HOST', '127.0.0.1' ),
    'user'    => env( 'FILEMAKER_USER', 'Admin' ),
    'pass'    => env( 'FILEMAKER_PASS', 'secret' ),

    'client' => [
        'verify'              => false,
        'http_errors'         => false,
        'timeout'             => env( 'FILEMAKER_TIMEOUT', 30 ),
        'headers'             => [ 'Connection' => 'close' ],
        CURLOPT_FORBID_REUSE  => true,
        CURLOPT_FRESH_CONNECT => true,
    ],

];
