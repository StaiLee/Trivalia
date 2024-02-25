<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Trivalia - Subscription</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('/import/favicon_io/favicon.ico') }}">
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('/import/assets/css/styles.css') }}" rel="stylesheet" />
</head>

<body class="bg-dark">
    <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand text-white" href="/">Trivalia</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link text-white" href="/album">Album</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="/register">Register</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="/subscription">Subscription</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="/login">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container" style="margin-top: 2rem;">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <img class="card-img-top" src="https://images.pexels.com/photos/1096750/pexels-photo-1096750.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Collibri Photo">
                    <div class="card-body text-center">
                        <h2 class="card-title">Collibri</h2>
                        <ul style="list-style:none; padding-left: 0; margin-top:1rem;">
                            <li class="text-decoration-underline">
                                <p>Complete photo album</p>
                            </li>
                            <li class="text-decoration-underline">
                                <p>Monthly exclusives</p>
                            </li>
                            <li class="text-decoration-underline">
                                <p>Access to previews</p>
                            </li>
                            <li class="text-muted">
                                <p>1 custom photo per month</p>
                            </li>
                            <li class="text-muted">
                                <p>Access to the premium photo album</p>
                            </li>
                            <li class="text-muted">
                                <p>Access to the Trivalia discussion channel</p>
                            </li>
                            <li class="text-muted">
                                <p>Participation in excursions with the team of photographers</p>
                            </li>
                        </ul>
                        <a href="{{ route('stripe.checkout', ['product' => 1]) }}" class="btn btn-primary" style="margin-top:1rem;">Only 10$/month</a>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card">
                    <img class="card-img-top" src="https://images.pexels.com/photos/14412045/pexels-photo-14412045.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Toucan Photo">
                    <div class="card-body text-center">
                        <h2 class="card-title">Toucan</h2>
                        <ul style="list-style:none; padding-left: 0; margin-top:1rem;">
                            <li class="text-decoration-underline">
                                <p>Complete photo album</p>
                            </li>
                            <li class="text-decoration-underline">
                                <p>Monthly exclusives</p>
                            </li>
                            <li class="text-decoration-underline">
                                <p>Access to previews</p>
                            </li>
                            <li class="text-decoration-underline">
                                <p>1 custom photo per month</p>
                            </li>
                            <li class="text-decoration-underline">
                                <p>Access to the premium photo album</p>
                            </li>
                            <li class="text-muted">
                                <p>Access to the Trivalia discussion channel</p>
                            </li>
                            <li class="text-muted">
                                <p>Participation in excursions with the team of photographers</p>
                            </li>
                        </ul>
                        <a href="{{ route('stripe.checkout', ['product' => 2]) }}" class="btn btn-primary" style="margin-top:1rem;">Only 25$/month</a>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card">
                    <img class="card-img-top" src="https://images.pexels.com/photos/133356/pexels-photo-133356.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Eagle Photo">
                    <div class="card-body text-center">
                        <h2 class="card-title">Eagle</h2>
                        <ul style="list-style:none; padding-left: 0; margin-top:1rem;">
                            <li class="text-decoration-underline">
                                <p>Complete photo album</p>
                            </li>
                            <li class="text-decoration-underline">
                                <p>Monthly exclusives</p>
                            </li>
                            <li class="text-decoration-underline">
                                <p>Access to previews</p>
                            </li>
                            <li class="text-decoration-underline">
                                <p>1 custom photo per month</p>
                            </li>
                            <li class="text-decoration-underline">
                                <p>Access to the premium photo album</p>
                            </li>
                            <li class="text-decoration-underline">
                                <p>Access to the Trivalia discussion channel</p>
                            </li>
                            <li class="text-decoration-underline">
                                <p>Participation in excursions with the team of photographers</p>
                            </li>
                        </ul>
                        <a href="{{ route('stripe.checkout', ['product' => 3]) }}" class="btn btn-primary" style="margin-top:1rem;">Only 50$/month</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>