@extends('ADMINLTE.dash')

@section('title', 'Morfi | Ver Usuario')

@section('title_page', 'Usuarios')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><b> Usuario:</b> {{$user->name}} - <b>Rol:</b>  {{$user->role->name}}</h3>
                <a href="{{ url()->previous() }}">
                    <button class="btn btn-default btn-sm float-right">
                        <i class="fa fa-arrow-left"></i> Volver
                    </button>
                </a>
            </div>
            {{-- card body --}}
            <div class=" card-body">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="">Nombre:</label>
                            {{$user->name}}
                        </div> 
                        <div class="form-group">
                            <label for="">Fecha de registro:</label>
                            {{$user->created_at}}
                        </div>
                        <div class="form-group">
                            <label for="">Telefono:</label>
                            {{-- {{}} --}}
                        </div>   
                        <div class="form-group">
                            <label for="">Descripcion:</label>
                            {{-- {{}} --}}
                        </div>                  
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="">Email:</label>
                            {{$user->email}}
                        </div>
                        <div class="form-group">
                            <label for="">Direccion:</label>
                            {{-- {{}} --}}
                        </div> 
                        <div class="form-group">
                            <label for="">Calificacion:</label>
                            {{-- {{}} --}}
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="">Rol:</label>
                            {{$user->role->name}}
                        </div>
                        <div class="form-group">
                            <label for=""># Identificacion:</label>
                            {{-- {{}} --}}
                        </div> 
                        
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <img src="{{ asset('/dist/img/avatar5.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection