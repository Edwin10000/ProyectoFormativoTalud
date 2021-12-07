<div class="card-body">
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead">
                <tr>
                    <th>Id</th>

                    <th>nombreMarca</th>
<th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($marcas as $marca)
                    <tr>
                        <td>{{ $marca->Id }}</td>
                        <td>{{ $marca->nombreMarca }}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
