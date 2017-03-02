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
    public function new()
    {
        $fields = request()->only('FirstName', 'LastName', 'Email', 'Password');
        $validator = validator()->make(request()->except('Submit'),
        [
            'FirstName' => 'required',
            'FirstName' => 'required',
            'Email' => 'required|unique:User',
            'Password' => 'required'
        ]);

        if ($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        else
        {
            User::firstOrCreate($fields);

            return redirect()->route('admin-users-show');
        }
    }

    public function save(User $user)
    {
        $fields = request()->only('FirstName', 'LastName', 'Email', 'Password');
        $validator = validator()->make(request()->except('Submit'),
        [
            'FirstName' => 'required',
            'FirstName' => 'required',
            'Email' => 'required|unique:User',
            'Password' => 'required'
        ]);

        if ($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        else
        {
            $user->fill($fields);
            $user->save();

            return redirect()->route('admin-users-show');
        }
    }

    public function delete(User $user)
    {
        $user->Active = false;
        $user-save();

        return redirect()->route('admin-users-show');
    }
    // ACTIONS
}
