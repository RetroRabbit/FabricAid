@extends('artisan.layout')

@section('content')
@if(count($histories) == 0)
@include('artisan.empty')
@else
<div id="job-list">
    @foreach($histories as $history)
        {{ $history }}
    @endforeach
</div>
@endif
@endsection