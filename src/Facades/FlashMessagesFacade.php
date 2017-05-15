<?php namespace Edutalk\Base\Facades;

use Illuminate\Support\Facades\Facade;
use Edutalk\Base\Services\FlashMessages;

class FlashMessagesFacade extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return FlashMessages::class;
    }
}
