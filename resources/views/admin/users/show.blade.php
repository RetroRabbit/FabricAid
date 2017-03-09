@extends('admin.layout')

@section('content')
<div class="container">
    <div id="table-create" class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-lg-offset-1">
            <a class="col-xs-2 col-lg-offset-1 btn btn-success" href="{{ route('admin-users-create') }}">
                <i class="fa fa-plus col-xs-12 col-sm-12 col-md-3" style="line-height: 20px;"></i>
                <span class="col-xs-0 col-sm-0 col-md-9">Create</span>
            </a>
        </div> 
    </div>
    
@if(count($users) == 0)
    <div id="nothing" class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-lg-offset-1">
            <h1>Nothing here</h1>
            <h3>Looks like there are no users to display</h3>
        </div>
    </div>
@else
    <div id="table-header" class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-lg-offset-1">
            <p class="hidden-xs col-sm-1"><strong>#</strong></p>
            <p class="col-xs-4"><strong>Name</strong></p>
            <p class="col-xs-5"><strong>Email</strong></p>
            <p class="col-xs-1"><strong>Edit</strong></p>
            <p class="col-xs-1"><strong>Active</strong></p>
        </div>
    </div>

    <div id="table-body" class="row">
        @for($i = 0; $i < count($users); ++$i)
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-lg-offset-1">
            <p class="hidden-xs col-sm-1">{{ $i + 1 }}</p>
            <p class="col-xs-4">{{ $users[$i]->FirstName }}&nbsp;{{ $users[$i]->LastName }}</p>
            <p class="col-xs-5">{{ $users[$i]->Email }}</p>
            <a class="col-xs-1" style="text-align: center; color: #384452;" href="{{ route('admin-users-update', $users[$i]->Id) }}"><i class="fa fa-pencil" aria-hidden="true" style="line-height: 40px;"></i></a>
            <a class="col-xs-1" style="text-align: center; color: #00b3fe;" href="{{ route('admin-users-active', $users[$i]->Id) }}"><i class="fa {{ $users[$i]->Active ? 'fa-check-circle' : 'fa-circle-o' }}" aria-hidden="true" style="line-height: 40px;"></i></a>
        </div>
        @endfor
    </div>
@endif
</div>
@endsection