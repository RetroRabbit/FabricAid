<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Machine;
use App\Area;

class MachineController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('is.admin');
    }

    // VIEWS
    public function show()
    {
        return view('admin.machines.show')->with('title', 'Admin | Machine')
                                          ->with('header', 'Machine List')
                                          ->with('machines', Machine::all());
    }
    
    public function create()
    {
        return view('admin.machines.create')->with('title', 'Admin | Create Machine')
                                            ->with('header', 'Create New Machine')
                                            ->with('areas', Area::all());
    }
    
    public function update(Machine $machine)
    {
        return view('admin.machines.update')->with('title', 'Admin | Create Machine')
                                            ->with('header', 'Update Machine Details')
                                            ->with('machine', $machine)
                                            ->with('areas', Area::all());
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
