@extends('artisan.layout')

@section('content')
<div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1">
    <a class="col-xs-8 col-xs-offset-2 col-sm-3 form-group info-block" href="{{ route('artisan-jobs-active') }}">
        <h3>JOBS</h3>
        <h1>{{ $jobs }}</h1>
    </a>

    <a class="col-xs-8 col-xs-offset-2 col-sm-3 form-group info-block" href="{{ route('artisan-jobs-requests') }}">
        <h3>REQUESTS</h3>
        <h1>{{ $requests }}</h1>
    </a>
</div>
@endsection