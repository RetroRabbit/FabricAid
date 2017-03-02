@extends('layouts.master')

@section('nav-content')
<li id="home"><a href="{{ route('home-index') }}">Home</a></li>
<li id="signin"><a href="{{ route('home-signin') }}">Sign In</a></li>
<li id="signup"><a href="{{ route('home-signup') }}">Sign Up</a></li>
@endsection