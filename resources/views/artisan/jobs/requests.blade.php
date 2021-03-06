@extends('artisan.layout')

@section('content')
<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
    @if(count($requests) == 0)
        @include('artisan.empty')
    @else
        <div id="job-list">
            @for($i = 0; $i < count($requests); ++$i)
            <div class="col-xs-12 col-sm-5 {{ $i % 2 != 0 ? 'col-sm-offset-2' : null }} form-group info-block" href="{{ route('artisan-jobs-create') }}">
                <h3>{{ $requests[$i]['DateCreated'] }}</h3>
                <div>
                    <p style="color: white">Priority Level {{ $requests[$i]['Priority']->Name }}</p>
                    <p style="color: white">{{ $requests[$i]['Company']->Name }}</p>
                    <p style="color: white">{{ $requests[$i]['Area']->Name }}</p>
                    <p style="color: white">{{ $requests[$i]['Machine']->Name }}</p>
                    <p style="color: white">{{ $requests[$i]['Tool']->Name }}</p>
                </div>
            </div>
            @endfor
        </div>
    @endif
</div>
@endsection