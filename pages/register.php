<?php include 'header.php'?>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header text-center text-danger font-weight-bold bg-warning"><h2>Registration Form</h2></div>
                    <div class="card-body">
                        <h4><?php echo isset($message) ? $message:''?></h4>
                        <form action="action.php" method="post">
                            <div class="form-group row">
                                <label class="col-md-3">Full Name</label>
                                <div class="col-md-9">
                                    <input type="text" required class="form-control" name="full_name" "/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3">Email Address</label>
                                <div class="col-md-9">
                                    <input type="email" required class="form-control" name="email"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3">Phone Number</label>
                                <div class="col-md-9">
                                    <input type="number" required class="form-control" name="mobile"/>
                                </div>
                            </div>


<!--                            <div class="form-group row">-->
<!--                                <label class="col-md-3">Subject</label>-->
<!--                                <div class="col-md-9">-->
<!--                                    <label class="mr-1"><input class="mr-1" type="checkbox" name="subject[]" value="Bangla"/>Bangla</label>-->
<!--                                    <label class="mr-1"><input class="mr-1" type="checkbox" name="subject[]" value="English"/>English</label>-->
<!--                                    <label class="mr-1"><input class="mr-1" type="checkbox" name="subject[]" value="Math"/>Math</label>-->
<!--                                    <label class="mr-1"><input class="mr-1" type="checkbox" name="subject[]" value="Physics"/>Physics</label>-->
<!--                                    <label class="mr-1"><input class="mr-1" type="checkbox" name="subject[]" value="Chemistry"/>Chemistry</label>-->
<!--                                    <label class="mr-1"><input class="mr-1" type="checkbox" name="subject[]" value="Biology"/>Biology</label>-->
<!--                                </div>-->
<!--                            </div>-->
                            <div class="form-group row">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-warning" name="register_btn" value="Submit"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'footer.php'?>

