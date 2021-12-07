@extends('layouts.app')

@section('template_title')
    Materiale
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Materiale') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('materiales.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo Materiall') }}
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

                                        <th>nombreMaterial</th>
                                        <th>Estado</th>
                                        <th>Tamaño</th>
										<th>Peso</th>
										<th>Cantidad</th>
										<th>Idcategoriafk</th>
										<th>Idproveedorfk</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($materiales as $Materiale)
                                        <tr>
                                            <td>{{ $Materiale->idMaterial }}</td>
											<td>{{ $Materiale->nombreMaterial }}</td>
                                            <td>{{ $Materiale->estadoMaterial }}</td>
                                            <td>{{ $Materiale->tamañoMaterial }}</td>
											<td>{{ $Materiale->pesoMaterial }}</td>
											<td>{{ $Materiale->cantidadMaterial }}</td>
											<td>{{ $Materiale->idCategoria }}</td>
											<td>{{ $Materiale->idProveedor }}</td>

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
            </div>
        </div>
    </div>
@endsection
