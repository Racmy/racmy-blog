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

Route::get('/', 'Admin\HomeController@index')->name('home');

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('showLoginForm');
    Route::post('/_login', 'Auth\LoginController@login')->name('login');
    Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

    /**【Todo】認証ミドルウェアの作成 */
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index');
    Route::resource('/article', 'ArticleController');
    Route::resource('/category', 'CategoryController');
    Route::get('/users', 'UserController@index')->name('users.index');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
