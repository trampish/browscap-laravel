<?php

namespace trampish\Browscap;

use Illuminate\Support\Facades\Facade;

class BrowscapFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'browscap';
    }
}
