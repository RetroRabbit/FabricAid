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
        $this->middleware('is.artisan');
    }

    public function redirectTo()
    {
        return redirect()->route('home-signin')->withErrors('message', 'You must be logged in to access the system.');
    }

    // VIEWS
    public function jobs_active()
    {
        return view('artisan.jobs.active')->with('title', 'Artisan | Jobs')
                                          ->with('header', 'Active Jobs List')
                                          ->with('jobs', Job::active()->get());
    }

    public function jobs_requests()
    {
        return view('artisan.jobs.requests')->with('title', 'Artisan | Jobs')
                                            ->with('header', 'Job Request List')
                                            ->with('requests', Job::request()->get());
    }

    public function jobs_create()
    {
        return view('artisan.jobs.create')->with('title', 'Artisan | Create Job')
                                              ->with('header', 'New Job Request');
    }
    
    public function jobs_update(Job $job)
    {
        return view('artisan.jobs.update')->with('title', 'Artisan | Job Update')
                                          ->with('header', 'Update Job Status')
                                          ->with('job', $job);
    }
    // VIEWS

    // ACTIONS
    public function jobstore()
    {
        $fields = request()->except('_token', 'Submit');
        dd($fields);
        $validator = validator()->make(request()->except('Submit'));
        return redirect()->route('artisan-requests-show');
    }

    public function jobs_save(Job $job)
    {
        dd($job, request());
        return redirect()->route('artisan-jobs-show');
    }
    // ACTIONS
}
