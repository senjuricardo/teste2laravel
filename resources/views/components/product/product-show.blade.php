@extends('master.main')
@section('content')

    <div class="col-4 mx-auto mt-4">
        <h1>Show Bicycle</h1>
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
                    value="{{$product->id}}"
                    required
                    disabled
                    aria-describedby="nameHelp">

                <label for="name">Name</label>
                <input
                    class="form-control"
                    type="text"
                    id="name"
                    name="name"
                    autocomplete="name"
                    value="{{$product->name}}"
                    required
                    disabled
                    aria-describedby="nameHelp">

                <label for="name">details</label>
                <input
                    class="form-control"
                    type="text"
                    id="details"
                    name="details"
                    autocomplete="id"
                    value="{{$product->details}}"
                    required
                    disabled
                    aria-describedby="nameHelp">

                <label for="name">project</label>
                <input
                    class="form-control"
                    type="text"
                    id="project_id"
                    name="project_id"
                    autocomplete="project_id"
                    value="{{$product->project->name}}"
                    required
                    disabled
                    aria-describedby="nameHelp">


                <label for="name">category</label>
                <input
                    class="form-control"
                    type="text"
                    id="category_id"
                    name="category_id"
                    autocomplete="id"
                    value="{{$product->category->name}}"
                    required
                    disabled
                    aria-describedby="nameHelp">





            </div>
        </form>
    </div>
@endsection



