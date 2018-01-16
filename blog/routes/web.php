<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/testing', function() {
//     return "testing";
// });

Route::get('/testing', "TestController@HelloWorld");

Route::get('/testing-redirect', "TestController@Redirect");
