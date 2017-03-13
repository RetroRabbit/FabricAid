<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Job;

class ArtisanController extends Controller
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
    public function dashboard()
    {
        return view('artisan.dashboard')->with('title', 'Artisan | Dashboard')
                                        ->with('header', 'Welcome back '.auth()->user()->FirstName.' '.auth()->user()->LastName)
                                        ->with('jobs', count(Job::active()->get()))
                                        ->with('requests', count(Job::request()->get()));
    }
    // VIEWS

    // ACTIONS
    // ACTIONS
}
