@extends('supervisor.layout')

@section('content')
<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
    @if(count($requests) == 0)
        @include('artisan.empty')
    @else
        <div id="job-list">
            @for($i = 0; $i < count($jobs); ++$i)
            <div class="col-xs-12 col-sm-5 {{ $i % 2 != 0 ? 'col-sm-offset-2' : null }} form-group info-block" href="{{ route('artisan-jobs-create') }}">
                <h3>{{ $jobs[$i]['CreatedBy']->FirstName.' '.$jobs[$i]['CreatedBy']->LastName }}</h3>
                <div>
                    <p style="color: white">Priority Level {{ $jobs[$i]['Priority'] }}</p>
                    <p style="color: white">{{ $jobs[$i]['Company']->Name }}</p>
                    <p style="color: white">{{ $jobs[$i]['Area']->Name }}</p>
                    <p style="color: white">{{ $jobs[$i]['Machine']->Name }}</p>
                    <p style="color: white">{{ $jobs[$i]['Tool']->Name }}</p>
                </div>
            </div>
            @endfor
        </div>
    @endif
</div>
@endsection