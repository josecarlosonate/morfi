@extends('ADMINLTE.dash')

@section('title', 'Morfi | Editar Rol')

@section('title_page', 'Roles')


@section('content')
    <div class="col-md-12">
        <div class="card">

            <div class="card-header">
                <h3 class="card-title"><b> Rol:</b> {{ $role->key }} </h3>
                <a href="{{ route('roles.index') }}">
                    <button class="btn btn-default btn-sm float-right">
                        <i class="fa fa-arrow-left"></i> Volver
                    </button>
                </a>
            </div>
            <form action="{{ route('roles.update', ['role' => $role->id]) }}" method="POST" novalidate>
                @csrf
                @method('PUT')
                {{-- card body --}}
                <div class="card-body">

                    <div class="form-group">
                        <label for="key">Llave</label>
                        <input class="form-control String" type="text" name="key" id="key"
                            value="{{ $role->key }}" required="required" disabled >
                        @if ($errors->has('key'))
                            <p class="text-danger">{{ $errors->first('key') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input class="form-control String" type="text" name="name" id="name"
                            value="{{ old('name', $role->name) }}" required="required">
                        @if ($errors->has('name'))
                            <p class="text-danger">{{ $errors->first('name') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="description">Descripcion</label>
                        <textarea class="form-control Text" name="description" id="description" cols="30"
                            rows="3">{{ old('description', $role->description) }}</textarea>
                        @if ($errors->has('description'))
                            <p class="text-danger">{{ $errors->first('description') }}</p>
                        @endif
                    </div>

                </div>
                {{-- card footer --}}
                <div class="card-footer">
                    <button type="submit" class="btn btn-secondary">Actualizar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
