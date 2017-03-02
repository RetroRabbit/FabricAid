@extends('admin.layout')

@section('content')
<div class="container">
    <div id="table-header" class="row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2 form-group">
            <h3>#</h3>
            <h3>Role Name</h3>
        </div>
    </div>

    <div id="table-body" class="row">
        @for($i = 0; $i < count($roles); ++$i)
        <div class="col-xs-12 col-sm-8 col-sm-offset-2 form-group">
            <label class="col-xs-2">{{ $i + 1 }}</label>
            <input class="col-xs-8" name="Name" type="text" value="{{ $roles[$i]->Name }}" placeholder="Enter a role title"/>
            <a class="col-xs-1" href="{{ route('admin-roles-update', $roles[$i]->Id) }}"><i class="fa fa-upload" aria-hidden="true"></i></a>
            <a class="col-xs-1" href="{{ route('admin-roles-delete', $roles[$i]->Id) }}"><i class="fa fa-ban" aria-hidden="true"></i></a>
        </div>
        @endfor
    </div>

    <div id="table-footer" class="row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2 form-group">
            <label class="col-xs-2">New</label>
            <input class="col-xs-8" name="Name" type="text" value="{{ old('Name') }}" placeholder="Enter a role title"/>
            <input class="col-xs-2" type="submit" name="Submit" value="Create" />
        <div>
    </div>
</div>
@endsection