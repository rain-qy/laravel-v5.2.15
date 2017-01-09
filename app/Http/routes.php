<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', 'TestController@test');
Route::get('/contact', 'TestController@contact');

//单个路由注册
//Route::get('/articles', 'ArticlesController@index');
//Route::get('/articles/create', 'ArticlesController@create');
//Route::get('/articles/tt/{id}', 'ArticlesController@tt');
//Route::get('/articles/{id}', 'ArticlesController@show');
//Route::post('/articles/store', 'ArticlesController@store');
//注册文件目录路由
Route::resource('articles','ArticlesController');

//注册
Route::get('auth/register','Auth\AuthController@getRegister');
Route::post('auth/register','Auth\AuthController@postRegister');

//登录
Route::get('auth/login','Auth\AuthController@getLogin');
Route::post('auth/login','Auth\AuthController@postLogin');

//登出
Route::get('auth/logout','Auth\AuthController@logout');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
