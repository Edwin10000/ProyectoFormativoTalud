<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<form action="{{route('marca.store')}}" method="POST">
    @csrf
    <div>
        <div class="mb-4">
            <label for="nombreMarca">Nombre:</label>
            <input type="text" id="nombreMarca" name="nombreMarca">
        </div>
</div>
<button type="submit">Enviar</button>
</form>
</html>
