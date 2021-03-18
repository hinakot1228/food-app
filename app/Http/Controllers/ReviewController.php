<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\User;

class ReviewController extends Controller
{
    public function index()
    {
        // $user = Review::find(1)->user->name;
        // dd($user);

        $reviews = Review::all();
        return view('stores/store', ['reviews'=>$reviews]);
    }

    public function create()
    {
        return view('reviews/reviewCreate');
    } 

    public function store(Request $request)
    {
        $review = new Review;

        $review->date = $request->date;
        $review->stars = $request->stars;
        $review->comment = $request->comment;

        $review->user_id = 1;
        $review->store_id = 1;

        $review->save();

        return view('users.user');
    }
}
