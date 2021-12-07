@extends('layouts.app')

@section('template_title')
    Proveedore
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Proveedores') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('proveedores.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Ingresar Nuevo Dato') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>Id</th>

										<th>Nombre</th>
										<th>Apellido</th>
										<th>Tipodoc</th>
										<th>Numerodoc</th>
										<th>Telcelular</th>
										<th>Correo</th>
										<th>Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($proveedores as $proveedore)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $proveedore->nombreProveedor }}</td>
											<td>{{ $proveedore->apellidoProveedor }}</td>
											<td>{{ $proveedore->tipodocProveedor }}</td>
											<td>{{ $proveedore->numerodocProveedor }}</td>
											<td>{{ $proveedore->telcelularProveedor }}</td>
											<td>{{ $proveedore->correoProveedor }}</td>
											<td>{{ $proveedore->estadoProveedor }}</td>

                                            <td>


                                                <a href="{{ route('proveedore.form', ['id'=> $proveedore->id]) }}" class="btn btn-warning">Editar</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i>Eliminar</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $proveedores->links() !!}
            </div>
        </div>
    </div>
@endsection
