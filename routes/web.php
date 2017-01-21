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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'StaticPagesController@home')->name('home');
Route::get('help', 'StaticPagesController@help')->name('help');
Route::get('about', 'StaticPagesController@about')->name('about');

// get('/', 'StaticPagesController@home');
// get('/help', 'StaticPagesController@help');
// get('/about', 'StaticPagesController@about');

// 如果要使用下面这种方式来渲染 help 链接，则需要先为路由定义 help 路由名称。
// <li><a href="{{ route('help') }}">帮助</a></li>
//
// 在 Laravel 中，我们可以通过在路由后面链式调用 name 方法来为路由指定名称：
// get('/help', 'StaticPagesController@help')->name('help');
//
// 当我们在页面渲染该路由时，route('help') 最终的渲染结果将如下：
// http://sample.app/help
