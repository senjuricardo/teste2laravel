@extends('master.main')


@section('content')
    <h1>Creat project</h1>

    @component('components.product.product-form-create',[
        'projects' => $projects,
         'categories' => $categories,
    ])
    @endcomponent
@endsection
