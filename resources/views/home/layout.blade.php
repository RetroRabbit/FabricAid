@extends('layouts.master')

@section('nav-content')
<li id="home" {{{ (Request::is("/") ? "class=active" : null) }}} ><a href="{{ route('home-index') }}">Home</a></li>
<li id="signin" {{{ (Request::is("signin") ? "class=active" : null) }}} ><a href="{{ route('home-signin') }}">Sign In</a></li>
<li id="signup" {{{ (Request::is("signup") ? "class=active" : null) }}} ><a href="{{ route('home-signup') }}">Sign Up</a></li>
@endsection