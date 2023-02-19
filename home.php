<?php
session_start();
if(isset($_SESSION['login_user'])){
header("location:main.php");
}
else
{
header("location:register.php");

}
?>