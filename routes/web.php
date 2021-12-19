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
// アカウント作成
// Route::get('/register', function(){
//   return view('auth/register');
// })->name('register');
// ログインしていない状態でカルテにアクセスしたら、ログイン画面に戻す

Route::get('/chart', function(){
  return view('chart/create');
})->name('chart')
->middleware('auth');


Route::group(['middleware' => 'auth'], function(){
Route::get('/chart', 'ChartController@get')->name('chart');
Route::get('chart/create','ChartController@add');
Route::post('chart/create','ChartController@create'); 
});

  