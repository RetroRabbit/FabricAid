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
        return redirect()->route('admin.companies.show');
    }

    public function companies_delete(Company $company)
    {
        return redirect()->route('admin.companies.show');
    }

    public function companies_create()
    {
        return redirect()->route('admin.companies.show');
    }
    // ACTIONS
}
