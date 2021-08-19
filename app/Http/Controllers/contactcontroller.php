<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class contactcontroller extends Controller
{
    function show(){
        $name="rk uni";
        return view ('contact' ,['data'=>$name]);
    }
}
