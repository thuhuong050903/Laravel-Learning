<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TinhToanController extends Controller
{
    public function index() {
        return view('tinhToan');
    }
    function tong( Request $request){
            $first = $request -> input('firstNumber');
            $second = $request -> input('secondNumber');
            $tinh = $request ->input('operator');

            switch($tinh){
                case '+':
                    $result = $first + $second;
                    break;
                case '-':
                    $result = $first - $second;
                    break;
                case '*':
                    $result = $first * $second;
                    break;
                case '/':
                    $result = $first / $second;
                    break;
            }
        return view('tinhToan',[
            'result' => $result
        ]);
    }
}
