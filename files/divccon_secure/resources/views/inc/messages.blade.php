@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@if(session('success'))
    <div class="alert alert-success">
        <h5>{{ session('success') }}</h5>
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        <h5>{{ session('error') }}</h5>
    </div>
@endif
