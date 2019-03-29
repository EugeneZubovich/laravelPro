<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catalog;

class BaseController extends Controller
{
    //
    public function getIndex()
    {
        $catalogs = Catalog::all();
    	return view('index',compact('catalogs'));
    }
}
