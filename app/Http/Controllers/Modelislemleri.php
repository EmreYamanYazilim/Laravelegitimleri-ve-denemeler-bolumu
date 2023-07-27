<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\bilgilerim;

class Modelislemleri extends Controller
{

//    public function liste()
//    {
//        $bilgi = bilgilerim::where("id",5)->first();
//         echo $bilgi->metin;
//    }
//

//    public function liste()
//    {
//        $bilgi = bilgilerim::whereId(6)->first();
//        echo $bilgi->metin;
//    }

//    public function liste()
//    {
//
//        $bilgi = bilgilerim::find(5);
//        echo $bilgi->metin;
//    }

    public function ekle()
    {
        bilgilerim::create([
            "metin" => "model dosyası olarak  model işlemleri controller içinden  create yaparak eklendi",

        ]);
    }

    public function guncelle()
    {
        bilgilerim::whereId(6)->update([
            "metin" => "bu alan model update ile güncellendi",
        ]);
    }

    public function sil()
    {
        bilgilerim::whereId(9)->delete();
    }
}
