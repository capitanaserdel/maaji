<?php
session_start();
include "config.php";
$owner=$_SESSION['login_user'];
if ($_SERVER['REQUEST_METHOD']==="POST" ) {
   $msg=$_POST['msg'];


// menu din farko idan ba ayi selecting din komai ba.

if(!isset($_SESSION['service'])){



if($msg==1){

$_SESSION['service']="loan";

   echo "
   <div class='flex w-full mt-2 space-x-3 max-w-xs'>
   <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
           src='images/logo/logo1.png'></div>
   <div>
       <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
           <p class='text-sm'>how much?</p>
       </div>
       <span class='text-xs text-gray-500 leading-none'></span>
   </div>
  <script>scrollDown()</script>
   
   ";
}

elseif ($msg==2) {
    $_SESSION['service']="insurance";
    echo "
    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'>Select insurance type
            <br>
            1. Automobile Insurance
            <br>
            2. Agricultural Insurance
            <br>
            3. Health Insurance
            <br>
            
            </p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
  <script>scrollDown()</script>
    
    ";  
 
    



}

elseif ($msg==3) {
    $_SESSION['service']="investment";
    echo "
    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'>Investment
            <br>
            1. Apply
            <br>
            2. Invest
            <br>
            </p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
  <script>scrollDown()</script>
    
    ";  
    


}
}





// idan anyi selecting din laon


elseif ($_SESSION['service'] =="loan") {
  
    

//bayan an tambaye shi how much
// sai a duba nawa yasa






// idan kasa da dubu daya ne


if ($msg <= 1000 AND $msg >=100) {

    // confirm loan request

    $_SESSION['service'] = "confirm_loan";
    $_SESSION['loan_amount'] = "$msg";
    echo "
    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'>Are you sure you want to access loan of <b>".$msg."</b> ?
            <br>
            1. confirm
            <br>
            2. cancel
            <br>            
            </p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
  <script>scrollDown()</script>
    
    "; 
    

}elseif ($msg < 100){
    echo "
    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'>Dear valued customer you can not acccess a loan for less than a 100 naira</p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>
    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
    </div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'> Select
             <br>
            1. Loan
            <br>
            2. Insurance
            <br>
            3. Investment</p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>

  <script>scrollDown()</script>
    
    ";  

unset($_SESSION['service']);
}else{
    echo "
    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'>Call our agent <b> Umar Musa </b> on <a href='+2348089963050'>+2348089963050</a> to get loan of more than <b>NGN 1000</b>.</p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>
    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'> Select
             <br>
            1. Loan
            <br>
            2. Insurance
            <br>
            3. Investment</p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>

  <script>scrollDown()</script>
    
    ";  

unset($_SESSION['service']);
}

}











elseif ($_SESSION['service'] == "confirm_loan") {

    $msg = $_POST['msg'];
    if ($msg == "1") {
        # user input 1 to confirm

        



// a gano balance din mutum



$checkbal=mysqli_query($conn, "SELECT * FROM balance WHERE owner='$owner'");
while ($userblnc=mysqli_fetch_assoc($checkbal)) {
   
    
// balance value

$userbal=$userblnc['value'];

$newbal=$userbal+$_SESSION['loan_amount'];

$amt=$_SESSION['loan_amount'];


// a bawa mutum loan dinsa 




$save = mysqli_query($conn, "INSERT INTO loans (applicant,amt,status) VALUES ('$owner','$amt','0')");
$loan=mysqli_query($conn, "UPDATE balance SET value='$newbal' WHERE owner='$owner'");

if($loan===true){

    echo "
    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'>Your account has been credited with NGN ".$_SESSION['loan_amount']."</p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>

    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'> Select
             <br>
            1. Loan
            <br>
            2. Insurance
            <br>
            3. Investment</p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>

  <script>scrollDown()</script>
    "; 
    unset($_SESSION['service']);


    }else{
         
   echo "
    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'>Your account has been credited with NGN ".$_SESSION['loan_amount']."</p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>

    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'> Select
             <br>
            1. Loan
            <br>
            2. Insurance
            <br>
            3. Investment</p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>

  <script>scrollDown()</script>";
    unset($_SESSION['service']);
    }


}



  
}else{
    echo "
    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'>canceled! </p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>
    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'> Select
             <br>
            1. Loan
            <br>
            2. Insurance
            <br>
            3. Investment</p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
  <script>scrollDown()</script>
    
    "; 
    unset($_SESSION['service']);
    
}
}




  









// insurance


elseif ($_SESSION["service"]=="insurance") {
   
  if($msg==1){


    // automobile insurance
    $_SESSION['service'] = "AutoInsurance"; 
    
    echo "
    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'>Call our automobile insurance agent <b> Yusha'u Hamza </b> on <a href='+2348032325309'>+2348032325309</a> to apply for automobile insurance.</p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>
    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'> Select
             <br>
            1. Loan
            <br>
            2. Insurance
            <br>
            3. Investment</p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
  <script>scrollDown()</script>
    
    ";  

    unset($_SESSION['service']);  
  }elseif ($msg==2) {
      //agricultural insurance
      $_SESSION['service'] = "AgroInsurance";

      echo "
      <div class='flex w-full mt-2 space-x-3 max-w-xs'>
      <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
              src='images/logo/logo1.png'></div>
      <div>
          <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
              <p class='text-sm'>Call our agricultural insurance agent <b> David Samuel </b> on <a href='+2348032325309'>+2348032325309</a> to apply for automobile insurance.</p>
          </div>
          <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>
      <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'> Select
             <br>
            1. Loan
            <br>
            2. Insurance
            <br>
            3. Investment</p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
  <script>scrollDown()</script>
      
      ";  
  


      unset($_SESSION['service']);  
  }
  elseif ($msg==3) {
     // health insurance
     $_SESSION['service'] = "HealthInsurance";
     echo "
     <div class='flex w-full mt-2 space-x-3 max-w-xs'>
     <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
             src='images/logo/logo1.png'></div>
     <div>
         <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
             <p class='text-sm'>Health Insurance
             <br>
             1. Individual
             <br>
             2. Family
             <br>
             3. Co-oporate</p>
         </div>
         <span class='text-xs text-gray-500 leading-none'></span>
     </div>
  <script>scrollDown()</script>
     
     "; 
  }
}elseif ($_SESSION["service"]=="AutoInsurance" OR $_SESSION["service"]=="AgroInsurance"){
    echo "
      <div class='flex w-full mt-2 space-x-3 max-w-xs'>
      <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
              src='images/logo/logo1.png'></div>
      <div>
          <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
              <p class='text-sm'>Call our insurance agent <b> David Samuel </b> on <a href='+2348032325309'>+2348032325309</a> to apply for automobile insurance.</p>
          </div>
          <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>
      <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'> Select
             <br>
            1. Loan
            <br>
            2. Insurance
            <br>
            3. Investment</p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
  <script>scrollDown()</script>
      
      ";  
  


      unset($_SESSION['service']);  
  
}elseif ($_SESSION['service'] == "HealthInsurance") {

    if ($msg == "1") {
        # Individual health insurance
        $_SESSION['service'] = "individualHealth";
        echo "
     <div class='flex w-full mt-2 space-x-3 max-w-xs'>
     <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
             src='images/logo/logo1.png'></div>
     <div>
         <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
             <p class='text-sm'>Select Insurance type:
             <br>
             1. 50% NGN 500 per month
             <br>
             2. 75% NGN 700 per month
             <br>
             3. 90% NGN 800 per month
             </p>
         </div>
         <span class='text-xs text-gray-500 leading-none'></span>
     </div>
  <script>scrollDown()</script>
  ";
    }


    elseif ($msg == "2") {
        # Family health insurance
        $_SESSION['service'] = "FamilyHealth";
        echo "
     <div class='flex w-full mt-2 space-x-3 max-w-xs'>
     <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
             src='images/logo/logo1.png'></div>
     <div>
         <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
             <p class='text-sm'>Select Insurance type:
             <br>
             1. 50% NGN 1000 per month
             <br>
             2. 75% NGN 1600 per month
             <br>
             3. 90% NGN 2000 per month
             </p>
         </div>
         <span class='text-xs text-gray-500 leading-none'></span>
     </div>
  <script>scrollDown()</script>
  ";
    }



    elseif ($msg == "3") {
        # cooperate health insurance
        $_SESSION['service'] = "CooperateHealth";
        echo "
     <div class='flex w-full mt-2 space-x-3 max-w-xs'>
     <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
             src='images/logo/logo1.png'></div>
     <div>
         <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
             <p class='text-sm'>Select Insurance type:
             <br>
             1. 50% NGN 2500 per month
             <br>
             2. 75% NGN 3800 per month
             <br>
             3. 90% NGN 5000 per month
             </p>
         </div>
         <span class='text-xs text-gray-500 leading-none'></span>
     </div>
  <script>scrollDown()</script>
  ";
    }
}

elseif ($_SESSION['service'] == "individualHealth") {
    # get type
    if ($msg == "1") {
        # Individual 50% health insurance
        $_SESSION['service'] = "smallIndividual";
        echo "
     <div class='flex w-full mt-2 space-x-3 max-w-xs'>
     <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
             src='images/logo/logo1.png'></div>
     <div>
         <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
             <p class='text-sm'>NGN 500 will be deducted from your account every month
             <br>
             1. proceed
             <br>
             2. cancel
             </p>
         </div>
         <span class='text-xs text-gray-500 leading-none'></span>
     </div>
  <script>scrollDown()</script>
  ";
    }



    if ($msg == "2") {
        # Individual 75% health insurance
        $_SESSION['service'] = "mediumIndividual";
        echo "
     <div class='flex w-full mt-2 space-x-3 max-w-xs'>
     <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
             src='images/logo/logo1.png'></div>
     <div>
         <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
             <p class='text-sm'>NGN 700 will be deducted from your account every month
             <br>
             1. proceed
             <br>
             2. cancel
             </p>
         </div>
         <span class='text-xs text-gray-500 leading-none'></span>
     </div>
  <script>scrollDown()</script>
  ";
    }


    if ($msg == "3") {
        # Individual 90% health insurance
        $_SESSION['service'] = "largeIndividual";
        echo "
     <div class='flex w-full mt-2 space-x-3 max-w-xs'>
     <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
             src='images/logo/logo1.png'></div>
     <div>
         <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
             <p class='text-sm'>NGN 800 will be deducted from your account every month
             <br>
             1. proceed
             <br>
             2. cancel
             </p>
         </div>
         <span class='text-xs text-gray-500 leading-none'></span>
     </div>
  <script>scrollDown()</script>
  ";
    }
}




elseif ($_SESSION['service'] == "smallIndividual") {

    $msg = $_POST['msg'];
    if ($msg == "1") {
        # user input 1 to confirm


$save = mysqli_query($conn, "INSERT INTO insurance (owner,type,status) VALUES ('$owner','1','0')");





if( $save === true){

    echo "
    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'>You have successfully register for 50% individual health insurance </p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>

    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'> Select
             <br>
            1. Loan
            <br>
            2. Insurance
            <br>
            3. Investment</p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>

  <script>scrollDown()</script>
    "; 
    unset($_SESSION['service']);


    }else{
       echo "
    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'>You have successfully register for 50% individual health insurance </p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>

    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'> Select
             <br>
            1. Loan
            <br>
            2. Insurance
            <br>
            3. Investment</p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>

  <script>scrollDown()</script>
    "; 
    unset($_SESSION['service']);
    }


}else{
    echo "
    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'>canceled! </p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>
    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'> Select
             <br>
            1. Loan
            <br>
            2. Insurance
            <br>
            3. Investment</p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
  <script>scrollDown()</script>
    
    "; 
    unset($_SESSION['service']);
}

}








elseif ($_SESSION['service'] == "mediumIndividual") {

    $msg = $_POST['msg'];
    if ($msg == "1") {
        # user input 1 to confirm


$save = mysqli_query($conn, "INSERT INTO insurance (owner,type,status) VALUES ('$owner','2','0')");





if( $save === true){

    echo "
    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'>You have successfully register for 75% individual health insurance </p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>

    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'> Select
             <br>
            1. Loan
            <br>
            2. Insurance
            <br>
            3. Investment</p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>

  <script>scrollDown()</script>
    "; 
    unset($_SESSION['service']);


    }else{
         
       echo "
    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'>You have successfully register for 75% individual health insurance </p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>

    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'> Select
             <br>
            1. Loan
            <br>
            2. Insurance
            <br>
            3. Investment</p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>

  <script>scrollDown()</script>";
    unset($_SESSION['service']);
    }


}else{
    echo "
    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'>canceled! </p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>
    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'> Select
             <br>
            1. Loan
            <br>
            2. Insurance
            <br>
            3. Investment</p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
  <script>scrollDown()</script>
    
    "; 
    unset($_SESSION['service']);
}

}








elseif ($_SESSION['service'] == "largeIndividual") {

    $msg = $_POST['msg'];
    if ($msg == "1") {
        # user input 1 to confirm


$save = mysqli_query($conn, "INSERT INTO insurance (owner,type,status) VALUES ('$owner','3','0')");





if( $save === true){

    echo "
    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'>You have successfully register for 90% individual health insurance </p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>

    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'> Select
             <br>
            1. Loan
            <br>
            2. Insurance
            <br>
            3. Investment</p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>

  <script>scrollDown()</script>
    "; 
    unset($_SESSION['service']);


    }else{
       echo "
    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'>You have successfully register for 90% individual health insurance </p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>

    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'> Select
             <br>
            1. Loan
            <br>
            2. Insurance
            <br>
            3. Investment</p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>

  <script>scrollDown()</script>
    "; 
    unset($_SESSION['service']);
    }


}else{
    echo "
    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'>canceled! </p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>
    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'> Select
             <br>
            1. Loan
            <br>
            2. Insurance
            <br>
            3. Investment</p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
  <script>scrollDown()</script>
    
    "; 
    unset($_SESSION['service']);
}

}



elseif($_SESSION['service'] == "FamilyHealth"){

    if ($msg == "1") {
        # family 50% health insurance
        $_SESSION['service'] = "smallFamily";
        echo "
     <div class='flex w-full mt-2 space-x-3 max-w-xs'>
     <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
             src='images/logo/logo1.png'></div>
     <div>
         <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
             <p class='text-sm'>NGN 1000 will be deducted from your account every month
             <br>
             1. proceed
             <br>
             2. cancel
             </p>
         </div>
         <span class='text-xs text-gray-500 leading-none'></span>
     </div>
  <script>scrollDown()</script>";
    }elseif ($msg == "2") {
        # family 75% health insurance
        $_SESSION['service'] = "mediumFamily";
        echo "
     <div class='flex w-full mt-2 space-x-3 max-w-xs'>
     <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
             src='images/logo/logo1.png'></div>
     <div>
         <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
             <p class='text-sm'>NGN 1600 will be deducted from your account every month
             <br>
             1. proceed
             <br>
             2. cancel
             </p>
         </div>
         <span class='text-xs text-gray-500 leading-none'></span>
     </div>
  <script>scrollDown()</script>";

}elseif ($msg == "3") {
    # family 90% health insurance
    $_SESSION['service'] = "largeFamily";
    echo "
 <div class='flex w-full mt-2 space-x-3 max-w-xs'>
 <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
         src='images/logo/logo1.png'></div>
 <div>
     <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
         <p class='text-sm'>NGN 2000 will be deducted from your account every month
         <br>
         1. proceed
         <br>
         2. cancel
         </p>
     </div>
     <span class='text-xs text-gray-500 leading-none'></span>
 </div>
<script>scrollDown()</script>";
}else{
    echo "
    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'>Invalid input </p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>
    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'> Select
             <br>
            1. Loan
            <br>
            2. Insurance
            <br>
            3. Investment</p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
  <script>scrollDown()</script>
    
    "; 
    unset($_SESSION['service']);
}

}









elseif($_SESSION['service'] == "smallFamily"){



    $msg = $_POST['msg'];
    if ($msg == "1") {
        # user input 1 to confirm


$save = mysqli_query($conn, "INSERT INTO insurance (owner,type,status) VALUES ('$owner','4','0')");





if( $save === true){

    echo "
    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'>You have successfully register for 50% Family health insurance </p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>

    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'> Select
             <br>
            1. Loan
            <br>
            2. Insurance
            <br>
            3. Investment</p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>

  <script>scrollDown()</script>
    "; 
    unset($_SESSION['service']);


    }else{
         
      echo "
    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'>You have successfully register for 50% Family health insurance </p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>

    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'> Select
             <br>
            1. Loan
            <br>
            2. Insurance
            <br>
            3. Investment</p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>

  <script>scrollDown()</script>
    "; 
    unset($_SESSION['service']);
    }


}else{
    echo "
    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'>canceled! </p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>
    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'> Select
             <br>
            1. Loan
            <br>
            2. Insurance
            <br>
            3. Investment</p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
  <script>scrollDown()</script>
    
    "; 
    unset($_SESSION['service']);
}


}








elseif($_SESSION['service'] == "mediumFamily"){



    $msg = $_POST['msg'];
    if ($msg == "1") {
        # user input 1 to confirm


$save = mysqli_query($conn, "INSERT INTO insurance (owner,type,status) VALUES ('$owner','5','0')");





if( $save === true){

    echo "
    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'>You have successfully register for 75% Family health insurance </p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>

    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'> Select
             <br>
            1. Loan
            <br>
            2. Insurance
            <br>
            3. Investment</p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>

  <script>scrollDown()</script>
    "; 
    unset($_SESSION['service']);


    }else{
         
       echo "
    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'>You have successfully register for 75% Family health insurance </p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>

    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'> Select
             <br>
            1. Loan
            <br>
            2. Insurance
            <br>
            3. Investment</p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>

  <script>scrollDown()</script>
    "; 
    unset($_SESSION['service']);
    }


}else{
    echo "
    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'>canceled! </p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>
    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'> Select
             <br>
            1. Loan
            <br>
            2. Insurance
            <br>
            3. Investment</p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
  <script>scrollDown()</script>
    
    "; 
    unset($_SESSION['service']);
}


}









elseif($_SESSION['service'] == "largeFamily"){



    $msg = $_POST['msg'];
    if ($msg == "1") {
        # user input 1 to confirm


$save = mysqli_query($conn, "INSERT INTO insurance (owner,type,status) VALUES ('$owner','6','0')");





if( $save === true){

    echo "
    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'>You have successfully register for 90% Family health insurance </p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>

    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'> Select
             <br>
            1. Loan
            <br>
            2. Insurance
            <br>
            3. Investment</p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>

  <script>scrollDown()</script>
    "; 
    unset($_SESSION['service']);


    }else{
         
   echo "
    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'>You have successfully register for 90% Family health insurance </p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>

    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'> Select
             <br>
            1. Loan
            <br>
            2. Insurance
            <br>
            3. Investment</p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>

  <script>scrollDown()</script>
    "; 
    unset($_SESSION['service']);
    }


}else{
    echo "
    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'>canceled! </p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>
    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'> Select
             <br>
            1. Loan
            <br>
            2. Insurance
            <br>
            3. Investment</p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
  <script>scrollDown()</script>
    
    "; 
    unset($_SESSION['service']);
}


}












elseif($_SESSION['service'] == "CooperateHealth"){

    if ($msg == "1") {
        # cooperate 50% health insurance
        $_SESSION['service'] = "smallCooperate";
        echo "
     <div class='flex w-full mt-2 space-x-3 max-w-xs'>
     <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
             src='images/logo/logo1.png'></div>
     <div>
         <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
             <p class='text-sm'>NGN 2500 will be deducted from your account every month
             <br>
             1. proceed
             <br>
             2. cancel
             </p>
         </div>
         <span class='text-xs text-gray-500 leading-none'></span>
     </div>
  <script>scrollDown()</script>";
    }elseif ($msg == "2") {
        #Cooperate 75% health insurance
        $_SESSION['service'] = "mediumCooperate";
        echo "
     <div class='flex w-full mt-2 space-x-3 max-w-xs'>
     <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
             src='images/logo/logo1.png'></div>
     <div>
         <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
             <p class='text-sm'>NGN 3800 will be deducted from your account every month
             <br>
             1. proceed
             <br>
             2. cancel
             </p>
         </div>
         <span class='text-xs text-gray-500 leading-none'></span>
     </div>
  <script>scrollDown()</script>";

}elseif ($msg == "3") {
    # Cooperate 90% health insurance
    $_SESSION['service'] = "largeCooperate";
    echo "
 <div class='flex w-full mt-2 space-x-3 max-w-xs'>
 <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
         src='images/logo/logo1.png'></div>
 <div>
     <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
         <p class='text-sm'>NGN 5000 will be deducted from your account every month
         <br>
         1. proceed
         <br>
         2. cancel
         </p>
     </div>
     <span class='text-xs text-gray-500 leading-none'></span>
 </div>
<script>scrollDown()</script>";
}else{
    echo "
    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'>Invalid input </p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>
    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'> Select
             <br>
            1. Loan
            <br>
            2. Insurance
            <br>
            3. Investment</p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
  <script>scrollDown()</script>
    
    "; 
    unset($_SESSION['service']);
}

}















elseif($_SESSION['service'] == "smallCooperate"){



    $msg = $_POST['msg'];
    if ($msg == "1") {
        # user input 1 to confirm


$save = mysqli_query($conn, "INSERT INTO insurance (owner,type,status) VALUES ('$owner','7','0')");





if( $save === true){

    echo "
    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'>You have successfully register for 50% Co-operate health insurance </p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>

    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'> Select
             <br>
            1. Loan
            <br>
            2. Insurance
            <br>
            3. Investment</p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>

  <script>scrollDown()</script>
    "; 
    unset($_SESSION['service']);


    }else{
         
     echo "
    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'>You have successfully register for 50% Co-operate health insurance </p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>

    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'> Select
             <br>
            1. Loan
            <br>
            2. Insurance
            <br>
            3. Investment</p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>

  <script>scrollDown()</script>
    "; 
    unset($_SESSION['service']);
    }


}else{
    echo "
    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'>canceled! </p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>
    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'> Select
             <br>
            1. Loan
            <br>
            2. Insurance
            <br>
            3. Investment</p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
  <script>scrollDown()</script>
    
    "; 
    unset($_SESSION['service']);
}


}








elseif($_SESSION['service'] == "mediumCooperate"){



    $msg = $_POST['msg'];
    if ($msg == "1") {
        # user input 1 to confirm


$save = mysqli_query($conn, "INSERT INTO insurance (owner,type,status) VALUES ('$owner','8','0')");





if( $save === true){

    echo "
    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'>You have successfully register for 75% Cooperate health insurance </p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>

    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'> Select
             <br>
            1. Loan
            <br>
            2. Insurance
            <br>
            3. Investment</p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>

  <script>scrollDown()</script>
    "; 
    unset($_SESSION['service']);


    }else{
         
     echo "
    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'>You have successfully register for 75% Cooperate health insurance </p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>

    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'> Select
             <br>
            1. Loan
            <br>
            2. Insurance
            <br>
            3. Investment</p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>

  <script>scrollDown()</script>
    "; 
    unset($_SESSION['service']);
    }


}else{
    echo "
    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'>canceled! </p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>
    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'> Select
             <br>
            1. Loan
            <br>
            2. Insurance
            <br>
            3. Investment</p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
  <script>scrollDown()</script>
    
    "; 
    unset($_SESSION['service']);
}


}









elseif($_SESSION['service'] == "largeCooperate"){



    $msg = $_POST['msg'];
    if ($msg == "1") {
        # user input 1 to confirm


$save = mysqli_query($conn, "INSERT INTO insurance (owner,type,status) VALUES ('$owner','9','0')");





if( $save === true){

    echo "
    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'>You have successfully register for 90% Cooperate health insurance </p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>

    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'> Select
             <br>
            1. Loan
            <br>
            2. Insurance
            <br>
            3. Investment</p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>

  <script>scrollDown()</script>
    "; 
    unset($_SESSION['service']);


    }else{
     echo "
    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'>You have successfully register for 90% Cooperate health insurance </p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>

    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'> Select
             <br>
            1. Loan
            <br>
            2. Insurance
            <br>
            3. Investment</p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>

  <script>scrollDown()</script>
    "; 
    unset($_SESSION['service']);
    }


}else{
    echo "
    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'>canceled! </p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>
    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'> Select
             <br>
            1. Loan
            <br>
            2. Insurance
            <br>
            3. Investment</p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
  <script>scrollDown()</script>
    
    "; 
    unset($_SESSION['service']);
}


}
//END OF INSURANCE 

















//BEGINNING OF INVESTMENT

elseif ($_SESSION['service']=="investment") {
    

if($msg=="1"){


// apply 
echo "
<div class='flex w-full mt-2 space-x-3 max-w-xs'>
<div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
        src='images/logo/logo1.png'></div>
<div>
    <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
        <p class='text-sm'>Call our investment agent <b> Yunusa Mudi </b> on <a href='+2348025100777'>+2348025100777</a> to apply for investment on Maaji.</b>.</p>
    </div>
    <span class='text-xs text-gray-500 leading-none'></span>
</div>
</div>
<div class='flex w-full mt-2 space-x-3 max-w-xs'>
<div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
        src='images/logo/logo1.png'></div>
<div>
    <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
        <p class='text-sm'> Select
         <br>
        1. Loan
        <br>
        2. Insurance
        <br>
        3. Investment</p>
    </div>
    <span class='text-xs text-gray-500 leading-none'></span>
</div>
</div>

<script>scrollDown()</script>

";  

unset($_SESSION['service']);






}
elseif ($msg=="2") {
$_SESSION['service']="applyinv";

    
    # invest


# nawa zakayi invest

    echo "
    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'>Here is are the invetsment plans on Maaji
            
            <ul>
            <li>From NGN 100 to NGN 999 (5% per month)</li>
            <br>
            <li>From NGN 1,000 to NGN 9,999 (10% per month) </li>
            <br>
            <li>From NGN 10,000 above (15% per month)</li>
            
            </ul>
            
            <br>
            How much do you want to invest?
            </p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>
    
    
    <script>scrollDown()</script>
    
    ";
}else{
    echo "
<div class='flex w-full mt-2 space-x-3 max-w-xs'>
<div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
        src='images/logo/logo1.png'></div>
<div>
    <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
        <p class='text-sm'>invalid input please try again later</p>
    </div>
    <span class='text-xs text-gray-500 leading-none'></span>
</div>
</div>
<div class='flex w-full mt-2 space-x-3 max-w-xs'>
<div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
        src='images/logo/logo1.png'></div>
<div>
    <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
        <p class='text-sm'> Select
         <br>
        1. Loan
        <br>
        2. Insurance
        <br>
        3. Investment</p>
    </div>
    <span class='text-xs text-gray-500 leading-none'></span>
</div>
</div>

<script>scrollDown()</script>

";  

unset($_SESSION['service']);
}

}


    elseif($_SESSION['service']=="applyinv"){
        
        $_SESSION['service'] = "comfirmInvest";
        $_SESSION['amountInvest'] = "$msg";

        if ($msg >= 10000){
            $percentage = 15;
            $profit = $msg/100 * $percentage;
            $_SESSION['profit'] = "$profit";
        }elseif( $msg >= 1000){
            $percentage = 10;
            $profit = $msg/100 * $percentage;
            $_SESSION['profit'] = "$profit";
        }else{
            $percentage = 5;
            $profit = $msg/100 * $percentage;
            $_SESSION['profit'] = "$profit";
        }




        echo "
        <div class='flex w-full mt-2 space-x-3 max-w-xs'>
        <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
                src='images/logo/logo1.png'></div>
        <div>
            <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
                <p class='text-sm'>
        
               Are you sure you want to invest  NGN".$msg." on Maaji?
        <br>
        Profit ".$percentage."% (".$profit.")
               <br>
               <br>
        
               1. Yes
               <br>
               2. Cancel
                </p>
            </div>
            <span class='text-xs text-gray-500 leading-none'></span>
        </div>
        </div>
        
        
        <script>scrollDown()</script>
        
        ";
        }



        elseif($_SESSION['service'] == "comfirmInvest"){
        // idan ya danna confirm
            if ($msg == "1"){



                // a gano balance din mutum



$checkbal=mysqli_query($conn, "SELECT * FROM balance WHERE owner='$owner'");
while ($userblnc=mysqli_fetch_assoc($checkbal)) {
   
    
// balance value

$userbal=$userblnc['value'];

$newbal=$userbal+$_SESSION['amountInvest'];

$amt=$_SESSION['amountInvest'];


// a bawa mutum loan dinsa 



$update=mysqli_query($conn, "UPDATE balance SET value='$newbal' WHERE owner='$owner'");
$save = mysqli_query($conn, "INSERT INTO investment (applicant,amount) VALUES ('$owner','$amt')");





if($update === true && $save === true){

    echo "
    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'>You have successfully investe NGN ".$_SESSION['amountInvest']." on Maaji, you will credited with profit of NGN ".$_SESSION['profit']." every month.</p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>

    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'> Select
             <br>
            1. Loan
            <br>
            2. Insurance
            <br>
            3. Investment</p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>

  <script>scrollDown()</script>
    "; 
    unset($_SESSION['service']);


    }else{
     echo "
    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'>You have successfully investe NGN ".$_SESSION['amountInvest']." on Maaji, you will credited with profit of NGN ".$_SESSION['profit']." every month.</p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>

    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'> Select
             <br>
            1. Loan
            <br>
            2. Insurance
            <br>
            3. Investment</p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>

  <script>scrollDown()</script>
    "; 
    unset($_SESSION['service']);
    }



}
            }else{
                echo "
    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'>canceled! </p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
    </div>
    <div class='flex w-full mt-2 space-x-3 max-w-xs'>
    <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
            src='images/logo/logo1.png'></div>
    <div>
        <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
            <p class='text-sm'> Select
             <br>
            1. Loan
            <br>
            2. Insurance
            <br>
            3. Investment</p>
        </div>
        <span class='text-xs text-gray-500 leading-none'></span>
    </div>
  <script>scrollDown()</script>
    
    "; 
    unset($_SESSION['service']);
    
            }
        }

            
           
        




    





























//end
}