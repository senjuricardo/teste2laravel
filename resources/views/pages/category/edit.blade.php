@extends('master.main')


@section('content')
    <h1>EDIT Category</h1>

    @component('components.category.category-form-edit',[
            'category'=>$category
    ])
    @endcomponent
@endsection

