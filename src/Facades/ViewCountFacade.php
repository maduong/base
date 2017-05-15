<?php namespace Edutalk\Base\Facades;

use Illuminate\Support\Facades\Facade;
use Edutalk\Base\Support\ViewCount;

class ViewCountFacade extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return ViewCount::class;
    }
}
