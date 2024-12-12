@extends('layouts.app')

@section('titre', 'Steam - Accueil')


@section('contenu')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">

          <!-- ***** Banner Start ***** -->
          <div class="main-banner">
            <div class="row">
              <div class="col-lg-12">
                <div class="header-text text-center">
                  <h6>Bienvenue Sur Midnight Nemesis</h6>
                  <h4><em>AJOUTER</em> UN JEU</h4>
                  <div class="main-button">
                    <a href="{{ route('jeux.create') }}">Cliquer ici</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ***** Banner End ***** -->

            

          <!-- ***** Most Popular Start ***** -->
          <div class="most-popular">
            <div class="row">
              <div class="col-lg-12">
                <div class="heading-section">
                  <h4><em>Les plus populaires</em></h4>
                </div>
                <div class="row">
                  @if (count($jeux))
                    @foreach($jeux as $jeu)
                      <div class="col-lg-3 col-sm-6">
                        <div class="item">
                          <a href="{{ route('jeux.show', [$jeu]) }}"><img src={{ $jeu->image }} ></a>
                          <h4>{{ $jeu->nom }}<br><span>{{ $jeu->genre->nom }}</span></h4>
                          <ul>
                            <li><i class="fa fa-star"></i> 4.8</li>
                            <li><i class="fa fa-download"></i> {{ $jeu->nb_download }}</li>
                          </ul>
                        </div>
                      </div>
                    @endforeach
                  @else
                    <p>Aucun jeu disponible.</p>
                  @endif
                </div>
              </div>
            </div>
          </div>   
                  
          <!-- ***** Most Popular End ***** -->

          <section class="container most-popular my-5">
          <div class="heading-section">
                  <h4><em>Catégories</em></h4>
                </div>
        <div class="list-group-primary">
  <a href="#" class="list-group-item list-group-item-action text-white">FPS</a>
  <a href="#" class="list-group-item list-group-item-action text-white">Mode Histoire</a>
  <a href="#" class="list-group-item list-group-item-action text-white">Course</a>
</div>
    </section>


      <!--FPS-->
        <section class="container most-popular my-5">
        <div id="carouselExample" class="carousel slide">
        <div class="heading-section">
                  <h4><em>Les plus populaires</em></h4>
                </div>
  <div class="carousel-inner">
    @if (count($jeux))
      @foreach($jeux as $jeu)
    <div class="carousel-item active">
    <a href="{{ route('jeux.show', [$jeu]) }}"><img src={{ $jeu->image }} ></a>
      <div class="carousel-caption d-none d-md-block">
        <h5>{{ $jeu->nom }}</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    @endforeach
    @endif

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        </section>


          
          <!-- ***** Gaming Library End ***** -->
        </div>
      </div>
    </div>
  </div>

  @endsection
  
 
