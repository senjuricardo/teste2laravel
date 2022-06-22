@extends('master.main')


@section('content')
    <h1>EDIT Product</h1>

    @component('components.product.product-form-edit',[
            'product'=>$product,
            'projects'=>$projects,
            'categories' => $categories
    ])
    @endcomponent
@endsection

