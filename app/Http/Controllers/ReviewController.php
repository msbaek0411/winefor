<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;

class ReviewController extends Controller
{
    public function index()
    {
        $Review = Review::all();
        // user 모델(db저장소) 에서 user 정보 다 가져오기

        return response()->json([
            'Review' => $Review
        ], 200);
    }


}
