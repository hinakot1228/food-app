<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store;
use App\Food;

class StoreController extends Controller
{
  public function index()
  {
      $stores = Store::all();
      // dd($stores);
      return view('stores.storesIndex', ['stores' => $stores]);
  }

  public function create()
    {
        return view('stores/storeCreate');
    } 

    
  public function store(Request $request)
  {
        // dd($request);
        // die;

        $store = new Store();

        $store->name = $request->name;
        $store->featured_food = $request->featured_food;
        $store->link = $request->link;
        $store->price = $request->price;
        $store->genre = $request->genre;
        $store->main_dish = $request->main_dish;

        // $store->user_id = 1;

        $store->save();

        return redirect()->route('stores.create');

  }

  public function searchIndex($id)
  {
    $food = Food::find($id);
    $genre= Food::find($id)->genre;
    $maindish= Food::find($id)->main_dish;
    // dd($food);

    $stores = Store::where('genre', $genre)->where('main_dish', $maindish)->get();
    // dd($stores);

    // $stores = Store::all();
    // dd($stores);

    // dd($request);
    // 料理一覧画面から送られてきた値を取得
    // $genre_keyword = $request->genre;
    // $maindish_keyword = $request->input('maindish');
    // dd($genre);
    // dd($main_dish);

    // ジャンル・主菜のキーワードに該当する食べ物名を取得
    // $foods = Food::with('genre', $genre_keyword)->where('main_dish', $maindish_keyword)->get();

    // dd($food);

    return view('stores.stores', ['stores' => $stores]);
  }

}