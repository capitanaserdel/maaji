<?php
session_start();
include "config.php";
date_default_timezone_set('Africa/Niamey');
$owner=$_SESSION['login_user'];

if($_SERVER["REQUEST_METHOD"]=="POST"){

    // get the values of form as variables
$tfrom=mysqli_real_escape_string($conn, $owner);

$tto=mysqli_real_escape_string($conn, $_POST['tto']);
$realamt=mysqli_real_escape_string($conn, $_POST['amt']);
$tamt=mysqli_real_escape_string($conn, $_POST['amt']);
$dsc="";


$pin1=$_POST['pin1'];
$pin2=$_POST['pin2'];
$pin3=$_POST['pin3'];
$pin4=$_POST['pin4'];
$pin=$pin1.$pin2.$pin3.$pin4;






$refid="T".date("Y_M_D_His_").rand(01111,99999);

$dt=time();


//Encrypt  the transfer details

$tamt=$tamt;
$refid=$refid;

// check if amount field is filled
if(empty($tamt)){

    echo "<div class='btn btn-danger'>
   Please enter the amount you want to send!
    </div>";
    }
    elseif ($realamt <"5") {


// check if amount is less than 10 naira


        echo "<div class='btn btn-danger'>
        Please enter amount not less than NGN 5
        </div>";
    
    }
    else{


$pin=md5($pin);
// check if entered pin is correct
$checkpin=mysqli_query($conn, "SELECT * FROM users WHERE phone='$owner' AND pwd='$pin'");


if(mysqli_num_rows($checkpin)> 0){



    // check if user balance is sufficicient

    $checkbal=mysqli_query($conn, "SELECT * FROM balance WHERE owner='$owner'");
    while ($userblnc=mysqli_fetch_assoc($checkbal)) {
       
        
// balance value

$userbal=$userblnc['value'];


// check if whether balance is sufficient or not


if ($userbal > $realamt) {
   //akwai kudi kenan
   // new balance
   $newbal=$userbal-$realamt;
// deduct user
$deductuser=mysqli_query($conn, "UPDATE balance SET value='$newbal' WHERE owner='$owner'");
//get recepeints balance
$checkrbal=mysqli_query($conn, "SELECT * FROM balance WHERE owner='$tto'");
while ($rblnc=mysqli_fetch_assoc($checkrbal)) {
   
    
// balance value

$rbal=$rblnc['value'];


}


// send money to recepients account
//recepients new bal
$rnewbal=$rbal+$realamt;
$sendmoney=mysqli_query($conn, "UPDATE balance SET value='$rnewbal' WHERE owner='$tto'");

//perform the transfer
$dotrns=mysqli_query($conn, "INSERT INTO transfers (tfrom, tto, tamt, refid, dsc, msg, dt) 
VALUES('$tfrom', '$tto', '$tamt', '$refid', '$dsc', '', '$dt')");

// a duba idan transfer tayi
if($dotrns===TRUE && $deductuser===TRUE && $sendmoney===TRUE) {
  ?>
 <script>  swal({
                    title: "Sent!",
                    text: "",
                    type: "success",
                    timer: 2000,
                    showConfirmButton: false

                     });


                        $("#modal-toggle").click();
            
</script>
<?php



}
else {
    //idan batayi ba
    echo "<div class='btn btn-danger'>Service temporarily unavailable, please try again!</div>";
}


}
else {
    echo "<div class='text-danger'>Insufficient balance <a href='topup.php' class='btn btn-outline-success'>Top up</a></div>";
}




    }







}
else {
    echo "<div class='text-danger'>Incorrect PIN!</div>";
}



}

}

?>