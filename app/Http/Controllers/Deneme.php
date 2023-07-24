<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Deneme extends Controller
{
    function denemeControllerFunctionu($isim)
    {
        return view('deneme', ['takmaad' => $isim]);
    }
}
