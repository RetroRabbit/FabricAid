<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Job;

class HistoryController extends Controller
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
        return view('artisan.history.show')->with('title', 'Artisan | History')
                                      ->with('history', Job::history()->get());
    }
    // VIEWS

    // ACTIONS
    // ACTIONS
}
