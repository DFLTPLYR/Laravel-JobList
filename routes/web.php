<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});

Route::get('/About', function(){
    return view('About');
});

Route::get('/Contacts', function(){
    return view('Contacts');
});




