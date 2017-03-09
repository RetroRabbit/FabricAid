@extends('layouts.master')

@section('nav-content')
<li id="dashboard"><a href="{{ route('admin-dashboard') }}">Dashboard</a></li>
<li id="users"><a href="{{ route('admin-users-show') }}">Users</a></li>
<li id="roles"><a href="{{ route('admin-roles-show') }}">Roles</a></li>
<li id="dashboard"><a href="{{ route('admin-companies-show') }}">Companies</a></li>
<li id="areas"><a href="{{ route('admin-areas-show') }}">Areas</a></li>
<li id="machines"><a href="{{ route('admin-machines-show') }}">Machines</a></li>
<li id="tools"><a href="{{ route('admin-tools-show') }}">Tools</a></li>
<li id="singout"><a href="{{ route('home-signout') }}">Sign Out</a></li>
@endsection