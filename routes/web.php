<?php

use Illuminate\Support\Facades\Route;
use App\Models\JobListing;

Route::get('/', function () {

    return view('Home');
});

Route::get('/Jobs', function () {
    return view('Jobs', ['jobs' => JobListing::all()]);
});

Route::get('/Job/{id}', function ($id) {
    $job = JobListing::find($id);
    return view('Job', ['job' => $job]);
});

Route::get('/Contacts', function () {
    return view('Contacts');
});
