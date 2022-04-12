<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>A simple, clean, and responsive HTML invoice template</title>

    <style>
    .invoice-box {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }

    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }

    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }

    .invoice-box table tr td:nth-child(2) {
        text-align: right;
    }

    .invoice-box table tr.top table td {
        padding-bottom: 20px;
    }

    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }

    .invoice-box table tr.information table td {
        padding-bottom: 40px;
    }

    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }

    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }

    .invoice-box table tr.item td {
        border-bottom: 1px solid #eee;
    }

    .invoice-box table tr.item.last td {
        border-bottom: none;
    }

    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }

    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }

        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }

    }

    /** RTL **/
    .invoice-box.rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }

    .invoice-box.rtl table {
        text-align: right;
    }

    .invoice-box.rtl table tr td:nth-child(2) {
        text-align: left;
    }
    </style>
</head>

<body >
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
            <tr class="item">
                <td>January</td>
                <td>$3000</td>
            </tr>
            <tr class="item">
                <td>February</td>
                <td>$3000</td>
            </tr>
            <tr class="item">
                <td>March</td>
                <td>$3000</td>
            </tr>
            <tr class="total">
                <td></td>

                <td><b>Total:</b> $9000</td>
            </tr>
        </table>
    </div>
</body>

</html>
<script>
window.addEventListener('load',function() {
    window.print();
} )
</script>