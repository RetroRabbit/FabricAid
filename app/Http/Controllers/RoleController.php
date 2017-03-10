<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\Access;
use App\RoleAccess;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('is.admin');
    }

    public function redirectTo()
    {
        return redirect()->route('home-signin')->withErrors('message', 'You must be logged in to access the system.');
    }

    // VIEWS
    public function show()
    {
        $roles = Role::all();
        $infos = [];

        for ($i = 0; $i < count($roles); ++$i)
        {
            $roleAccess = RoleAccess::where('RoleId', $roles[$i]->Id)->pluck('AccessId');
            if (count($roleAccess) > 0)
                $roleAccess = $roleAccess->toArray();
            
            $access = Access::find($roleAccess);
            array_push($infos, ['Id' => $roles[$i]->Id, 'Name' => $roles[$i]->Name, 'Access' => count($access) > 0 ? $access->pluck('Code')->toArray() : []]);
        }

        return view('admin.roles.show')->with('title', 'Admin | View Roles')
                                       ->with('header', 'Role List')
                                       ->with('roles', $infos);
    }
    
    public function create()
    {
        return view('admin.roles.create')->with('title', 'Admin | New Role')
                                         ->with('header', 'Create New Role')
                                         ->with('accesses', Access::all());
    }
    
    public function update(Role $role)
    {
        return view('admin.roles.update')->with('title', 'Admin | Update Role')
                                         ->with('header', 'Update Role Details')
                                         ->with('role', $role)
                                         ->with('accesses', Access::all())
                                         ->with('role_accesses', RoleAccess::where('RoleId', $role->Id)->get()->pluck('AccessId')->toArray());
    }
    // VIEWS

    // ACTIONS
    public function new()
    {
        $accesses = request()->except('_token', 'Name', 'Submit');
        $validator = validator()->make(request()->only('Name'), ['Name' => 'required|unique:Role']);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator);
        }
        else
        {
            $role = Role::firstOrCreate(request()->only('Name'));
            
            foreach ($accesses as $accessId)
                RoleAccess::firstOrCreate(['RoleId' => $role->Id, 'AccessId' => $accessId]);
                
            return redirect()->route('admin-roles-show');
        }
    }

    public function save(Role $role)
    {
        $validator = validator()->make(request()->only('Name'), ['Name' => 'required']);
        
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

    public function delete(Role $role)
    {
        $role->delete();

        return redirect()->route('admin-roles-show');
    }
    // ACTIONS
}
