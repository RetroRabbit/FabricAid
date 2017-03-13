<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class APIController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function find()
    {
        $class = request()->input('in');
        $target = request()->input('target');
        $value = request()->input('value');        

        return response()->json(DB::table($class)->where($target, $value)->get());
    }
}
