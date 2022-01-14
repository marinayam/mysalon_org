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
  return view('salon.index');
})->name('/');

// 初めての方へ
Route::get('/service', function(){
  return view('salon.service');
})->name('service');

// パーマメニュー
Route::get('/perm', function(){
  return view('salon.perm');
})->name('perm');

// マツエクメニュー
Route::get('/extension', function(){
  return view('salon.extension');
})->name('extension');

// 眉メニュー
Route::get('/eyebrow', function(){
  return view('salon.eyebrow');
})->name('eyebrow');

// マッチング
// 質問：自まつ毛が多い
Route::get('/match', function(){
  return view('salon.match');
})->name('match');
// 質問：まつ毛が下がっている
Route::get('/match2', function(){
  return view('salon.match2');
})->name('match2');
// 質問：汗をかきやすい
Route::get('/match3', function(){
  return view('salon.match3');
})->name('match3');
// 4択問題
Route::get('/match4', function(){
  return view('salon.match4');
})->name('match4');

// 答え：ナチュラル
Route::get('/answer1', function(){
  return view('salon.answer1');
})->name('answer1');
// 答え：ぱっちり
Route::get('/answer2', function(){
  return view('salon.answer2');
})->name('answer2');
// 答え：ゴージャス&エレガント
Route::get('/answer3', function(){
  return view('salon.answer3');
})->name('answer3');

// スタッフ紹介
Route::get('/staff', 'SalonController@index')->name('staff');

// お問い合わせフォーム
//入力ページ
Route::get('/contact', 'ContactController@index')->name('contact.index');
//確認ページ
Route::post('/contact/confirm', 'ContactController@confirm')->name('contact.confirm');
//送信完了ページ
Route::post('/contact/thanks', 'ContactController@send')->name('contact.send');
// お問い合わせフォーム

// カルテ画面
Route::get('chart/create', 'ChartController@add')->name('chart/create');
Route::post('chart/create', 'ChartController@create');
Route::get('chart/send', 'ChartController@index');


// 管理者認証必要
// Auth::routes();
// Route::get('/register', function(){
//   return redirect('/');
// });

// 管理者画面
Route::group(['prefix' => 'admin'], function() {
    // カルテ顧客情報
    Route::get('salon/index', 'Admin\SalonController@index');
    Route::get('salon/edit', 'Admin\SalonController@edit');
    Route::post('salon/edit', 'Admin\SalonController@update');
    // スタッフ紹介
    Route::get('staff/create', 'Admin\StaffController@add');
    Route::post('staff/create', 'Admin\StaffController@create');
    Route::get('staff/index', 'Admin\StaffController@index');
    Route::get('staff/edit', 'Admin\StaffController@edit');
    Route::post('staff/edit', 'Admin\StaffController@update');
    Route::get('staff/delete', 'Admin\StaffController@delete');
});



// Route::get('/admin/salon/index', function () {
//     return view('admin/index');
// })->name('login');

// // 管理者認証不要
// Route::group(['prefix' => 'admin'], function() {
//     Route::get('/',function () { return redirect('/admin/home'); });
//     Route::get('login','Admin\LoginController@showLoginForm')->name('admin.login');
//     Route::post('login','Admin\LoginController@login');
// });


// // 管理者認証必要
// Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function() {
//     Route::post('logout','Admin\LoginController@logout')->name('admin.logout');
//     Route::get('home','Admin\HomeController@index')->name('admin.home');
    
// });

