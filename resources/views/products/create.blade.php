@extends("layots.app")

@section("content") 

    <h1>formulario de clase</h1>

    <form action="" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre">
        <br>
        <br>

        <label for="descripcion">Description</label>
        <textarea name="descripcion" cols="30" row="10"></textarea>
        <br>
        <br>
    
        <label for="precio">Precio</label>
        <input type="text" name="precio">
        <br>
        <br>

        <label for="imagen">Imagen:</label>
        <input type="text" name="imagen">
        <br>
        <br>

        <label for="marca">Marca</label>
        <input type="text" name="marca">
        <br>
@endsection