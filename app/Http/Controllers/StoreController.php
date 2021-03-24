<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store;
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

  public function show($id)
  {
    $store = Store::find($id);
    $reviews = $store->reviews;
    return view('stores.store', ['store'=>$store, 'reviews'=>$reviews]);
  }

  

}