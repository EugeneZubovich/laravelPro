<?php

namespace App\Libs;

use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class Imag
{
    public function __construct()
    {
        set_time_limit(10000);
    }

    public function url($path = null, $directory = null, $name = null)
    {
        if ($path != null || $path != '') {

            if ($directory != null) {
                $dir = public_path() . $directory;
            } else {
                $dir = public_path() . '\uploads';
            }

            $fileName = ($name == null) ? date('y_m_d_h_i_s') . '.jpg' : $name;

            $img = Image::make($path)->resize(990, null, function ($con) {
                $con->aspectRatio();
            });
            $img->save($dir . '/' . $fileName);

            $img = Image::make($path)->resize(200, null, function ($con) {
                $con->aspectRatio();
            });
            $img->save($dir . '/small_' . $fileName);
            
            return $fileName;
            
        } else {
            return false;
        }
    }
}