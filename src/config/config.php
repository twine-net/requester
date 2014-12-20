<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Use SSL
    |--------------------------------------------------------------------------
    |
    | If not protocol is provided with the url this option will cause 'https'
    | to be used, false will cause 'http' to be used
    |
    */
    'secure' => true,

    /*
    |--------------------------------------------------------------------------
    | Enable to disable SSL verification
    |--------------------------------------------------------------------------
    |
    | Guzzle enables by default
    |
    */
    'verify' => true,

    /*
    |--------------------------------------------------------------------------
    | Retry options
    |--------------------------------------------------------------------------
    */
    'retry' => [
        /*
        |--------------------------------------------------------------------------
        | Number of times to retry
        |--------------------------------------------------------------------------
        |
        | False to disable retry
        |
        */
        'times' => 5,

        /*
        |--------------------------------------------------------------------------
        | Delay between retry requests
        |--------------------------------------------------------------------------
        |
        | In milliseconds
        |
        */
        'delay' => 10,

        /*
        |--------------------------------------------------------------------------
        | Retry on http code
        |--------------------------------------------------------------------------
        |
        | Which http response codes will trigger a retry
        |
        */
        'on' => [500, 502, 503, 504],
    ]

];
