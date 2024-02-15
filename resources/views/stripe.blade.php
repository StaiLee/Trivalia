<!DOCTYPE html>
<html>
<head>
    <title>Laravel Stripe Checkout Payment Integration Example - ItSolutionStuff.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
      
<div class="container">
      
    <h1>Laravel Stripe Checkout Payment Integration Example - ItSolutionStuff.com</h1>
   
    @if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
        @php
            Session::forget('success');
        @endphp
    </div>
    @endif
  
    <div class="row"> 
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
              <img src="https://dummyimage.com/300x200/000/fff" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Silver</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="{{ route('stripe.checkout', ['price' => 10, 'product' => 'Silver']) }}" class="btn btn-primary">Pay $10</a>
              </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
              <img src="https://dummyimage.com/300x200/000/fff" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Gold</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="{{ route('stripe.checkout', ['price' => 100, 'product' => 'Gold']) }}" class="btn btn-primary">Pay $100</a>
              </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
              <img src="https://dummyimage.com/300x200/000/fff" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Platinum</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="{{ route('stripe.checkout', ['price' => 1000, 'product' => 'Platinum']) }}" class="btn btn-primary">Pay $1000</a>
              </div>
            </div>
        </div>
    </div>
          
</div>
      
</body>
  
</html>