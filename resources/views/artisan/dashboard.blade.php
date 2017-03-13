@extends('artisan.layout')

@section('content')
<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
    <div class="row">
        <a class="col-xs-8 col-xs-offset-2 col-sm-3 form-group info-block" href="{{ route('artisan-jobs-active') }}">
            <i class="fa fa-cogs fa-5x"></i>
            <h3>JOBS</h3>
            <h1>{{ $jobs }}</h1>
        </a>

        <a class="col-xs-8 col-xs-offset-2 col-sm-3 form-group info-block" href="{{ route('artisan-jobs-requests') }}">
            <i class="fa fa-file-text fa-5x"></i>
            <h3>REQUESTS</h3>
            <h1>{{ $requests }}</h1>
        </a>

        <a class="col-xs-8 col-xs-offset-2 col-sm-3 form-group info-block" href="{{ route('artisan-jobs-create') }}">
            <i class="fa fa-square-o fa-5x"></i>
            <h3>NEW JOB</h3>
            <h1>{{ '+' }}</h1>
        </a>
    </div>
</div>
@endsection