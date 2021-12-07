@extends('layouts.app')

@section('template_title')
    Obra
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Obra') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('obras.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nueva Obra') }}
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
										<th>Fechainicio</th>
										<th>Fechaentrega</th>
										<th>Estado</th>
										<th>idMaterial</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($obras as $obra)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $obra->nombreObra }}</td>
											<td>{{ $obra->fechainicioObra }}</td>
											<td>{{ $obra->fechaentregaObra }}</td>
											<td>{{ $obra->estadoObra }}</td>
											<td>{{ $obra->idMaterial }}</td>

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
                {!! $obras->links() !!}
            </div>
        </div>
    </div>
@endsection
