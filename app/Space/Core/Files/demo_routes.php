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
//    'middleware' => 'admin'
], function () {

    //Main Dashboard

    Route::get('/', [
        'as' => 'admin.dashboard', 'uses' => 'DashboardController@index'
    ]);

    Route::resource('users','UsersController');

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
                'as' => 'admin.mail.index', 'uses' => 'SettingsController@mail'
            ]);
            Route::post('/create', [
                'as' => 'admin.mail.create', 'uses' => 'SettingsController@postMail'
            ]);

        });

        //Ace Editor
        Route::group(['prefix' => 'env'], function () {

            Route::get('/', [
                'as' => 'admin.setting.environment', 'uses' => 'SettingsController@environment'
            ]);

            Route::post('/create', [
                'as' => 'admin.setting.environment.create', 'uses' => 'SettingsController@postEnvironment'
            ]);

        });

        //notification
        Route::get('/notification', [
            'as' => 'admin.notification.index', 'uses' => 'SettingsController@notification'
        ]);
        Route::post('notification/create', [
            'as' => 'admin.notification.create', 'uses' => 'SettingsController@postNotification'
        ]);

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

Route::group(['middleware' => ['guest','setting']], function () {

    Route::get('login', [
        'as' => 'login', 'uses' => 'AuthController@login'
    ]);

    Route::get('register', [
        'as' => 'register', 'uses' => 'AuthController@register'
    ]);

    Route::post('login', [
        'as' => 'login.post', 'uses' => 'AuthController@postLogin'
    ]);

    Route::get('auth/{provider}', 'AuthController@redirectToProvider');
    Route::get('auth/{provider}/callback', 'AuthController@handleProviderCallback');
});

Route::get('logout', [
    'as' => 'logout', 'uses' => 'AuthController@logout'
]);
