<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Job;
use App\Status;

class SupervisorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('is.supervisor');
    }

    public function dashboard()
    {
        return view('supervisor.dashboard')->with('title', 'Supervisor | Dashboard')
                                           ->with('header', 'Welcome back '.auth()->user()->FirstName.' '.auth()->user()->LastName)
                                           ->with('users', count(User::where('CompanyId', auth()->user()->CompanyId)))
                                           ->with('active', count(Job::active()->get()))
                                           ->with('requests', count(Job::request()->get()));
    }

    public function show_active()
    {

    }

    public function show_requests()
    {
        $requests = [];
        $jobs = Job::request()->get();
        foreach ($jobs as $request)
            array_push($requests, $request->fillForeignKeys());

        return view('supervisor.jobs.requests')->with('title', 'Supervisor | Jobs')
                                               ->with('header', 'Job Request List')
                                               ->with('requests', $requests);
    }

    public function update_requests(Job $job)
    {
        return view('supervisor.jobs.update')->with('title', 'Supervisor | Jobs')
                                             ->with('header', 'Update Job Request')
                                             ->with('job', $job->displayModel())
                                             ->with('statuses', Status::all());
    }
}
