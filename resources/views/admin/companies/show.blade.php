@extends('admin.layout')

@section('content')
@include('layouts.errors')
<div class="container" style="margin-top: 100px;">
    <div id="table-create" class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-lg-offset-1">
            <a class="col-xs-2 col-lg-offset-1 btn btn-success" href="{{ route('admin-companies-create') }}">
                <i class="fa fa-plus col-xs-12 col-sm-12 col-md-3" style="line-height: 20px;"></i>
                <span class="col-xs-0 col-sm-0 col-md-9">Create</span>
            </a>
        </div> 
    </div>
@if(count($companies) == 0)
    <div id="nothing" class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-lg-offset-1">
            <h1>Nothing here</h1>
            <h3>Look like there are no companies to display</h3>
        </div>
    </div>
@else
    <div id="table-header" class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-lg-offset-1">
            <p class="col-xs-1"><strong>#</strong></p>
            <p class="col-xs-4"><strong>Company Code</strong></p>
            <p class="col-xs-7"><strong>Company Name</strong></p>
        </div>
    </div>

    <div id="table-body" class="row">
        @for($i = 0; $i < count($companies); ++$i)
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-10 col-lg-offset-1">
            <p class="col-xs-1">{{ $i + 1 }}</pl>
            <p class="col-xs-4">{{ $companies[$i]->Code }}<p/>
            <p class="col-xs-5">{{ $companies[$i]->Name }}<p/>
            <a class="col-xs-1" href="{{ route('admin-companies-update', $companies[$i]->Id) }}"><i class="fa fa-pencil" aria-hidden="true"></i></button>
            <a class="col-xs-1" href="{{ route('admin-companies-delete', $companies[$i]->Id) }}"><i class="fa fa-ban" aria-hidden="true"></i></a>
        </div>
        @endfor
    </div>
@endif
</div>
@endsection