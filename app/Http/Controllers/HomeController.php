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
    public function loginUsername()
    {
        return 'Email';
    }

    // VIEWS
    public function index()
    {
        return view("home.index")->with('title', 'Home');
    }

    public function signin()
    {
        return view("home.signin")->with('title', 'Sign In');
    }

    public function signup()
    {
        return view("home.signup")->with('title', 'Sign Up');
    }

    public function error404()
    {
        return view("home.error404")->with('title', 'Error 404');
    }
    // VIEWS


    // ACTIONS
    // LOGIN
    public function fetch()
    {
        $fields =
        [
            'Email' => request()->input('Email'),
            'Password' => bcrypt(request()->input('Password'))
        ];
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
            $user = User::where('Email', $fields['Email'])->first();
            dd($user, $fields);
            dd($fields, auth()->attempt($fields));
            //if (auth()->attempt($fields))
            {
                return redirect()->route('artisan-dashboard');
            }
            /*else
                return redirect()->back()->withInput()->withErrors(['message' => 'Sign in failed. Please check your credentials.']);*/
        }
    }

    // REGISTER
    public function create()
    {
        $fields = request()->only('FirstName', 'LastName', 'Email', 'Password');
        $fields['DateCreated'] = Carbon::now()->format('Y-m-d');
        $rules =
        [
            'FirstName'     => 'required|max:191',
            'LastName'      => 'required|max:191',
            'Email'         => 'required|max:191|unique:User',
            'Password'      => 'required|max:191|confirmed',
        ];

        $validator = validator()->make(request()->except('Submit'), $rules);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator);
        }
        else
        {           
            $user = User::firstOrCreate($fields);            
            auth()->login($user);

            return redirect()->route('artisan-dashboard');
        }
    }

    // SIGN OUT
    public function signout()
    {
        auth()->logout();
        return redirect()->route('home-index');
    }
    // ACTIONS
}
