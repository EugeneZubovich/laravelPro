<?php

namespace App\Http\Controllers;


class SettingsController extends Controller
{
    //
    public function cookieClear()
    {
        setcookie('lang', '', time() - 1);
        return redirect('/home');
    }
}
