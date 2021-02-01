@extends('ADMINLTE.dash')

@section('title', 'Morfi | Ver Rol')

@section('title_page', 'Roles')

@section('content')
    <div class="col-md-12">

        <div class="card mb-4">
            <div class="card-header">
                <h3 class="card-title"><b> Rol:</b>  {{$role->name}}</h3>
                <a href="{{ url()->previous() }}">
                    <button class="btn btn-default btn-sm float-right">
                        <i class="fa fa-arrow-left"></i> Volver
                    </button>
                </a>
            </div>

            <div class="card-body">
                <div class="form-group">
                    <label class="col-form-label" for="value">Llave</label>
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $role->key }}">
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="value">Nombre</label>
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $role->name }}">
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="value">Descripcion</label>
                    <input type="text" readonly class="form-control-plaintext" id="staticEmail"
                        value="{{ $role->description }}">
                </div>
            </div>

        </div>
    </div>
@endsection
