@extends ('layouts.admin')

@section('content')
    {!! Form::open(['route' => 'admin.pages.store', 'method'=> 'POST']) !!}

    <div class="form-group row">
        <label class="col-1">
            Title
        </label>
    <div class="col-sm-9 input-group">
        {!! Form::text('title', '', ['class'=> 'form-control','autocomplete'=>'off']) !!}
    </div>
    </div>
    <div class="form-group row">

        <label class="col-1">
            File
        </label>
    <div class="col-sm-9 input-group">
        {!! Form::file('image', ['class'=> 'form-control','autocomplete'=>'off']) !!}
    </div>
    </div>
    <div class="form-group row">
        <label class="col-1">
            Slug
        </label>
    <div class="col-sm-9 input-group">
        <span class="input-group-text">{{ route('page', ['slug' => '/']) }}</span>
        {!! Form::text('slug', '', ['class'=> 'form-control','autocomplete'=>'off']) !!}
    </div>
    </div>

    <div class="form-group row">
        <label class="col-1">
            Body
        </label>
    <div class="col-sm-9 input-group">
        {!! Form::textarea('body', '', ['class'=> 'form-control']) !!}
    </div>
    </div>

    <div class="form-group row">
        <label class="col-1">
            Active
        </label>

    <div class="col-sm-9 input-group">
        {!! Form::checkbox('active', 1, true) !!}
    </div>
    </div>
    <div class="form-group row">
        <button type="submit" class=" btn btn-success">Submit</button>
    </div>


    {!! Form::close() !!}

@stop
