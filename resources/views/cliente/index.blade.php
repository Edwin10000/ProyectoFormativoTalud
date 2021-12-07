@extends('layouts.app')

@section('template_title')
    Cliente
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Cliente') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('clientes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Registrar Nuevo Cliente') }}
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
                                        <th>No</th>

										<th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Contraseña</th>
                                        <th>Tipo Doc</th>
                                        <th>Numero Doc</th>
                                        <th>Tel Celular</th>
										<th>Correo</th>
										<th>Estado</th>
										<th>Id Obra</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clientes as $cliente)
                                        <tr>
                                            <td>{{ $cliente->idCliente }}</td>

											<td>{{ $cliente->nombreCliente }}</td>
                                            <td>{{ $cliente->apellidoCliente }}</td>
											<td>{{ $cliente->claveCliente }}</td>
                                            <td>{{ $cliente->tipodocCliente }}</td>
                                            <td>{{ $cliente->numerodocCliente }}</td>
                                            <td>{{ $cliente->telcelularCliente }}</td>
											<td>{{ $cliente->correoCliente }}</td>
											<td>{{ $cliente->estadoCliente }}</td>
											<td>{{ $cliente->idObra }}</td>

                                            <td>

                                                <button type="submit" class="btn btn-warning btn-sm"><i class="fa fa-fw fa-trash"></i>Editar</button>

                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $clientes->links() !!}
            </div>
        </div>
    </div>
@endsection
