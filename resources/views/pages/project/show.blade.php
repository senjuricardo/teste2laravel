@extends('master.main')


@section('content')

    @component('components.project.project-show',[
            'project'=>$project
    ])
    @endcomponent
@endsection
