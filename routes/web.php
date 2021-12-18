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

// トップページ
Route::get('/', function(){
  return view('salon/index');
})->name('/');

// パーマメニュー
Route::get('/perm', function(){
  return view('salon/perm');
})->name('perm');

// お問い合わせフォーム
Route::get('/contact', function(){
  return view('salon/contact');
})->name('contact');
Auth::routes();

// カルテ画面
// ログインしていない状態でカルテにアクセスしたら、ログイン画面に戻す
Route::get('/chart', 'ChartController@get')->name('chart')->middleware('auth');

// Route::get('chart/create', 'ChartController@add')->middleware('auth');
// Route::post('chart/create', 'ChartController@create')->middleware('auth');
// Route::get('chart', 'ChartController@index')->middleware('auth'); 
// Route::get('chart/edit', 'ChartController@edit')->middleware('auth');
// Route::post('chart/edit', 'ChartController@update')->middleware('auth'); 
// Route::get('chart/delete', 'ChartController@delete')->middleware('auth'); 
  