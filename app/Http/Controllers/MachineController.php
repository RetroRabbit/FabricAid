<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Machine;
use App\Area;

class MachineController extends Controller
{
    // VIEWS
    public function machines_show()
    {
        return view('admin.machines.show')->with('title', 'Admin | Machine')
                                          ->with('machines', Machine::all());
    }
    
    public function machines_create()
    {
        return view('admin.machines.create')->with('title', 'Admin | Create Machine')
                                            ->with('areas', Area::all());
    }
    
    public function machines_update(Machine $machine)
    {
        return view('admin.machines.update')->with('title', 'Admin | Create Machine')
                                            ->with('machine', $machine)
                                            ->with('areas', Area::all());
    }
    // VIEWS

    // ACTIONS
    public function machines_new()
    {

    }
    
    public function machines_save()
    {

    }
    // ACTIONS
}
