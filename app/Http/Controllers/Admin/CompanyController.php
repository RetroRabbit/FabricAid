<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class CompanyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // VIEWS
    public function companies_show()
    {
        return view('admin.companies.show')->with('title', 'Admin | View Companies')
                                           ->with('companies', Company::select(['Id', 'Code', 'Name', 'Active'])->get());
    }

    public function companies_create()
    {
        return view('admin.companies.create')->with('title', 'Admin | New Company');
    }

    public function companies_update(Company $company)
    {
        return view('admin.companies.update')->with('title', 'Admin | Update Company')
                                             ->with('company', $company);
    }
    // VIEWS
    
    // ACTIONS
    public function companies_new()
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

    public function companies_save(Company $company)
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

    public function companies_active(Company $company)
    {
        $company->Active = !$company->Active;
        $company->save();

        return redirect()->route('admin-companies-show');
    }
    // ACTIONS
}
