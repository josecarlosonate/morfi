@extends('ADMINLTE.dash')

@section('title', 'Morfi | Editar Usuario')

@section('title_page', 'Usuarios')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><b> Usuario:</b> {{ $user->name }} - <b>Rol:</b> {{ $user->role->name }}</h3>
                <a href="{{ url()->previous() }}">
                    <button class="btn btn-default btn-sm float-right">
                        <i class="fa fa-arrow-left"></i> Volver
                    </button>
                </a>
            </div>
            <form action="{{ route('users.update',$user->id) }}" method="post">
                @csrf
                @method('PUT')
                {{-- card body --}}
                <div class=" card-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group row">
                                <label for="name" class="col-sm-3 col-form-label">{{ __('Nombre:') }}</label>
                                <div class="col-md-9">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ $user->name }}" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="">Fecha de registro:</label>
                                {{ $user->created_at }}
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
                        <div class="col-sm-4">
                            <div class="form-group row">
                                <label for="email" class="col-sm-3 col-form-label">{{ __('Email:') }}</label>
                                <div class="col-md-9">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ $user->email }}" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
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
                        <div class="col-sm-4">
                            <div class="form-group row">
                                <label for="role_id" class="col-sm-2 col-form-label">Rol:</label>
                                <div class="col-md-10">
                                    <select name="role_id" id="rol" class="form-control" required>
                                        <option value="{{ $user->role->id }}">{{ $user->role->name }}</option>
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for=""># Identificacion:</label>
                                {{-- {{}} --}}
                            </div>

                        </div>
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
