<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Role;

class AdminController extends Controller
{
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
    public function __construct()
    {

    }

    public function dashboard()
    {
        return view('admin.dashboard')->with('title', 'Admin | Dashboard');
    }

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
}
