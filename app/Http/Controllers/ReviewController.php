<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\House;

class ReviewController extends Controller
{
    public function index($i)
    {
        $Review = Review::where('houseid', $i)->get();

        return response()->json([
            'Review' => $Review
        ],200);

    }


    public function show()
    {
        return view('house', [
            'ids' => $ids
        ]);
    }

    public function store() {
        $validated = request()->validate([
            'title' => 'required',
            'contents' => 'required',
            'userid' => 'required',
            'username' => 'required',
            'houseid' => 'required',
            'housename' => 'required',
            'count' => 'required',
        ]);
        



        $Review = Review::create($validated);

        return response()->json([
            'Review' => $Review
        ], 201);

    }


}
