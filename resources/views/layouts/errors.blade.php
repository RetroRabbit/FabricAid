@if($errors != null && count($errors) > 0)
<div class="alert alert-danger row form-group">    
    <ul>
        @foreach ($errors->all() as $error)
            <li class="col-xs-11 col-xs-offset-1">{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif