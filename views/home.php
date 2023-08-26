<?php include "header.php"; ?>

<section class="bg-section py-5">
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner align-items-center mx-auto">
            <div class="carousel-item active mx-auto">
                <img src="assets/img/sliders/1.jpg" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
                <img src="assets/img/sliders/1.jpg" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
                <img src="assets/img/sliders/1.jpg" class="d-block w-100" alt="">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<section class="py-5 bg-dark-subtle">
    <div class="container">

        <div class="row">
            <h1 class="fw-bolder text-secondary text-center mb-3">Products</h1>
            <hr class="py-3 border-danger"/>
            <?php foreach ($products as $product) { ?>
                <div class="col-md-4">
                    <div class="card mb-3">
                        <img src="<?php echo $product['image']; ?>" alt="" height="350px">
                        <div class="card-body">
                            <h4><?php echo $product['name']; ?></h4>
                            <p><?php echo $product['price']; ?></p>
                            <hr>
                            <a href="action.php?page=detail&id=<?php echo $product['id']; ?>" class="btn btn-outline-success">Detail</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>


<!--jquery carousel start-->

<!--<script>-->
<!--    $(document).ready(function() {-->
<!--        $('.owl-carousel').owlCarousel({-->
<!--            loop: true,-->
<!--            margin: 10,-->
<!--            autoplay: true,-->
<!--            responsiveClass: true,-->
<!--            autoplayTimeout: 1500,-->
<!--            autoplayHoverPause: true,-->
<!--            responsive: {-->
<!--                0: {-->
<!--                    items: 1,-->
<!--                    nav: true-->
<!--                },-->
<!--                600: {-->
<!--                    items: 2,-->
<!--                    nav: false-->
<!--                },-->
<!--                1000: {-->
<!--                    items: 3,-->
<!--                    nav: true,-->
<!--                    loop: true,-->
<!--                    margin: 20-->
<!--                }-->
<!--            }-->
<!--        })-->
<!--    })-->
<!--</script>-->

<!--<script src="js/owl.carousel.js"></script>-->

<!--jquery carousel end-->



<?php include "footer.php"; ?>

