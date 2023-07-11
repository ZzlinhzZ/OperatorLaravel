<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function getData(REQUEST $request){
        $pt = $request->input('btnSubmit');
        $a = $request->input('txtA');
        $b = $request->input('txtB');
        $rs = "abc";
        function pheptinh($pt, $a, $b){
            if ($pt=="+") {
                return $a + $b;
            }else if ($pt=="-") {
                return $a-$b;
            }else if ($pt=="*") {
                return $a*$b;
            }else if ($pt=="/") {
                return $a/$b;
            }
        }
        if ($pt == '+') {
            $result = pheptinh($pt, $a, $b);
            $rs = "$a $pt $b = $result";
        }
        if ($pt == '-') {
            $result = pheptinh($pt, $a, $b);
            $rs =  "$a $pt $b = $result";
        }if ($pt == '*') {
            $result = pheptinh($pt, $a, $b);
            $rs =  "$a $pt $b = $result";
        }
        if ($pt == '/') {
            if ($b!=0) {
                $result = pheptinh($pt, $a, $b);
                $rs =  "$a $pt $b = $result";
            }else{
                $rs = "không thể chia cho 0";
            }
        }
        // return view('welcome', compact('request', 'rs'));
        return view('welcome', ['rs'=>$rs]);
    }
}


