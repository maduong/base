<?php namespace Edutalk\Base\Http\Controllers;

use Edutalk\Base\Facades\DashboardLanguageFacade;

class DashboardLanguageController extends BaseController
{
    protected $module = 'edutalk-core';

    public function getChangeLanguage($languageSlug)
    {
        DashboardLanguageFacade::setDashboardLanguage($languageSlug);

        return redirect()->back();
    }
}
