<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;

class AdminController extends Controller
{
    // VIEWS
    public function __construct()
    {

    }

    public function dashboard()
    {
        return view('admin.dashboard')->with('title', 'Admin | Dashboard');
    }

    public function roles_show()
    {
        $roles = Role::all();
        return view('admin.roles.show')->with('title', 'Admin | View Roles')->with('roles', $roles);
    }
    // VIEWS

    // ACTIONS
    public function roles_update(Role $srole)
    {
        return redirect()->route('admin-dashboard');
    }

    public function roles_create()
    {
        return redirect()->route('admin-dashboard');
    }

    public function roles_delete(Role $srole)
    {
        return redirect()->route('admin-dashboard');
    }
    // ACTIONS
}
