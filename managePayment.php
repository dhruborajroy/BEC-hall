<?php include("header.php")?>
<div class="dashboard-content-one">
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <!-- <h3>Teacher</h3> -->
        <ul>
            <li>
                <!-- <a href="index.php">Home</a> -->
            </li>
            <!-- <li>Teacher Details</li> -->
        </ul>
    </div>
    <!-- Breadcubs Area End Here -->
    <!-- Student Table Area Start Here -->
    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <!-- <h3>About Me</h3> -->
                </div>
            </div>
            <div class="single-info-details">
                <!-- <div class="item-img">
                    <img src="img/figure/teacher.jpg" alt="teacher" height="150px" width="150px">
                </div> -->
                <div class="item-content">
                    <div class="info-table table-responsive">
                        <table class="table text-nowrap">
                            <tbody>
                                <tr>
                                    <td>Name:</td>
                                    <td class="font-medium text-dark-medium">Dhrubo Raj Roy</td>
                                </tr>
                                <tr>
                                    <td>Batch :</td>
                                    <td class="font-medium text-dark-medium">04</td>
                                </tr>
                                <tr>
                                    <td>Roll:</td>
                                    <td class="font-medium text-dark-medium">200130</td>
                                </tr>
                            </tbody>
                        </table>
                        <hr>
                        <div class="col-xl-12 col-lg-12 col-12 ">
                            <center>
                                <!-- <button type="button"
                                class="btn-fill-xl radius-30 text-light s bg-orange-red">Close</button> -->
                                <p>Monthly Payment</p>
                            </center>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-12 form-group row">
                            <?php for ($i=0; $i <3; $i++) {?>

                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <label>Month *</label>
                                <select class="select2">
                                    <option value="">Please Select Month *</option>
                                    <option value="1">January</option>
                                    <option value="2">February</option>
                                    <option value="3">March</option>
                                </select>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <label>Due amount</label>
                                <input type="email" placeholder="2500" class="form-control" disabled>
                            </div>

                            <?php } ?>
                        </div>
                        <div class="modal-box">
                            <!-- Button trigger modal -->
                            <button type="button" class="modal-trigger" data-toggle="modal"
                                data-target="#standard-modal">
                                Save
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="standard-modal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Are You sure?</h5>
                                            <!-- <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button> -->
                                        </div>
                                        <div class="modal-body">
                                            Do you want to pay Dhrubo Raj roy & amount 2500$ for the month January?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="footer-btn bg-dark-low"
                                                data-dismiss="modal">Cancel</button>
                                            <button type="button" class="footer-btn bg-linkedin">Save
                                                & Print</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Student Table Area End Here -->
    <?php include("footer.php")?>