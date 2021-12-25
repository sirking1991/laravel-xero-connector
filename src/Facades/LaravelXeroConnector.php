<?php

namespace Sirking1991\LaravelXeroConnector\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Sirking1991\LaravelXeroConnector\LaravelXeroConnector
 */
class LaravelXeroConnector extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-xero-connector';
    }
}
