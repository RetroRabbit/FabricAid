@extends('layouts.master')

@section('nav-content')
<li id="home"><a href="{{ route('supervisor-dashboard') }}">Dashboard</a></li>
<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Jobs <b class="caret"></b></a>
    
    <ul class="dropdown-menu">
        <li id="active-jobs"><a href="{{ route('artisan-dashboard') }}">Active Jobs</a></li>
        <li id="job-requests"><a href="{{ route('supervisor-requests-show') }}">Job Requests</a></li>
    </ul>
</li>
<li id="users"><a href="{{ route('artisan-dashboard') }}">Users</a></li>
<li id="company"><a href="{{ route('artisan-dashboard') }}">Company</a></li>
<li id="signout"><a href="{{ route('home-signout') }}">Sign Out</a></li>
@endsection