@extends('artisan.layout')

@section('content-body')
@if(count($requests) == 0)
@include('artisan.empty')
@else
<div id="job-list">
    @foreach($requests as $request)
        {{ $request }}
    @endforeach
</div>
@endif
@endsection