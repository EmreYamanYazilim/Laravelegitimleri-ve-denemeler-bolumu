<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResimYukleController extends Controller
{
    public function resimyukleme1(Request $request)
    {
         $ResimAdi = rand(0,1000).".".$request->resim->getClientOriginalExtension();
         $Yukle = $request->resim->move(public_path("images"),$request->resim->getClientOriginalExtension()); // takma isim vererek yükleme

//        $Yukle = $request->resim->move(public_path("images"),$request->resim->getClientOriginalName());   direk ismiyle yüklemek istersek
    }
}
