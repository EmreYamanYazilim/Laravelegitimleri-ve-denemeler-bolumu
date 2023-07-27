<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class Veritabaniislemleri extends Controller
{

    public function sil()
    {
        DB::table("bilgilerim")->whereId(11)->delete();
    }

    public function ekle()
    {
        DB::table("bilgilerim")->insert([
            "metin"=>"db eklemesi 11"
        ]);
    }

    public function guncelle()
    {
        DB::table("bilgilerim")->whereId(10)->update([
           "metin"=>"Db güncellemesi"
        ]);
    }


    public function listele()
    {
        $veri = DB::table("bilgilerim")->whereId(10)->first();
        echo $veri ->metin;
    }
//
//    public function listele()
//    {
////        $ve  riler=DB::table("bilgilerim")->get(); // veri tabanındaki bilgilerle alakalı tüm kayıylar veriler adında değişkene atıldı
////
////        foreach ($veriler as $key => $bilgi) {
////            echo $bilgi->metin;
////
////        }
//
//        $Veri = DB::table("bilgilerim")->where("id", 2)->first();
//        echo $Veri->metin;
//    }
}
