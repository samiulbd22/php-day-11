<?php include 'header.php'?>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header text-center text-danger font-weight-bold bg-warning"><h2>Sum of Series</h2></div>
                    <div class="card-body">

                        

                        <form action="action.php" method="post">
                            <div class="form-group row">
                                <label class="col-md-3">Starting Number</label>
                                <div class="col-md-9">
                                    <input type="number" required class="form-control" name="starting_number" value="<?php echo isset($result['starting_number'])?$result['starting_number']:'';?>"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3">Endinging Number</label>
                                <div class="col-md-9">
                                    <input type="number" required class="form-control" name="ending_number" value="<?php echo isset($result['ending_number'])?$result['ending_number']:'';?>"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3">Result</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" readonly><?php echo isset($result['result'])?$result['result']:'';?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-warning" name="series_btn" value="Submit"/>
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
