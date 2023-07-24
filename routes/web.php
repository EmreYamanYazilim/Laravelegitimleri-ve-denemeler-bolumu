<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ornek;
use App\Http\Controllers\Deneme;
use App\Http\Controllers\TestBladesiControlleri;
use App\Http\Controllers\SonDenemeControlleri;



//
//Route::get('/', function () {
//    return view('welcome');
//
//});

//
////Route::post('/deneme', function () {
//    return view('ornek');
//});

Route::get('/phpturkiye/{isim}', [Ornek::class, 'test']);
Route::get('/urldeneme/{isim}', [Deneme::class, 'denemeControllerFunctionu']);
Route::get('/testblade/',[TestBladesiControlleri::class, 'testinContrellesininFunctionu']);

//Route::get('/sondenemem', function () {
//    return view('sondeneme');
//});

//Route::get('/sondeneme', function () {
//    return view('sondeneme');
//});


Route::get('deneme',[SonDenemeControlleri::class,'sonDenemefunctionu']);
