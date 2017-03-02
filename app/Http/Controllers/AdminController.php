<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class AdminController extends Controller
{
    // VIEWS
    public function companies_show()
    {
        $companies = Company::all();
        return view('admin.companies.show')->with('title', 'Admin | View Companies')->with('companies', $companies);
    }
    // VIEWS
    
    // ACTIONS
    public function companies_update(Company $company)
    {
        $fields = request()->only('Code', 'Name', 'Description', 'Logo');
        $validator = validator()->make(request()->except('Submit'),
        [
            'Code' => 'required',
            'Name' => 'required'
        ]);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator);
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
        $fields = request()->only('Code', 'Name', 'Description', 'Logo');
        $validator = validator()->make(request()->except('Submit'),
        [
            'Code' => 'required|unique:Company',
            'Name' => 'required'
        ]);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator);
        }
        else
        {
            Company::firstOrCreate(request()->only('Code', 'Name', 'Description', 'Logo'));
            return redirect()->route('admin-companies-show');
        }
    }

    public function companies_create()
    {
        $fields = request()->only('Code', 'Name', 'Description', 'Logo');
        $validator = validator()->make(request()->except('Submit'),
        [
            'Code' => 'required|unique:Company',
            'Name' => 'required'
        ]);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator);
        }
        else
        {
            Company::firstOrCreate(request()->only('Code', 'Name', 'Description', 'Logo'));
            return redirect()->route('admin-companies-show');
        }
    }
    // ACTIONS
}
