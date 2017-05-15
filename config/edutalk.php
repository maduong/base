<?php

/**
 * Global config for Edutalk
 * @author Vuong Pham <kingdom102@gmail.com>
 */
return [
    /**
     * Admin route slug
     */
    'admin_route' => env('EDUTALK_ADMIN_ROUTE', 'admincp'),

    'api_route' => env('EDUTALK_API_ROUTE', 'api'),

    'languages' => [
        'vi' => 'Vietnamese',
        'en' => 'English'
    ],
];
