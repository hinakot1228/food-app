<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/index', function () {
    return view('index');
});
Route::get('/storesindex', function () {
    return view('stores.storesIndex');
});
Route::get('/signup', function () {
    return view('users.signup');
});
Route::get('/signin', function () {
    return view('users.signin');
});
Route::get('/user', function () {
    return view('users.user');
});
Route::get('/useredit', function () {
    return view('users.userEdit');
});

Route::get('/reviewcreate', function () {
    return view('reviews.reviewCreate');
});

Route::get('/storecreate', function () {
    return view('stores.storeCreate');
});

Route::get('/stores', function () {
    return view('stores');
});

Route::get('/store', function () {
    return view('stores.store');
});

// Route::get('/reviewcreate', function () {
//     return view('reviewCreate');
// });

// レビュー作成画面のcreate機能
// create.blade.phpの見た目を表示するためのルーティング
Route::get('/reviews/create', 'ReviewController@create')->name('reviews.create');
// 保存処理
Route::post('/reviews', 'ReviewController@store')->name('reviews.store');
