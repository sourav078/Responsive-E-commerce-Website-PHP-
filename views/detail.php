<?php include "header.php"; ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <img src="<?php echo $product['image']; ?>" alt="">
                    <div class="card-img-overlay"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-body">
                    <h1><?php echo $product['name']; ?></h1>
                    <h4><?php echo $product['price']; ?></h4>
                    <h6><?php echo $product['description']; ?></h6>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include "footer.php"; ?>
