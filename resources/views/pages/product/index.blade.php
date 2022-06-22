@extends('master.main')


@section('content')
    <h1>Products</h1>


    @component('components.product.product-list',[
            'products'=>$products
    ])
    @endcomponent
@endsection
