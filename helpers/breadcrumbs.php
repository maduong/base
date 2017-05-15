<?php

if (!function_exists('breadcrumbs')) {
    /**
     * @return \Edutalk\Base\Support\Breadcrumbs
     */
    function breadcrumbs()
    {
        return \Edutalk\Base\Facades\BreadcrumbsFacade::getFacadeRoot();
    }
}