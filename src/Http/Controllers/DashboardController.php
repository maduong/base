<?php namespace Edutalk\Base\Http\Controllers;

class DashboardController extends BaseAdminController
{
    protected $module = 'edutalk-core';

    public function __construct()
    {
        parent::__construct();
    }

    public function getIndex()
    {
        $this->setPageTitle(trans('edutalk-core::stats.dashboard_statistics'));
        $this->getDashboardMenu('edutalk-dashboard');
        return do_filter(BASE_FILTER_CONTROLLER, $this, EDUTALK_DASHBOARD_STATS)->viewAdmin('dashboard');
    }
}
