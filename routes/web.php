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

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('showLoginForm');
    Route::post('/_login', 'Auth\LoginController@login')->name('login');
    Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

    /**【Todo】認証ミドルウェアの作成 */
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard.index');
    Route::get('/articles', 'ArticleController@index')->name('articles.index');
    Route::get('/category', 'CategoryController@index')->name('category.index');
    Route::get('/users', 'UserController@index')->name('users.index');
});