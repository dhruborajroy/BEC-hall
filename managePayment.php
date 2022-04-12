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
                                <p class="header_payment">Monthly Payment</p>
                            </center>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-12 form-group row" id="wrap">
                            <div class="col-xl-4 col-lg-4 col-12 form-group" id="my_box">
                                <label>Month *</label>
                                <select class="form-control" id="select_box">
                                    <option value="">Please Select Month *</option>
                                    <option value="1">January</option>
                                    <option value="2">February</option>
                                    <option value="3">March</option>
                                </select>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-12 form-group">
                                <label>Due amount</label>
                                <input type="number" value="0" id="number_0" class="form-control" disabled>
                            </div>
                            <input type="hidden" id="box_count" value="1">
                            <input type="hidden" id="total_amount" value="0">
                            <input style="margin-top: 20px;margin-bottom: 15px;" type="button" name="submit" id="submit"
                                value="Add More" class="btn-fill-lg font-normal text-light gradient-pastel-green"
                                onclick="add_more()">
                        </div>
                        <hr>
                        <div class="col-xl-12 col-lg-12 col-12 ">
                            <center>
                                <p class="header_payment">Fees</p>
                            </center>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-12 form-group row" id="wrap_fees">
                            <div class="col-xl-4 col-lg-4 col-12 form-group" id="my_box_fees">
                                <input type="hidden" id="fees_count" value="1">
                                <label>Month *</label>
                                <select class="form-control form-control-lg" id="select_box">
                                    <option value="">Please Select Month *</option>
                                    <option value="1">Admission Fee</option>
                                    <option value="2">Contigency</option>
                                    <option value="3">Seat Range</option>
                                </select>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-12 form-group">
                                <label>Due amount</label>
                                <input type="email" value="0" class="form-control" disabled>
                            </div>
                            <input type="hidden" id="box_count" value="1">
                            <input style="margin-top: 20px;margin-bottom: 15px;" type="button" name="submit" id="submit"
                                value="Add More" class="btn-fill-lg font-normal text-light gradient-pastel-green"
                                onclick="add_more_fees()">
                        </div>
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
    function add_more() {
        total();
        var box_count = jQuery("#box_count").val();
        box_count++;
        // alert(box_count);
        jQuery("#box_count").val(box_count);
        jQuery("#wrap").append('<div class="col-xl-12 col-lg-12 col-12 form-group row" id="box_loop_' + box_count +
            '"><div class="col-xl-6 col-lg-6 col-12 form-group"><label>Month *</label><select class="form-control"><option value="">Please Select Month *</option><option value="1">January</option><option value="2">February</option><option value="3">March</option></select></div><div class="col-xl-4 col-lg-4 col-12 form-group"><label>Due amount</label><input type="email" id="number_' +
            box_count +
            '" value="250" class="form-control" disabled></div><div class="col-xl-2 col-lg-2 col-2 form-group"><input style="margin-top: 20px;" type="button" name="submit" id="submit" value="Remove" class="btn-fill-lmd text-light radius-4 bg-gradient-gplus"  onclick=remove_more("' +
            box_count + '")></div></div>'
        );
    }

    function add_more_fees() {
        var fees_count = jQuery("#fees_count").val();
        fees_count++;
        jQuery("#fees_count").val(fees_count);
        jQuery("#wrap_fees").append('<div class="col-xl-12 col-lg-12 col-12 form-group row" id="fees_loop_' +
            fees_count +
            '"><div class="col-xl-6 col-lg-6 col-12 form-group"><label>Month *</label><select class="form-control"><option value="">Please Select Month *</option><option value="1">January</option><option value="2">February</option><option value="3">March</option></select></div><div class="col-xl-4 col-lg-4 col-12 form-group"><label>Due amount</label><input type="email" value="2500" class="form-control" disabled></div><div class="col-xl-2 col-lg-2 col-2 form-group"><input style="margin-top: 20px;" type="button" name="submit" id="submit" value="Remove" class="btn-fill-lmd text-light radius-4 bg-gradient-gplus" onclick=remove_more_fees("' +
            fees_count + '")></div></div>'
        );
    }

    function remove_more(box_count) {
        jQuery("#box_loop_" + box_count).remove();
        var box_count = jQuery("#box_count").val();
        box_count--;
        jQuery("#box_count").val(box_count);
    }

    function remove_more_fees(fees_count) {
        jQuery("#fees_loop_" + fees_count).remove();
        var fees_count = jQuery("#fees_count").val();
        fees_count--;
        jQuery("#fees_count").val(fees_count);
    }

    function total() {
        var total=0;
        var box_count=jQuery("#box_count").val(); //1
        var number=jQuery("#number_"+box_count).val(); //1,2,3
        sum=parseInt(total)+parseInt(number);
        jQuery("#total_amount").val(sum);

    }
    </script>