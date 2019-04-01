<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stat extends Model
{
    //
    static function getProductStatus($id){
        $status = Stat::where('id',$id)->first;
        //$products = Product::where('user_id',Auth::user()->id)->paginate(10);
        return  $status->name;
    }
}
