@extends('ADMINLTE.dash')

@section('title', 'Morfi | Usuarios')

@section('title_page', 'Usuarios')


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
                <h3 class=" card-title">Listado De Usuarios Registrados</h3>
                <a href="{{ route('users.create') }}">
                    <button type="button" class="btn btn-default btn-sm float-right">
                        <i class="fa fa-user-plus"></i> Nuevo Usuario
                    </button>
                </a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="listUsuarios" class="table table-bordered table-striped">
                    @if (count($users))
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>NOMBRE</th>
                                <th>EMAIL</th>
                                <th>ROL</th>
                                <th>ACCIONES</th>
                            </tr>
                        </thead>
                    @endif
                    <tbody>
                        @forelse($users as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role->name }}</td>
                                <td>
                                    <div style="display: flex;justify-content: space-evenly;">
                                        <a href="" title="Editar"><i class="fa fa-edit"></i></a>
                                        <a href="" title="Ver mas"><i class="fa fa-eye"></i></a>
                                        <a href="" title="Borrar"><i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <p>Sin usuarios registrados</p>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
