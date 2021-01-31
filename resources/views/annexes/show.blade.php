@extends('layouts.app')
@section('content')
<div class="container">

    <div class="card mb-4">

        <div class="card-header">
            <h1> Annexe Show </h1>
        </div>

    <div class="card-body">
                                                        <div class="form-group">
            <label class="col-form-label" for="value">Telephone</label>
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$annexe->telephone}}">
        </div>
                                <div class="form-group">
            <label class="col-form-label" for="value">Direction</label>
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$annexe->direction}}">
        </div>
                                <div class="form-group">
            <label class="col-form-label" for="value">Document</label>
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$annexe->document}}">
        </div>
                                <div class="form-group">
            <label class="col-form-label" for="value">Photo</label>
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$annexe->photo}}">
        </div>
                                <div class="form-group">
            <label class="col-form-label" for="value">Profile</label>
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$annexe->profile}}">
        </div>
                                <div class="form-group">
            <label class="col-form-label" for="value">Certificate</label>
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$annexe->certificate}}">
        </div>
                                <div class="form-group">
            <label class="col-form-label" for="value">Diploma</label>
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$annexe->diploma}}">
        </div>
                                <div class="form-group">
            <label class="col-form-label" for="value">Qualification</label>
            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{$annexe->qualification}}">
        </div>
                                                    </div>

    </div>

    <div class="card mb-4">

        
    </div>



    <a href="{{ url()->previous() }}">Back</a>
</div>
@endsection