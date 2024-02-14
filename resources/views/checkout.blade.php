<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Trivalia</title>
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('/import/assets/css/styles.css') }}" rel="stylesheet"/>
</head>
<body class="bg-dark">
    <!-- Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#page-top">Trivalia</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="#signup">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-12 h-16">
                    <h1 class="text-center mt-5 text-white">Billing Info</h1>
                    <h5 class="text-center text-white opacity-50 ">Choose a Payment option below and fill out the appropriate information</h2>
                </div>
                <div class="col-6 offset-md-3 mt-5">
                    <div class="card border">
                        <div class="card-header d-flex justify-content-center align-items-center">
                            <h3 class="mt-2">Checkout</h3>
                        </div>
                        <div class="card-body">
                            <form action="/checkout" method="POST" id="payment-form">
                                {{ csrf_field() }}
                                <label for="amount">
                                    Amount:
                                    <input type="text" name="amount" id="amount">
                                </label>

                                <label for="email">
                                    Email:
                                    <input type="text" name="email" id="email">
                                </label>

                                <label for="card-element"> Credit or debit card </label>
                                <div id="card-element"> <!-- A Stripe Element will be inserted here. --> </div>
                                <div id="card-errors" role="alert"></div>

                                <div class="col-12 d-flex justify-content-center align-items-center">
                                    <button class="mt-2" type="submit">Submit Payment</button>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://js.stripe.com/v3/"></script>
    <script>
        // Create a Stripe client.
        var stripe = Stripe('pk_test_51OizMxJRrn6BFssejXmLXDmwDBYDXh7BgMUdhSCPEcfA1azQf06rnxENKM6jrj9ZHRfyu6sQAW6DGlEFoXIzbXbD00h6xzyLda'); // Replace with your Stripe public key

        var options = {
            hidePostalCode : true
        };

        var elements = stripe.elements();

        var card = elements.create('card');

        card.mount('#card-element');

        card.addEventListener('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });


        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();

            stripe.createToken(card).then(function(result) {
                if (result.error) {
                    // Inform the user if there was an error.
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                } else {
                    // Send the token to your server.
                    stripeTokenHandler(result.token);
                }
            });
        });


        function stripeTokenHandler(token) {
            var form = document.getElementById('payment-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);
            form.submit();
        }
    </script>

</body>
</html>