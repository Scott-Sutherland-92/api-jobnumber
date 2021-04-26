<?php 

// return [
//     'channels' => [
//         'stack' => [
//             'driver' => 'stack',
//             'channels' => ['syslog', 'slack'],
//         ],

//         'syslog' => [
//             'driver' => 'syslog',
//             'level' => 'debug',
//         ],

//         'slack' => [
//             'driver' => 'slack',
//             'url' => env('LOG_SLACK_WEBHOOK_URL'),
//             'username' => 'Job Number',
//             'emoji' => ':computer:',
//             'level' => 'debug',
//         ],
//     ],
// ];

return [

    /*
    |--------------------------------------------------------------------------
    | Default Log Channel
    |--------------------------------------------------------------------------
    |
    | This option defines the default log channel that gets used when writing
    | messages to the logs. The name specified in this option should match
    | one of the channels defined in the "channels" configuration array.
    |
    */

    'default' => env('LOG_CHANNEL', 'stack'),

    /*
    |--------------------------------------------------------------------------
    | Log Channels
    |--------------------------------------------------------------------------
    |
    | Here you may configure the log channels for your application. Out of
    | the box, Laravel uses the Monolog PHP logging library. This gives
    | you a variety of powerful log handlers / formatters to utilize.
    |
    | Available Drivers: "single", "daily", "slack", "syslog",
    |                    "errorlog", "monolog",
    |                    "custom", "stack"
    |
    */

    'channels' => [
        'stack' => [
            'driver' => 'stack',
            'channels' => ['daily','slack'],
        ],

        'slack' => [
            'driver' => 'slack',
            'url' => env('LOG_SLACK_WEBHOOK_URL'),
            'username' => 'Job Number',
            'emoji' => ':computer:',
            'level' => 'debug',
        ],

        'single' => [
            'driver' => 'single',
            'path' => storage_path('logs/errorlog.log'),
            'level' => 'debug',
        ],

        'daily' => [
            'driver' => 'daily',
            'path' => storage_path('logs/errorlog.log'),
            'level' => 'debug',
            'days' => 7,
        ],

        'syslog' => [
            'driver' => 'syslog',
            'level' => 'debug',
        ],

        'errorlog' => [
            'driver' => 'errorlog',
            'level' => 'debug',
        ],
    ],

];