<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DiamondController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {

    $username = 'Bewus';
    $password = 'Sozosei';

//    return view('salutation', [
//        'password' => $password,
//        'username' => $username]);

    return view('salutation', compact('username'), compact('password'));
});


Route::get('/bonjour/{nom}', function ($nom) {

//    $nom = 'Star';
//     $nom2 = 'Bueno';

    return view('bonjour', compact('nom'));
});


Route::get('/plus/{nombre}/{nombre2}', function ($nombre, $nombre2) {

    $result = $nombre + $nombre2;

    return view('plus', compact('nombre', 'nombre2', 'result'));
});


Route::resource('diamonds', DiamondController::class);


