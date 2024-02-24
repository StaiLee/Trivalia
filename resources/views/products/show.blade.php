<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails du Produit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">   
    <link rel="icon" type="image/x-icon" href="{{ asset('/import/favicon_io/favicon.ico') }}">
</head>
<body class="bg-dark text-white">
    <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand text-white" href="#page-top">Trivalia</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item"><a class="nav-link text-white" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#signup">Contact</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="/register">Register</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="/login">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-15">
        <h1>Détails du Produit</h1>

        @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
                Session::forget('success');
            @endphp
        </div>
        @endif

        <div class="row mt-3">
            <div class="col-md-6">
                <img src="{{ $product->image_url }}" class="img-fluid" alt="Image du Produit">
            </div>
            <div class="col-md-6">
                <h2>{{ $product->name }}</h2>
                <p>Description: {{ $product->description }}</p>
                <p>Prix: ${{ $product->price }}</p>
                <a href="{{ route('stripe.checkout', ['price' => $product->price, 'product' => $product->id]) }}" class="btn btn-primary">Acheter</a>
            </div>
        </div>
    </div>
</body>
</html>
