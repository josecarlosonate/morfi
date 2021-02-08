@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">

        <div class="card-header">
            <h1> Servicios Create </h1>
        </div>
        <div class="card-body">

        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li class="text-danger">{{ $error }}</li>
            @endforeach
        </ul> @endif <form action="{{route('servicios.store')}}" method="POST" novalidate>
        @csrf
        
                                        <div class="form-group">
            <label for="key">Key</label>
                        <input class="form-control String"  type="text"  name="key" id="key" value="{{old('key')}}"             maxlength="191"
                                    required="required"
                        >
                        @if($errors->has('key'))
            <p class="text-danger">{{$errors->first('key')}}</p>
            @endif
        </div>
                                <div class="form-group">
            <label for="name">Name</label>
                        <input class="form-control String"  type="text"  name="name" id="name" value="{{old('name')}}"             maxlength="191"
                                    required="required"
                        >
                        @if($errors->has('name'))
            <p class="text-danger">{{$errors->first('name')}}</p>
            @endif
        </div>
                                <div class="form-group">
            <label for="description">Description</label>
                        <input class="form-control String"  type="text"  name="description" id="description" value="{{old('description')}}"             maxlength="191"
                                    required="required"
                        >
                        @if($errors->has('description'))
            <p class="text-danger">{{$errors->first('description')}}</p>
            @endif
        </div>
                                                        <div>
            <button class="btn btn-primary" type="submit">Create</button>
            <a href="{{ url()->previous() }}">Back</a>
        </div>
        </form>
        </div>
    </div>
</div>
@endsection
