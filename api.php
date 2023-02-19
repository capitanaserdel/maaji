
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
</head>
<body>
    
<input type="tel" id="account" placeholder="Account Number">
<input type="tel" id="amount" placeholder="amount">
<button id="send">send</button>
<script src="./js/jquery.min.js"></script>
<script>

    const send = document.querySelector('#send');
    const amount = document.querySelector('#amount').value;
    const account = document.querySelector('#account').value;
    send.addEventListener('click', (e) => {
        request(amount, account);
    })

    function request(x,y) {
        //starling bank api
//     var settings = {
//   "url": "https://fsi.ng/api/sterling/accountapi/api/Spay/InterbankTransferReq",
//   "method": "POST",
//   "timeout": 0,
//   "headers": {
//     "Sandbox-Key": "zcgN1CxGKnSvhfHaHDHTrxNYtFdce5dU1644337943",
//     "Ocp-Apim-Subscription-Key": "t",
//     "Ocp-Apim-Trace": "true",
//     "Appid": "69",
//     "Content-Type": "application/json",
//     "ipval": "0",
//     "sandbox-key": "zcgN1CxGKnSvhfHaHDHTrxNYtFdce5dU1644337943",
//     "zcgN1CxGKnSvhfHaHDHTrxNYtFdce5dU1644337943": ""
//   },
//   "data": JSON.stringify({
//     "Referenceid": "0101",
//     "RequestType": "01",
//     "Translocation": "0101",
//     "SessionID": "01",
//     "FromAccount": "2209854475",
//     "ToAccount": "y",
//     "Amount": "x",
//     "DestinationBankCode": "01",
//     "NEResponse": "01",
//     "BenefiName": "01",
//     "PaymentReference": "01",
//     "OriginatorAccountName": "01",
//     "translocation": "01"
//   }),
// };


// $.ajax(settings).done(function (response) {
// //   alert();
//   swal({
//                     title: "Sent!",
//                     text: response.data.ResponseText,
//                     type: "success",
//                     timer: 2000,
//                     showConfirmButton: false

//                     }, function () {
//                         window.location.reload();
//                      });
// });

// flutterwave api
var settings = {
  "url": "https://fsi.ng/api/v1/flutterwave/v3/transfers",
  "method": "POST",
  "timeout": 0,
  "headers": {
    "Content-Type": "application/json",
    "sandbox-key": "zcgN1CxGKnSvhfHaHDHTrxNYtFdce5dU1644337943",
    "Authorization": "dskjdks"
  },
  "data": JSON.stringify({
    "account_bank": "044",
    "account_number": "0690000040",
    "amount": 5500,
    "narration": "Akhlm Pstmn Trnsfr xx007",
    "currency": "NGN",
    "reference": "akhlm-pstmnpyt-rfxx007_PMCKDU_1",
    "callback_url": "https://webhook.site/b3e505b0-fe02-430e-a538-22bbbce8ce0d",
    "debit_currency": "NGN"
  }),
};

$.ajax(settings).done(function (response) {
//   console.log(response);
  swal({
                    title: "Sent!",
                    text: response.message,
                    type: "success",
                    timer: 2000,
                    showConfirmButton: false

                    }, function () {
                        window.location.reload();
                     });
});

}



</script>
</body>
</html>
