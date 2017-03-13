<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Job;

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
}
