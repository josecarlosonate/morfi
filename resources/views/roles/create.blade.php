@extends('ADMINLTE.dash')

@section('title', 'Morfi | Nuevo Rol')

@section('title_page', 'Roles')

@section('content')
    <div class="col-md-12">
        <div class="card">

            <div class=" card-header">
                <h3 class=" card-title">Crear Nuevo Rol</h3>
                <a href="{{ url()->previous() }}">
                    <button class="btn btn-default btn-sm float-right">
                        <i class="fa fa-arrow-left"></i> Volver
                    </button>
                </a>
            </div>
            <form action="{{ route('roles.store') }}" method="POST" novalidate>
                @csrf
                {{-- card body --}}
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="key">Key</label>
                                <input class="form-control String" type="text" name="key" id="key"
                                    value="{{ old('key') }}" maxlength="255" required="required">
                                @if ($errors->has('key'))
                                    <p class="text-danger">{{ $errors->first('key') }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input class="form-control String" type="text" name="name" id="name"
                                    value="{{ old('name') }}" maxlength="255" required="required">
                                @if ($errors->has('name'))
                                    <p class="text-danger">{{ $errors->first('name') }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" name="description" id="description" cols="30"
                            rows="3">{{ old('description') }}</textarea>
                        @if ($errors->has('description'))
                            <p class="text-danger">{{ $errors->first('description') }}</p>
                        @endif
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-secondary">Registrar</button>
                    <button type="reset" class="btn btn-outline-danger float-right">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
