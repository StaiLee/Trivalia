<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="icon" type="image/x-icon" href="{{ asset('/import/favicon_io/favicon.ico') }}">
  <title>Products</title>
  <style>
    .card-title {
      text-align: center;
    }
    .navber-brand {
      text-align: center;
    }
    .card img {
      display: block;
      margin: 0 auto;
      max-width: 80%;
      height: auto;
    }
    .card-text {
      text-align: center;
    }
  </style>
</head>
<body class="bg-dark">
  <div class="container mt-5">
    <div class="row">
      @foreach ($products as $product)
        <div class="col-4 mb-3">
          <div class="card">
            <img src="{{ $product->image_url }}" alt="" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title">{{ $product->name }}</h5>
              <p class="card-text">{{ $product->description }}</p>
            <a href="{{ route('stripe.checkout', ['price' => $product->price, 'product' => $product->id]) }}" class="btn btn-outline-success btn-sm">Buy</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</body>
</html>
