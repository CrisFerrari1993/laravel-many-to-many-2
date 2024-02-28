@extends('layouts.app')

@section('content')
    <div class="container text-center mt-5">

        <h1>Projects list</h1>

        <a role="button" class="btn btn-primary my-3" href="{{ route('logged.create') }}">
            New project
        </a>

        <div class="row justify-content-center">
            @foreach ($projects as $project)
                <div class="col-12 col-md-6 col-xl-4">
                    <a class="d-block text-decoration-none border rounded p-3 my-3"
                        href=" {{ route('logged.show', $project->id) }} ">
                        <h4>{{ $project->title }}</h4>

                        <img class="img-fluid img-thumbnail" src="{{ asset($project->main_picture ? 'storage/' . $project->main_picture : 'storage/img/default.jpg') }}"
                        style="
                        width: 100%;
                        object-fit: cover;
                        aspect-ratio: 3/2;
                        " alt="">
                    </a>
                </div>
            @endforeach
        </div>

    </div>
@endsection
