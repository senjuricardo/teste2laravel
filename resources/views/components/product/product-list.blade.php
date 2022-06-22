<table class="table">
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">details</th>
        <th scope="col">project</th>
        <th scope="col">category</th>
        <th scope="col">created_at</th>
        <th scope="col">updated_at</th>

    </tr>
    </thead>
    <tbody>
    @foreach($products as $product)
        <tr>
            <th scope="row">{{$product->id}}</th>
            <td>{{$product->name}}</td>
            <td>{{$product->details}}</td>
            <td>{{$product->project->name}}</td>
            <td>{{$product->category->name}}</td>
            <td>{{$product->created_at}}</td>
            <td>{{$product->updated_at}}</td>
            <td>  <a class="btn btn-success" href="{{url('products/' . $product->id)}}">Show</a>
                <a class="btn btn-primary" href="{{url('products/' . $product->id . '/edit')}}">Edit</a>
                <form action="{{url('products/' . $product->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form> </td>
        </tr>
    @endforeach
    </tbody>
</table>
<div class="d-flex justify-content-center">
    {{$products->links()}}
</div>



