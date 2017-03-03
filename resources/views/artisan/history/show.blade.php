@extends('artisan.layout')

@section('content')
@if(count($jobs) == 0)
@include('artisan.empty')
@else
<div id="job-list">
    @foreach($jobs as $job)
        {{ $job }}
    @endforeach
</div>
@endif
@endsection