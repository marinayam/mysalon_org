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
// トップページ

// 初めての方へ
Route::get('/service', function(){
  return view('salon.service');
})->name('service');
// 初めての方へ

// パーマメニュー
Route::get('/perm', function(){
  return view('salon.perm');
})->name('perm');
// パーマメニュー

// マツエクメニュー
Route::get('/extension', function(){
  return view('salon.extension');
})->name('extension');
// マツエクメニュー

// 眉メニュー
Route::get('/eyebrow', function(){
  return view('salon.eyebrow');
})->name('eyebrow');
// 眉メニュー

// おすすめメニュー診断
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
// おすすめメニュー診断

// スタッフ紹介
Route::get('/staff', 'SalonController@index')->name('staff');
// スタッフ紹介

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
Route::post('chart/confirm', 'ChartController@confirm')->name('chart.confirm');
Route::post('/chart/send', 'ContactController@send')->name('chart.send');
Route::get('chart/send', 'ChartController@index');
// カルテ画面

// // 管理者画面
Auth::routes([
    'register' => false,
    'reset'    => false
]);
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    // カルテ顧客情報
    Route::get('salon/index', 'Admin\SalonController@index')->name('salon.index');;
    Route::get('salon/edit', 'Admin\SalonController@edit');
    Route::post('salon/edit', 'Admin\SalonController@update');
    // カルテのご来店きっかけ編集
    Route::get('trigger/create', 'Admin\TriggerController@add');
    Route::post('trigger/create', 'Admin\TriggerController@create');
    Route::get('trigger/index', 'Admin\TriggerController@index')->name('trigger.index');;
    Route::get('trigger/edit', 'Admin\TriggerController@edit');
    Route::post('trigger/edit', 'Admin\TriggerController@update');
    Route::get('trigger/delete', 'Admin\TriggerController@delete');
    // スタッフ紹介
    Route::get('staff/create', 'Admin\StaffController@add');
    Route::post('staff/create', 'Admin\StaffController@create');
    Route::get('staff/index', 'Admin\StaffController@index')->name('staff.index');
    Route::get('staff/edit', 'Admin\StaffController@edit');
    Route::post('staff/edit', 'Admin\StaffController@update');
    Route::get('staff/delete', 'Admin\StaffController@delete');
});
// 管理者画面
