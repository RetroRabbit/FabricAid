<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tool;
use App\Machine;

class ToolController extends Controller
{    
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('is.admin');
    }

    // VIEWS
    public function show()
    {
        return view('admin.tools.show')->with('title', 'Admin | Tool')
                                       ->with('header', 'Tool List')
                                       ->with('tools', Tool::all());
    }
    
    public function create()
    {
        return view('admin.tools.create')->with('title', 'Admin | Create Tool')
                                         ->with('header', 'Create New Tool')
                                         ->with('tools', Machine::all());
    }
    
    public function update($tool)
    {
        return view('admin.tools.update')->with('title', 'Admin | Create Tool')
                                         ->with('header', 'Update Tool Details')
                                         ->with('tool', Tool::find($tool))
                                         ->with('machines', Machine::all());
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
