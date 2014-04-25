<?php namespace trampish\Browscap-laravel;

use Illuminate\Support\Facades\Facade;

class BrowscapFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'browscap';
    }
}
