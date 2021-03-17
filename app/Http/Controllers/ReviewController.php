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
        return view('reviews/reviewCreate');
    } 

    public function store(Request $request)
    {
        // dd($request);
        // die;

        $review = new Review;

        $review->date = $request->date;
        $review->stars = $request->stars;
        $review->comment = $request->comment;

        $review->user_id = 1;
        $review->store_id = 1;

        $review->save();

        return view('user');
    }
}
