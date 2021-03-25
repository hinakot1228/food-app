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
Route::get('/index', function () {
    return view('Index');
});
Route::get('/', function () {
    return view('index');
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

Route::get('/reviewcreate', function () {
    return view('reviewCreate');
});

Route::get('/storecreate', function () {
    return view('storeCreate');
});
// Route::get('/stores', function () {
//     return view('stores.stores');
// });

Route::get('/store', function () {
    return view('stores.store');
});
// Route::get('/store', function () {
//     return view('store');
// });

Route::get('/foodsindex', function () {
    return view('foodsIndex');

});

// Route::get('/reviewcreate', function () {
//     return view('reviewCreate');
// });

// レビュー作成画面の投稿機能
// create.blade.phpの見た目を表示するためのルーティング
Route::get('/reviews/create', 'ReviewController@create')->name('reviews.create');
// 保存処理
Route::post('/reviews', 'ReviewController@store')->name('reviews.store');


// お店登録画面のcreate機能
// storeCreate.blade.phpの見た目を表示するためのルーティング
Route::get('/stores/create', 'StoreController@create')->name('stores.create');
// 保存処理
Route::post('/stores', 'StoreController@store')->name('stores.store');


// キーワード該当した料理一覧画面
Route::get('/foods', 'FoodController@index')->name('foods.index');

// 検索機能
Route::post('/foods', 'FoodController@search');

// キーワード該当した料理一覧画面
Route::get('/search', 'SearchController@index')->name('searches.index');

// レビューの一覧機能
Route::get('/store', 'ReviewController@index')->name('reviews.index');

// レビューの削除機能
Route::delete('/store/{review}', 'ReviewController@destroy')->name('reviews.destroy');

//お店画面のRead機能
Route::get('/stores', 'StoreController@index')->name('stores.index');

// 検索機能のあとのお店一覧
Route::get('/stores/search/{id}', 'StoreController@searchIndex')->name('stores.searchIndex');

// 店舗の詳細画面
// {}の中にはstore_idが入る
Route::get('/stores/{store}', 'StoreController@show')->name('stores.show');

// お気に入りに登録する
Route::get('/favorites/{id}', 'StoreController@favoriteStore')->name('stores.favoriteStore');

// お気に入りの削除機能
Route::delete('/stores/delete/{store}', 'StoreController@destroy')->name('stores.destroy');