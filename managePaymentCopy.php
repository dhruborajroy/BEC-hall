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
                    </div>
                    <div class="Col-lg-12">
                        <form name="cart">
                            <table name="cart" class="table table-striped table-bordered">
                                <tr>
                                    <th></th>
                                    <th>Item</th>
                                    <th>Price</th>
                                    <th>Item Total</th>
                                </tr>
                                <tr name="line_items">
                                    <td><button name="remove" class="btn btn-danger">Remove</button></td>
                                    <td>More Stuff</td>
                                    <td><input type="text" name="price" value="12.50"></td>
                                    <td><input type="text"  disabled  name="item_total" value="" jAutoCalc=" {price}"></td>
                                </tr>
                                <tr>
                                    <td colspan="2">&nbsp;</td>
                                    <td>Total</td>
                                    <td><input type="text" disabled name="grand_total" onchange="get_total()"
                                            jAutoCalc="SUM({item_total})" id="monthly_total"></td>
                                </tr>
                                <tr>
                                    <td colspan="99"><button name="add" class="btn btn-primary">Add Row</button>
                                    </td>
                                </tr>
                            </table>
                        </form>
                        <hr>
                        <form name="fee">
                            <table name="fee" class="table table-striped table-bordered">
                                <tr>
                                    <th></th>
                                    <th>Item</th>
                                    <th>Price</th>
                                    <th>Item Total</th>
                                </tr>
                                <tr name="fee_line_items">
                                    <td><button name="fee_remove" class="btn btn-danger">Remove</button></td>
                                    <td>More Stuff</td>
                                    <td><input type="text" name="fee_price" value="12.50"></td>
                                    <td><input type="text" disabled  name="fee_item_total" value="" jAutoCalc=" {fee_price}"></td>
                                </tr>
                                <tr>
                                    <td colspan="2">&nbsp;</td>
                                    <td>Total</td>
                                    <td>
                                        <input type="text"  disabled  name="fee_grand_total" onchange="get_total()"
                                            jAutoCalc="SUM({fee_item_total}) " id="fee_total">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="99"><button name="fee_add" class="btn btn-primary">Add Row</button>
                                    </td>
                                </tr>
                            </table>
                            <hr>
                            <hr>
                            <form name="total">
                                <table class="table table-striped table-bordered">
                                    <tr>
                                        <th></th>
                                        <th>Item</th>
                                        <th>Price</th>
                                        <th>Item Total</th>
                                    </tr>
                                    <tr>
                                        <td colspan="2">&nbsp;</td>
                                        <td>Total</td>
                                        <td><input disabled id="total">
                                        </td>
                                    </tr>
                                </table>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Student Table Area End Here -->
    <?php include("footer.php")?>
    <script>
    //finding total
    function get_total() {
        var monthly_total = document.getElementById("monthly_total").value;
        var fee_total = document.getElementById("fee_total").value;
        var total = parseFloat(monthly_total) + parseFloat(fee_total);
        document.getElementById("total").value = total;
    }
    </script>