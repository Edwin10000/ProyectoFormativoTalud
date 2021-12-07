@extends('layouts.app')

@section('template_title')
    Create Materiale
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

            <form action="{{route('Materiale.store')}}" method="POST">
    @csrf
    <div>
        <div class="mb-4">
        <label for="idMaterial">No:</label>
            <label for="nombreMaterial">Nombre:</label>
 <label for="estadoMaterial">Estado:</label>
  <label for="tamañoMaterial">Tamaño:</label>
   <label for="pesoMaterial">Peso:</label>
    <label for="cantidadMaterial">Cantidad:</label>
     <label for="idCategoria">id Categoria:</label>
      <label for="idProveedor">id Proveedor:</label>
            <input type="text" id="nombreMaterial" name="nombreMaterial">
        </div>
</div>
<button type="submit">Enviar</button>
            </div>
        </div>
    </section>
@endsection
