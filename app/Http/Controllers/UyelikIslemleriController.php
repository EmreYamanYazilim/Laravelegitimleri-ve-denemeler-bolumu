<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UyelikIslemleriController extends Controller
{
    public function uyekayitfunction(Request $request)
    {
        $request->validate([
            "isimsoyisim" => "required|min:3|max:55",
            "tel" => "required|min:10|max:12",
            "mail" => "required|email"

        ]);
        echo "Form bilgileri başarıyıla filitreden Valdationdan geçti";

    }
}
