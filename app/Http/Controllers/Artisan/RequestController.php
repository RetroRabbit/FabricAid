<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Job;

class RequestController extends Controller
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
    public function create()
    {
        return view('artisan.requests.create')->with('title', 'Artisan | Create Job');
    }

    public function show()
    {
        return view('artisan.requests.show')->with('title', 'Artisan | Requests')
                                            ->with('requests', Job::request()->get());
    }
    // VIEWS

    // ACTIONS
    public function store()
    {
        $fields = request()->except('_token', 'Submit');
        dd($fields);
        $validator = validator()->make(request()->except('Submit'));
        return redirect()->route('artisan-requests-show');
    }
    // ACTIONS
}
