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
 // 'middleware' => 'admin'
], function(){

    // Dashboard
    //----------------------------------
    Route::get('/', [
        'as' => 'admin.dashboard', 'uses' => 'DashboardController@index'
    ]);
    Route::resource('users', 'UsersController');


    // Settings
    //----------------------------------
    Route::group(['prefix' => 'settings'], function(){

        Route::get('/social', [
            'as' => 'admin.settings.index', 'uses' => 'SettingsController@index'
        ]);

        Route::post('/social', [
            'as' => 'admin.settings.social', 'uses' => 'SettingsController@postSocial'
        ]);

        Route::group(['prefix' => 'mail'], function(){

            Route::get('/', [
                'as' => 'admin.settings.mail.index', 'uses' => 'SettingsController@mail'
            ]);

            Route::post('/', [
                'as' => 'admin.settings.mail.post', 'uses' => 'SettingsController@postMail'
            ]);

            Route::post('/send-test-email', [
                'as' => 'admin.settings.mail.send', 'uses' => 'SettingsController@sendTestMail'
            ]);
        });

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

Route::group(['middleware' => ['guest']], function(){

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
