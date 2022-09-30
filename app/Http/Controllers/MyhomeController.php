<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Myhome;
use App\House;

class MyhomeController extends Controller
{
    public function index()
    {
        $Myhome = Myhome::where(function($query) {
            $query->where('userid', request('userid'));
        })->latest()->get();
        // user 모델(db저장소) 에서 user 정보 다 가져오기

        return response()->json([
            'Myhome' => $Myhome
        ], 200);
    }


    public function indexverification($i)
    {
        $Myhome = Myhome::where('houseid', $i)->get();

        return response()->json([
            'Myhome' => $Myhome,
            // 'house' => $house
        ], 200);
    }


    public function store() {
        $validated = request()->validate([
            'userid' => 'required',
            'houseid' => 'required',
            'location' => 'required',
            'price' =>  'required',
            'img1' =>  'required',
            'img2'=>  'required',
            'img3'=>  'required'
            // 'update'=>'required',
        ]);

        $Myhome = Myhome::create($validated);

        return response()->json([
            'Myhome' => $Myhome
        ], 201);


    }
    public function destory($i)
    {
        // data 생성 
        // $ChatList = ChatList::find($i);
        // $ChatList->delete();
        Myhome::where('id', $i)->delete();
              
        
    }
    
    public function destorytwo($i)
    {
        // data 생성 
        // $ChatList = ChatList::find($i);
        // $ChatList->delete();
        Myhome::where('houseid', $i)->delete();
              
        
    }
}
