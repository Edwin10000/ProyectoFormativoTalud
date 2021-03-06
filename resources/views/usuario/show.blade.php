@extends('layouts.app')

@section('template_title')
    {{ $usuario->name ?? 'Show Usuario' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Usuario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('usuarios.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Idrol:</strong>
                            {{ $usuario->idRol }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $usuario->nombreUsuario }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $usuario->apellidoUsuario }}
                        </div>
                        <div class="form-group">
                            <strong>Clave:</strong>
                            {{ $usuario->claveUsuario }}
                        </div>
                        <div class="form-group">
                            <strong>Tipodoc:</strong>
                            {{ $usuario->tipoDocUsuario }}
                        </div>
                        <div class="form-group">
                            <strong>Numerodoc:</strong>
                            {{ $usuario->numeroDocUsuario }}
                        </div>
                        <div class="form-group">
                            <strong>Telcelular:</strong>
                            {{ $usuario->telcelularUsuario }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $usuario->correoUsuario }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $usuario->estadoUsuario }}
                        </div>
                        <div class="form-group">
                            <strong>Idobra:</strong>
                            {{ $usuario->idObra }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
