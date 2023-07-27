<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Yonet extends Controller
{


    public function site()
    {
        $Data["yazi1"] = "PHP Türkiye";
        $Data["yazi2"] = "Websitemize Hoşgeldiniz <3";
        $Data["yazi3"] = "Hizmetlerimiz";
        $Data["yazi4"] = "Web Tasarım ve Yazılım Hizmetlerimiz";
        $Data["yazi5"] = "Bize Ulaşın";
        return view('web',$Data);
    }

}

