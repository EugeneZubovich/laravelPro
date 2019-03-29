<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Maintext;

class StaticController extends Controller
{
    //
    public function getIndex($url = 'index'){
        //$obj = Maintext::where('url',$url)->first();
        //return view('static', compact('obj'));

        return view($url);
    }
    
}
