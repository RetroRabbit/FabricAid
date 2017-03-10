@extends('artisan.layout')

@section('content')
@if(count($requests) == 0)
    @include('artisan.empty')
@else
    <div id="job-list">
        @foreach($requests as $job)
            {{ $job }}
        @endforeach
    </div>
@endif
@endsection