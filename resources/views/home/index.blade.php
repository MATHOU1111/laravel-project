@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
<div class="container">
    <h1 class="text-center my-4">Bienvenue sur notre site e-commerce</h1>

    <!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide mb-5" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="https://via.placeholder.com/800x400?text=Promotion+1" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Promotion 1</h5>
                    <p>Profitez de nos offres exceptionnelles.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://via.placeholder.com/800x400?text=Promotion+2" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Promotion 2</h5>
                    <p>Des réductions incroyables sur nos produits.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://via.placeholder.com/800x400?text=Promotion+3" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Promotion 3</h5>
                    <p>Ne manquez pas nos offres spéciales.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Promotions Section -->
    <div class="promotions mt-5">
        <h2 class="text-center mb-4">Promotions</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://via.placeholder.com/400x300?text=Promotion+1" class="card-img-top" alt="Promotion 1">
                    <div class="card-body">
                        <h5 class="card-title">Promotion 1</h5>
                        <p class="card-text">Profitez de nos offres exceptionnelles.</p>
                        <a href="#" class="btn btn-primary">Voir l'offre</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://via.placeholder.com/400x300?text=Promotion+2" class="card-img-top" alt="Promotion 2">
                    <div class="card-body">
                        <h5 class="card-title">Promotion 2</h5>
                        <p class="card-text">Des réductions incroyables sur nos produits.</p>
                        <a href="#" class="btn btn-primary">Voir l'offre</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://via.placeholder.com/400x300?text=Promotion+3" class="card-img-top" alt="Promotion 3">
                    <div class="card-body">
                        <h5 class="card-title">Promotion 3</h5>
                        <p class="card-text">Ne manquez pas nos offres spéciales.</p>
                        <a href="#" class="btn btn-primary">Voir l'offre</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Special Offers Section -->
    <div class="offers mt-5">
        <h2 class="text-center mb-4">Offres Spéciales</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://via.placeholder.com/400x300?text=Offre+1" class="card-img-top" alt="Offre 1">
                    <div class="card-body">
                        <h5 class="card-title">Offre Spéciale 1</h5>
                        <p class="card-text">Offre spéciale sur ce produit.</p>
                        <a href="#" class="btn btn-primary">Voir l'offre</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://via.placeholder.com/400x300?text=Offre+2" class="card-img-top" alt="Offre 2">
                    <div class="card-body">
                        <h5 class="card-title">Offre Spéciale 2</h5>
                        <p class="card-text">Ne manquez pas cette offre.</p>
                        <a href="#" class="btn btn-primary">Voir l'offre</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://via.placeholder.com/400x300?text=Offre+3" class="card-img-top" alt="Offre 3">
                    <div class="card-body">
                        <h5 class="card-title">Offre Spéciale 3</h5>
                        <p class="card-text">Une offre spéciale juste pour vous.</p>
                        <a href="#" class="btn btn-primary">Voir l'offre</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
