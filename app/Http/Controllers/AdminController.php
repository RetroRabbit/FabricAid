<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use Carbon\Carbon;

class AdminController extends Controller
{
    // VIEWS
    public function users_show()
    {
        $users = User::where('Active', true)->select(['Id', 'FirstName', 'LastName', 'Email'])->get();
        
        return view('admin.users.show')->with('title', 'Admin | View Users')
                                       ->with('users', $users);
    }
    
    public function users_create()
    {
        return view('admin.users.create')->with('title', 'Admin | New User')
                                         ->with('roles', Role::all());
    }
    
    public function users_update(User $user)
    {
        return view('admin.users.update')->with('title', 'Admin | Update User')
                                         ->with('user', $user)
                                         ->with('roles', Role::all());
    }
    // VIEWS

    // ACTIONS
    public function users_new()
    {
        $fields = request()->only('FirstName', 'LastName', 'Email', 'Password', 'RoleId');
        $validator = validator()->make(request()->except('Submit'),
        [
            'FirstName' => 'required',
            'FirstName' => 'required',
            'Email' => 'required|unique:User',
            'Password' => 'required',
            'RoleId' => 'required'
        ]);

        if ($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        else
        {
            $user = User::firstOrNew($fields);
            $user->RoleId = $fields['RoleId'];
            $user->Confirmed = true;
            $user->DateCreated = Carbon::now()->format('Y-m-d');
            $user->Active = true;
            $user->save();

            return redirect()->route('admin-users-show');
        }
    }

    public function users_save(User $user)
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

    public function users_delete(User $user)
    {
        $user->Active = false;
        $user->save();

        return redirect()->route('admin-users-show');
    }
    // ACTIONS
}
