@extends('supervisor.layout')

@section('content')
<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
    <div class="row">
        <a class="col-xs-8 col-xs-offset-2 col-sm-3 form-group info-block" href="{{ route('home-signout') }}">
            <i class="fa fa-cogs fa-5x"></i>
            <h3>ACTIVE JOBS</h3>
            <h1>{{ $active }}</h1>
        </a>

        <a class="col-xs-8 col-xs-offset-2 col-sm-3 form-group info-block" href="{{ route('supervisor-requests-show') }}">
            <i class="fa fa-file-text fa-5x"></i>
            <h3>JOB REQUESTS</h3>
            <h1>{{ $requests }}</h1>
        </a>

        <a class="col-xs-8 col-xs-offset-2 col-sm-3 form-group info-block" href="{{ route('home-signout') }}">
            <i class="fa fa-user fa-5x"></i>
            <h3>USERS</h3>
            <h1>{{ $users }}</h1>
        </a>

        <a class="col-xs-8 col-xs-offset-2 col-sm-3 form-group info-block" href="{{ route('home-signout') }}">
            <i class="fa fa-plus-circle fa-5x"></i>
            <h3>NEW JOB</h3>
            <h1>{{ '' }}</h1>
        </a>
    </div>
</div>
@endsection