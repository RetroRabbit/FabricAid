@extends('artisan.layout')

@section('content')
@if(count($history) == 0)
    @include('artisan.empty')
@else
    <div id="job-list">
        @foreach($history as $job)
            {{ $job }}
        @endforeach
    </div>
@endif
@endsection