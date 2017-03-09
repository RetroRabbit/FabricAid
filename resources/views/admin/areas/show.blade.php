@extends('admin.layout')

@section('content')
@include('layouts.errors')
<div class="container" style="margin-top: 100px;">
    <div id="table-create" class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-lg-offset-1">
            <a class="col-xs-2 col-lg-offset-1 btn btn-success" href="{{ route('admin-areas-create') }}">
                <i class="fa fa-plus col-xs-12 col-sm-12 col-md-3" style="line-height: 20px;"></i>
                <span class="col-xs-0 col-sm-0 col-md-9">Create</span>
            </a>
        </div> 
    </div>
@if(count($areas) == 0)
    <div id="nothing" class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-lg-offset-1">
            <h1>Nothing here</h1>
            <h3>Looks like there are no areas to display</h3>
        </div>
    </div>
@else
    <div id="table-header" class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-lg-offset-1">
            <p class="hidden-xs col-sm-1"><strong>#</strong></p>
            <p class="col-xs-4"><strong>Area Code</strong></p>
            <p class="col-xs-6"><strong>Area Name</strong></p>
            <p class="col-xs-1"><strong>Edit</strong></p>
        </div>
    </div>

    <div id="table-body" class="row">
        @for($i = 0; $i < count($areas); ++$i)
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-lg-offset-1">
            <p class="hidden-xs col-sm-1">{{ $i + 1 }}</p>
            <p class="col-xs-4">{{ $areas[$i]->Code }}</p>
            <p class="col-xs-6">{{ $areas[$i]->Name }}</p>
            <a class="col-xs-1" style="text-align: center" href="{{ route('admin-areas-update', $areas[$i]->Id) }}"><i class="fa fa-pencil" aria-hidden="true" style="line-height: 40px;"></i></a>
        </div>
        @endfor
    </div>
@endif
</div>
@endsection