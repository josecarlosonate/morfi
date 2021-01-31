@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">

        <div class="card-header">
            <h1> Role Edit </h1>
        </div>
        <div class="card-body">

    @if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
        <li class="text-danger">{{ $error }}</li>
        @endforeach
    </ul>

    @endif

    <form action="{{route('roles.update',['role'=>$role->id])}}" method="POST" novalidate>
        @csrf
        @method('PUT')
        

                                        <div class="form-group">
            <label for="key">Key</label>
                    <input class="form-control String"  type="text"  name="key" id="key" value="{{old('key',$role->key)}}"
                                    required="required"
                        >
                    @if($errors->has('key'))
            <p class="text-danger">{{$errors->first('key')}}</p>
            @endif
        </div>
                                <div class="form-group">
            <label for="name">Name</label>
                    <input class="form-control String"  type="text"  name="name" id="name" value="{{old('name',$role->name)}}"
                                    required="required"
                        >
                    @if($errors->has('name'))
            <p class="text-danger">{{$errors->first('name')}}</p>
            @endif
        </div>
                                <div class="form-group">
            <label for="description">Description</label>
                    <textarea class="form-control Text"  name="description" id="description" cols="30" rows="10">{{old('description',$role->description)}}</textarea>
                    @if($errors->has('description'))
            <p class="text-danger">{{$errors->first('description')}}</p>
            @endif
        </div>
                                                        <div>
            <button class="btn btn-primary" type="submit">Save</button>
            <a href="{{ url()->previous() }}">Back</a>
        </div>
    </form>
    </div>
        </div>

</div>
@endsection