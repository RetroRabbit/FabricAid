@extends('admin.layout')

@section('content')
<form method="post" class="input-form col-xs-12 col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">
    @include('layouts.errors')

    {{ csrf_field() }}
    
    <div class="row form-group">
        <label class="col-xs-4" for="Name"><strong>Role Name</strong></label>
        <input class="col-xs-8" id="Name" name="Name" type="text" value="{{ $role->Name }}" placeholder="Role Name"/> 
    </div>
    
    <div class="row form-group">
        <label class="col-xs-12">Permissions</label>
    </div>

    <div class="row form-group" style="max-height: 300px; overflow-y: auto; border: solid 1px black; border-radius: 5px; padding: 5px 0px;">
        @foreach($accesses as $access)
        <div class="col-xs-12 form-group">
            <label class="hidden-xs col-sm-2" for="{{ $access->Code }}"></label>
            <input class="col-xs-1 col-sm-1" id="{{ $access->Code }}" name="{{ $access->Code }}" value="{{ $access->Id }}" type="checkbox" {{ in_array($access->Id, $role_accesses) ? 'checked' : '' }}/>
            <label class="col-xs-5 col-sm-4" for="{{ $access->Code }}">{{ $access->Code }}</label>
            <label class="col-xs-4 col-sm-4" for="{{ $access->Code }}">{{ $access->Name }}</label>
        </div>
        @endforeach
    </div>
    
    <div class="form-group row">
        <input class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4" id="Submit" name="Submit" type="submit" value="Update" />
    </div>
</form>
@endsection
