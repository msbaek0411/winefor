<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\House;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $House = House::all();
        // user 모델(db저장소) 에서 user 정보 다 가져오기

        return response()->json([
            'House' => $House
        ], 200);
    }

    public function index2($i)
    {
        $House = House::where('locaid', $i)->get();

        return response()->json([
            'House' => $House
        ],200);
    }
    
    public function priceindex($i)
    {
        $price = House::where('locaid', $i)->get();

        if ( $i == 1) {
            // $House = House::where('price','>',300000)->get();
            $price = House::where('price','>',200000)->where('price','<',300000)->get();
        }else if ( $i == 2) {
            $price = House::where('price','>',300000)->where('price','<',400000)->get();
        }else if ( $i == 3) {
            $price = House::where('price','>',400000)->where('price','<',500000)->get();
        }else if ( $i == 4) {
            $price = House::where('price','>',500000)->get();
        }

        return response()->json([
            'price' => $price
        ],200);

        // 1 5 ~ 10 
        // 2 10 ~ 15
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(House $id)
    {
        return view('house', [
            'id' => $id
        ]);
    }
    
    public function kakaoshow(House $id)
    {
        return view('kakao', [
            'id' => $id
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
