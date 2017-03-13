@extends('layouts.master')

@section('nav-content')
<li id="home"><a href="{{ route('artisan-dashboard') }}">Dashboard</a></li>
<li id="active-jobs"><a href="{{ route('artisan-dashboard') }}">Active Jobs</a></li>
<li id="job-requests"><a href="{{ route('artisan-dashboard') }}">Job Requests</a></li>
<li id="users"><a href="{{ route('artisan-dashboard') }}">Users</a></li>
<li id="company"><a href="{{ route('artisan-dashboard') }}">Company</a></li>
<li id="signout"><a href="{{ route('home-signout') }}">Sign Out</a></li>
@endsection