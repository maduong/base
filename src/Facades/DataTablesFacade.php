<?php namespace Edutalk\Base\Facades;

use Illuminate\Support\Facades\Facade;
use Edutalk\Base\Support\DataTable\DataTables;

class DataTablesFacade extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return DataTables::class;
    }
}
