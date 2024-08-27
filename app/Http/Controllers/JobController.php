<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

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
        Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'description' => request('description'),
            'employer_id' => 1,
        ]);
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
