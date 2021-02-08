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
            <h1> Servicios </h1>
        </div>
    <div class="card-body">

    <div>
        <a href="{{route('servicios.create')}}">New</a>
    </div>
    <table class="table table-striped">
        @if(count($servicios))
        <thead>
            <tr>
                <th>&nbsp;</th>
                                
                                                <td>Key</td>
                
                                                <td>Name</td>
                
                                                <td>Description</td>
                
                                
                                
                            </tr>

        </thead>
        @endif
        <tbody>
            @forelse($servicios as $servicios)
            <tr>
                <td>
                    <a href="{{route('servicios.show',['servicios'=>$servicios] )}}">Show</a>
                    <a href="{{route('servicios.edit',['servicios'=>$servicios] )}}">Edit</a>
                    <a href="javascript:void(0)" onclick="event.preventDefault();
                    document.getElementById('delete-servicios-{{$servicios->id}}').submit();">
                        Delete
                    </a>
                    <form id="delete-servicios-{{$servicios->id}}" action="{{route('servicios.destroy',['servicios'=>$servicios])}}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
                                                                                <td>{{$servicios->key}}</td>
                                                                <td>{{$servicios->name}}</td>
                                                                <td>{{$servicios->description}}</td>
                                                                                                
            </tr>
            @empty
            <p>No Servicios</p>
            @endforelse
        </tbody>
    </table>
    </div>
    </div>

</div>

@endsection