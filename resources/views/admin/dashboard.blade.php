@extends('admin.layout')

@section('content')
<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
    <a class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-1 col-md-3 col-md-offset-1 form-group info-block" href="{{ route('admin-users-show') }}">
        <h3>Users</h3>
        <h1>{{ $users }}</h1>
    </a>

    <a class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-2 col-md-3 col-md-offset-1 form-group info-block" href="{{ route('admin-companies-show') }}">
        <h3>Companies</h3>
        <h1>{{ $companies }}</h1>
    </a>

    <a class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-1 col-md-3 col-md-offset-1 form-group info-block" href="{{ route('admin-roles-show') }}">
        <h3>Roles</h3>
        <h1>{{ $roles }}</h1>
    </a>

    <a class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-2 col-md-3 col-md-offset-1 form-group info-block" href="{{ route('admin-areas-show') }}">
        <h3>Areas</h3>
        <h1>{{ $areas }}</h1>
    </a>

    <a class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-1 col-md-3 col-md-offset-1 form-group info-block" href="{{ route('admin-machines-show') }}">
        <h3>Machines</h3>
        <h1>{{ $machines }}</h1>
    </a>

    <a class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-2 col-md-3 col-md-offset-1 form-group info-block" href="{{ route('admin-tools-show') }}">
        <h3>Tools</h3>
        <h1>{{ $tools }}</h1>
    </a>
</div>
@endsection