<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Validator;
use App\User;
use App\Role;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function username()
    {
        return 'Email';
    }

    // VIEWS
    public function index()
    {
        if (auth()->check())
            return $this->gotoDashboard();
        else
            return view("home.index")->with('title', 'Home')
                                     ->with('header', 'HOME');
    }

    public function signin()
    {
        if (auth()->check())
            return $this->gotoDashboard();
        else
            return view("home.signin")->with('title', 'Sign In')
                                     ->with('header', 'SIGN IN');
    }

    public function signup()
    {
        if (auth()->check())
            return $this->gotoDashboard();
        else
            return view("home.signup")->with('title', 'Sign Up')
                                     ->with('header', 'SIGN UP');
    }

    public function error404()
    {
        return view("home.error404")->with('title', 'Error 404')
                                 ->with('header', 'ERROR 404');
    }
    // VIEWS


    // ACTIONS
    public function create()
    {
        $fields = request()->except('_token', 'Password_confirmation', 'Submit');
        $fields['DateCreated'] = Carbon::now()->format('Y-m-d');
        $rules =
        [
            'FirstName'     => 'required|max:191',
            'LastName'      => 'required|max:191',
            'Email'         => 'required|max:191|unique:User',
            'Password'      => 'required|max:191|confirmed'
        ];
        $validator = validator()->make(request()->except('Submit'), $rules);

        if ($validator->fails())
        {
            return redirect()->back()->withInput(request()->only('FirstName', 'LastName', 'Email'))->withErrors($validator);
        }
        else
        {
            auth()->login(User::firstOrCreate($fields));

            return $this->gotoDashboard();
        }
    }
    
    public function fetch()
    {
        $fields = request()->except('_token', 'Submit');
        $rules  =
        [
            'Email' => 'required|max:191',
            'Password' => 'required|max:191'
        ];
        $validator = validator()->make(request()->except('Submit'), $rules);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator);
        }
        else
        {
            if (auth()->attempt($fields))
                return $this->gotoDashboard();
            else
                return redirect()->back()->withInput(request()->only('Email'))->withErrors(['Find' => 'Could not a user with those credentials. Please confirm and try again.']);
        }
    }

    public function signout()
    {
        auth()->logout();

        return redirect()->route('home-index');
    }

    public function gotoDashboard()
    {
        if (auth()->user()->RoleId == 1)
            return redirect()->route('admin-dashboard');
        else if (auth()->user()->RoleId == 2)
            return redirect()->route('supervisor-dashboard');
        else
            return redirect()->route('artisan-dashboard');
    }
    // ACTIONS
}
