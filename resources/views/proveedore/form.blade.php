<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $proveedore->nombreProveedor, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido') }}
            {{ Form::text('apellido', $proveedore->apellidoProveedor, ['class' => 'form-control' . ($errors->has('apellido') ? ' is-invalid' : ''), 'placeholder' => 'Apellido']) }}
            {!! $errors->first('apellido', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tipodoc') }}
            {{ Form::text('tipodoc', $proveedore->tipodocProveedor, ['class' => 'form-control' . ($errors->has('tipodoc') ? ' is-invalid' : ''), 'placeholder' => 'Tipodoc']) }}
            {!! $errors->first('tipodoc', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numerodoc') }}
            {{ Form::text('numerodoc', $proveedore->numerodocProveedor, ['class' => 'form-control' . ($errors->has('numerodoc') ? ' is-invalid' : ''), 'placeholder' => 'Numerodoc']) }}
            {!! $errors->first('numerodoc', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telcelular') }}
            {{ Form::text('telcelular', $proveedore->telcelularProveedor, ['class' => 'form-control' . ($errors->has('telcelular') ? ' is-invalid' : ''), 'placeholder' => 'Telcelular']) }}
            {!! $errors->first('telcelular', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('correo') }}
            {{ Form::text('correo', $proveedore->correoProveedor, ['class' => 'form-control' . ($errors->has('correo') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
            {!! $errors->first('correo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::text('estado', $proveedore->estadoProveedor, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>
