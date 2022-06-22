@extends('master.main')


@section('content')

    @component('components.product.product-show',[
            'product'=>$product
    ])
    @endcomponent
@endsection
