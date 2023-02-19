<?php
session_start();
if (isset($_SESSION['login_user'])) {
	// kayi login , an kyale ka.
}
else{
	// idan bayaki login ba mu maidakai login.php
	header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Top up | Maaji</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="../assets/css/styles.css">

    <style>
        .disclaimer {
    position: fixed;
    z-index: 9999999;
    bottom: 0;
    right: 0;
    border-top: 2px solid #ff5c62;
    text-align: center;
    font-size: 14px;
    font-weight: 400;
    background-color: #fff;
    padding: 5px 10px 5px 10px;
    display: none;
}


footer img{
    display: none;
}
      </style>
   
</head>

<body>
    <section class="login-clean" style="background: rgb(255,255,255);">
        <form  style="border-radius: 20px;" onsubmit(); return false();>
            <small class="form-text" style="text-align: center;margin: 26px 0px 0px;margin-right: 31px;">Top up your Maaji wallet</small>
            <div class="illustration"></div>
            <div class="mb-3">
                <input required class="form-control" id="amount" type="number" name="amount" placeholder="Amount" style="border-radius: 10px;"></div>
            <div class="mb-3"></div>
            <div class="mb-3"><button type="button" class="btn btn-success d-block w-100" type="button" onclick="payWithPaystack()" style="border-radius: 10px;">Top up</button>
            </div><a class="forgot" href="home.php">back to dashboard</a>
        </form>
    </section>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
 
           <script src="https://js.paystack.co/v1/inline.js"></script>
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
 <script>
 

 
 
  function payWithPaystack(){

 document.cookie = "amount = " + document.getElementById("amount").value;
  var handler = PaystackPop.setup({
      key: 'pk_test_0ff1432465dd74912a4611ab331627725ed87907',
      email: 'maajiapp@gmail.com',
      amount: document.getElementById("amount").value+"00",
      ref: '<?php echo mt_rand(00000000,12345678);?>', // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
      metadata: {
         custom_fields: [
            {
                display_country: "",
                display_city: "",
                display_id: ""
                 }
         ]
      },
      callback: function(response){
           window.location.replace("top-up-verify.php?ref="+response.reference);
      },
      onClose: function(){
          alert('Top up canceled');
      }
    });
    handler.openIframe();
  }
</script>


</body>
</html>