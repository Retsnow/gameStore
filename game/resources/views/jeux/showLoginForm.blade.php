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
        @method('POST')
        <div class="form-group">
            <label class="text-white" for="mail">Adresse courriel</label>
            <input type="text" name="mail" id="mail" class="form-control"  required>
        </div>

        <div class="form-group">
            <label class="text-white" for="mail">Mot de passe</label>
            <input type="text" name="mail" id="mail" class="form-control" required>
        </div>

        

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Se connecter</button>
        </div>
    </form>

</div>


@endsection