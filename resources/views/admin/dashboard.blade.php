@extends('admin.layout')

@section('content')
<div class="row subheader">
    <h4 class="col-xs-12 col-lg-11 col-lg-offset-1">Welcome {{ $name }}</h4>
</div>

<div class="row">
    <div class="col-sm-4" style="text-align: center; height: 150px;">
        <h3 style="height: 100%; line-height: 150px;">Users: {{ $users }}</h2>
    </div>
    <div class="col-sm-4" style="text-align: center; height: 150px;">
        <h3 style="height: 100%; line-height: 150px;">Companies: {{ $companies }}</h2>
    </div>
    <div class="col-sm-4" style="text-align: center; height: 150px;">
        <h3 style="height: 100%; line-height: 150px;">Roles: {{ $roles }}</h2>
    </div>
    <div class="col-sm-4" style="text-align: center; height: 150px;">
        <h3 style="height: 100%; line-height: 150px;">Areas: {{ $areas }}</h2>
    </div>
    <div class="col-sm-4" style="text-align: center; height: 150px;">
        <h3 style="height: 100%; line-height: 150px;">Machines: {{ $machines }}</h2>
    </div>
    <div class="col-sm-4" style="text-align: center; height: 150px;">
        <h3 style="height: 100%; line-height: 150px;">Tools: {{ $tools }}</h2>
    </div>
</div>
@endsection