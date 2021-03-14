<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;

class ReviewController extends Controller
{
    //
    public function index()
    {
        
    }

    public function create()
    {
        return view('reviews.create');
    } 

    public function store(Request $request)
    {
        $review = new Review;

        $review->birth = $request->birth;
        $review->star = $request->star;
        $review->comment = $request->comment;

        $review->user_id = 1;

        $review->save();

        return redirect()->view('user');
    }
}
