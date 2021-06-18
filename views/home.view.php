<?php require 'views/partials/header.view.php' ?>


<div class="container-fluid">
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white mx-auto py-4">
        <div class="container-fluid">
            <div id="logo">
                <i class="bi bi-controller"></i>
            </div>
            <a class="navbar-brand mx-2" href="#"> Games. </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Games</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Merch</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Franchises
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Stardew Valley</a></li>
                            <li><a class="dropdown-item" href="#">The Witcher</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">All Franchises</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex mx-auto">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-cart" type="submit"><i class="bi bi-search"></i></button>
                </form>
                <button class="btn btn-cart" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                    aria-controls="offcanvasRight"> Winkelwagen <i class="bi bi-basket2-fill">
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
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>
<!-- NAVBAR -->

<main class="container-fluid">
    <section class="glass justify-content-center mx-auto shadow px-5 py-4">
        <div class="row px-5 gx-5">
            <div class="col-4">
                <h1>We sell the best games!</h1>

                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam blanditiis obcaecati odit dolorum
                    iste
                    porro
                    sit. Atque officia, et vel reiciendis vitae facere unde, architecto, eum laboriosam quam officiis
                    libero. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam blanditiis obcaecati odit
                    dolorum
                    iste
                    porro
                    sit. Atque officia, et vel reiciendis vitae facere unde, architecto, eum laboriosam quam officiis
                    libero.
                </p>
            </div>
            <div class="col-8">
                <img src="https://i.stack.imgur.com/y9DpT.jpg" alt="" class="img-fluid">
            </div>
        </div>

        <div class="text-center">
            <hr>text
            <hr>
        </div>

        <div class="row px-5 gx-5 mb-5">
            <div class="col-4">
                <img src="https://i.stack.imgur.com/y9DpT.jpg" alt="" class="img-fluid">
                Product Title $price
            </div>
            <div class="col-4">
                <img src="https://i.stack.imgur.com/y9DpT.jpg" alt="" class="img-fluid">
                Product Title $price
            </div>
            <div class="col-4">
                <img src="https://i.stack.imgur.com/y9DpT.jpg" alt="" class="img-fluid">
                Product Title $price
            </div>
        </div>
    </section>


</main>


<!-- <main class="">
    <section class="glass container mx-auto flex justify-content-center m-1">
        <div>
            <h1>Lorem ipsum dolor sit amet</h1>

            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam blanditiis obcaecati odit dolorum iste
                porro
                sit. Atque officia, et vel reiciendis vitae facere unde, architecto, eum laboriosam quam officiis
                libero.
            </p>
            <hr>

            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi facilis perferendis vero. Esse id possimus
                eaque voluptatem quia totam voluptatum dolor quos dignissimos, impedit incidunt velit in reiciendis
                molestias sit!</p>
        </div>
    </section>


</main> -->

<div class="overflow-hidden">
    <div class="circle-1"></div>
    <div class="circle-2"></div>
    <div class="circle-3"></div>
    <div class="circle-4"></div>
</div>