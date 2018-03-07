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

Route::get('/terms-of-use',[
	'uses' => 'SocialController@terms',
	'as' => 'social.terms'
]);

Route::get('/privacy-policy',[
	'uses' => 'SocialController@privacy',
	'as' => 'social.privacy'
]);

Route::get('/logout',[
	'uses' => 'SocialController@logout',
	'as' => 'social.logout'
]);

Route::get('/users',[
	'uses' => 'UsersController@index',
	'as' => 'users.index'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/login/facebook',[
	'uses' => 'SocialController@redirectToProvider',
	'as' => 'social.auth'
]);

Route::get('/login/facebook/callback',[
	'uses' => 'SocialController@handleProviderCallBack',
	'as' => 'social.callback'
]);
