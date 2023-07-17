@extends('layouts.admin')

@section('content')

<div class="container-fluid mt-4">
    <div class="row justify-content-between">
        <h1>Modifica il progetto</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route("admin.projects.store") }}" method="POST" class="needs-validation">
            @csrf

            <label for="title">Titolo</label>
            <input type="text" name="title" id="title" value="{{ old("title", $project->title) }}" class="form-control mb-4">

            <label for="type_id">Type</label><br>
            <select class="form-control mb-4" name="type_id" id="type_id">
                @foreach($types as $type)
                    <option value="{{ $type->id }}" {{ old('type_id', $project->type_id) == $type->id ? 'selected' : '' }}>{{ $type->name }}</option>
                @endforeach
            </select><br>

            <div class="d-flex mb-4">
                @foreach ($technologies as $i => $technology)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="{{ $technology->id }}" name="technology[]" id="technology{{$i}}" {{ in_array($technology->id, old('technology', $project->technologies->pluck('id')->toArray())) ? 'checked' : '' }}>
                        <label class="form-check-label me-4" for="technology{{$i}}">{{ $technology->name }}</label>       
                    </div>
                @endforeach
            </div>

            <label for="content">Contenuto</label>
            <textarea name="content" id="content" cols="30" rows="10" class="form-control mb-4">{{ old("content") }}</textarea>

            <label for="image">URL Immagine</label>
            <input type="text" name="image" id="image" value="{{ old("image") }}" class="form-control mb-4">

            <input type="submit" class="btn btn-primary form-control mb-4" value="Salva">
        
        </form>
    </div>
</div>

@endsection