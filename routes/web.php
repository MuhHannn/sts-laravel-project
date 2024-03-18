<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'metatitle'=>'Halaman Home',
        'fotoLogo'=>'logo-square-amani.png',
        'fotoBunga'=>'bunga.jpeg',
        'fotoPelatihan'=> 'foto-pelatihan.jpg'
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
