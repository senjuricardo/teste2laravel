@extends('master.main')


@section('content')

    @component('components.category.category-show',[
            'category'=>$category
    ])
    @endcomponent
@endsection
