<?php

namespace App\Http\Controllers;

use App\Catalog;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    //
    public function getAll(){
        $cats = Catalog::orderBy('name')->paginate(10);
        return view('catalog',compact('cats'));

    }

    public function getOne($id = null){
        $obj = Catalog::find($id);
        return view('catalog-one', compact('obj'));
    }
}
