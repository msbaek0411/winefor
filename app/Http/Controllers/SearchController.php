<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\House;

class SearchController extends Controller
{
    public function index()
    {
        return view('search');
    }

    public function store($i)
    {
        $House = House::where('location','like' , "%$i%")->get();
        

        return response()->json([
            'House' => $House
        ],200);
    }
}
