@extends('master.main')
@section('content')

    <div class="col-4 mx-auto mt-4">
        <h1>Show Category</h1>
        <form method="POST">
            @csrf
            @method('PUT')
            <div class="form-group ">

                <label for="name">ID</label>
                <input
                    class="form-control"
                    type="text"
                    id="id"
                    name="id"
                    autocomplete="id"
                    value="{{$category->id}}"
                    required
                    disabled
                    aria-describedby="nameHelp">

                <label for="name">Name</label>
                <input
                    class="form-control"
                    type="text"
                    id="id"
                    name="id"
                    autocomplete="id"
                    value="{{$category->name}}"
                    required
                    disabled
                    aria-describedby="nameHelp">

                <label for="name">Products</label>
                @foreach($category->products as $product)
                    <input
                        class="form-control"
                        type="text"
                        id="id"
                        name="id"
                        autocomplete="id"
                        value="{{$product->name}}"
                        required
                        disabled
                        aria-describedby="nameHelp">
                @endforeach
            </div>
        </form>
    </div>
@endsection



