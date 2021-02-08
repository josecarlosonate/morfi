@extends('layouts.app')
@section('content')
<div class="container">

    <div class="card mb-4">

        <div class="card-header">
            <h1> Servicios Show </h1>
        </div>

    <div class="card-body">
                                        <div class="form-group">
            <label class="col-form-label" for="value">Key</label>
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$servicios->key}}">
        </div>
                                <div class="form-group">
            <label class="col-form-label" for="value">Name</label>
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$servicios->name}}">
        </div>
                                <div class="form-group">
            <label class="col-form-label" for="value">Description</label>
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$servicios->description}}">
        </div>
                                                    </div>

    </div>

    <div class="card mb-4">

        
    </div>



    <a href="{{ url()->previous() }}">Back</a>
</div>
@endsection