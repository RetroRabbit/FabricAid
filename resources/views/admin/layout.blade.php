@extends('layouts.master')

@section('nav-content')
<li id="dashboard"><a href="{{ route('admin-dashboard') }}">Dashboard</a></li>
<li id="dashboard"><a href="{{ route('admin-roles-show') }}">Roles</a></li>
@endsection