<?php namespace Edutalk\Base\Facades;

use Illuminate\Support\Facades\Facade;
use Edutalk\Base\Support\SEO;
use Edutalk\Base\Support\ViewCount;

class SeoFacade extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return SEO::class;
    }
}
