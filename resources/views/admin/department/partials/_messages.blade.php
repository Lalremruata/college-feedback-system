@if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        <strong>Success:</strong>{{ Session::get('success') }}
    </div>
@endif

@if(Session::has('message'))
    <div class="alert alert-danger" role="alert">
        <strong>Error:</strong>{{ Session::get('message') }}
    </div>
@endif

@if(count($errors) > 0)
    <div class="alert alert-danger" role="alert">
        <strong>Errors:</strong>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </div>
@endif