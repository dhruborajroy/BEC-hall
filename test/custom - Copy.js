function getTransaction(encRuleId) {

    var token = $("meta[name='_csrf']").attr("content");
    var header = $("meta[name='_csrf_header']").attr("content");

    var java_base_url = "https://bsp.brta.gov.bd:443";
    var link = java_base_url + '/v/brtaPayment/get-license-fees-transaction-data?encRuleId=' + encodeURIComponent(encRuleId);

    var brtaPaymentInfo = {};
    brtaPaymentInfo.branchId = $("#branchId").val();
    brtaPaymentInfo.personName = $("#personName").val();
    brtaPaymentInfo.fatherName = $("#fatherName").val();

    //alert(JSON.stringify(brtaPaymentInfo))

    $.ajax({
        url: link,
        contentType: 'application/json',
        data: JSON.stringify(brtaPaymentInfo),
        type: 'POST',
        async: true,
        beforeSend: function (xhr) {
            // here it is
            xhr.setRequestHeader(header, token);
        },
        success: function (data) {
            //console.log('data.ruleName : ' + data.ruleName);
            if (data.messageCode == '1111') {
                $('#purpose-payment-data > tbody:last').empty();
                $("#transactionDiv").show();

                $.each(data.paymentInfo, function (i, item) {
                    addOneRowToTable(item);
                });

                var tr = '<tr>';
                tr = tr + '<td style="width:30%"><a class="btn btn-dark" '
                    + 'href="https://bsp.brta.gov.bd:443/v/payment/discardRegistrationPayment" '
                    + 'style="margin: 1px"><i class="fa fa-trash"></i> '
                    + 'লেনদেন বাতিল করুন </a> '
                    + '<input type="hidden" name="_csrf" value="d9f58c50-a1bc-46e7-b7cb-06d2a822d0c3" /> '
                    + '<button type="submit" class="btn btn-success" style="margin: 1px" value="">'
                    + 'ফি জমা দিন </button> </td>'
                    + '<td colspan="8"><h4 style="text-align: center">'
                    + 'মোট পরিমাণ (টাকা) : </h4></td>'
                    + '<td style="text-align:right">' + data.totalAmount + '</td>';

                tr = tr + '</tr>';

                $('#purpose-payment-data > tbody:last').append(tr);
                $("#message").html('');

                window.scrollTo(0,1000);
            } else {
                var msg = '<div class="alert alert-icon  alert-danger alert-dismissible" role="alert">'
                    + '<button class="close" aria-label="Close" data-dismiss="alert" type="button">'
                    + '<span aria-hidden="true">&times;</span> <span class="sr-only">Close</span> </button>'
                    + '<i class="fa fa-close" aria-hidden="true" style="top: 10px"></i>' + data.message + '</div>'

                $("#message").html(msg);

                window.scrollTo(0,0);
            }
        },
        error: function (err) {
            alert(err);
        }
    });
};

function addOneRowToTable(item) {
    var tr = '<tr>';
    tr = tr + '<td>' + item.ruleName + '</td>';
    tr = tr + '<td <td style="text-align:right">' + item.mainFee + '</td>';
    tr = tr + '<td <td style="text-align:right">' + item.extraCharge + '</td>';
    tr = tr + '<td <td style="text-align:right">' + item.inspectionFee + '</td>';
    tr = tr + '<td <td style="text-align:right">' + item.labelFee + '</td>';
    tr = tr + '<td <td style="text-align:right">' + item.applicationFee + '</td>';
    tr = tr + '<td <td style="text-align:right">' + item.lateFee + '</td>';
    tr = tr + '<td <td style="text-align:right">' + item.othersFee + '</td>';
    tr = tr + '<td <td style="text-align:right">' + item.vat + '</td>';
    tr = tr + '<td style="text-align:right">' + item.totalFee + '</td>';
    tr = tr + '</tr>';

    $('#purpose-payment-data > tbody:last').append(tr);

};
