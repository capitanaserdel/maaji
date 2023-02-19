<?php
session_start();
include "config.php";
// if not logged in
if (!isset($_SESSION['login_user'])) {
     header("Location:login.php");
   }
else{
}



if($_SERVER["REQUEST_METHOD"]=="POST"){
// get the values of form as variables
$tto=mysqli_real_escape_string($conn, $_POST['tto']);

$tfrom=mysqli_real_escape_string($conn, $_SESSION['login_user']);

$msg=mysqli_real_escape_string($conn, $_POST['msg']);



if(empty($msg)){

echo "<div class='text-danger'>
Message can't be blank!
</div>";
}
else {
 $dt=time();

    $sendmsg=mysqli_query($conn, "INSERT INTO transfers (tfrom, tto, tamt, refid,dsc, msg, dt) 
    VALUES('$tfrom', '$tto', '', '', '',  '$msg', '$dt')");
    
if ($sendmsg===TRUE) {
    // idan komai yayi
    // if user information is saved without any problem.
    // echo "
    
    // <script>window.reload();
    // </script>
    // ";
}
else {
    // idan al'amari ya bace
    // if error occured

    echo "<div class='alert'>
    Unable to send message, please try again!
    </div>";



}
}   
}
else {
    
    echo "<div class='btn'>
    Fill in all the details before you submitted the form
    </div>";
}
?>


