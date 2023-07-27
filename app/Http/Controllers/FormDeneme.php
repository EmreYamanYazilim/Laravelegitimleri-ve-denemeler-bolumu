<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormDeneme extends Controller
{
    public function Deneme()
    {
        return view('formdeneme');
    }

    public function formDenemefunctionu(Request $request)
    {
        return $request->deneme;
    }
}
