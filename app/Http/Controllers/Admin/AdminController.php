<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Company;
use App\Role;

class AdminController extends Controller
{
    protected $redirectTo = '/signin';

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard()
    {
        return view('admin.dashboard')->with('title', 'Admin | Dashboard')
                                      ->with('name', 'Administrator')
                                      ->with('users', count(User::all()))
                                      ->with('companies', count(Company::all()))
                                      ->with('roles', count(Role::all()));
    }
}
