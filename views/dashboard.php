<?php include "header.php"; ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card card-body fs-5 text-center">
                    <h1 class="text-center">My Dashboard</h1>
                    <div class="container">
                        <div class="row">
                            <div class="col-9">
                                <div class="col-12 fs-5 row p-2">
                                    <label class="col-md-3 text-letf">User Name</label>
                                    :
                                    <div class="col-md-5 mx-2 card"><?php echo $users['name']; ?></div>
                                </div>
                                <div class="col-md-12 fs-5 row p-2">
                                    <label class="col-md-3 text-left">Email</label>
                                    :
                                    <div class="col-md-5 mx-2 card"><?php echo $users['email']; ?></div>
                                </div>
                                <div class="col-md-12 fs-5 row p-2">
                                    <label class="col-md-3 text-left">Phone Number</label>
                                    :
                                    <div class="col-md-5 mx-2 card"><?php echo $users['phone_number']; ?></div>
                                </div>
                                <div class="col-md-12 fs-5 row p-2">
                                    <label class="col-md-3 text-left">Password</label>
                                    :
                                    <div class="col-md-5 mx-2 card"><?php echo $users['password']; ?></div>
                                </div>
                                <div class="col-md-12 fs-5 row p-2">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "footer.php"; ?>
