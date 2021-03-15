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

Route::get('/storesindex', function () {
    return view('storesIndex');
});
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/signin', function () {
    return view('signin');
});
Route::get('/user', function () {
    return view('user');
});
Route::get('/useredit', function () {
    return view('userEdit');
});
// Route::get('/reviewcreate', function () {
//     return view('reviewCreate');
// });

// レビュー作成画面のcreate機能
// create.blade.phpの見た目を表示するためのルーティング
Route::get('/reviews/create', 'ReviewController@create')->name('reviews.create');
// 保存処理
Route::post('/reviews', 'ReviewController@store')->name('reviews.store');

// Route::get('/posts/create', 'PostController@create')->name('posts.create');
// // 保存処理
// Route::post('/posts', 'PostController@store')->name('posts.store');