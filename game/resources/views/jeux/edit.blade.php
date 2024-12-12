@extends('layouts.app')

@section('titre', 'Steam - Modifier')


@section('contenu')

<div class="container page-content">
    <h1>Ajouter un jeu</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form method="POST" action="{{ route('jeux.store') }}">
        @csrf

        <div class="form-group">
            <label class="text-white" for="nom">Titre du jeu</label>
            <input type="text" name="nom" id="nom" class="form-control" value="{{ old('nom') }}" required>
        </div>

        <div class="form-group">
            <label class="text-white" for="genre">Genre</label>
            <input type="text" name="genre" id="genre" class="form-control" value="{{ old('genre') }}" required>
        </div>

        <div class="form-group">
            <label class="text-white" for="date_sortie">Date de sortie</label>
            <input type="date" name="date_sortie" id="date_sortie" class="form-control" value="{{ old('date_sortie') }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</div>


@endsection