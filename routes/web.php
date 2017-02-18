<?php

/**
 * @author  D3lph1 <d3lph1.contact@gmail.com>
 */

Route::group(['namespace' => 'Auth'], function () {
    // Render sign in page
    Route::get('/signin', 'SignInController@render')
        ->name('signin')
        ->middleware('guest');

    // Authorize user by POST-request
    Route::post('/signin', 'SignInController@signin')->middleware('guest');

    // Logout user
    Route::get('/logout', 'SignInController@logout')
        ->name('logout')
        ->middleware('auth');

    // Render sign up page
    Route::get('/signup', 'SignUpController@render');

    // Register user
    Route::post('/signup', 'SignUpController@signup');

    // Render select server page
    Route::get('/servers', 'SelectServerController@render')->name('servers');
});

Route::group(['namespace' => 'Shop', 'where' => ['server' => '\d+']], function () {
    // Route of main shop page
    Route::get('/server/{server}/{category?}', 'CatalogController@render')
        ->name('catalog')
        ->middleware('shop')
        ->where([
            'server' => '\d+',
            'category' => '\d+'
        ]);

    Route::get('/server/{server}/cart', 'CartController@render')
        ->middleware('shop')
        ->name('cart');

    Route::post('/server/{server}/cart', 'CartController@buy')
        ->name('cart.buy');

    Route::get('/server/{server}/buy', 'CatalogController@buy')
        ->name('catalog.buy');

    Route::post('/server/{server}/cart/put/{product}', 'CartController@put')
        ->name('cart.put')
        ->where([
            'product' => '\d+'
        ]);

    Route::post('/server/{server}/cart/remove/{product}', 'CartController@remove')
        ->name('cart.remove')
        ->where([
            'product' => '\d+'
        ]);
});

Route::group(['namespace' => 'Payment'], function () {
    Route::get('/server/{server}/pay/cart/{payment}', 'PaymentController@render')
        ->name('payment.cart')
        ->middleware('shop')
        ->where('server', '\d+');

    Route::any('/payment/result/robokassa', 'ResultController@robokassa');
    Route::any('/payment/success/robokassa', 'SuccessController@robokassa');
    Route::any('/payment/error/robokassa', 'ErrorController@robokassa');
});
