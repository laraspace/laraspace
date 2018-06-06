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

    // SIDEBAR LAYOUT - MENU

    'sidebar' => [
        [
            'title' => 'Dashboard',
            'link' => '#',
            'active' => 'admin/dashboard*',
            'icon' => 'icon-fa icon-fa-dashboard',
            'children' => [
                [
                    'title' => 'Basic',
                    'link' => '/admin/dashboard/basic',
                    'active' => 'admin/dashboard/basic',
                ],
                [
                    'title' => 'Ecommerce',
                    'link' => '/admin/dashboard/ecommerce',
                    'active' => 'admin/dashboard/ecommerce',
                ],
                [
                    'title' => 'Finance',
                    'link' => '/admin/dashboard/finance',
                    'active' => 'admin/dashboard/finance',
                ]
            ]
        ],
        [
            'title' => 'Layouts',
            'link' => '#',
            'active' => 'admin/layouts*',
            'icon' => 'icon-fa icon-fa-th-large',
            'children' => [
                [
                    'title' => 'Sidebar',
                    'link' => '/admin/layouts/sidebar',
                    'active' => 'admin/layouts/sidebar',
                ],
                [
                    'title' => 'Icon Sidebar',
                    'link' => '/admin/layouts/icon-sidebar',
                    'active' => 'admin/layouts/icon-sidebar',
                ],
                [
                    'title' => 'Horizontal Menu',
                    'link' => '/admin/layouts/horizontal-menu',
                    'active' => 'admin/layouts/horizontal-menu',
                ]
            ]
        ],
        [
            'title' => 'Basic UI',
            'link' => '#',
            'active' => 'admin/basic-ui*',
            'icon' => 'icon-fa icon-fa-star',
            'children' => [
                [
                    'title' => 'Buttons',
                    'link' => '/admin/basic-ui/buttons',
                    'active' => 'admin/basic-ui/buttons',
                ],
                [
                    'title' => 'Cards',
                    'link' => '/admin/basic-ui/cards',
                    'active' => 'admin/basic-ui/cards',
                ],
                [
                    'title' => 'Tabs & Accordians',
                    'link' => '/admin/basic-ui/tabs',
                    'active' => 'admin/basic-ui/tabs',
                ],
                [
                    'title' => 'Typography',
                    'link' => '/admin/basic-ui/typography',
                    'active' => 'admin/basic-ui/typography',
                ],
                [
                    'title' => 'Tables',
                    'link' => '/admin/basic-ui/tables',
                    'active' => 'admin/basic-ui/tables',
                ],
                [
                    'title' => 'Modals',
                    'link' => '/admin/basic-ui/modals',
                    'active' => 'admin/basic-ui/modals',
                ],
                [
                    'title' => 'Progress Bar',
                    'link' => '/admin/basic-ui/progress-bars',
                    'active' => 'admin/basic-ui/progress-bars',
                ],
            ]
        ],
        [
            'title' => 'Components',
            'link' => '#',
            'active' => 'admin/components*',
            'icon' => 'icon-fa icon-fa-puzzle-piece',
            'children' => [
                [
                    'title' => 'Datatables',
                    'link' => '/admin/components/datatables',
                    'active' => 'admin/components/datatables',
                ],
                [
                    'title' => 'Notifications',
                    'link' => '/admin/components/notifications',
                    'active' => 'admin/components/notifications',
                ],
                [
                    'title'=>' Nestable List',
                    'link'=>'/admin/components/nestable-list',
                    'active'=>'admin/components/nestable-list',
                ],
                [
                    'title'=>'Nestable Tree',
                    'link'=>'/admin/components/nestable-tree',
                    'active'=>'admin/components/nestable-tree',
                ],
                [
                    'title' => 'Image Cropper',
                    'link' => '/admin/components/image-cropper',
                    'active' => 'admin/components/image-cropper',
                ],
                [
                    'title' => 'Image Zoom',
                    'link' => '/admin/components/zoom',
                    'active' => 'admin/components/zoom',
                ],
                [
                    'title' => 'Calendar',
                    'link' => '/admin/components/calendar',
                    'active' => 'admin/components/calendar',
                ],
                [
                    'title' => 'Rating',
                    'link' => '#',
                    'active' => 'admin/components/ratings*',
                    'icon' => 'icon-fa icon-fa-star',
                    'children' => [
                        [
                            'title' => 'Star Ratings',
                            'link' => '/admin/components/ratings/star',
                            'active' => 'admin/components/ratings/star',
                        ],
                        [
                            'title' => 'Bar Ratings',
                            'link' => '/admin/components/ratings/bar',
                            'active' => 'admin/components/ratings/bar',
                        ],
                    ],
                ],
                [
                    'title' => 'Contacts',
                    'link' => '/admin/components/contacts',
                    'active' => 'admin/components/contacts',
                ],
            ]
        ],
        [
            'title' => 'Charts',
            'link' => '#',
            'active' => 'admin/charts*',
            'icon' => 'icon-fa icon-fa-bar-chart',
            'children' => [
                [
                    'title' => 'Chart JS',
                    'link' => '/admin/charts/chartjs',
                    'active' => 'admin/charts/chartjs',
                ],
                [
                    'title' => 'Sparkline',
                    'link' => '/admin/charts/sparklines',
                    'active' => 'admin/charts/sparklines',
                ],
                [
                    'title' => 'AM Charts',
                    'link' => '/admin/charts/amcharts',
                    'active' => 'admin/charts/amcharts',
                ],
                [
                    'title' => 'Morris',
                    'link' => '/admin/charts/morris',
                    'active' => 'admin/charts/morris',
                ],
                [
                    'title' => 'Gauges',
                    'link' => '/admin/charts/gauges',
                    'active' => 'admin/charts/gauges',
                ],
            ]
        ],
        [
            'title' => 'Icons',
            'link' => '#',
            'active' => 'admin/icons*',
            'icon' => 'icon-fa icon-fa-eye',
            'children' => [
                [
                    'title' => 'IcoMoon',
                    'link' => '/admin/icons/icomoon',
                    'active' => 'admin/icons/icomoon',
                ],
                [
                    'title' => 'Evil Icons',
                    'link' => '/admin/icons/evil',
                    'active' => 'admin/icons/evil',
                ],
                [
                    'title' => 'Meteo Icons',
                    'link' => '/admin/icons/meteo',
                    'active' => 'admin/icons/meteo',
                ],
                [
                    'title' => 'Line Icons',
                    'link' => '/admin/icons/line',
                    'active' => 'admin/icons/line',
                ],
                [
                    'title' => 'FPS Line',
                    'link' => '/admin/icons/fps-line',
                    'active' => 'admin/icons/fps-line',
                ],
                [
                    'title' => 'Font Awesome',
                    'link' => '/admin/icons/fontawesome',
                    'active' => 'admin/icons/fontawesome',
                ],
            ]
        ],
        [
            'title' => 'Forms',
            'link' => '#',
            'active' => 'admin/forms*',
            'icon' => 'icon-fa icon-fa-rocket',
            'children' => [
                [
                    'title' => 'General Elements',
                    'link' => '/admin/forms/general',
                    'active' => 'admin/forms/general',
                ],
                [
                    'title' => 'Advanced Elements',
                    'link' => '/admin/forms/advanced',
                    'active' => 'admin/forms/advanced',
                ],
                [
                    'title' => 'Form Layouts',
                    'link' => '/admin/forms/layouts',
                    'active' => 'admin/forms/layouts',
                ],
                [
                    'title' => 'Form Validation',
                    'link' => '/admin/forms/validation',
                    'active' => 'admin/forms/validation',
                ],
                [
                    'title' => 'Form Wizard',
                    'link' => '/admin/forms/wizards',
                    'active' => 'admin/forms/wizards',
                ],
                [
                    'title' => 'Form Wizard 2',
                    'link' => '/admin/forms/wizards-2',
                    'active' => 'admin/forms/wizards-2',
                ],
                [
                    'title' => 'Form Wizard 3',
                    'link' => '/admin/forms/wizards-3',
                    'active' => 'admin/forms/wizards-3',
                ],
                [
                    'title' => 'Editors',
                    'link' => '/admin/forms/editors',
                    'active' => 'admin/forms/editors',
                ],
            ]
        ],
        [
            'title' => 'Gallery',
            'link' => '#',
            'active' => 'admin/gallery*',
            'icon' => 'icon-fa icon-fa-image',
            'children' => [
                [
                    'title' => 'Gallery Grid',
                    'link' => '/admin/gallery/grid',
                    'active' => 'admin/gallery/grid',
                ],
                [
                    'title' => 'Gallery Masonry Grid',
                    'link' => '/admin/gallery/masonry-grid',
                    'active' => 'admin/gallery/masonry-grid',
                ]
            ]
        ],
        [
            'title' => 'Pages',
            'link' => '#',
            'active' => 'admin/pages*',
            'icon' => 'icon-fa icon-fa-file',
            'children' => [
                [
                    'title' => 'Login',
                    'link'  => '/login',
                    'active' => 'login',
                ],
                [
                    'title' => 'Login 2',
                    'link'  => '/admin/login-2',
                    'active' => 'admin/login-2',
                ],
                [
                    'title' => 'Login 3',
                    'link'  => '/admin/login-3',
                    'active' => 'admin/login-3',
                ],
                [
                    'title' => 'Register',
                    'link' => '/register',
                    'active' => 'register',
                ],
                [
                    'title' => 'Register 2',
                    'link' => '/admin/register-2',
                    'active' => 'admin/register-2',
                ],
                [
                    'title' => 'Register 3',
                    'link' => '/admin/register-3',
                    'active' => 'admin/register-3',
                ],
                [
                    'title' => '404 Page',
                    'link' => '/admin/404',
                    'active' => 'admin/404',
                ],
                [
                    'title' => 'Maintenance Page',
                    'link' => '/admin/maintenance',
                    'active' => 'admin/maintenance',
                ],
            ]
        ],
        [
            'title' => 'Users',
            'link' => '#',
            'active' => 'admin/users*',
            'icon' => 'icon-fa icon-fa-user',
            'children' => [
                [
                    'title' => 'All Users',
                    'link' => '/admin/users',
                    'active' => 'admin/users',
                ],
                [
                    'title' => 'User Profile',
                    'link' => '/admin/users/1',
                    'active' => 'admin/users/*',
                ]
            ]
        ],
        [
            'title' => 'Todo App',
            'link' => '/admin/todos',
            'active' => 'admin/todos*',
            'icon' => 'icon-fa icon-fa-check',
        ],
        [
            'title' => 'Settings',
            'link' => '#',
            'active' => 'admin/settings*',
            'icon' => 'icon-fa icon-fa-cogs',
            'children' => [
                [
                    'title' => 'Social',
                    'link' => '/admin/settings/social',
                    'active' => 'admin/settings/social',
                ],
                [
                    'title' => 'Mail Driver',
                    'link' => 'admin/settings/mail',
                    'active' => 'admin/settings/mail*',
                ],
            ]
        ],
    ],

    // HORIZONTAL MENU LAYOUT -  MENU

    'horizontal' => [
        [
            'title' => 'Dashboard',
            'link' => '#',
            'active' => 'admin/dashboard*',
            'icon' => 'icon-fa icon-fa-dashboard',
            'children' => [
                [
                    'title' => 'Basic',
                    'link' => '/admin/dashboard/basic',
                    'active' => 'admin/dashboard/basic',
                ],
                [
                    'title' => 'Ecommerce',
                    'link' => '/admin/dashboard/ecommerce',
                    'active' => 'admin/dashboard/ecommerce',
                ],
                [
                    'title' => 'Finance',
                    'link' => '/admin/dashboard/finance',
                    'active' => 'admin/dashboard/finance',
                ]
            ]
        ],
        [
            'title' => 'Layouts',
            'link' => '#',
            'active' => 'admin/layouts*',
            'icon' => 'icon-fa icon-fa-th-large',
            'children' => [
                [
                    'title' => 'Sidebar',
                    'link' => '/admin/layouts/sidebar',
                    'active' => 'admin/layouts/sidebar',
                ],
                [
                    'title' => 'Icon Sidebar',
                    'link' => '/admin/layouts/icon-sidebar',
                    'active' => 'admin/layouts/icon-sidebar',
                ],
                [
                    'title' => 'Horizontal Menu',
                    'link' => '/admin/layouts/horizontal-menu',
                    'active' => 'admin/layouts/horizontal-menu',
                ],
            ]
        ],
        [
            'title' => 'Basic UI',
            'link' => '#',
            'active' => 'admin/basic-ui*',
            'icon' => 'icon-fa icon-fa-star',
            'children' => [
                [
                    'title' => 'Buttons',
                    'link' => '/admin/basic-ui/buttons',
                    'active' => 'admin/basic-ui/buttons',
                ],
                [
                    'title' => 'Cards',
                    'link' => '/admin/basic-ui/cards',
                    'active' => 'admin/basic-ui/cards',
                ],
                [
                    'title' => 'Tabs & Accordians',
                    'link' => '/admin/basic-ui/tabs',
                    'active' => 'admin/basic-ui/tabs',
                ],
                [
                    'title' => 'Typography',
                    'link' => '/admin/basic-ui/typography',
                    'active' => 'admin/basic-ui/typography',
                ],
                [
                    'title' => 'Tables',
                    'link' => '/admin/basic-ui/tables',
                    'active' => 'admin/basic-ui/tables',
                ]
            ]
        ],
        [
            'title' => 'Components',
            'link' => '#',
            'active' => 'admin/components*',
            'icon' => 'icon-fa icon-fa-puzzle-piece',
            'children' => [
                [
                    'title' => 'Datatables',
                    'link' => '/admin/components/datatables',
                    'active' => 'admin/components/datatables',
                ],
                [
                    'title' => 'Notifications',
                    'link' => '/admin/components/notifications',
                    'active' => 'admin/components/notifications',
                ],
                [
                    'title'=>' Nestable List',
                    'link'=>'/admin/components/nestable-list',
                    'active'=>'admin/components/nestable-list',
                ],
                [
                    'title'=>'Nestable Tree',
                    'link'=>'/admin/components/nestable-tree',
                    'active'=>'admin/components/nestable-tree',
                ],
                [
                    'title' => 'Image Cropper',
                    'link' => '/admin/components/image-cropper',
                    'active' => 'admin/components/image-cropper',
                ],
                [
                    'title' => 'Image Zoom',
                    'link' => '/admin/components/zoom',
                    'active' => 'admin/components/zoom',
                ],
                [
                    'title' => 'Calendar',
                    'link' => '/admin/components/calendar',
                    'active' => 'admin/components/calendar',
                ],
                [
                    'title' => 'Rating',
                    'link' => '#',
                    'active' => 'admin/components/ratings*',
                    'icon' => 'icon-fa icon-fa-star',
                    'children' => [
                        [
                            'title' => 'Star Ratings',
                            'link' => '/admin/components/ratings/star',
                            'active' => 'admin/components/ratings/star',
                        ],
                        [
                            'title' => 'Bar Ratings',
                            'link' => '/admin/components/ratings/bar',
                            'active' => 'admin/components/ratings/bar',
                        ],
                    ],
                ],
            ]
        ],
        [
            'title' => 'Todo App',
            'link' => '/admin/todos',
            'active' => 'admin/todos*',
            'icon' => 'icon-fa icon-fa-check',
        ],
        [
            'title' => 'Settings',
            'link' => '#',
            'active' => 'admin/settings*',
            'icon' => 'icon-fa icon-fa-cogs',
            'children' => [
                [
                    'title' => 'Social',
                    'link' => '/admin/settings/social',
                    'active' => 'admin/settings/social',
                ],
                [
                    'title' => 'Mail',
                    'link' => 'admin/settings/mail',
                    'active' => 'admin/settings/mail*',
                    'icon' => 'icon-fa icon-fa-mail',
                ],
            ]
        ]
    ]
];
