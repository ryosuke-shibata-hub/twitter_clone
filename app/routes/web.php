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
// Rute::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function ()
{
    Route::get('tweets', 'TweetsController@index')->name('home');
    Route::post('/tweets','TweetsController@store')->name('tweet');

    Route::post('profiles/{user}/follow', 'FollowController@store')->name('following');
    Route::get('profiles/{user}/edit', 'ProfilesController@edit')->name('profiles.edit')
    ->middleware('can:edit,user');

    Route::PATCH('/profiles/{user}','ProfilesController@update')->name('profiles.update')
    ->middleware('can:edit,user');
});

Route::get('/profiles/{user}','ProfilesController@show')->name('profiles.show');

Route::get('/explore','ExploreController');

Auth::routes();