<?php
/**
 * Filters when update data
 */
if (!defined('BASE_FILTER_BEFORE_CREATE')) {
    define('BASE_FILTER_BEFORE_CREATE', 'edutalk.hook-filter.before-create');
}

if (!defined('BASE_FILTER_BEFORE_UPDATE')) {
    define('BASE_FILTER_BEFORE_UPDATE', 'edutalk.hook-filter.before-update');
}

if (!defined('BASE_FILTER_BEFORE_DELETE')) {
    define('BASE_FILTER_BEFORE_DELETE', 'edutalk.hook-filter.before-delete');
}

if (!defined('BASE_FILTER_AFTER_CREATE')) {
    define('BASE_FILTER_AFTER_CREATE', 'edutalk.hook-filter.after-create');
}

if (!defined('BASE_FILTER_AFTER_UPDATE')) {
    define('BASE_FILTER_AFTER_UPDATE', 'edutalk.hook-filter.after-update');
}

if (!defined('BASE_FILTER_AFTER_DELETE')) {
    define('BASE_FILTER_AFTER_DELETE', 'edutalk.hook-filter.after-delete');
}

/**
 * Actions when update data
 */
if (!defined('BASE_ACTION_BEFORE_CREATE')) {
    define('BASE_ACTION_BEFORE_CREATE', 'edutalk.hook-action.before-create');
}

if (!defined('BASE_ACTION_BEFORE_UPDATE')) {
    define('BASE_ACTION_BEFORE_UPDATE', 'edutalk.hook-action.before-update');
}

if (!defined('BASE_ACTION_BEFORE_DELETE')) {
    define('BASE_ACTION_BEFORE_DELETE', 'edutalk.hook-action.before-delete');
}

if (!defined('BASE_ACTION_AFTER_CREATE')) {
    define('BASE_ACTION_AFTER_CREATE', 'edutalk.hook-action.after-create');
}

if (!defined('BASE_ACTION_AFTER_UPDATE')) {
    define('BASE_ACTION_AFTER_UPDATE', 'edutalk.hook-action.after-update');
}

if (!defined('BASE_ACTION_AFTER_DELETE')) {
    define('BASE_ACTION_AFTER_DELETE', 'edutalk.hook-action.after-delete');
}

if (!defined('BASE_ACTION_AFTER_FORCE_DELETE')) {
    define('BASE_ACTION_AFTER_FORCE_DELETE', 'edutalk.hook-action.after-force-delete');
}

if (!defined('BASE_ACTION_AFTER_RESTORE')) {
    define('BASE_ACTION_AFTER_RESTORE', 'edutalk.hook-action.after-restore');
}

/**
 * Actions in views
 */
if (!defined('BASE_ACTION_FORM_ACTIONS')) {
    define('BASE_ACTION_FORM_ACTIONS', 'base_action_form_actions');
}

if (!defined('BASE_ACTION_HEADER_MENU')) {
    define('BASE_ACTION_HEADER_MENU', 'base_action_header_menu');
}

if (!defined('BASE_ACTION_HEADER_CSS')) {
    define('BASE_ACTION_HEADER_CSS', 'header_css');
}

if (!defined('BASE_ACTION_HEADER_JS')) {
    define('BASE_ACTION_HEADER_JS', 'header_js');
}

if (!defined('BASE_ACTION_BODY_CLASS')) {
    define('BASE_ACTION_BODY_CLASS', 'body_class');
}

if (!defined('BASE_ACTION_FOOTER_JS')) {
    define('BASE_ACTION_FOOTER_JS', 'footer_js');
}

if (!defined('BASE_ACTION_FLASH_MESSAGES')) {
    define('BASE_ACTION_FLASH_MESSAGES', 'flash_messages');
}

if (!defined('BASE_ACTION_META_BOXES')) {
    define('BASE_ACTION_META_BOXES', 'meta_boxes');
}

/**
 * Filter controller
 */
if (!defined('BASE_FILTER_CONTROLLER')) {
    define('BASE_FILTER_CONTROLLER', 'base.filter-controller');
}

/**
 * Dashboard statistics
 */
if (!defined('EDUTALK_DASHBOARD_STATS')) {
    define('EDUTALK_DASHBOARD_STATS', 'edutalk-dashboard.index.stat-boxes');
}

if (!defined('EDUTALK_DASHBOARD_OTHERS')) {
    define('EDUTALK_DASHBOARD_OTHERS', 'edutalk-dashboard.index.other');
}


class Constants
{
    const SUCCESS_CODE = 201;

    const SUCCESS_NO_CONTENT_CODE = 200;

    const UNAUTHORIZED_CODE = 401;

    const FORBIDDEN_CODE = 403;

    const NOT_FOUND_CODE = 404;

    const METHOD_NOT_ALLOWED = 405;

    const ERROR_CODE = 500;

    const MAINTENANCE_MODE = 503;
}
