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

// マツエクメニュー
Route::get('/extension', function(){
  return view('salon/extension');
})->name('extension');

// お問い合わせフォーム
Route::get('/contact', function(){
  return view('salon/contact');
})->name('contact');

// 管理者認証不要
Route::group(['prefix' => 'admin'], function() {
    Route::get('/',function () { return redirect('/admin/home'); });
    Route::get('login','Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('login','Admin\LoginController@login');
});


// 管理者認証必要
Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function() {
    Route::post('logout','Admin\LoginController@logout')->name('admin.logout');
    Route::get('home','Admin\HomeController@index')->name('admin.home');
    
// カルテ画面
Route::get('chart/create', 'ChartController@add')->name('chart/create');
Route::post('chart/create', 'ChartController@create');



// Route::get('/chart/creat', function(){
//   return view('chart/create');
// })->name('chart');

// function(){
//     Route::get('chart/create','ChartController@add')->name('chart');
//     Route::post('chart/create','ChartController@create'); 

// };




// アカウント作成
// Route::get('/register', function(){
//   return view('auth/register');
// })->name('register');
// ログインしていない状態でカルテにアクセスしたら、ログイン画面に戻す

// Route::get('/chart', function(){
//   return view('chart/create');
// })->name('chart')
// ->middleware('auth');


// Route::group(['middleware' => 'auth'], function(){
// Route::get('/chart', 'ChartController@get')->name('chart');
// Route::get('chart/create','ChartController@add');
// Route::post('chart/create','ChartController@create'); 
// });

  