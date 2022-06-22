@extends('master.main')


@section('content')
    <h1>Projects</h1>


    @component('components.project.project-list',[
            'projects'=>$projects
    ])
    @endcomponent
@endsection
