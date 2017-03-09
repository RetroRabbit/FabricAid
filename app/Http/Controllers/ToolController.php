<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tool;
use App\Machine;

class ToolController extends Controller
{    
    // VIEWS
    public function tools_show()
    {
        return view('admin.tools.show')->with('title', 'Admin | Tool')
                                       ->with('header', 'Tool List')
                                       ->with('tools', Tool::all());
    }
    
    public function tools_create()
    {
        return view('admin.tools.create')->with('title', 'Admin | Create Tool')
                                         ->with('header', 'Create New Tool')
                                         ->with('tools', Machine::all());
    }
    
    public function tools_update($tool)
    {
        return view('admin.tools.update')->with('title', 'Admin | Create Tool')
                                         ->with('header', 'Update Tool Details')
                                         ->with('tool', Tool::find($tool))
                                         ->with('machines', Machine::all());
    }
    // VIEWS

    // ACTIONS
    public function tools_new()
    {

    }
    
    public function tools_save()
    {

    }
    // ACTIONS
}
