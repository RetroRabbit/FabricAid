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
    public function roles_update(Role $role)
    {
        $validator = validator()->make(request()->only('Name'), ['Name' => 'required|unique:Role']);
        
        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator);
        }
        else
        {
            $role->Name = request()->input('Name');
            $role->save();

            return redirect()->route('admin-roles-show');
        }
    }

    public function roles_create()
    {
        $validator = validator()->make(request()->only('Name'), ['Name' => 'required|unique:Role']);
        
        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator);
        }
        else
        {
            Role::firstOrCreate(request()->only('Name'));
            return redirect()->route('admin-roles-show');
        }
    }

    public function roles_delete(Role $role)
    {
        $role->delete();

        return redirect()->route('admin-roles-show');
    }
    // ACTIONS
}
