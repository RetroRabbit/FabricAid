@extends('artisan.layout')

@section('content')
<div class="row">
    <div class="col-xs-8">
    @if(count($requests) == 0)
        @include('artisan.empty')
    @else
        <div id="job-list">
            @foreach($requests as $job)
                {{ $job }}
            @endforeach
        </div>
    @endif
    </div>
    <div class="col-xs-4">
        <a href="{{ route('artisan-jobs-create') }}">Open</a>
    </div>
</div>
@endsection