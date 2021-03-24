<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;

class FoodController extends Controller
{
    //
    // public function index()
    // {
    //     return view('searches.foodsIndex');
    // }

    public function search(Request $request)
    {
        // index.blade.phpのフォームから送られてきた値を取得
        $genre_keyword = $request->input('genre');
        $maindish_keyword = $request->input('maindish');
        // dd($genre_keyword);
        // dd($maindish_keyword);

        // ジャンル・主菜のキーワードに該当する食べ物名を取得
        $foods = Food::where('genre', $genre_keyword)->where('main_dish', $maindish_keyword)->get();
        // dd($food);

        // $foodName = $food->name;
        // dd($foodName);

        return view('searches.foodsIndex', ['foods'=>$foods]);
    }
}
