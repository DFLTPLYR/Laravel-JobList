<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('Home');
});

Route::get('/Jobs', function () {
    return view('Jobs', ['jobs' => Job::all()]);
});

Route::get('/Job/{id}', function ($id) {
    $job = Job::find($id);
    return view('Job', ['job' => $job]);
});

Route::get('/Contacts', function () {
    return view('Contacts');
});
