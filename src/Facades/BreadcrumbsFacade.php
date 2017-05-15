<?php namespace Edutalk\Base\Facades;

use Illuminate\Support\Facades\Facade;

class BreadcrumbsFacade extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return \Edutalk\Base\Support\Breadcrumbs::class;
    }
}
