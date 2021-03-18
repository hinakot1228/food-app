<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store;

class StoreController extends Controller
{
  public function index()
  {
      
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




}