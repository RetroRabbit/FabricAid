@extends('home.layout')

@section('content')
<form method="post" class="input-form col-xs-12 col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">
    @include('layouts.errors')
    
    {{ csrf_field() }}

    <div class="form-group row">
        <label class="col-xs-12" for="Email">Email</label>
        <input class="col-xs-12" id="Email" name="Email" type="email" value="{{ old('Email') }}" placeholder="Email" />
    </div>
    
    <div class="form-group row">
        <label class="col-xs-12" for="Password">Password</label>
        <input class="col-xs-12" id="Password" name="Password" type="password" placeholder="Password" />
    </div>
    
    <div class="form-group row">
        <input class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4" id="Submit" name="Submit" type="submit" value="Submit" />
    </div>
</form>
@endsection