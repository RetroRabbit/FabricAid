@extends('supervisor.layout')

@section('content')
<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
    @if(count($requests) == 0)
        @include('artisan.empty')
    @else
        <div id="job-list">
            @for($i = 0; $i < count($requests); ++$i)
            <a class="col-xs-12 col-sm-5 {{ $i % 2 != 0 ? 'col-sm-offset-2' : null }} form-group info-block" href="{{ route('supervisor-requests-update', $requests[$i]['Id']) }}">
                <h3>{{ $requests[$i]['CreatedBy']->FirstName.' '.$requests[$i]['CreatedBy']->LastName }}</h3>
                <div>
                    <p style="color: white">Priority Level {{ $requests[$i]['Priority'] }}</p>
                    <p style="color: white">{{ $requests[$i]['Company']->Name }}</p>
                    <p style="color: white">{{ $requests[$i]['Area']->Name }}</p>
                    <p style="color: white">{{ $requests[$i]['Machine']->Name }}</p>
                    <p style="color: white">{{ $requests[$i]['Tool']->Name }}</p>
                </div>
            </a>
            @endfor
        </div>
    @endif
</div>
@endsection