<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Admin Navigation Menu
    |--------------------------------------------------------------------------
    |
    | This array is for Navigation menus of the backend.  Just add/edit or
    | remove the elements from this array which will automatically change the
    | navigation.
    |
    */

    //SIDEBAR LAYOUT - MENU

    'sidebar' => [
        [
            'title' => 'Dashboard',
            'link'  => '/admin',
            'active' => 'admin',
            'icon'  => 'fa fa-dashboard',
        ],
        [
            'title' => 'Users',
            'link'  => '#',
            'active' => 'admin/users*',
            'icon'  => 'fa fa-user',
            'children' => [
                [
                    'title' => 'All Users',
                    'link'  => '/admin/users',
                    'active' => 'admin/users',
                ],
                [
                    'title' => 'User Profile',
                    'link'  => '/admin/users/1',
                    'active' => 'admin/users/*',
                ]
            ]
        ],
        [
            'title' => 'Settings',
            'link'  => '/admin/settings',
            'active' => 'admin/settings*',
            'icon'  => 'fa fa-cogs',
        ],
    ],

    //HORIZONTAL MENU LAYOUT -  MENU

    'horizontal' => [
        [
            'title' => 'Dashboard',
            'link'  => '/admin',
            'active' => 'admin',
            'icon'  => 'fa fa-dashboard',
        ],
        [
            'title' => 'Settings',
            'link'  => '/admin/settings',
            'active' => 'admin/settings*',
            'icon'  => 'fa fa-cogs',
        ],
        [
            'title' => 'Users',
            'link'  => '#',
            'active' => 'admin/users*',
            'icon'  => 'fa fa-user',
            'children' => [
                [
                    'title' => 'All Users',
                    'link'  => '/admin/users',
                    'active' => 'admin/users',
                ],
                [
                    'title' => 'User Profile',
                    'link'  => '/admin/users/1',
                    'active' => 'admin/users/*',
                ]
            ]
        ],
    ]
];