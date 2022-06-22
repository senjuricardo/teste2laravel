@extends('master.main')


@section('content')
    <h1>Create Category</h1>

    @component('components.category.category-form-create',[

    ])
    @endcomponent
@endsection
