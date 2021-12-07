@extends('layout')

@section('title',$usuario->id ? 'Editar Categoria' : 'Nueva Categoria')
@section('h1' , $usuario->id ? 'Editar Categoria' : 'Nueva Categoria')

@section('content')

<form action="{{ route('usuario.saveUsuario') }}" method="POST">
    @csrf

    <input type="hidden" name="id" value="{{ $usuario->id }}">

    <div class="mb-3 row">
        <label for="idRol" class="col-sm-2 col-form-label">Usuario</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="idRol" name='idRol'
            value="{{ @old('idRol') ? @old('idRol') : $usuario->idRol }}">
        </div>
        @error('idRol')
        <p class="text-danger">
            {{ $message }}
        </p>
    @enderror
    </div>
    <div class="mb-3 row">
        <label for="nombreUsuario" class="col-sm-2 col-form-label">Nombre Usuario</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="nombreUsuario" name='nombreUsuario'
            value="{{ @old('nombreUsuario') ? @old('nombreUsuario') : $usuario->nombreUsuario }}">
        </div>
        @error('nombreUsuario')
        <p class="text-danger">
            {{ $message }}
        </p>
    @enderror
    </div>
    <div class="mb-3 row">
        <label for="apellidoUsuario" class="col-sm-2 col-form-label">Apellido Usuario</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="apellidoUsuario" name='apellidoUsuario'
            value="{{ @old('apellidoUsuario') ? @old('apellidoUsuario') : $usuario->apellidoUsuario }}">
        </div>
        @error('apellidoUsuario')
        <p class="text-danger">
            {{ $message }}
        </p>
    @enderror
    </div>
    <div class="mb-3 row">
        <label for="claveUsuario" class="col-sm-2 col-form-label">Clave Usuario</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" id="claveUsuario" name='claveUsuario'
            value="{{ @old('claveUsuario') ? @old('claveUsuario') : $usuario->claveUsuario }}">
        </div>
        @error('claveUsuario')
        <p class="text-danger">
            {{ $message }}
        </p>
    @enderror
    </div>
<div class="mb-3 row">
    <label for="tipoDocUsuario" class="col-sm-2 col-form-label">Tipo doc Usuario</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="tipoDocUsuario" name='tipoDocUsuario'
        value="{{ @old('tipoDocUsuario') ? @old('tipoDocUsuario') : $usuario->tipoDocUsuario }}">
    </div>
    @error('tipoDocUsuario')
    <p class="text-danger">
        {{ $message }}
    </p>
@enderror
</div>
<div class="mb-3 row">
    <label for="numeroDocUsuario" class="col-sm-2 col-form-label">Numero doc Usuario</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" id="numeroDocUsuario" name='numeroDocUsuario'
        value="{{ @old('numeroDocUsuario') ? @old('numeroDocUsuario') : $usuario->numeroDocUsuario }}">
    </div>
    @error('numeroDocUsuario')
    <p class="text-danger">
        {{ $message }}
    </p>
@enderror
</div>
<div class="mb-3 row">
    <label for="telcelularUsuario" class="col-sm-2 col-form-label">Tel celular Usuario</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" id="telcelularUsuario" name='telcelularUsuario'
        value="{{ @old('telcelularUsuario') ? @old('telcelularUsuario') : $usuario->telcelularUsuario }}">
    </div>
    @error('telcelularUsuario')
    <p class="text-danger">
        {{ $message }}
    </p>
@enderror
</div>
<div class="mb-3 row">
    <label for="correoUsuario" class="col-sm-2 col-form-label">Correo Usuario</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="correoUsuario" name='correoUsuario'
        value="{{ @old('correoUsuario') ? @old('correoUsuario') : $usuario->correoUsuario }}">
    </div>
    @error('correoUsuario')
    <p class="text-danger">
        {{ $message }}
    </p>
@enderror
</div>
<div class="mb-3 row">
    <label for="estadoUsuario" class="col-sm-2 col-form-label">Estado Usuario</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="estadoUsuario" name='estadoUsuario'
        value="{{ @old('estadoUsuario') ? @old('estadoUsuario') : $usuario->estadoUsuario }}">
    </div>
    @error('estadoUsuario')
    <p class="text-danger">
        {{ $message }}
    </p>
@enderror
</div>
<div class="mb-3 row">
    <label for="idObra" class="col-sm-2 col-form-label">id Obra</label>
    <div class="col-sm-10">
        <input type="number" class="form-control" id="idObra" name='idObra'
        value="{{ @old('idObra') ? @old('idObra') : $usuario->idObra }}">
    </div>
    @error('idObra')
    <p class="text-danger">
        {{ $message }}
    </p>
@enderror
</div>
    <div class="mb-3 row">
        <div class="col-sm-9"></div>
        <div class="col-sm-3">
            <a href="/usuario" class="btn btn-secondary">Cancelar</a>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
    </div>
</form>
@endsection
