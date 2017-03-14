<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Job;
use App\Company;
use App\Area;
use App\Machine;
use App\Tool;
use App\User;
use App\Status;
use Carbon\Carbon;

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
    public function active()
    {
        return view('artisan.jobs.active')->with('title', 'Artisan | Jobs')
                                          ->with('header', 'Active Jobs List')
                                          ->with('jobs', Job::active()->get());
    }

    public function requests()
    {
        $requests = [];
        $jobs = Job::request()->get();
        foreach ($jobs as $request)
        {
            array_push($requests, $request->fillForeignKeys());
        }

        return view('artisan.jobs.requests')->with('title', 'Artisan | Jobs')
                                            ->with('header', 'Job Request List')
                                            ->with('requests', $requests);
    }

    public function create()
    {
        return view('artisan.jobs.create')->with('title', 'Artisan | Create Job')
                                          ->with('header', 'New Job Request')
                                          ->with('companies', Company::all());
    }
    
    public function update(Job $job)
    {
        return view('artisan.jobs.update')->with('title', 'Artisan | Job Update')
                                          ->with('header', 'Update Job Status')
                                          ->with('job', $job);
    }
    // VIEWS

    // ACTIONS
    public function store()
    {
        $fields = request()->except('_token', 'Submit');
        $rules = 
        [
            'Priority' => 'required',
            'Company' => 'required',
            'Area' => 'required',
            'Machine' => 'required',
            'Tool' => 'required'
        ];
        $validator = validator()->make(request()->except('Submit'), $rules);

        if ($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator);    
        }
        else
        {
            $job = new Job();
            
            $job->Priority = $fields['Priority'];
            $job->DateCreated = Carbon::now()->format('Y-m-d');
            $job->CompanyId = $fields['Company'];
            $job->AreaId = $fields['Area'];
            $job->MachineId = $fields['Machine'];
            $job->ToolId = $fields['Tool'];
            $job->JobDetails = $fields['Details'];
            $job->CreatedBy = auth()->user()->Id;
            $job->StatusId = Status::inactive()->first()->Id;

            $job->save();

            return redirect()->route('artisan-jobs-requests');
        }
    }

    public function save(Job $job)
    {
        dd($job, request());
        return redirect()->route('artisan-jobs-show');
    }
    // ACTIONS
}
