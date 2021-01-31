@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">

        <div class="card-header">
            <h1> Annexe Edit </h1>
        </div>
        <div class="card-body">

    @if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
        <li class="text-danger">{{ $error }}</li>
        @endforeach
    </ul>

    @endif

    <form action="{{route('annexes.update',['annexe'=>$annexe->id])}}" method="POST" novalidate>
        @csrf
        @method('PUT')
        

                                                        <div class="form-group">
            <label for="telephone">Telephone</label>
                    <input class="form-control Integer"  type="number"  name="telephone" id="telephone" value="{{old('telephone',$annexe->telephone)}}"
                                    required="required"
                        >
                    @if($errors->has('telephone'))
            <p class="text-danger">{{$errors->first('telephone')}}</p>
            @endif
        </div>
                                <div class="form-group">
            <label for="direction">Direction</label>
                    <input class="form-control String"  type="text"  name="direction" id="direction" value="{{old('direction',$annexe->direction)}}"
                                    >
                    @if($errors->has('direction'))
            <p class="text-danger">{{$errors->first('direction')}}</p>
            @endif
        </div>
                                <div class="form-group">
            <label for="document">Document</label>
                    <input class="form-control Integer"  type="number"  name="document" id="document" value="{{old('document',$annexe->document)}}"
                                    required="required"
                        >
                    @if($errors->has('document'))
            <p class="text-danger">{{$errors->first('document')}}</p>
            @endif
        </div>
                                <div class="form-group">
            <label for="photo">Photo</label>
                    <input class="form-control String"  type="text"  name="photo" id="photo" value="{{old('photo',$annexe->photo)}}"
                                    required="required"
                        >
                    @if($errors->has('photo'))
            <p class="text-danger">{{$errors->first('photo')}}</p>
            @endif
        </div>
                                <div class="form-group">
            <label for="profile">Profile</label>
                    <textarea class="form-control Text"  name="profile" id="profile" cols="30" rows="10">{{old('profile',$annexe->profile)}}</textarea>
                    @if($errors->has('profile'))
            <p class="text-danger">{{$errors->first('profile')}}</p>
            @endif
        </div>
                                <div class="form-group">
            <label for="certificate">Certificate</label>
                    <input class="form-control String"  type="text"  name="certificate" id="certificate" value="{{old('certificate',$annexe->certificate)}}"
                                    required="required"
                        >
                    @if($errors->has('certificate'))
            <p class="text-danger">{{$errors->first('certificate')}}</p>
            @endif
        </div>
                                <div class="form-group">
            <label for="diploma">Diploma</label>
                    <input class="form-control String"  type="text"  name="diploma" id="diploma" value="{{old('diploma',$annexe->diploma)}}"
                                    required="required"
                        >
                    @if($errors->has('diploma'))
            <p class="text-danger">{{$errors->first('diploma')}}</p>
            @endif
        </div>
                                <div class="form-group">
            <label for="qualification">Qualification</label>
                    <input class="form-control Float"  type="text"  name="qualification" id="qualification" value="{{old('qualification',$annexe->qualification)}}"
                                    >
                    @if($errors->has('qualification'))
            <p class="text-danger">{{$errors->first('qualification')}}</p>
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