@extends('layouts.app')

@section('titre', 'Steam')


@section('contenu')


<h1>Page du jeu {{ $jeu->nom }}</h1>
@if (isset($jeu))
    <img src={{ $jeu->image }} >
    <br>
    <div class="ratio ratio-16x9">
  <iframe src={{ $jeu->video }} title="YouTube video" allowfullscreen></iframe>
</div>
<br>
    <li class="text-white">{{ $jeu->genre->nom }}</li>
    <li class="text-white">{{ $jeu->nb_download }} téléchargements</li>
    <li class="text-white">Date de sortie: {{ $jeu->date_sortie }}</li>
@else
    <p>Le jeu n'existe pas</p>
@endif


@endsection