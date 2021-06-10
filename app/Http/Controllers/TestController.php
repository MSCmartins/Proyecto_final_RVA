<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;

class TestController extends Controller
{
    public function store(Request $request){
        $test = new Test();
        $test->username = 'prueba';
        $test->hash = 'p';
        $test->salt = 'op';
        $test->score = $request->score;
        $test->save();
    }

    public function index(){
        $test = Test::all();
        return response()->json(
            ['lista' => $test]
        );
    }
}
