<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Job;

class JobController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function redirectTo()
    {
        return redirect()->route('home-signin')->withErrors('message', 'You must be logged in to access the system.');
    }

    // VIEWS
    public function show()
    {
        return view('artisan.jobs.show')->with('title', 'Artisan | Jobs')
                                        ->with('jobs', Job::active()->get());
    }
    
    public function update(Job $job)
    {
        return view('artisan.jobs.update')->with('title', 'Artisan | Job Update')
                                        ->with('job', $job);
    }
    // VIEWS

    // ACTIONS
    public function save(Job $job)
    {
        return redirect()->route('artisan-jobs-show');
    }
    // ACTIONS
}
