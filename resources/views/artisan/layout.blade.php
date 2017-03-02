@extends('layouts.master')

@section('nav-content')
<li id="home"><a href="{{ route('artisan-dashboard') }}">Dashboard</a></li>
<li id="jobs"><a href="{{ route('artisan-jobs') }}">Jobs</a></li>
<li id="requests"><a href="{{ route('artisan-requests') }}">Requests</a></li>
<li id="history"><a href="{{ route('artisan-history') }}">History</a></li>
<li id="signout"><a href="{{ route('home-signout') }}">Sign Out</a></li>
@endsection