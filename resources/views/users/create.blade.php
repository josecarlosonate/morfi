@extends('ADMINLTE.dash')

@section('title', 'Morfi | Nuevo Usuario')

@section('title_page', 'Usuarios')


@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class=" card-header">
                <h3 class=" card-title">Crear Nuevo Usuario</h3>
                <a href="{{ url()->previous() }}">
                    <button class="btn btn-default btn-sm float-right">
                        <i class="fa fa-arrow-left"></i> Volver
                    </button>
                </a>
            </div>
            <form action="{{ route('users.store') }}" method="post">
                @csrf
                {{-- card body --}}
                <div class=" card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            {{-- campo nombre --}}
                            <div class="form-group row">
                                <label for="name" class="col-sm-3 col-form-label">{{ __('Nombre') }}</label>
                                <div class="col-md-9">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- email --}}
                            <div class="form-group row">
                                <label for="email" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- password --}}
                            <div class="form-group row">
                                <label for="password" class="col-sm-3 col-form-label">{{ __('Contraseña') }}</label>

                                <div class="col-sm-9">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- confirmar password --}}
                            <div class="form-group row">
                                <label for="password-confirm"
                                    class="col-sm-5 col-form-label ">{{ __('Confirmar Contraseña') }}</label>

                                <div class="col-sm-7">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group row">
                                <label for="role_id"
                                    class="col-sm-3 offset-1 col-form-label">{{ __('Rol De Usuario') }}</label>

                                <div class="col-sm-8">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" id="role_id" name="role_id"
                                                value="2" required>Tecnico
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" id="role_id" name="role_id"
                                                value="3" required>Cliente
                                        </label>
                                    </div>
                                </div>
                            </div>
                            {{-- espacio --}}
                            <div class="form-group row">
                                <label for="" class="col-sm-3 col-form-label ">{{ __('') }}</label>
                            </div>                            
                        </div>
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
