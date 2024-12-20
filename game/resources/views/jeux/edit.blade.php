@extends('layouts.app')

@section('titre', 'Steam - Modifier')


@section('contenu')

<div class="container page-content">
    <h1>Modifier un jeu</h1>

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

    <form method="POST" action="{{ route('jeux.update', [$jeu]) }}">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label class="text-white" for="nom">Titre du jeu</label>
            <input type="text" name="nom" id="nom" class="form-control" value="{{ old('nom', $jeu->nom) }}" required>
        </div>

        <div class="form-group">
            <label class="text-white" for="genre">Genre</label>
            <input type="text" name="genres_id" id="genres_id" class="form-control" value="{{ old('genre', $jeu->genres_id) }}" required>
        </div>

        <div class="form-group">
            <label class="text-white" for="date_sortie">Date de sortie</label>
            <input type="date" name="date_sortie" id="date_sortie" class="form-control" value="{{ old('date_sortie', $jeu->date_sortie) }}" required>
        </div>

        <div class="form-group">
            <label class="text-white" for="nb_download">Nombre de téléchargements</label>
            <input type="text" name="nb_download" id="nb_download" class="form-control" value="{{ old('nb_download', $jeu->nb_download) }}" required>
        </div>

        <div class="form-group">
            <label class="text-white" for="image">Image</label>
            <input type="text" name="image" id="image" class="form-control" value="{{ old('image', $jeu->image) }}" required>
        </div>

        <div class="form-group">
            <label class="text-white" for="image_gameplay1">Image de gameplay 1</label>
            <input type="text" name="image_gameplay1" id="image_gameplay1" class="form-control" value="{{ old('image_gameplay1', $jeu->date_image_gameplay1) }}">
        </div>

        <div class="form-group">
            <label class="text-white" for="image_gameplay2">Image de gameplay 2</label>
            <input type="text" name="image_gameplay2" id="image_gameplay2" class="form-control" value="{{ old('image_gameplay2', $jeu->date_image_gameplay2) }}">
        </div>

        <div class="form-group">
            <label class="text-white" for="image_gameplay3">Image de gameplay 3</label>
            <input type="text" name="image_gameplay3" id="image_gameplay3" class="form-control" value="{{ old('image_gameplay3', $jeu->date_image_gameplay3) }}">
        </div>

        <div class="form-group">
            <label class="text-white" for="video">Vidéo</label>
            <input type="text" name="video" id="video" class="form-control" value="{{ old('video', $jeu->video) }}" required>
        </div>

        <div class="form-group">
            <label class="text-white" for="Lien de téléchargement">Date de sortie</label>
            <input type="text" name="lien" id="lien" class="form-control" value="{{ old('lien', $jeu->lien) }}" required>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </div>
    </form>

    <form method="POST" action="{{route('jeux.destroy', [$jeu->id]) }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Supprimer</button>
    </form>
</div>


@endsection