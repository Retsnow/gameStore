@extends('layouts.app')

@section('titre', 'Steam - Jeux')


@section('contenu')

        <div class="container-fluid p-5">
            <div class=" page-content row align-items-center text-center">
            @if (count($jeux))
                    @foreach($jeux as $jeu)
                <div class="col-xl-4 col-md-6 col-12 align-items-center text-center pb-5">
                    <a href="{{ route('jeux.show', [$jeu]) }}"><img src={{ $jeu->image }} class="album img-fluid" ></a>
                    <p class="pt-2 text-white">{{ $jeu->nom }} <br> {{ $jeu->genre->nom }} <br> Téléchargements: {{ $jeu->nb_download }}</p>
                    <div class="main-button">
                      
                    <a href="{{ route('jeux.show', [$jeu]) }}">Voir</a>
                    <a href="{{ route('jeux.edit', [$jeu]) }}">Modifier</a>
                   
                  </div>
                </div>
                @endforeach
                  @else
                    <p>Aucun jeu disponible.</p>
                  @endif
                
                
               
               
@endsection

