<!doctype html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.1.1/flatly/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <title>jQuery AutoCalc: Do Calculations On Fields Example</title>
    <script type="text/javascript" src="../js/jautocalc.js"></script>
    <script type="text/javascript" src="./custom.js"></script>
    <style>
    body {
        font-family: 'Roboto';
        background-color: #f7f7f7;
    }

    .container {
        margin: 50px auto;
    }
    </style>
</head>

<body>
    <div class="container">
        <h1>jQuery AutoCalc: Do Calculations On Fields Example</h1>
        <form name="cart">
            <table name="cart" class="table table-striped table-bordered">
                <tr>
                    <th></th>
                    <th>Item</th>
                    <th>Qty</th>
                    <th>Price</th>
                    <th>&nbsp;</th>
                    <th>Item Total</th>
                </tr>
                <tr name="line_items">
                    <td><button name="remove" class="btn btn-danger">Remove</button></td>
                    <td><select name="select" id="">
                            <option>Select Month</option>
                            <option>Dd</option>
                            <option>dc</option>
                        </select></td>
                    <td><input type="text" name="qty" value="3"></td>
                    <td><input type="text" name="price" value="99.99"></td>
                    <td>&nbsp;</td>
                    <td><input type="text" name="item_total" value="" jAutoCalc="{qty} * {price}"></td>
                </tr>
                <tr>
                    <td colspan="3">&nbsp;</td>
                    <td>Total</td>
                    <td>&nbsp;</td>
                    <td><input type="text" name="grand_total" value="" jAutoCalc="SUM({item_total})"></td>
                </tr>
                <tr>
                    <td colspan="99"><button name="add" class="btn btn-primary">Add Row</button></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>