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

Route::get('test', 'MailController@sendEmail');
Auth::routes();

Route::get('tasks', function() {
	$tasks = DB::table('tasks')->get();
	dd($tasks);
});
Route::get('/home', 'HomeController@index')->name('home');

Route::get('auth/facebook', ['as' => 'auth/facebook', 'uses' => 'Auth\LoginController@redirectToProvider']);
Route::get('auth/facebook/callback', 
	['as' => 'auth/facebook/callback', 
	'uses' => 'Auth\LoginController@handleProviderCallback'
]);

Route::get('login/google', 'GoogleController@redirectToProvider')->name('google.login');
Route::get('login/google/callback', 'GoogleController@handleProviderCallback');