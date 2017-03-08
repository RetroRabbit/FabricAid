<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\ArtisanType;
use Carbon\Carbon;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function redirectTo()
    {
        return redirect()->route('home-signin')->withErrors('message', 'You must be logged in to access the system.');
    }

    // VIEWS
    public function users_show()
    {
        return view('admin.users.show')->with('title', 'Admin | View Users')
                                       ->with('users', User::select(['Id', 'FirstName', 'LastName', 'Email', 'Active'])->get());
    }
    
    public function users_create()
    {
        return view('admin.users.create')->with('title', 'Admin | New User')
                                         ->with('roles', Role::all())
                                         ->with('artisanTypes', ArtisanType::all());
    }
    
    public function users_update(User $user)
    {
        return view('admin.users.update')->with('title', 'Admin | Update User')
                                         ->with('user', $user)
                                         ->with('roles', Role::all())
                                         ->with('artisanTypes', ArtisanType::all());
    }
    // VIEWS

    // ACTIONS
    public function users_new()
    {
        $fields = request()->except('_token', 'Submit');
        $validator = validator()->make(request()->except('Submit'),
        [
            'FirstName' => 'required',
            'FirstName' => 'required',
            'Email' => 'required|unique:User',
            'Password' => 'required',
            'Role' => 'required',
            'ArtisanType' => 'required'
        ]);

        if ($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        else
        {
            $user = User::firstOrNew($fields);
            $user->RoleId = $fields['Role'];
            $user->ArtisanTypeId = $fields['ArtisanType'];
            $user->Confirmed = true;
            $user->DateCreated = Carbon::now()->format('Y-m-d');
            $user->Active = true;
            $user->save();

            return redirect()->route('admin-users-show');
        }
    }

    public function users_save(User $user)
    {
        $fields = request()->except('_token', 'Submit');
        $validator = validator()->make(request()->except('Submit'),
        [
            'FirstName' => 'required',
            'FirstName' => 'required',
            'Email' => 'required',
            'Password' => 'required',
            'RoleId' => 'required',
            'ArtisanTypeId' => 'required'
        ]);

        if ($validator->fails())
        {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        else
        {
            $user->fill($fields);
            $user->RoleId = $fields['RoleId'];
            $user->ArtisanTypeId = $fields['ArtisanTypeId'];
            $user->save();

            return redirect()->route('admin-users-show');
        }
    }

    public function users_active(User $user)
    {
        $user->Active = !$user->Active;
        $user->save();

        return redirect()->route('admin-users-show');
    }
    // ACTIONS
}
