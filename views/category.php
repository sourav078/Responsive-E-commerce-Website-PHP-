<?php include "header.php"; ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) { ?>
                <div class="col-md-4">
                    <div class="card mb-3">
                        <img src="<?php echo $product['image']; ?>" alt="" height="350px">
                        <div class="card card-body">
                            <h4><?php echo $product['name']; ?></h4>
                            <p><?php echo $product['price']; ?></p>
                            <p><?php echo $product['description']; ?></p>
                            <hr>
                            <a href="action.php?page=detail&id=<?php echo $product['id']; ?>" class="btn btn-outline-dark">Read More</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>


<?php include "footer.php"; ?>
