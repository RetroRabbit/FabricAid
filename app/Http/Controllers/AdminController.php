<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    // VIEWS
    public function users_show()
    {
        $users = User::all();
        return view('admin.users.show')->with('title', 'Admin | View Users')->with('users', $users);
    }
    
    public function users_create()
    {
        return view('admin.users.create')->with('title', 'Admin | New User');
    }
    
    public function users_update(User $user)
    {
        return view('admin.users.update')->with('title', 'Admin | Update User')->with('user', $user);
    }
    // VIEWS

    // ACTIONS
    // ACTIONS
}
