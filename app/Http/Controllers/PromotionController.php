<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Promotion;

class PromotionController extends Controller
{
    public function index()
    {
        $Promotion = Promotion::all();
        // user 모델(db저장소) 에서 user 정보 다 가져오기

        return response()->json([
            'Promotion' => $Promotion
        ], 200);
    }

    public function indexall()
    {

        $Promotion = Promotion::all();
        // user 모델(db저장소) 에서 user 정보 다 가져오기

        return response()->json([
            'Promotion' => $Promotion
        ], 200);
    }

    public function indexing()
    {

        $nowtime =  date("Y-m-d");

        $Promotion = Promotion::where('enddate','>' , $nowtime)->get();

        return response()->json([
            'Promotion' => $Promotion
        ],200);
    }
    public function indexend()
    {

        $nowtime =  date("Y-m-d");

        $Promotion = Promotion::where('enddate','<' , $nowtime)->get();

        return response()->json([
            'Promotion' => $Promotion
        ],200);
    }
}
