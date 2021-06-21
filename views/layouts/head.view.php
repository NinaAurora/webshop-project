<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $_ENV['APP_NAME'] ?></title>

    <link rel="icon" href="public/images/cg-favicon.png" sizes="32x32">



    <!-- BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- BOOTSTRAP ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- CSS -->
    <link rel="stylesheet" href="public/css/main.css" />

    <!-- ANIMATIONS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;0,600;0,700;0,800;0,900;1,200;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!-- JQUERY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<div class="container-fluid">
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white mx-auto py-4">
        <div class="container-fluid">
            <div id="logo">
                <i class="bi bi-controller hvr-grow"></i>
            </div>
            <a class="navbar-brand mx-2" href="/"> Games. </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
                    <li class="nav-item">
                        <a class="nav-link hvr-underline-reveal" href="#">Games</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hvr-underline-reveal" href="#">Merch</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle hvr-underline-reveal" href="#" id="navbarDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Franchises
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Stardew Valley</a></li>
                            <li><a class="dropdown-item" href="#">The Witcher</a></li>
                            <li><a class="dropdown-item" href="#">All Franchises</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex mx-auto">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-cart" type="submit"><i class="bi bi-search hvr-grow"></i></button>
                </form>
                <button class="btn btn-cart" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                    aria-controls="offcanvasRight"> Winkelwagen <i class="bi bi-basket2-fill hvr-grow">
                    </i></button>

                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                    aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-header pt-4 ">
                        <h5 id="offcanvasRightLabel mx-auto">Winkelwagen</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <hr>
                        product quantity price
                        <hr>
                        total price
                        <hr>
                        go to cart
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>
<!-- NAVBAR -->