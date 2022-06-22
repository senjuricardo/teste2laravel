@extends('master.main')


@section('content')
    <h1>Categories</h1>


    @component('components.category.category-list',[
            'categories'=>$categories
    ])
    @endcomponent
@endsection
