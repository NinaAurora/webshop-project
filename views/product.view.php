<?php require 'views/partials/header.view.php' ?>

<main class="container-fluid">
    <section class="glass justify-content-center mx-auto shadow px-5 py-4">
        <div class="row px-5 gx-5">
            <div class="col-8">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="/public/img/headerimg.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/public/img/headerimg.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="/public/img/headerimg.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
            </div>
            <div class="col-4">
                <h1>Product name.</h1>
<h3>Price $</h3>
<h3>In stock: Yes</h3>
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
        </div>

        <div class="text-center divider">
            <button type="button" class="btn btn-cart py-2 px-4" id="liveToastBtn"><h2 class="hvr-grow pt-2"><i
                                class="bi bi-bag-plus-fill "></i> Add to cart.</h2></button>
                                <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 5">
                            <div id="liveToast" class="toast hide" role="alert" aria-live="assertive"
                                aria-atomic="true">
                                <div class="toast-header">
                                    <img src="..." class="rounded me-2" alt="...">
                                    <strong class="me-auto">Bootstrap</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="toast"
                                        aria-label="Close"></button>
                                </div>
                                <div class="toast-body">
                                    Added product to cart 1
                                </div>
                            </div>
                        </div>
        </div>

                <div class="row mx-auto mt-5">
                <div class="col-12 d-flex justify-content-center mt-5 ">
                    <h2>
                        <i class="socialmedia bi bi-facebook"></i>
                        <i class="socialmedia bi bi-instagram"></i>
                        <i class="socialmedia bi bi-linkedin"></i>
                        <i class="socialmedia bi bi-twitter"></i>
                    </h2>
                </div>
                <div class="col d-flex justify-content-center copyright"> ©Copyright Femke & Nina productions</div>

            </div>
        </div>

        </div>

    </section>


</main>


<div class="overflow-hidden">
    <div class="circle-1"></div>
    <div class="circle-2"></div>
    <div class="circle-3"></div>
    <div class="circle-4"></div>
</div>

<script>
$(document).ready(function () {
        document.getElementById("liveToastBtn").onclick = function () {
            $('.toast').toast('show');
        }
    })

 var myCarousel = document.querySelector('#myCarousel')
var carousel = new bootstrap.Carousel(myCarousel, {
  interval: 2000,
  wrap: false
})



</script>