@extends('artisan.layout')

@section('content')
<div class="row subheader">
    <h4 class="col-lg-12">Welcome {{ $name }}</h4>
</div>

<div class="row">
    <div class="col-sm-4" style="text-align: center; height: 150px;">
        <h3 style="height: 100%; line-height: 150px;">Jobs: {{ $jobs }}</h2>
    </div>
    <div class="col-sm-4" style="text-align: center; height: 150px;">
        <h3 style="height: 100%; line-height: 150px;">Requests: {{ $requests }}</h2>
    </div>
    <div class="col-sm-4" style="text-align: center; height: 150px;">
        <h3 style="height: 100%; line-height: 150px;">History: {{ $history }}</h2>
    </div>
</div>
@endsection