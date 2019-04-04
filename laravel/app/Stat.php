<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
class Stat extends Model
{
    //
    static function getProductStatus($id){
        $status = Stat::where('id',$id);
        $products = Product::where('user_id',Auth::user()->id)->paginate(10);
        return  dd($status);
    }
}
