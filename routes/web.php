<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
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

Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);
