@extends('ADMINLTE.dash')

@section('title', 'Morfi | Roles')

@section('title_page', 'Roles')

@section('content')

    @if (session('Estado'))

        <input type="hidden" class="toastrDefaultSuccess" id="mensaje" value="{{ session('Estado') }}">

        <script>
            let mensajeAler = document.getElementById('mensaje');
            setTimeout(() => {
                $('.toastrDefaultSuccess').show(function() {
                    toastr.success(mensajeAler.value)
                });
            }, 1000);

        </script>
    @endif

    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class=" card-title">Listado De Roles Registrados</h3>
                <a href="{{ route('roles.create') }}">
                    <button type="button" class="btn btn-default btn-sm float-right">
                        <i class="fa fa-flag"></i> Nuevo Rol
                    </button>
                </a>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    @if (count($roles))
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>LLAVE</th>
                                <th>NOMBRE</th>
                                <th>DESCRIPCION</th>
                                <th>ACCIONES</th>
                            </tr>

                        </thead>
                    @endif
                    <tbody>
                        @forelse($roles as $role)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $role->key }}</td>
                                <td>{{ $role->name }}</td>
                                <td>{{ $role->description }}</td>
                                <td>
                                    <a href="{{ route('roles.edit', ['role' => $role]) }}" title=" Editar"
                                        class="btn btn-xs btn-outline-success">
                                        <i class="fa fa-edit"></i>
                                    </a>

                                    <a href="{{ route('roles.show', ['role' => $role]) }}" title="Ver mas"
                                        class="btn btn-xs btn-outline-warning ">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    @if ($role->key != 'admin')
                                        <a href="javascript:void(0)" class="btn btn-xs btn-outline-danger" title="Eliminar"
                                            onclick="event.preventDefault();
                                                                    document.getElementById('delete-role-{{ $role->id }}').submit();">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                        <form id="delete-role-{{ $role->id }}"
                                            action="{{ route('roles.destroy', ['role' => $role]) }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                    @endif
                                </td>
                            </tr>
                        @empty
                            <p>No Roles</p>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>

@endsection
