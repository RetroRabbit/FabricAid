<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtisanController extends Controller
{

    public function __construct()
    {
        /*if (!auth()->check())
            return redirect()->route('home-signin')->withErrors(['message' => 'Please sign in to access the system'])->send();*/
    }

    // VIEWS
    public function dashboard()
    {
        return view('artisan.dashboard')->with('title', 'Dashboard');
    }

    public function requests()
    {
        $jobs = [];
        return view('artisan.requests')->with('title', 'Requests')->with('jobs', $jobs);
    }

    public function jobs()
    {
        $jobs = [];
        return view('artisan.jobs')->with('title', 'Jobs')->with('jobs', $jobs);
    }

    public function history()
    {
        $jobs = [];
        return view('artisan.history')->with('title', 'History')->with('jobs', $jobs);
    }
    // VIEWS

    // ACTIONS
    // ACTIONS
}
