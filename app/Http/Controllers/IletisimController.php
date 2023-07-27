<?php

namespace App\Http\Controllers;

use App\Models\iletisimModel;
use Illuminate\Http\Request;


class IletisimController extends Controller
{
    public function index()
    {
        return view("iletisim");
    }

    public function ekleme(Request $request)
    {
        $Adsoyad = $request->isimsoyisim;
        $Email   = $request->email;
        $Telefon = $request->tel;
        $Metin   = $request->metin;
        iletisimModel::create([
            "adsoyad"   => $Adsoyad,
            "email"     => $Email,
            "telefon"   => $Telefon,
            "metin"     => $Metin,

        ]);
        echo "bilgileriniz başarı ile kaydedildi ";
    }
}
