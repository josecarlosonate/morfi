@extends('layouts.app')
@section('content')
<div class="container">

    @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <div class="card">
        <div class="card-header">
            <h1> Annexes </h1>
        </div>
    <div class="card-body">

    <div>
        <a href="{{route('annexes.create')}}">New</a>
    </div>
    <table class="table table-striped">
        @if(count($annexes))
        <thead>
            <tr>
                <th>&nbsp;</th>
                                
                                
                                                <td>Telephone</td>
                
                                                <td>Direction</td>
                
                                                <td>Document</td>
                
                                                <td>Photo</td>
                
                                                <td>Profile</td>
                
                                                <td>Certificate</td>
                
                                                <td>Diploma</td>
                
                                                <td>Qualification</td>
                
                                
                                
                            </tr>

        </thead>
        @endif
        <tbody>
            @forelse($annexes as $annexe)
            <tr>
                <td>
                    <a href="{{route('annexes.show',['annexe'=>$annexe] )}}">Show</a>
                    <a href="{{route('annexes.edit',['annexe'=>$annexe] )}}">Edit</a>
                    <a href="javascript:void(0)" onclick="event.preventDefault();
                    document.getElementById('delete-annexe-{{$annexe->id}}').submit();">
                        Delete
                    </a>
                    <form id="delete-annexe-{{$annexe->id}}" action="{{route('annexes.destroy',['annexe'=>$annexe])}}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
                                                                                                                <td>{{$annexe->telephone}}</td>
                                                                <td>{{$annexe->direction}}</td>
                                                                <td>{{$annexe->document}}</td>
                                                                <td>{{$annexe->photo}}</td>
                                                                <td>{{$annexe->profile}}</td>
                                                                <td>{{$annexe->certificate}}</td>
                                                                <td>{{$annexe->diploma}}</td>
                                                                <td>{{$annexe->qualification}}</td>
                                                                                                
            </tr>
            @empty
            <p>No Annexes</p>
            @endforelse
        </tbody>
    </table>
    </div>
    </div>

</div>

@endsection