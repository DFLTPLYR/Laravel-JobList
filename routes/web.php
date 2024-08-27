<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Models\Tag;

Route::get('/', function () {

    return view('Home');
});

Route::get('/Jobs', function () {
    $jobs = Job::with('employer')->latest()->simplePaginate(9);
    return view('jobs.index', ['jobs' => $jobs]);
});

Route::get('/Jobs/Create', function () {
    return view('jobs.create');
});

Route::get('/Jobs/{id}', function ($id) {
    $job = Job::find($id);
    return view('jobs.show', ['job' => $job]);
});

Route::post('/Jobs', function () {
    request()->validate([
        'title' => ['required', 'min: 3'],
        'salary' => ['required', 'numeric'],
        'description' => ['required'],
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'description' => request('description'),
        'employer_id' => 1,
    ]);
    return redirect('/Jobs');
});

Route::get('/Contacts', function () {
    return view('Contacts');
});
