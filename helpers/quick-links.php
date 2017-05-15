<?php

if (!function_exists('admin_quick_link')) {
    /**
     * @return \Edutalk\Base\Support\AdminQuickLink
     */
    function admin_quick_link()
    {
        return \Edutalk\Base\Facades\AdminQuickLinkFacade::getFacadeRoot();
    }
}