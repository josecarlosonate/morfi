@extends('ADMINLTE.dash')

@section('title','Panel de Administración')

@section('title_page','Dashboard')


@section('content')
{{-- <br><br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Menu') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Registrado!') }}
                    @if (Auth::user()->role->key === 'admin')
                        {{ __('usted es administrador') }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
