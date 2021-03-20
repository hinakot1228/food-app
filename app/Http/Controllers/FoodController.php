<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;

class FoodController extends Controller
{
    //
    public function index()
    {
        return view('searches.foodsIndex');
    }

    public function search(Request $request)
    {
        // index.blade.phpのフォームから送られてきた値を取得
        $genre_ketword = $request->input('genre');
        $maindish_ketword = $request->input('maindish');
        // dd($genre_ketword);
        // dd($maindish_ketword);

        // ジャンル・主菜のキーワードに該当する食べ物名を取得
        $food = Food::where('genre', $genre_ketword)->where('main_dish', $maindish_ketword)->get();
        // dd($food);

        // $foodName = $food->name;
        // dd($foodName);

        return view('searches.foodsIndex', ['food'=>$food]);

    }
}
