<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function translate(Request $request)
    {
        $oneInput = $request->name;
        $words = ['one' => '1', 'two' => '2', 'black' => 'màu đen', 'book' => 'quyển vở'];
        foreach ($words as $key => $value) {
            if ($oneInput == $key) {
                $result = $value;
            }
        }
        return view('index',compact('result'));
    }
}