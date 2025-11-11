@extends('admin.category.app')

@section('content')
    <h1> add new category</h1>

    <div class="card">
        <div class='card-dody'>

            <form action="{{ route('admin.category.store') }}" method="post">
                @csrf

            <input type="text" name="name">

            <input type="submit" name="Save">

            </form>
            
        </div>
    </div>
        


@endsection