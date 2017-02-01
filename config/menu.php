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
            'link'  => '#',
            'active' => 'admin/dashboard*',
            'icon'  => 'fa fa-dashboard',
            'children' => [
                [
                    'title' => 'Basic',
                    'link'  => '/admin/dashboard/basic',
                    'active' => 'admin/dashboard/basic',
                ],
                [
                    'title' => 'Ecommerce',
                    'link'  => '/admin/dashboard/ecommerce',
                    'active' => 'admin/dashboard/ecommerce',
                ],
                [
                    'title' => 'Finance',
                    'link'  => '/admin/dashboard/finance',
                    'active' => 'admin/dashboard/finance',
                ]
            ]
        ],
        [
            'title' => 'Layouts',
            'link'  => '#',
            'active' => 'admin/layouts*',
            'icon'  => 'fa fa-th-large',
            'children' => [
                [
                    'title' => 'Sidebar',
                    'link'  => '/admin/layouts/sidebar',
                    'active' => 'admin/layouts/sidebar',
                ],
                [
                    'title' => 'Icon Sidebar',
                    'link'  => '/admin/layouts/icon-sidebar',
                    'active' => 'admin/layouts/icon-sidebar',
                ],
                [
                    'title' => 'Horizontal Menu',
                    'link'  => '/admin/layouts/horizontal-menu',
                    'active' => 'admin/layouts/horizontal-menu',
                ]
            ]
        ],
        [
            'title' => 'Basic UI',
            'link'  => '#',
            'active' => 'admin/basic-ui*',
            'icon'  => 'fa fa-star',
            'children' => [
                [
                    'title' => 'Buttons',
                    'link'  => '/admin/basic-ui/buttons',
                    'active' => 'admin/basic-ui/buttons',
                ],
                [
                    'title' => 'Cards',
                    'link'  => '/admin/basic-ui/cards',
                    'active' => 'admin/basic-ui/cards',
                ],
                [
                    'title' => 'Tabs & Accordians',
                    'link'  => '/admin/basic-ui/tabs',
                    'active' => 'admin/basic-ui/tabs',
                ],
                [
                    'title' => 'Typography',
                    'link'  => '/admin/basic-ui/typography',
                    'active' => 'admin/basic-ui/typography',
                ],
                [
                    'title' => 'Tables',
                    'link'  => '/admin/basic-ui/tables',
                    'active' => 'admin/basic-ui/tables',
                ],
                [
                    'title' => 'Modals',
                    'link'  => '/admin/basic-ui/modals',
                    'active' => 'admin/basic-ui/modals',
                ],
            ]
        ],
        [
            'title' => 'Components',
            'link'  => '#',
            'active' => 'admin/components*',
            'icon'  => 'fa fa-puzzle-piece',
            'children' => [
                [
                    'title' => 'Datatables',
                    'link'  => '/admin/components/datatables',
                    'active' => 'admin/components/datatables',
                ],
                [
                    'title' => 'Notifications',
                    'link'  => '/admin/components/notifications',
                    'active' => 'admin/components/notifications',
                ],
                [
                    'title' => 'Graphs',
                    'link'  => '/admin/components/graphs',
                    'active' => 'admin/components/graphs',
                ]
            ]
        ],
        [
            'title' => 'Forms',
            'link'  => '#',
            'active' => 'admin/forms*',
            'icon'  => 'fa fa-rocket',
            'children' => [
                [
                    'title' => 'General Elements',
                    'link'  => '/admin/forms/general',
                    'active' => 'admin/forms/general',
                ],

                [
                    'title' => 'Advanced Elements',
                    'link'  => '/admin/forms/advanced',
                    'active' => 'admin/forms/advanced',
                ],
                [
                    'title' => 'Form Layouts',
                    'link'  => '/admin/forms/layouts',
                    'active' => 'admin/forms/layouts',
                ],
                [
                    'title' => 'Form Validation',
                    'link'  => '/admin/forms/validation',
                    'active' => 'admin/forms/validation',
                ],
                [
                    'title' => 'Editors',
                    'link'  => '/admin/forms/editors',
                    'active' => 'admin/forms/editors',
                ]
            ]
        ],
        [
            'title' => 'Pages',
            'link'  => '#',
            'active' => 'admin/pages*',
            'icon'  => 'fa fa-file',
            'children' => [
                [
                    'title' => 'Login',
                    'link'  => '/login',
                    'active' => 'login',
                ],
                [
                    'title' => 'Register',
                    'link'  => '/register',
                    'active' => 'register',
                ],
                [
                    'title' => '404 Page',
                    'link'  => '/admin/404',
                    'active' => 'admin/404',
                ],
            ]
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
            'title' => 'Todo App',
            'link'  => '/admin/todos',
            'active' => 'admin/todos*',
            'icon'  => 'fa fa-check',
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
            'link'  => '#',
            'active' => 'admin/dashboard*',
            'icon'  => 'fa fa-dashboard',
            'children' => [
                [
                    'title' => 'Basic',
                    'link'  => '/admin/dashboard/basic',
                    'active' => 'admin/dashboard/basic',
                ],
                [
                    'title' => 'Ecommerce',
                    'link'  => '/admin/dashboard/ecommerce',
                    'active' => 'admin/dashboard/ecommerce',
                ],
                [
                    'title' => 'Finance',
                    'link'  => '/admin/dashboard/finance',
                    'active' => 'admin/dashboard/finance',
                ]
            ]
        ],
        [
            'title' => 'Layouts',
            'link'  => '#',
            'active' => 'admin/layouts*',
            'icon'  => 'fa fa-th-large',
            'children' => [
                [
                    'title' => 'Sidebar',
                    'link'  => '/admin/layouts/sidebar',
                    'active' => 'admin/layouts/sidebar',
                ],
                [
                    'title' => 'Icon Sidebar',
                    'link'  => '/admin/layouts/icon-sidebar',
                    'active' => 'admin/layouts/icon-sidebar',
                ],
                [
                    'title' => 'Horizontal Menu',
                    'link'  => '/admin/layouts/horizontal-menu',
                    'active' => 'admin/layouts/horizontal-menu',
                ]
            ]
        ],
        [
            'title' => 'Basic UI',
            'link'  => '#',
            'active' => 'admin/basic-ui*',
            'icon'  => 'fa fa-star',
            'children' => [
                [
                    'title' => 'Buttons',
                    'link'  => '/admin/basic-ui/buttons',
                    'active' => 'admin/basic-ui/buttons',
                ],
                [
                    'title' => 'Cards',
                    'link'  => '/admin/basic-ui/cards',
                    'active' => 'admin/basic-ui/cards',
                ],
                [
                    'title' => 'Tabs & Accordians',
                    'link'  => '/admin/basic-ui/tabs',
                    'active' => 'admin/basic-ui/tabs',
                ],
                [
                    'title' => 'Typography',
                    'link'  => '/admin/basic-ui/typography',
                    'active' => 'admin/basic-ui/typography',
                ],
                [
                    'title' => 'Tables',
                    'link'  => '/admin/basic-ui/tables',
                    'active' => 'admin/basic-ui/tables',
                ]
            ]
        ],
        [
            'title' => 'Todo App',
            'link'  => '/admin/todos',
            'active' => 'admin/todos*',
            'icon'  => 'fa fa-check',
        ],
        [
            'title' => 'Settings',
            'link'  => '/admin/settings',
            'active' => 'admin/settings*',
            'icon'  => 'fa fa-cogs',
        ],
    ]
];