<?php

if (!function_exists('seo')) {
    /**
     * @return \Edutalk\Base\Support\SEO
     */
    function seo()
    {
        return \Edutalk\Base\Facades\SeoFacade::getFacadeRoot();
    }
}
