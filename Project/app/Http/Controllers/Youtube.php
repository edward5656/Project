<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\support\facedes\views;
class Youtube extends Controller
{
    function index()
    {
        if (View::exists('user'))
        {
            return views('users',['name'=>"peter"]);
        }
        else
        {
            return view('settings');
        }

    }


}
