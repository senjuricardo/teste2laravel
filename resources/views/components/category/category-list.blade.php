<table class="table">
    @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('status') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <thead>

    <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">created_at</th>
        <th scope="col">updated_at</th>
        <th scope="col">Products</th>
        <th scope="col">actions</th>
    </tr>
    </thead>
    <tbody>
    @foreach($categories as $category)
        <tr>
            <th scope="row">{{$category->id}}</th>
            <td>{{$category->name}}</td>
            <td>{{$category->created_at}}</td>
            <td>{{$category->updated_at}}</td>
            <td>
                @foreach($category->products as $product)
                    <p>{{$product ->name}}</p>
                @endforeach
            </td>

            <td>  <a class="btn btn-success" href="{{url('categories/' . $category->id)}}">Show</a>
                <a class="btn btn-primary" href="{{url('categories/' . $category->id . '/edit')}}">Edit</a>
                <form action="{{url('categories/' . $category->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form> </td>
        </tr>
    @endforeach
    </tbody>
</table>





