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
    <div class="container mt-15">
        <h1>Détails du Produit</h1>
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
