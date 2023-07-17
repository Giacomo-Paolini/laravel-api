@extends('layouts.admin')

@section('content')

<div class="container-fluid mt-4">
    <div class="row justify-content-between">
        <h1>{{ $project->title }}</h1>
        <h2>Type: {{ $project->type ? $project->type->name : "No type" }}</h2>
        <p>{{ $project->content }}</p>
        <img class="w-50 mb-4" src="{{ asset("/storage" . "/" . $project->image) }}" alt="{{ $project->title }}" />
    </div>
    <a href="{{ route("admin.projects.edit", $project) }}" class="btn btn-primary">Edit Project</a>
</div>

@endsection