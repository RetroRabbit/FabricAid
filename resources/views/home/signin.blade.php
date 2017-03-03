@extends('home.layout')

@section('content')
@include('layouts.errors')

<form method="post" class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
    {{ csrf_field() }}

    <div class="form-group col-xs-12">
        <label class="col-xs-12 col-sm-4" for="Email">Email</label>
        <input class="col-xs-12 col-sm-8" id="Email" name="Email" type="email" value="{{ old('Email') }}" placeholder="Enter a name..." />
    </div>
    
    <div class="form-group col-xs-12">
        <label class="col-xs-12 col-sm-4" for="Password">Password</label>
        <input class="col-xs-12 col-sm-8" id="Password" name="Password" type="password" placeholder="Enter a name..." />
    </div>
    
    <div class="form-group">
        <input id="Submit" name="Submit" type="submit" value="Submit" />
    </div>
</form>
@endsection