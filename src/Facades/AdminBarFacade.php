<?php namespace Edutalk\Base\Facades;

use Illuminate\Support\Facades\Facade;
use Edutalk\Base\Support\AdminBar;

class AdminBarFacade extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return AdminBar::class;
    }
}
