@extends("admin.layouts.app")

<link rel="stylesheet" href="{{asset('css/style_create.css')}}">


@section("content")

    <h1>Crear Nuevo Producto</h1>


    <div class="card">
        <div class="card-body">


              <form>
            

            <!--Nombre -->
            <div class="input-group input-group-outline mb-3">
                <label for="productName" class="form-label">Nombre del Producto</label>
                <input type="text" id="nombre" class="form-control" name="name">
            </div>

            
            <!--Precio -->
            <div class="input-group input-group-outline mb-3">
                <label for="productPrice" class="form-label">Precio</label>
                <input type="number" class="form-control" id="productPrice"
                step="0.01" name="price">
            </div>

            <!--Descripcion-->
            <div class="input-group input-group-outline mb-3">
                <label for="productDescription" class="form-label">Descripción</label>
                <textarea id="descripcion" class="form-control" row="3" name="description"></textarea>
            </div>

            <!--Categoria-->
            <div class="input-group input-group-outline mb-3">
                <select class="form-control"  id="productCategory">
                    <option value=""  selected disabled >Seleccione una categoría</option>
                    @foreach ($category as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                    
                </select>
            </div>

            <!--Marca-->
            <div class="input-group input-group-outline mb-3">
                <select class="form-control"  id="productBrand">
                    <option value="" selected disabled>Seleccione una marca</option>
                    @foreach ($brands as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>

            <!--Boton-->
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Create Product</button>
            </div>
    </form>
        </div>
    </div>
  

    
@endsection