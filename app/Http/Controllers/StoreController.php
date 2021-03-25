<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store;
use App\Food;
use App\Favorite;


class StoreController extends Controller
{
  public function index()
  {
      $favorites = Favorite::all();
      // dd($stores);
      return view('stores.storesIndex', ['favorites' => $favorites]);
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
    
    return view('stores.stores', ['stores' => $stores]);
  }

  public function show($id)
  {
    $store = Store::find($id);
    $reviews = $store->reviews;
    return view('stores.store', ['store'=>$store, 'reviews'=>$reviews]);
  }

  public function favoriteStore($id)
  {
    $store = Store::find($id);
    // dd($store);

    $favorite = new Favorite();

    $favorite->name = $store->name;
    $favorite->link = $store->link;
    $favorite->price = $store->price;
    $favorite->store_id = $store->id;
    // dd($favorite->store_id);
    
    $favorite->user_id = 1;
    

    $favorite->save();

    $favorites = Favorite::all();

    return view('stores.storesIndex', ['favorites' => $favorites]);
  }

  public function destroy($id)
  {
      $favorite = Favorite::find($id);
      // dd($favorite);
      $favorite->delete();

      return redirect()->route('stores.index');
  }
}