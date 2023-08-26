<?php include "header.php"; ?>

    <section class="py-5 bg-body-tertiary">
        <div class="container p-3">
            <div class="row text-center">
                <div class="card">
                    <br>
                    <div class="card-header"><h2 class="fs-1 text-center">Contact Form</h2></div>
                    <br>
                    <div class="card-body fs-4">
                        <form action="#" method="POST">
                            <div class="form-group row p-2">
                                <label class="col-md-3 text-center">Full Name:</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="name">
                                </div>
                            </div>
                            <div class="form-group row p-2">
                                <label class="col-md-3">Email Address:</label>
                                <div class="col-md-9">
                                    <input type="email" class="form-control" name="email">
                                </div>
                            </div>
                            <div class="form-group row p-2">
                                <label class="col-md-3">Mobile Number:</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" name="phone_number">
                                </div>
                            </div>
                            <div class="form-group row p-2">
                                <label class="col-md-3">Subject:</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="topic">
                                </div>
                            </div>
                            <div class="form-group row p-2">
                                <label class="col-md-3">Message:</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" rows="10" name="message"></textarea>
                                </div>
                            </div>
                            <div class="form-group row p-3">
                                <label class="col-md-6"></label>
                                <div class="col-md-3">
                                    <input type="submit" class="btn btn-outline-danger px-4" value="Send" style="font-size: 18px; font-weight: bold;">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </section>


<?php include "footer.php"; ?>