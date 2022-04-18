<!doctype html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.1.1/flatly/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> 
    <title>jQuery AutoCalc: Do Calculations On Fields Example</title>
    <script type="text/javascript" src="jautocalc.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        function autoCalcSetup() {
            $('form[name=cart]').jAutoCalc('destroy');
            $('form[name=cart] tr[name=line_items]').jAutoCalc({
                keyEventsFire: true,
                decimalPlaces: 2,
                emptyAsZero: true
            });
            $('form[name=cart]').jAutoCalc({
                decimalPlaces: 2
            });
        }
        autoCalcSetup();
        $('button[name=remove]').click(function(e) {
            e.preventDefault();
            var form = $(this).parents('form')
            $(this).parents('tr').remove();
            autoCalcSetup();
        });

        $('button[name=add]').click(function(e) {
            e.preventDefault();
            var $table = $(this).parents('table');
            var $top = $table.find('tr[name=line_items]').first();
            var $new = $top.clone(true);
            $new.jAutoCalc('destroy');
            $new.insertBefore($top);
            $new.find('input[type=text]').val('');
            autoCalcSetup();
        });

    });
    </script>
    <style>
    body {
        font-family: 'Roboto';
        background-color: #f7f7f7;
    }

    .container {
        margin: 150px auto;
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
                    <td>Stuff</td>
                    <td><input type="text" name="qty" value="1"></td>
                    <td><input type="text" name="price" value="9.99"></td>
                    <td>&nbsp;</td>
                    <td><input type="text" name="item_total" value="" jAutoCalc="{qty} * {price}"></td>
                </tr>
                <tr name="line_items">
                    <td><button name="remove" class="btn btn-danger">Remove</button></td>
                    <td>More Stuff</td>
                    <td><input type="text" name="qty" value="2"></td>
                    <td><input type="text" name="price" value="12.50"></td>
                    <td>&nbsp;</td>
                    <td><input type="text" name="item_total" value="" jAutoCalc="{qty} * {price}"></td>
                </tr>
                <tr name="line_items">
                    <td><button name="remove" class="btn btn-danger">Remove</button></td>
                    <td>And More Stuff</td>
                    <td><input type="text" name="qty" value="3"></td>
                    <td><input type="text" name="price" value="99.99"></td>
                    <td>&nbsp;</td>
                    <td><input type="text" name="item_total" value="" jAutoCalc="{qty} * {price}"></td>
                </tr>
                <tr>
                    <td colspan="3">&nbsp;</td>
                    <td>Subtotal</td>
                    <td>&nbsp;</td>
                    <td><input type="text" name="sub_total" value="" jAutoCalc="SUM({item_total})"></td>
                </tr>
                <tr>
                    <td colspan="3">&nbsp;</td>
                    <td>
                        Tax:
                        <select name="tax">
                            <option value=".06">CT Tax</option>
                            <option selected value=".00">Tax Free</option>
                        </select>
                    </td>
                    <td>&nbsp;</td>
                    <td><input type="text" name="tax_total" value="" jAutoCalc="{sub_total} * {tax}"></td>
                </tr>
                <tr>
                    <td colspan="3">&nbsp;</td>
                    <td>Total</td>
                    <td>&nbsp;</td>
                    <td><input type="text" name="grand_total" value="" jAutoCalc="{sub_total} + {tax_total}"></td>
                </tr>
                <tr>
                    <td colspan="99"><button name="add"  class="btn btn-primary">Add Row</button></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>