@extends('admin.layout')

@section('content')
<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
    <a class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-1 col-md-4 form-group info-block" href="{{ route('admin-users-show') }}">
        <i class="fa fa-user fa-5x"></i>
        <h3>Users</h3>
        <h1>{{ $users }}</h1>
    </a>

    <a class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-2 col-md-4 form-group info-block" href="{{ route('admin-companies-show') }}">
        <i class="fa fa-building-o fa-5x"></i>
        <h3>Companies</h3>
        <h1>{{ $companies }}</h1>
    </a>

    <a class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-1 col-md-4 form-group info-block" href="{{ route('admin-roles-show') }}">
        <i class="fa fa-credit-card fa-5x"></i>
        <h3>Roles</h3>
        <h1>{{ $roles }}</h1>
    </a>

    <a class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-2 col-md-4 form-group info-block" href="{{ route('admin-areas-show') }}">
        <i class="fa fa-map-marker fa-5x"></i>
        <h3>Areas</h3>
        <h1>{{ $areas }}</h1>
    </a>

    <a class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-1 col-md-4 form-group info-block" href="{{ route('admin-machines-show') }}">
        <i class="fa fa-rocket fa-5x"></i>
        <h3>Machines</h3>
        <h1>{{ $machines }}</h1>
    </a>

    <a class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-2 col-md-4 form-group info-block" href="{{ route('admin-tools-show') }}">
        <i class="fa fa-wrench fa-5x"></i>
        <h3>Tools</h3>
        <h1>{{ $tools }}</h1>
    </a>
</div>
@endsection