<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Yonet;
use App\Http\Controllers\Formislemleri;
use App\Http\Controllers\FormDeneme;
use App\Http\Controllers\Veritabaniislemleri;
use App\Http\Controllers\Modelislemleri;
use App\Http\Controllers\IletisimController;
use App\Http\Controllers\ResimYukleController;
use App\Http\Controllers\UyelikIslemleriController;


Route::get('/', function () {
    return view('welcome');

});

//Route::get("/web", [Yonet::class,'site'])->name('web1');

//Route::get("/web", [Yonet::class,'site'])->name('web1');
//
//
//Route::get("/form",[Formislemleri::class,'gorunum']);
//Route::post("/form-sonuc",[Formislemleri::class,'sonuc'])->middleware('arakontrol')->name('sonuc1');

Route::get("/denemeformu", [FormDeneme::class, 'Deneme']);
Route::post('/deneme-sonuc', [FormDeneme::class,'formDenemefunctionu'])->middleware('armut')->name('sonuc');

Route::get("/ekle",[Veritabaniislemleri::class,'ekle']);
Route::get("/guncelle",[Veritabaniislemleri::class,'guncelle']);
Route::get("/sil", [Veritabaniislemleri::class,"sil"]);
Route::get("/listele", [Veritabaniislemleri::class,"listele"]);
Route::get("/modelliste", [Modelislemleri::class, "liste"]);
Route::get("/modelcreate", [Modelislemleri::class,"ekle"]);
Route::get("/modelguncelle", [Modelislemleri::class,"guncelle"]);
Route::get("/modelsil", [Modelislemleri::class,"sil"]);

Route::get("/iletisim",[IletisimController::class,"index"]);
Route::post("/iletisim-sonuc", [IletisimController::class, "ekleme"])->name("kaydetme");

Route::get("/uploads", function () {
    return view("upload");
});
Route::post("/resimyukleme",[ResimYukleController::class,"resimyukleme1"])->name("yukle");


Route::get("/uye", function () {
    return view("uyelik");
});
Route::post("/uye-kayıt", [UyelikIslemleriController::class,"uyekayitfunction"])->name("uyekayit");

Route::get("/tema", function () {
    return view("pages.header");
})->name('home');

Route::get("/tema/portfolio", function () {
    return view('pages.portfolio');
})->name("galeri");

Route::get("/tema/services", function () {
    return view("pages.services");
})->name('servisler');

Route::get("/tema/contact", function () {
    return view("pages.contact");
})->name('iletisim');
