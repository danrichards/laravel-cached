<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Global Cache Decorator
    |--------------------------------------------------------------------------
    |
    | You may change the global cache decorator class used throughout the
    | laravel-cached API here.
    |
    */

    'decorator' => \More\Laravel\Cached\CacheDecorator::class,

    /*
    |--------------------------------------------------------------------------
    | Debug
    |--------------------------------------------------------------------------
    |
    | Useful if you're trying to debug a cache that should always be warm.
    |
    */
    'debug' => [
        'log_misses' => env('CACHED_DEBUG_LOG_MISSES', 0),
    ],

    /*
    |--------------------------------------------------------------------------
    | Builder Macros
    |--------------------------------------------------------------------------
    |
    | We add some special macros to builder to make laravel-cached more of a
    | joy to work about. If these collide with any existing macros, you may
    | change their names here.
    |
    */

    'macros' => [
        'builder' => [
            'decorate' => 'decorate',
            'cached' => 'cached',
            'cachedOrFail' => 'cachedOrFail',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Cache Following
    |--------------------------------------------------------------------------
    |
    | If you want to automatically pre-cache some decorators on an interval,
    | you can specify them here. Be sure to use this feature with care.
    |
    */

    'following' => [
        'job_chunks' => 100,
        'follows' => [
            // App\Decorators\YourDecoratorHere::class,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Forget invalidated
    |--------------------------------------------------------------------------
    |
    | When a base model updates, you can automagically clear cache entries.
    |
    */

    'invalidation' => [
        'forget_self' => false,
        'forget_computed' => false,
        // DO NOT COMBINE WITH CacheDecorator::forgetTree($touch = true)
        'forget_tree' => false,
    ]
];
