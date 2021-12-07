@extends('layouts.app')

@section('template_title')
    Usuario
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Usuario') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('usuarios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        <th>No</th>

										<th>Idrol</th>
										<th>Nombre</th>
										<th>Apellido</th>
										<th>Clave</th>
										<th>Tipodoc</th>
										<th>Numerodoc</th>
										<th>Telcelular</th>
										<th>Correo</th>
										<th>Estado</th>
										<th>Idobra</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($usuarios as $usuario)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $usuario->idRol }}</td>
											<td>{{ $usuario->nombreUsuario }}</td>
											<td>{{ $usuario->apellidoUsuario }}</td>
											<td>{{ $usuario->claveUsuario }}</td>
											<td>{{ $usuario->tipoDocUsuario }}</td>
											<td>{{ $usuario->numeroDocUsuario }}</td>
											<td>{{ $usuario->telcelularUsuario }}</td>
											<td>{{ $usuario->correoUsuario }}</td>
											<td>{{ $usuario->estadoUsuario }}</td>
											<td>{{ $usuario->idObra }}</td>

                                            <td>
                                                <a class="btn btn-warning" href="usuario/<%= b.idRol  %>" role="button">Editar</a>

              <a class="btn btn-danger"
              id="btnBorrar"
              onclick="Borrar('<%= b.idRol  %>')"
              role="button">Borrar</a>
            </td>
          </tr>
        <% }) %>
      <% } %>
    </tbody>
  </table>
</div>
  <script>
    var myTable = document.querySelector("#datat");
    var dataTable = new DataTable("#datat", {
      perPage:5,
      labels: {
      placeholder: "Búsqueda...",
      perPage: "{select} registros por página",
      noRows: "No se encontraron registros",
      info: "Mostrando {start} a {end} de {rows} registros",
}
});

const Borrar=(idRol)=>{

  console.log(idRol);
  Swal.fire({
  title: 'Está seguro que desea eliminar este registro?',
  text: "No puede reversar esta acción!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Sí, Bórralo!',
  cancelButtonText: "No, Cancelar!",
  }).then((result) => {

    if (result.isConfirmed) {
      try{

        //Utilizar fetch para ejecutar ruta de borrado
        const data = fetch(`/usuario/${idRol}`, {
          method: 'delete' }).then(res=>{
            //Imprimir res para ver la respuesta de la petición asíncrona
            console.log(res);
          if(res.status=200){
            Swal.fire({
              position: 'top-end',
              icon: 'success',
              title: 'El registro ha sido borrado',
              showConfirmButton: false,
              timer: 1500
            })
            window.setTimeout(function(){window.location.href = '/usuario'},2000);
          }else{
              console.log("algo pasó")
          }
        }).catch(error=>{
            Swal.fire(
              'No se pudo borrar el registro!',
              'Su registro no ha sido borrado',
              'error'
            )
          })


      }catch(error){
        console.log(error);
      }
    }
    else{
      Swal.fire(
						'Cancelado',
						'Cancelaste la eliminacion',
						'error');
    }


  })
}
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $usuarios->links() !!}
            </div>
        </div>
    </div>
@endsection
