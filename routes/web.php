<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Models\Tag;

// Home
Route::get('/', function () {
    return view('Home');
});

// All
Route::get('/Jobs', function () {
    $jobs = Job::with('employer')->latest()->simplePaginate(6);
    return view('jobs.index', ['jobs' => $jobs]);
});

// Create
Route::get('/Jobs/Create', function () {
    return view('jobs.create');
});

// Edit
Route::get('/Jobs/{id}/Edit', function ($id) {
    $job = Job::find($id);
    return view('jobs.edit', ['job' => $job]);
});

// Update
Route::patch('/Jobs/{id}', function ($id) {
    // Validate
    request()->validate([
        'title' => ['required', 'min: 3'],
        'salary' => ['required', 'numeric'],
        'description' => ['required'],
    ]);
    // Auth check
    $job = Job::findOrFail($id);

    $job->update([
        'title' => request('title'),
        'salary' => request('salary'),
        'description' => request('description'),
    ]);

    return redirect('/Jobs/' . $job->id);
});

// Delete
Route::delete('/Jobs/{id}', function ($id) {
    //find and delete
    Job::find($id)->delete();
    return redirect('/Jobs');
});

// Show
Route::get('/Jobs/{id}', function ($id) {
    //find
    $job = Job::find($id);
    return view('jobs.show', ['job' => $job]);
});

// Store
Route::post('/Jobs', function () {
    //Validate
    request()->validate([
        'title' => ['required', 'min: 3'],
        'salary' => ['required', 'numeric'],
        'description' => ['required'],
    ]);
    // Create
    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'description' => request('description'),
        'employer_id' => 1,
    ]);
    return redirect('/Jobs');
});

// Contacts
Route::get('/Contacts', function () {
    return view('Contacts');
});
