<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Product;
use Auth;
use App\Catalog;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catalog = Catalog::all();
        return view('home',compact('catalog'));
    }

    /**
     * @param ProductRequest $r
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postIndex(ProductRequest $r){
        //dd($r->all());
        $r['user_id'] = Auth::user()->id;
        Product::create($r->all());
        return redirect()->back();
    }
}
