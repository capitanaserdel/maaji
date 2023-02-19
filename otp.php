<?php
session_start();
include "config.php";
$err="";
if (isset($_POST['phone'])) {
  
    $phone=$_POST['phone'];
    $_SESSION['phone']=$phone;
  
}
else{
    header("location.register.php");
}




// if otp is fields are filled



if(isset($_POST['votp'])) {
   $otp1=$_POST['otp1'];
   $otp2=$_POST['otp2'];
   $otp3=$_POST['otp3'];
   $otp4=$_POST['otp4'];
   $otp5=$_POST['otp5'];
   $otp6=$_POST['otp6'];

   $otp = $otp1.$otp2.$otp3.$otp4.$otp5.$otp6;
   
 if($otp==="123456") {
  


// check if user is registered 
include "config.php";
$phone=$_SESSION['phone'];
$phone=ltrim($phone, "+2340");
$phone="+234".$phone;

$checkp=mysqli_query($conn, "SELECT * FROM `users` WHERE phone='$phone';");
if (mysqli_num_rows($checkp)>0) {
 $_SESSION['login_user']=$phone;
   header("location:main.php");
}
else{
    header("location:form.php");  
}


 }
 else {
    $err="<h6 class='text-danger'>Invalid OTP!</h6>";
 }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/logo/logo2.png" type="image/x-icon" />
    <title>OTP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="js/tailwind.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/tailwind.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.3.4/dist/flowbite.min.css" />
    <script type="" src="./js/tailwind.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {

function OTPInput() {
const inputs = document.querySelectorAll('#otp > *[id]');
for (let i = 0; i < inputs.length; i++) { inputs[i].addEventListener('keydown', function(event) { if (event.key==="Backspace" ) { inputs[i].value='' ; if (i !==0) inputs[i - 1].focus(); } else { if (i===inputs.length - 1 && inputs[i].value !=='' ) { return true; } else if (event.keyCode> 47 && event.keyCode < 58) { inputs[i].value=event.key; if (i !==inputs.length - 1) inputs[i + 1].focus(); event.preventDefault(); } else if (event.keyCode> 64 && event.keyCode < 91) { inputs[i].value=String.fromCharCode(event.keyCode); if (i !==inputs.length - 1) inputs[i + 1].focus(); event.preventDefault(); } } }); } } OTPInput(); });
    </script>
 <style>
     body {
    background-color: transparent
}

.height-100 {
    height: 100vh
}

.card {
    width: 500px;
    border: none;
    height: 350px;
    z-index: 1;
    display: flex;
    justify-content: center;
    align-items: center
}

.card h6 {
    color: green;
    font-size: 23px
}

.inputs input {
    width: 60px;
    height: 60px
}

input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    margin: 0
}

.card-2 {
    background-color: #fff;
    padding: 10px;
    width: 350px;
    height: 100px;
    bottom: -50px;
    left: 20px;
    position: absolute;
    border-radius: 5px
}

.card-2 .content {
    margin-top: 50px
}

.card-2 .content a {
    color: green
}

.form-control:focus {
    box-shadow: none;
    border: 2px solid green
}

.validate {
    border-radius: 20px;
    height: 40px;
    background-color: green;
    border: 1px solid green;
    width: 140px
}
.top-logo{
    justify-content: center;
	align-items: center;
	display: flex;
    width: 300px;
}
.top-logo-sec{
    margin-top: 10%;
    justify-content: center;
	align-items: center;
	display: flex;
    width: 100%;
    height: auto;
}
.width{
    margin-left:33%;
    margin-top: 10px;
}
.mrg{
    margin-top: 5%;
}
@media only screen and (max-width: 700px) {
.card {
    width: 500px;
    border: none;
    height: 300px;
    z-index: 1;
    display: flex;
    justify-content: center;
    align-items: center
}
    .inputs input {
    width: 40px;
    height: 40px
}
.width{
    margin-left:0;
    margin-top: 10px;
}
.top-logo {
    width: 200px;
}
.top-logo-sec{
    margin-top: 80px;
    justify-content: center;
	align-items: center;
	display: flex;
    width: 100%;
    height: auto;
}
}
    </style>
</head>
<body>
<div class="top-logo-sec">
<form method="POST" action="otp.php">
    <div class="container height-auto ">
        <div class="position-relative">
            <div class="card p-2 text-center">
                <img src="./images/logo/logo2.png"  class="top-logo" lt="">
                <div class="mrg">

                </div>
                <h6>Please enter the one time password <br> to verify your account</h6>
                <div> <span>A code has been sent </span> <small><?php
        
                echo $_SESSION['phone'];
                echo $err;
                ?>
            </small> </div>
          
                <div id="otp" class="inputs d-flex flex-row justify-content-center mt-2"> 
                    <input class="m-2 text-center form-control rounded" type="password" id="first" maxlength="1" name="otp1" required/> 
                    <input class="m-2 text-center form-control rounded" type="password" id="second" maxlength="1" name="otp2" required/>
                     <input class="m-2 text-center form-control rounded" type="password" id="third" maxlength="1" name="otp3" required/> 
                     <input class="m-2 text-center form-control rounded" type="password" id="fourth" maxlength="1" name="otp4" required/> 
                     <input class="m-2 text-center form-control rounded" type="password" id="fifth" maxlength="1" name="otp5" required=""/> 
                     <input class="m-2 text-center form-control rounded" type="password" id="sixth" maxlength="1" name="otp6" required/>
                     </div>
                <div class="mt-4"> <button type="submit" name="votp" class="btn btn-success bg-green-600 px-4 validate">VERIFY OTP</button> </div>
            </form>
            </div>
            <br>
                <div class="content d-flex justify-content-center align-items-center"> <span>Didn't get the code</span> <a href="#" style="color: green;" class="text-decoration-none ms-3">Resend</a> </div>
                <div class="content d-flex justify-content-center align-items-center"> <span>Incorrect Number?</span> <a href="register.php" style="color: green;" class="text-decoration-none ms-3">Change Number</a> </div>
        </div>
    </div>

</div>
</body>
</html>