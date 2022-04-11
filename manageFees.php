<?php include("header.php")?>
<div class="dashboard-content-one">
    <!-- Breadcubs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Payment</h3>
        <ul>
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>Payment Details</li>
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
                    <div class="info-table ">
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
                        <div class="col-xl-12 col-lg-12 col-12 form-group row" id="wrap">
                            <div class="col-xl-6 col-lg-6 col-12 form-group" id="my_box">
                                <label>Month *</label>
                                <select class="form-control" id="select_box">
                                    <option value="">Please Select Fee Type *</option>
                                    <option value="1">Admission Fees</option>
                                    <option value="2">Contigency</option>
                                    <option value="3">Current Bill</option>
                                    <option value="3">Seat Range</option>
                                    <option value="3">Fine</option>
                                </select>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <label>Due amount</label>
                                <input type="email" placeholder="0" class="form-control" disabled>
                            </div>
                        </div>
                        <button style="margin: 10px;" class="btn-fill-lg font-normal text-light gradient-pastel-green"
                            onclick="add_more()">Add more</button>
                        <input type="hidden" id="box_count" value="1">
                        <div class="modal-box">
                            <!-- Button trigger modal -->
                            <div class="row">
                                <div class="col-xl-5 col-lg-5 col-5 form-group"></div>
                                <div class="col-xl-2 col-lg-2 col-12 form-group">
                                    <button type="button" class="modal-trigger" data-toggle="modal"
                                        data-target="#standard-modal">
                                        Save
                                    </button>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="standard-modal" tabindex="-1" role="dialog"
                                    aria-hidden="true">
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
                                                <a href="invoice.php"><button type="button"
                                                        class="footer-btn bg-linkedin">Save
                                                        & Print</button></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-5 col-lg-5 col-5 form-group"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Student Table Area End Here -->
    <?php include("footer.php")?>
    <script>
        var fee='<option value="1">Admission Fees</option><option value="2">Contigency</option>';
        jQuery("#select_box").append(fee)
    </script>
    var select_box=document.getElementById("select_box");
    console.log(select_box);
    <script>
    function add_more() {
        var fee='<option value="1">Admission Fees</option><option value="2">Contigency</option>';
        var box_count = jQuery("#box_count").val();
        box_count++;
        // alert(box_count);
        jQuery("#box_count").val(box_count);
        jQuery("#wrap").append('<div class="col-xl-12 col-lg-12 col-12 form-group row" id="box_loop_' + box_count +
            '"><div class="col-xl-6 col-lg-6 col-12 form-group"><label>Month *</label><select class="form-control">'+fee+'</select></div><div class="col-xl-4 col-lg-4 col-12 form-group"><label>Due amount</label><input type="email" placeholder="2500" class="form-control" disabled></div><div class="col-xl-2 col-lg-2 col-2 form-group"><input style="margin-top: 20px;" type="button" name="submit" id="submit" value="Remove" class="btn-fill-lmd text-light radius-4 bg-gradient-gplus" onclick=remove_more("' +
            box_count + '")></div></div>'
        );
    }

    function remove_more(box_count) {
        jQuery("#box_loop_" + box_count).remove();
        var box_count = jQuery("#box_count").val();
        box_count--;
        jQuery("#box_count").val(box_count);
    }
    </script>