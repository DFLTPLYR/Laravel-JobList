<?php

namespace App\Http\Controllers;

use App\Mail\JobPosted;
use App\Models\Job;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::with('employer')->latest()->simplePaginate(6);
        return view('jobs.index', ['jobs' => $jobs]);
    }
    public function create()
    {
        return view('jobs.create');
    }

    public function store()
    {
        //Validate
        request()->validate([
            'title' => ['required', 'min: 3'],
            'salary' => ['required', 'numeric'],
            'description' => ['required'],
        ]);
        // Create
        $job = Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'description' => request('description'),
            'employer_id' => 1,
        ]);

        Mail::to($job->employer->user)->send(new JobPosted($job));
        return redirect('/Jobs');
    }
    public function show(Job $Job)
    {
        return view('jobs.show', ['job' => $Job]);
    }
    public function edit(Job $Job)
    {
        return view('jobs.edit', ['job' => $Job]);
    }
    public function update(Job $Job)
    {
        request()->validate([
            'title' => ['required', 'min: 3'],
            'salary' => ['required', 'numeric'],
            'description' => ['required'],
        ]);

        $Job->update([
            'title' => request('title'),
            'salary' => request('salary'),
            'description' => request('description'),
        ]);

        return redirect('/Jobs/' . $Job->id);
    }
    public function destroy(Job $Job)
    {
        $Job->delete();
        return redirect('/Jobs');
    }
}
