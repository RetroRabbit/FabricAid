@extends('admin.layout')

@section('content')
<div class="container" style="margin-top: 100px;">
    <form class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 row" method="post"> 
        @include('layouts.errors')

        {{ csrf_field() }}
        
        <div class="row form-group">
            <label for="Name" class="col-xs-5"><strong>Role Name</strong></label>
            <input class="col-xs-7" id="Name" name="Name" type="text" value="{{ old('Name') }}" placeholder="Artisan"/> 
        </div>
        
        <div class="row form-group">
            <label class="col-xs-12">Permissions</label>
        </div>

        <div class="row" style="max-height: 300px; overflow-y: auto;">
            @foreach($accesses as $access)
            <div class="col-xs-12 form-group">
                <input class="col-xs-1 col-xs-offset-1" id="{{ $access->Code }}" name="{{ $access->Code }}" value="{{ $access->Id }}" type="checkbox" />
                <label class="col-xs-4" for="{{ $access->Code }}">{{ $access->Code }}</label>
                <label class="col-xs-6" for="{{ $access->Code }}">{{ $access->Name }}</label>
            </div>
            @endforeach
        </div>

        <div class="row form-group">
            <input class="col-xs-6 col-xs-offset-3 col-md-4 col-md-offset-0" type="submit" name="Submit" value="Create" />
        </div>
    </form> 
</div> 
@endsection