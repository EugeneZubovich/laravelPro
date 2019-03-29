<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Libs\Imag;
use App\Product;
use Auth;
use App\Catalog;
use Illuminate\Support\Facades\App;

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
        $products = Product::where('user_id',Auth::user()->id)->paginate(10);
        return view('home', compact('catalog','products'));
    }

    /**
     * @param ProductRequest $r
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postIndex(ProductRequest $r)
    {
        //dd($r->all());
        if ($_FILES['image1']) {
            $pic = App::make(\App\Libs\Imag::class)->url($_FILES['image1']['tmp_name'],'',$_FILES['image1']['name']);
        } else {
            $pic = '';
        }
        $r['user_id'] = Auth::user()->id;
        $r['image'] = $pic;
        Product::create($r->all());
        return redirect()->back();
    }

    public function deleteItem(){
        //TODO сделать удаление элемента(с проверкой SWAl или growl)
    }
}
