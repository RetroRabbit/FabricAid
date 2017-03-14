@extends('layouts.master')

@section('nav-content')
<li id="home"><a href="{{ route('artisan-dashboard') }}">Dashboard</a></li>
<li id="active-jobs"><a href="{{ route('artisan-jobs-active') }}">Active Jobs</a></li>
<li id="job-requests"><a href="{{ route('artisan-jobs-requests') }}">Job Requests</a></li>
<li id="signout"><a href="{{ route('home-signout') }}">Sign Out</a></li>
@endsection