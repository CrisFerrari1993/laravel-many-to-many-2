@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="card col-md-8 p-0 mt-5">
                <div class="card-header">
                    <h1>Edit project</h1>
                </div>
                <div class="card-body">
                    <form action=" {{ route('update', $project->id) }} " method="POST" enctype="multipart/form-data">

                        @csrf
                        @method('PUT')

                        <label class="form-label" for="title">Title</label>
                        <br>
                        <input class="form-control" type="text" name="title" id="title"
                            value="{{ $project->title }}">
                        <br>

                        @if ($project->main_picture)
                            <img class="mb-3" style="max-width: 100%"
                                src=" {{ asset('storage/' . $project->main_picture) }}">
                        @else
                            <img class="mb-3" style="max-width: 100%" src=" {{ asset('storage/img/default.jpg') }}">
                        @endif
                        <label class="form-label" for="main_picture">Select picture</label>
                        <br>
                        <input class="form-control" type="file" name="main_picture" id="main_picture">
                        <br>
                        <label class="form-label" for="description">Description</label>
                        <br>
                        <textarea class="form-control" name="description" id="description" rows="5">{{ $project->description }}</textarea>
                        <br>
                        <label class="form-label" for="type_id">Type</label>
                        <br>
                        <select class="form-select" name="type_id" id="type_id" value="{{ $project->type }}">
                            @foreach ($types as $type)
                                <option value="{{ $type->id }}" @selected($project->type->id === $type->id)>{{ $type->name }}
                                </option>
                            @endforeach
                        </select>
                        {{-- <input class="form-control" type="text" name="type" id="type"> --}}
                        <br>
                        <label class="form-label" for="framework">Framework</label>
                        <br>
                        <input class="form-control" type="text" name="framework" id="framework"
                            value="{{ $project->framework }}">
                        <br>
                        <div class="row justify-content-center">
                            <div class="col col-md-6">
                                <div class="form-check mx-5">
                                    @foreach ($technologies as $technology)
                                        <div class="border-bottom">
                                            <input class="form-check-input" type="checkbox" value="{{ $technology->id }}"
                                                name="technologies[]" id="{{ $technology->id }}"
                                                @foreach ($project->technologies as $projectTechnology)
                                                    @checked($projectTechnology->id === $technology->id) @endforeach>
                                            <label class="form-check-label" for="{{ $technology->id }}">
                                                {{ $technology->name }}
                                            </label>
                                        </div>
                                        <br>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class=" my-3">
                            <button type="submit" class="btn btn-primary px-5">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
