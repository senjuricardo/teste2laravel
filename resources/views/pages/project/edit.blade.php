@extends('master.main')


@section('content')
    <h1>EDIT project</h1>

    @component('components.project.project-form-edit',[
            'project'=>$project
    ])
    @endcomponent
@endsection

