<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Area;
use App\Company;

class AreaController extends Controller
{
    // VIEWS
    public function areas_show()
    {
        return view('admin.areas.show')->with('title', 'Admin | Area')
                                       ->with('areas', Area::all());
    }
    
    public function areas_create()
    {
        return view('admin.areas.create')->with('title', 'Admin | Create Area')
                                         ->with('companies', Company::all());
    }
    
    public function areas_update(Area $area)
    {
        return view('admin.areas.update')->with('title', 'Admin | Create Area')
                                         ->with('area', $area)
                                         ->with('companies', Company::all());
    }
    // VIEWS

    // ACTIONS
    public function areas_new()
    {

    }
    
    public function areas_save()
    {

    }
    // ACTIONS
}
