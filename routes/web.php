<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'Home');
Route::view('/Contacts', 'Contacts');


Route::resource('Jobs', JobController::class);
// 3rd params except/only => ['functions']

// Route::controller(JobController::class)->group(function () {
//     Route::get('/Jobs', 'index');
//     Route::get('/Jobs/Create', 'create');
//     Route::get('/Jobs/{Job}', 'show');
//     Route::get('/Jobs/{Job}/Edit', 'edit');
//     Route::patch('/Jobs/{Job}', 'update');
//     Route::delete('/Jobs/{Job}', 'destroy');
//     Route::post('/Jobs', 'store');
// });
