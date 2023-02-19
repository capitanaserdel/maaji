<?php
session_start();
include "config.php";
error_reporting("0");

if($_SERVER["REQUEST_METHOD"]=="POST"){
// get the values of form as variables
$name=mysqli_real_escape_string($conn, $_POST['name']);

$phone=mysqli_real_escape_string($conn, $_SESSION['phone']);

$email=mysqli_real_escape_string($conn, $_POST['email']);

$pwd=mysqli_real_escape_string($conn, $_POST['pwd']);

$cpwd=mysqli_real_escape_string($conn, $_POST['cpwd']);

$realpwd=mysqli_real_escape_string($conn, $_POST['pwd']);

//Encrypt  the user fullname, email and phone number

$phone=ltrim($phone, '+2340');
// starting the validation....................

//check if name is empty

if(empty($name)){

echo "<div class='btn btn-danger'>
Your fullname is required!
</div>";
}
elseif (empty($phone)) {

    echo "<div class='btn btn-danger'>
    Your phone number is required!
    </div>";

}

elseif (empty($pwd)) {
  
    echo "<div class='btn btn-danger'>
    Please create a password
    </div>";
}
elseif(strlen($realpwd) < 4 OR strlen($realpwd) > 4){
    echo "<div class='btn btn-danger'>
    PIN sholud not contain less/more than 4 characters!
    </div>";
}
elseif (empty($cpwd)) {
    echo "<div class='btn btn-danger'>
    Please confirm your password!
    </div>";
}
else{
//check if the passwords are the same

if ($pwd!=$cpwd) {
    echo "<div class='btn btn-danger'>
    Passwords did not match!
    </div>";
}
else {
 // if all the fileds are filled, kuma passwords sunyi matching
 // abu na gaba shi ne a duba idan an taba register da email ko lambar waya

 //check if email or phone number exists
$rphone=ltrim($phone, "+2340");
$rphone="+234".$rphone;
 $checkep=mysqli_query($conn, "SELECT * FROM users WHERE phone='$rphone'");
 if (mysqli_num_rows($checkep) > 0) {
     //an taba register da email ko phone number kenan
     // the email or phone number have been registered already!
    echo "<div class='btn btn-danger'>
   Your phone number is already registered! </a>

    </div>";
} 
else {
    //idan ba'a taba yin regista ba
    //if the user is not registered

    //sai a sashi a database
    //save user infomation to database


//encrypt the password
$pwd=md5($pwd);
// yanzu in seconds
$dc=time();
 $acct = ltrim($phone, '+2340');
  $acct="+234".$acct;
    $saveuser=mysqli_query($conn, "INSERT INTO users (fullname, email, phone, pwd, datecreated) VALUES ('$name', '', '$acct', '$pwd', '$dc')");



     $saveuserblnc=mysqli_query($conn, "INSERT INTO balance (owner, value, datechanged) VALUES ('$acct', '0', '$dc')");
if ($saveuser===TRUE && $saveuserblnc===TRUE) {
    // idan komai yayi
    // if user information is saved without any problem.

    
    // Or we can write ltrim($str, $str[0]);
    $_SESSION['login_user']=$_SESSION['phone'];
   
    echo "<div class='btn btn-success'>
    Dear ".$name.", welcome to Maaji. Your account has been created. 
    <br>
    Your phone number is your account number<br> 
    <br>
    Dail <a class='text-light' href='tel:*384*221122#'>*384*221122#</a> 
    <br>or visit wwww.maaji.com to enjoy easy banking.
    <br>
    Thank you for choosing Maaji. 


    <br>
    Loading.....
<br>
   
    </div>
    <script>
    setTimeout(function(){
       window.location.href = 'home.php';
    }, 10000);
 </script>
    ";
}
else {
    // idan al'amari ya bace
    // if error occured

    echo "<div class='btn btn-danger'>
    Service temporarily unavailable, please try again!
    </div>";



}
}   
}
}
}
else {
    
    echo "<div class='btn btn-danger'>
    Fill in all the details before you submitted the form
    </div>";
}
?>