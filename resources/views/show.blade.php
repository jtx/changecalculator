@extends('template')

@section('content')
    <div class="container-fluid">
    @foreach ($results as $denomination => $cost)
            <div class="row">
                <div class="col-md-4">
                    {{ $denomination }}
                </div>
                <div class="col-md-4">
                    {{ $cost }}
                </div>
            </div>
    @endforeach
@endsection
