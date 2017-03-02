@extends('admin.layout')

@section('content')
<div class="container">
    <div id="table-header">
        <h3>#</h3>
        <h3>Role Name</h3>
    </div>

    <div id="table-body">
        @for($i = 0; $i < count($roles); ++$i)
        <form method="post">
            {{ csrf_field() }}

            <div class="form-group">
                <input name="Name" type="text" value"{{ $role[$i]->Name }}" placeholder="Enter a role title"/>
            </div>
            <div class="form-group">
                <input type="submit" name="Submit" />
            </div>
        </form>
        @endfor
    </div>

    <div id="table-footer">
        <form method="post" action="{{ route('admin-roles-create') }}">
            {{ csrf_field() }}

            <div class="form-group">
                <input name="Name" type="text" value="{{ old('Name') }}" placeholder="Enter a role title"/>
            </div>
        </form>
    </div>
</div>
@endsection