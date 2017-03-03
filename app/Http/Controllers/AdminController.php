<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use Carbon\Carbon;

class AdminController extends Controller
{
    // USERS -----------------------------------
    // VIEWS
    public function users_show()
    {
        $users = User::active()->select(['Id', 'FirstName', 'LastName', 'Email'])->get();
        
        return view('admin.users.show')->with('title', 'Admin | View Users')
                                       ->with('users', $users);
    }
    
    public function users_create()
    {
        return view('admin.users.create')->with('title', 'Admin | New User')
                                         ->with('roles', Role::all());
    }
    
    public function users_update(User $user)
    {
        return view('admin.users.update')->with('title', 'Admin | Update User')
                                         ->with('user', $user)
                                         ->with('roles', Role::all());
    }
    // VIEWS

    // ACTIONS
    public function users_new()
    {
        $fields = request()->only('FirstName', 'LastName', 'Email', 'Password', 'RoleId');
        $validator = validator()->make(request()->except('Submit'),
        [
            'FirstName' => 'required',
            'FirstName' => 'required',
            'Email' => 'required|unique:User',
            'Password' => 'required',
            'RoleId' => 'required'
        ]);

        if ($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        else
        {
            $user = User::firstOrNew($fields);
            $user->RoleId = $fields['RoleId'];
            $user->Confirmed = true;
            $user->DateCreated = Carbon::now()->format('Y-m-d');
            $user->Active = true;
            $user->save();

            return redirect()->route('admin-users-show');
        }
    }

    public function users_save(User $user)
    {
        $fields = request()->only('FirstName', 'LastName', 'Email', 'Password');
        $validator = validator()->make(request()->except('Submit'),
        [
            'FirstName' => 'required',
            'FirstName' => 'required',
            'Email' => 'required|unique:User',
            'Password' => 'required'
        ]);

        if ($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        else
        {
            $user->fill($fields);
            $user->save();

            return redirect()->route('admin-users-show');
        }
    }

    public function users_delete(User $user)
    {
        $user->Active = false;
        $user->save();

        return redirect()->route('admin-users-show');
    }
    // ACTIONS
    // USERS -----------------------------------


    // COMPANIES -----------------------------------
    // VIEWS
    public function companies_show()
    {
        $companies = Company::active()->get();
        return view('admin.companies.show')->with('title', 'Admin | View Companies')->with('companies', $companies);
    }

    public function companies_update(Company $company)
    {
        return view('admin.companies.update')->with('title', 'Admin | Update Company')->with('company', $company);
    }

    public function companies_create()
    {
        return view('admin.companies.create')->with('title', 'Admin | New Company');
    }
    // VIEWS
    
    // ACTIONS
    public function companies_save(Company $company)
    {
        $fields = request()->only('Code', 'Name', 'Description', 'Logo');
        $validator = validator()->make(request()->except('Submit'),
        [
            'Code' => 'required',
            'Name' => 'required'
        ]);

        if ($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        else
        {
            $company->fill(request()->only('Code', 'Name', 'Description', 'Logo'));
            $company->save();

            return redirect()->route('admin-companies-show');
        }
    }

    public function companies_delete(Company $company)
    {
        $company->Active = false;
        $company->save();
        return redirect()->route('admin-companies-show');
    }

    public function companies_new()
    {
        $fields = request()->only('Code', 'Name', 'Description', 'Logo');
        $validator = validator()->make(request()->except('Submit'),
        [
            'Code' => 'required|unique:Company',
            'Name' => 'required'
        ]);

        if ($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        else
        {
            Company::firstOrCreate(request()->only('Code', 'Name', 'Description', 'Logo'));
            return redirect()->route('admin-companies-show');
        }
    }
    // USERS -----------------------------------

    public function dashboard()
    {
        return view('admin.dashboard')->with('title', 'Admin | Dashboard');
    }

    // ROLES -----------------------------------
    public function roles_show()
    {
        $roles = [];
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
    // ACTIONS
    // ROLES -----------------------------------
}
