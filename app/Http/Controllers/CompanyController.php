<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class CompanyController extends Controller
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
        return view('admin.companies.show')->with('title', 'Admin | View Companies')
                                           ->with('header', 'Company List')
                                           ->with('companies', Company::select(['Id', 'Code', 'Name', 'Active'])->get());
    }

    public function create()
    {
        return view('admin.companies.create')->with('title', 'Admin | New Company')
                                             ->with('header', 'Create New Company');
    }

    public function update(Company $company)
    {
        return view('admin.companies.update')->with('title', 'Admin | Update Company')
                                             ->with('header', 'Update Company Details')
                                             ->with('company', $company);
    }
    // VIEWS
    
    // ACTIONS
    public function new()
    {
        $fields = request()->except('_token', 'Submit');
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
            Company::firstOrCreate($fields);

            return redirect()->route('admin-companies-show');
        }
    }

    public function save(Company $company)
    {
        $fields = request()->except('_token', 'Submit');
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
            $company->fill($fields);
            $company->save();

            return redirect()->route('admin-companies-show');
        }
    }

    public function active(Company $company)
    {
        $company->Active = !$company->Active;
        $company->save();

        return redirect()->route('admin-companies-show');
    }
    // ACTIONS
}
