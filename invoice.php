<?php 
include("./inc/connection.inc.php");
include("./inc/function.inc.php");
if (isset($_GET['id']) && $_GET['id']!="") {
    $invoice_id=get_safe_value($_GET['id']);
    // $sql="select * from payments where id ='$invoice_id'";
    // $res=mysqli_query($con,$sql);
    // if(mysqli_num_rows($res)>!0){
    //     redirect("index.php");
    // }
}else{
    redirect("index.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>BEC Invoice</title>
    <link rel="stylesheet" href="./css/invoice.css">
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img src="./img/invoiceLogo.png" style="width: 100%; height:150px" />
                                <!-- max-width: 300px -->
                            </td>
                            <!-- <td>
                                Invoice #: 123<br />
                                Created: January 1, 2022<br />
                                Due: February 1, 2022
                            </td> -->
                        </tr>
                    </table>
                </td>
            </tr>

            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                <b>Name : </b> Dhrubo Raj Roy<br>
                                <b>ID : </b> 20200130<br>
                                <b>Dept : </b> Civil Engineering<br>
                                <b>Barch : </b> 4<sup>th</sup> Bath

                            </td>
                            <td>
                                <img src="./img/qr.png" alt="QR Code" height="150px" width="150px">
                                <br>
                                <!-- https://chart.googleapis.com/chart?cht=qr&chs=300x300&chl=https://localhost/bec-hall/invoice.php -->
                                <p style="margin-top: -25px;">Scan Qr Code to verify Payment</p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr class="heading">
                <td>Item</td>
                <td>Price</td>
            </tr>
            <?php
            echo $sql="select payments.*,monthly_payment_details.*,month.id,month.name from payments,monthly_payment_details,month where month.id=monthly_payment_details.month_id and monthly_payment_details.month_id=payments.id and payments.id='$invoice_id'";
            $res=mysqli_query($con,$sql);
            if(mysqli_num_rows($res)>0){
            while($row=mysqli_fetch_assoc($res)){
            ?>
            <tr class="item">
                <td><?php echo $row['name']." - ".date("y",time())?></td>
                <td><span class="amount"><?php echo $row['monthly_amount']?></span> Taka</td>
            </tr>
            <?php 
            } } else { //redirect("index.php") ?>
            <tr>
                <td colspan="5">No data found</td>
            </tr>
            <?php } ?>
            <tr class="heading">
                <td>Item</td>
                <td>Price</td>
            </tr>
            <?php 
            $sql="SELECT `fees`.* , fee_details.*,payments.* from payments,fees,fee_details WHERE fees.id=fee_details.fee_id and payments.id=fee_details.payment_id and payments.id='$invoice_id'";
            $res=mysqli_query($con,$sql);
            if(mysqli_num_rows($res)>0){
            $i=1;
            while($row=mysqli_fetch_assoc($res)){
            ?>
            <tr class="item">
                <td><?php echo $row['name']." - ".date("y",time())?></td>
                <td><span class="amount"><?php echo $row['fee_amount']?></span> Taka</td>
            </tr>
            <?php 
            $i++;
            } } else { ?>
            <tr>
                <td colspan="5">No data found</td>
            </tr>
            <?php } ?>
            <tr class="total">
                <td></td>
                <td ><b>Total:</b> <span id="grant_total"></span> Taka</td>
            </tr>
        </table>
    </div>
</body>

</html>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
window.addEventListener('load', function() {
    // window.print();
})

var total = 0;
var amount = document.getElementsByClassName("amount");
for (let i = 0; i < amount.length; i++) {
    var total = total + parseInt(amount[i].innerHTML);
}
console.log(total);
document.getElementById("grant_total").innerHTML = total;
</script>