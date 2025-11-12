@extends('admin.layouts.app')

@section('content')
    <div class="card">
        <h3>List products</h3>
        <a type="button" class="btn btn-success" href="{{route('admin.product.create')}}">Add new products</a>
        <div class="card-body">

        <table class="table align-items-center mb-0">
            <thead>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                {{--<th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Description</th>--}}
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">price</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Brand</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Category</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created_at</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Updated_at</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>

            </thead>
            <tbody>

                @foreach ($product as $item)

                <tr>
                    <td class="align-middle text-center">
                        {{$item->id}}
                    </td>
                    <td class="align-middle text-center">
                        {{$item->name}}
                    </td>
                    {{--<td class="align-middle text-center">
                        {{$item->descripcion}}
                    </td>--}}
                    <td class="align-middle text-center">
                        {{$item->price}}
                    </td>
                    <td class="align-middle text-center">
                        {{$item->category_id}}
                    </td>
                    <td class="align-middle text-center">
                        {{$item->brand_id}}
                    </td>
                    <td class="align-middle text-center">
                        {{$item->	created_at}}
                    </td>
                    <td class="align-middle text-center">
                        {{$item->updated_at}}
                    </td>
                    <td>
                        <a href="#" style="color: red"> Eliminar
                    </td>
                </tr>
                    
                @endforeach
                
                </tbody>

        </table>

        {{ $product->links() }}

        </div>
    </div>
@endsection