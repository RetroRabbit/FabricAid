@extends('artisan.layout')

@section('content-body')
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