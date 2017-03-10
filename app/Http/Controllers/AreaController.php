<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Area;
use App\Company;

class AreaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('is.admin');
    }
    
    // VIEWS
    public function show()
    {
        return view('admin.areas.show')->with('title', 'Admin | Area')
                                       ->with('header', 'Area List')
                                       ->with('areas', Area::all());
    }
    
    public function create()
    {
        return view('admin.areas.create')->with('title', 'Admin | Create Area')
                                         ->with('header', 'Create New Area')
                                         ->with('companies', Company::all());
    }
    
    public function update(Area $area)
    {
        return view('admin.areas.update')->with('title', 'Admin | Create Area')
                                         ->with('header', 'Update Area Details')
                                         ->with('area', $area)
                                         ->with('companies', Company::all());
    }
    // VIEWS

    // ACTIONS
    public function new()
    {

    }
    
    public function save()
    {

    }
    // ACTIONS
}
