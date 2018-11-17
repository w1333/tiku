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

//首页
Route::get('/venue/index','home\IndexController@index');

//列表页
Route::get('/venue/list','home\IndexController@list');

//选择页
Route::get('/venue/choice','home\IndexController@choice');
