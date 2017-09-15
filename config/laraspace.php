<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Notification Driver
    |--------------------------------------------------------------------------
    |
    | Here you can specify the driver which you wish to use for notifications
    | which are sent from the backend.
    | There are only 2 options currently : "toastr", "notie"
    |
    */

    'notification' => 'toastr',


    /*
    |--------------------------------------------------------------------------
    | Display Skin Tools
    |--------------------------------------------------------------------------
    |
    | Check Whether you want to display Skin tools or not.
    |
    */

    'skintools' => true,


    /*
    |--------------------------------------------------------------------------
    | Convert to Starter Kit
    |--------------------------------------------------------------------------
    |
    | Here is a list of demo files which are only useful for preview and thus will be deleted on running
    | 'php artisan laraspace:clean' command from the console. If you wish to exclude
    | any file/dir which will be required for your project then you can remove it from these arrays.
    |
    */

    'folders_to_delete' => [
        'resources/views/admin/pages',
        'app/Http/Controllers/Demo',
        'app/Space/Demo',
        'public/assets/admin/js/pages',
        'public/assets/admin/img/demo'
    ],

    'files_to_delete' => [
        'app/Http/Requests/TodosRequest.php',
        'database/migrations/2016_05_18_045906_create_todos_table.php',
        'app/Http/demo_routes.php',
        'config/menu.php'
    ],

];
