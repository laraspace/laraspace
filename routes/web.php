<?php

/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
| Define the routes for your Frontend pages here
|
*/

Route::get('/', [
    'as' => 'home', 'uses' => 'FrontendController@home'
]);

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
| Route group for Backend prefixed with "admin".
| To Enable Authentication just remove the comment from Admin Middleware
|
*/

Route::group([
    'prefix' => 'admin',
    'middleware' => 'admin'
], function () {

    //Main Dashboard
    Route::get('/', [
        'as' => 'admin.dashboard', 'uses' => 'DashboardController@index'
    ]);

    Route::get('/dashboard/basic', [
        'as' => 'admin.dashboard.basic', 'uses' => 'DashboardController@basic'
    ]);

    Route::get('/dashboard/ecommerce', [
        'as' => 'admin.dashboard.ecommerce', 'uses' => 'DashboardController@ecommerce'
    ]);

    Route::get('/dashboard/finance', [
        'as' => 'admin.dashboard.finance', 'uses' => 'DashboardController@finance'
    ]);

    // Layouts
    Route::group(['prefix' => 'layouts'], function () {

        Route::get('sidebar', [
            'as' => 'admin.layouts.sidebar', 'uses' => 'Demo\PagesController@sidebarLayout'
        ]);

        Route::get('icon-sidebar', [
            'as' => 'admin.layouts.icon-sidebar', 'uses' => 'Demo\PagesController@iconSidebar'
        ]);

        Route::get('horizontal-menu', [
            'as' => 'admin.layouts.horizontal', 'uses' => 'Demo\PagesController@horizontalMenu'
        ]);

    });

    //Ui Elements
    Route::group(['prefix' => 'basic-ui'], function () {

        Route::get('buttons', [
            'as' => 'admin.ui.buttons', 'uses' => 'Demo\PagesController@buttons'
        ]);

        Route::get('typography', [
            'as' => 'admin.ui.typography', 'uses' => 'Demo\PagesController@typography'
        ]);

        Route::get('tabs', [
            'as' => 'admin.ui.tabs', 'uses' => 'Demo\PagesController@tabs'
        ]);

        Route::get('cards', [
            'as' => 'admin.ui.cards', 'uses' => 'Demo\PagesController@cards'
        ]);

        Route::get('tables', [
            'as' => 'admin.ui.tables', 'uses' => 'Demo\PagesController@tables'
        ]);

        Route::get('modals', [
            'as' => 'admin.ui.modals', 'uses' => 'Demo\PagesController@modals'
        ]);

        Route::get('progress-bars', [
            'as' => 'admin.ui.progress-bars', 'uses' => 'Demo\PagesController@progressBars'
        ]);

    });

    //Component Routes

    Route::group(['prefix' => 'components'], function () {

        Route::get('notifications', [
            'as' => 'admin.components.notifications', 'uses' => 'Demo\PagesController@notifications'
        ]);

        Route::get('graphs', [
            'as' => 'admin.components.graphs', 'uses' => 'Demo\PagesController@graphs'
        ]);

        Route::get('datatables', [
            'as' => 'admin.components.datatables', 'uses' => 'Demo\PagesController@datatables'
        ]);

        Route::get('nestable-list',[
            'as'=>'admin.components.nestableList', 'uses'=>'Demo\PagesController@nestableList'
        ]);

        Route::get('nestable-tree',[
            'as'=>'admin.components.nestableTree', 'uses'=>'Demo\PagesController@nestableTree'
        ]);

        Route::get('image-cropper', [
            'as' => 'admin.components.imagecropper', 'uses' => 'Demo\PagesController@imageCropper'
        ]);

        Route::get('zoom', [
            'as' => 'admin.components.zoom', 'uses' => 'Demo\PagesController@imageZoom'
        ]);

        Route::get('calendar', [
            'as' => 'admin.components.calendar', 'uses' => 'Demo\PagesController@calendar'
        ]);

        Route::get('ratings', [
            'as' => 'admin.components.ratings', 'uses' => 'Demo\PagesController@ratings'
        ]);

        Route::get('bar-ratings', [
            'as' => 'admin.components.bar-ratings', 'uses' => 'Demo\PagesController@barRatings'
        ]);

    });

    //Charts
    Route::group(['prefix' => 'charts'], function () {

        Route::get('sparklines', [
            'as' => 'admin.charts.sparklines', 'uses' => 'Demo\PagesController@sparklineCharts'
        ]);

        Route::get('amcharts', [
            'as' => 'admin.charts.amcharts', 'uses' => 'Demo\PagesController@amCharts'
        ]);

        Route::get('morris', [
            'as' => 'admin.charts.morris', 'uses' => 'Demo\PagesController@morrisCharts'
        ]);

        Route::get('gauges', [
            'as' => 'admin.charts.gauges', 'uses' => 'Demo\PagesController@gaugesCharts'
        ]);

    });


    //Forms Routes

    Route::group(['prefix' => 'forms'], function () {

        Route::get('general', [
            'as' => 'admin.forms.general', 'uses' => 'Demo\PagesController@general'
        ]);

        Route::get('advanced', [
            'as' => 'admin.forms.advanced', 'uses' => 'Demo\PagesController@advanced'
        ]);

        Route::get('layouts', [
            'as' => 'admin.forms.layouts', 'uses' => 'Demo\PagesController@layouts'
        ]);

        Route::get('validation', [
            'as' => 'admin.forms.validation', 'uses' => 'Demo\PagesController@validation'
        ]);

        Route::get('editors', [
            'as' => 'admin.forms.editors', 'uses' => 'Demo\PagesController@editors'
        ]);

        Route::get('wizards', [
            'as' => 'admin.forms.wizards', 'uses' => 'Demo\PagesController@wizards'
        ]);

        Route::get('wizard-with-circles', [
            'as' => 'admin.forms.wizard-with-circles', 'uses' => 'Demo\PagesController@wizardWithCircles'
        ]);

    });

    //Gallery
    Route::group(['prefix' => 'gallery'], function () {

        Route::get('grid', [
            'as' => 'admin.gallery.grid', 'uses' => 'Demo\PagesController@galleryGrid'
        ]);

        Route::get('masonry-grid', [
            'as' => 'admin.gallery.masonry-grid', 'uses' => 'Demo\PagesController@galleryMasonryGrid'
        ]);
    });

    //Login Options

    Route::get('login-simple', [
        'as' => 'admin.login.simple', 'uses' => 'Demo\PagesController@loginSimple'
    ]);

    //Todos

    Route::resource('todos', 'Demo\TodosController');

    Route::post('todos/toggleTodo/{id}', [
        'as' => 'admin.todos.toggle', 'uses' => 'Demo\TodosController@toggleTodo'
    ]);

    Route::resource('users', 'UsersController');

    //icons
    Route::group(['prefix' => 'icons'], function () {

        Route::get('/icomoon', [
            'as' => 'admin.icons.icomoon', 'uses' => 'Demo\PagesController@icoMoons'
        ]);

        Route::get('/evil', [
            'as' => 'admin.icons.evil', 'uses' => 'Demo\PagesController@evilIcons'
        ]);

        Route::get('/meteo', [
            'as' => 'admin.icons.meteo', 'uses' => 'Demo\PagesController@meteoIcons'
        ]);

        Route::get('/line', [
            'as' => 'admin.icons.line', 'uses' => 'Demo\PagesController@lineIcons'
        ]);

        Route::get('/fps-line', [
            'as' => 'admin.icons.fpsline', 'uses' => 'Demo\PagesController@fpsLineIcons'
        ]);

        Route::get('/fontawesome', [
            'as' => 'admin.icons.fontawesome', 'uses' => 'Demo\PagesController@fontawesomeIcons'
        ]);

    });

    //Settings
    Route::group(['prefix' => 'settings'], function () {

        //social
        Route::get('/social', [
            'as' => 'admin.settings.index', 'uses' => 'SettingsController@index'
        ]);

        Route::post('/social', [
            'as' => 'admin.settings.social', 'uses' => 'SettingsController@postSocial'
        ]);

        //mailer
        Route::group(['prefix' => 'mail'], function () {

            Route::get('/', [
                'as' => 'admin.mail.index', 'uses' => 'SettingsController@mailIndex'
            ]);
            Route::post('/create', [
                'as' => 'admin.mail.create', 'uses' => 'SettingsController@mailCreate'
            ]);

        });

        //Ace Editor
        Route::group(['prefix' => 'env'], function () {

            Route::get('/', [
                'as' => 'admin.setting.environment', 'uses' => 'SettingsController@envShow'
            ]);

            Route::post('/create', [
                'as' => 'admin.setting.environment.create', 'uses' => 'SettingsController@envCreate'
            ]);

        });

        //notification
        Route::get('/notification', [
            'as' => 'admin.notification.index', 'uses' => 'SettingsController@notification'
        ]);
        Route::post('notification/create', [
            'as' => 'admin.notification.create', 'uses' => 'SettingsController@notificationCreate'
        ]);

        //

    });


});

/*
|--------------------------------------------------------------------------
| Guest Routes
|--------------------------------------------------------------------------
| Guest routes cannot be accessed if the user is already logged in.
| He will be redirected to '/" if he's logged in.
|
*/

Route::group(['middleware' => ['guest', 'setting']], function () {

    Route::get('login', [
        'as' => 'login', 'uses' => 'AuthController@login'
    ]);

    Route::get('register', [
        'as' => 'register', 'uses' => 'AuthController@register'
    ]);

    Route::post('login', [
        'as' => 'login.post', 'uses' => 'AuthController@postLogin'
    ]);

    Route::get('forgot-password', [
        'as' => 'forgot-password.index', 'uses' => 'ForgotPasswordController@getEmail'
    ]);

    Route::post('/forgot-password', [
        'as' => 'send-reset-link', 'uses' => 'ForgotPasswordController@postEmail'
    ]);

    Route::get('/password/reset/{token}', [
        'as' => 'password.reset', 'uses' => 'ForgotPasswordController@GetReset'
    ]);

    Route::post('/password/reset', [
        'as' => 'reset.password.post', 'uses' => 'ForgotPasswordController@postReset'
    ]);

    Route::get('auth/{provider}', 'AuthController@redirectToProvider');
    Route::get('auth/{provider}/callback', 'AuthController@handleProviderCallback');
});

Route::get('logout', [
    'as' => 'logout', 'uses' => 'AuthController@logout'
]);


Route::get('install', [
    'as' => 'logout', 'uses' => 'AuthController@logout'
]);
