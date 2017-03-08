<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Job;

class ArtisanController extends Controller
{
    public function __construct()
    {
        if (!auth()->check())
            return redirect()->route('home-signin')->send();
    }

    // VIEWS
    public function dashboard()
    {
        return view('artisan.dashboard')->with('title', 'Artisan | Dashboard')
                                        ->with('name', 'Artisan')
                                        ->with('jobs', count(Job::all()))
                                        ->with('requests', count(Job::all()))
                                        ->with('history', count(Job::all()));
    }

    public function requests()
    {
        return view('artisan.requests')->with('title', 'Artisan | Requests')
                                       ->with('requests', []);
    }

    public function jobs()
    {
        return view('artisan.jobs')->with('title', 'Artisan | Jobs')
                                   ->with('jobs', []);
    }

    public function history()
    {
        return view('artisan.history')->with('title', 'Artisan | History')
                                      ->with('histories', []);
    }
    // VIEWS

    // ACTIONS
    // ACTIONS
}
