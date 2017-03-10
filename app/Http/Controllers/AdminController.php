<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Company;
use App\Role;
use App\Area;
use App\Machine;
use App\Tool;

class AdminController extends Controller
{
    protected $redirectTo = '/signin';

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('is.admin');
    }

    public function dashboard()
    {
        return view('admin.dashboard')->with('title', 'Admin | Dashboard')
                                      ->with('header', 'Welcome back '.auth()->user()->FirstName.' '.auth()->user()->LastName)
                                      ->with('users', count(User::all()))
                                      ->with('companies', count(Company::all()))
                                      ->with('roles', count(Role::all()))
                                      ->with('areas', count(Area::all()))
                                      ->with('machines', count(Machine::all()))
                                      ->with('tools', count(Tool::all()));
    }
}
