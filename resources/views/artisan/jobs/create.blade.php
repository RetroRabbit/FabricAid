@extends('artisan.layout')

@section('content')
<form method="post" class="input-form col-xs-10 col-xs-offset-1 col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3">
    @include('layouts.errors')
    
    {{ csrf_field() }}

    <div class="form-group row">
        <label class="col-xs-12 col-sm-4" for="Priority">Priority</label>
        <input class="col-xs-12 col-sm-8" id="Priority" name="Priority" type="number" min="0" value="{{ old('Priority') }}" placeholder="Priority" />
    </div>
    
    <div class="form-group row">
        <label class="col-xs-12 col-sm-4" for="Company"><strong>Company</strong></label>
        <select class="col-xs-12 col-sm-8" id="Company" name="Company" value="{{ old('Company') }}" onChange="populate('CompanyId', 'Area', this.value);">
            <option value="">--- Please pick a company ---</option>
            
            @foreach($companies as $company)
            <option value="{{ $company->Id }}">{{ $company->Name }}</option>
            @endforeach
        </select>
    </div>
    
    <div class="form-group row">
        <label class="col-xs-12 col-sm-4" for="Area"><strong>Area</strong></label>
        <select class="col-xs-12 col-sm-8" id="Area" name="Area" value="{{ old('Area') }}" onChange="populate('AreaId', 'Machine', this.value);">
            <option value="">--- Please pick a area ---</option>
        </select>
    </div>    
    
    <div class="form-group row">
        <label class="col-xs-12 col-sm-4" for="Machine"><strong>Machine</strong></label>
        <select class="col-xs-12 col-sm-8" id="Machine" name="Machine" value="{{ old('Machine') }}" onChange="populate('MachineId', 'Tool', this.value);">
            <option value="">--- Please pick a machine ---</option>
        </select>
    </div>    
    
    <div class="form-group row">
        <label class="col-xs-12 col-sm-4" for="Tool"><strong>Tool</strong></label>
        <select class="col-xs-12 col-sm-8" id="Tool" name="Tool" value="{{ old('Tool') }}">
            <option value="">--- Please pick a tool ---</option>
        </select>
    </div>

    <div class="form-group row">
        <input class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4" id="Submit" name="Submit" type="submit" value="Submit" />
    </div>
</form>

<form style="display: none;" method="get" action="{{ route('artisan-jobs-api') }}"><input id="sender" type="submit" value="" /></form>

<script type="application/javascript">
var send = (function()
{
    var xml = new XMLHttpRequest();
    var message = "";
    var callback = function(){};

    function sendMessage()
    {
        if (arguments.length === 0)
            return;

        if (arguments.length === 1)
        {
            switch (typeof arguments[0])
            {
                case 'string': message = arguments[0]; break;
                case 'function': callback = arguments[0]; break;
                default: message = arguments[0].toString(); break;
            }
        }

        else
        {
            var len = typeof arguments[arguments.length - 1] === 'function' ? arguments.length - 1 : arguments.length;

            if (len < arguments.length)
                callback = arguments[arguments.length - 1];

            message = arguments[0].toString();
            for (var i = 1; i < len; ++i)
                message += '&' + arguments[i].toString();
        }

        xml.onreadystatechange = receiveMessage;

        xml.open("POST", "{{ route('vms-api-find') }}", true);
        xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xml.setRequestHeader('X-CSRF-TOKEN', "{{ csrf_token() }}");
        xml.send(message);
    }

    function receiveMessage(e)
    {
        if (e.target.readyState === e.target.DONE)
        {
            if (e.target.status === 200)
               callback(JSON.parse(e.target.responseText), undefined);
            else
                callback(undefined, e.target.responseText);
        }
    };

    return sendMessage;
})();

function populate(id, name, value)
{
    send('target='+id, 'in='+name, 'value='+value, function response(arr, err)
    {
        if (!!err)
            console.error(err);
        else
        {
            switch (name)
            {
                case 'Area':
                    erase(document.getElementById('Area'));
                    erase(document.getElementById('Machine'));
                    erase(document.getElementById('Tool'));
                    draw(document.getElementById('Area'), arr);
                break;

                case 'Machine':
                    erase(document.getElementById('Machine'));
                    erase(document.getElementById('Tool'));
                    draw(document.getElementById('Machine'), arr);
                break
                
                case 'Tool':
                    erase(document.getElementById('Tool'));
                    draw(document.getElementById('Tool'), arr);
                break
                
                default:
                    console.log(arr);
                break;
            }
        }
    });    
}

function draw(root, fields)
{
    fields.forEach(function(field, index)
    {
        var option = document.createElement('option');
        var textNode = document.createTextNode(field.Name);

        option.value = field.Id;
        option.appendChild(textNode);

        root.appendChild(option);
    });
}

function erase(root)
{   
    while (root.children.length > 1)
        root.removeChild(root.children[1]);
}
</script>
@endsection