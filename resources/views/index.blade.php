@extends('template')

@section('content')
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            All fields are required with a positive numeric value.
        </div>
    @endif

    {!! Form::open(['method' => 'POST', 'url' => route('web.root.show')]) !!}

    <div class="row">

        <div class="form-group">
            <div class="col-md-4">
                Owed {!! Form::text('owed') !!}
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-4">
                Paid {!! Form::text('paid') !!}
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-4">
                <button type="submit" class="btn btn-primary"> Submit </button>
            </div>
        </div>
    </div>

    {!! Form::close() !!}

@endsection
