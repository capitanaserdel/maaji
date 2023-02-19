<?php
session_start();
include "config.php";
$phone=$_SESSION['login_user'];
$bal = 0;
$tloan = 0;
$name = "";
$owner = "";

// if not logged in
if (!isset($_SESSION['login_user'])) {
     header("Location:index.php");
   }
else{
}

// balance and number apperance
$user = "SELECT * FROM balance WHERE owner='$phone' ";
            $result2 = $conn->query($user);
            if ($result2->num_rows > 0) {
                while($row2 = $result2->fetch_assoc()) {
                    $owner = $row2["owner"];
                    $bal = $row2["value"];
                    }
            }

// name apperance
$sql = "SELECT * FROM users WHERE phone='$phone' ";
$result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $name = $row["fullname"];
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
    <title>Wallet | Ma'aji</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="js/tailwind.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/tailwind.min.css"/>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.3.4/dist/flowbite.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/v4-shims.min.js" integrity="sha512-jV9c9TgJKs4VzfA+DtPAXJqOMs0gsEmfhKEgtT4TqE7SPjwXiDmtDKsh1FXIPX/gDFcckXaVB7xNKD+LIS5GmA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/solid.min.js" integrity="sha512-C92U8X5fKxCN7C6A/AttDsqXQiB7gxwvg/9JCxcqR6KV+F0nvMBwL4wuQc+PwCfQGfazIe7Cm5g0VaHaoZ/BOQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/regular.min.js" integrity="sha512-eH31QC2/CLTAQpugtCMQh/w68mbefCbaDTsSbmqOk86RICy523PnuNMaFfQ5cAkwwJ1dsnn7OUt8bfkF24zprg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>
<style>
    .disclaimer{
        display:none;
    }
</style>
<body>
    <div class="bg-gray-100">
        <div class='flex justify-center space-x-2 w-full bg-white shadow-md rounded-lg overflow-auto mx-auto'>
            <div class="flex justify-center min-w-sm w-full md:max-w-2xl lg:max-w-4xl border border-gray-100 bg-white transition-shadow hover:shadow-xl">
                
                <div class="w-full">
                    <div class="relative h-48">
                        <div class="bg-green-600 w-full pb-10 text-white absolute top-0">
                            <div class="flex justify-between px-2 pt-10 items-center">
                                <div class="flex items-center space-x-4">
                                    <div class="text-white">
                                        <a href="main.php" class="hover:text-white"><i class="fa fa-chevron-left"></i></a>
                                    </div>
                                    <div>
                                        <p class="font-black text-xl">My Wallet</p>
                                    </div>
                                </div>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M12 3c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 14c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0-7c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg>
                                </div>
                            </div>
                    <div class="flex flex-col justify-between px-1 pt-4 mb-4 items-center">
                            <div class="flex justify-center items-center space-x-2">
                                <p class="font-semibold text-xl wallet-balance">Wallet Balance</p>
                                <p class="text-2xl toggle-wallet-balance"><i class="fa fa-eye"></i></p>
                            </div>
                    <div>
                        <div class="flex flex-col">
                                <p class="font-harline">NGN <?php echo number_format($bal); ?> </p>
                                
                        </div>
                    </div>
<?php
// loan balance
$user = "SELECT * FROM loans WHERE applicant='$phone'";
            $result2 = $conn->query($user);
            if ($result2->num_rows > 0) {
                $tloan=0;
                while($row = $result2->fetch_assoc()) {
                    $owner = $row["applicant"];
                    $loanbal = $row["amt"];
                    $tloan +=$loanbal;
                    }
            }
            



?>
                    <div class="flex justify-center items-center space-x-2">
                                <p class="font-semibold text-xl wallet-balance">Loan Balance</p>
                                <p class="text-2xl toggle-wallet-balance"><i class="fa fa-eye"></i></p>
                               
                            </div>

                            <div>
                        <div class="flex flex-col">
                                <p class="font-harline">NGN <?php echo number_format($tloan); ?> </p>
                        </div>
                    </div>






                            </div>
                        </div>
                    </div>

                    <br>
                    <br>
                    <br>
                    <div class="flex items-center p-4">
                        <div class="relative flex flex-col items-center w-full">
                            <div class="h-24 w-24 md rounded-full relative avatar flex items-end justify-end text-green-600 min-w-max -top-16 flex bg-green-200 text-green-100 row-start-1 row-end-3 text-green-650 ring-1 ring-white">
                                <img class="h-24 w-24 md rounded-full relative" src="images/male-avatar.jpg" alt="">
                            </div>
                            <div class="flex flex-col space-y-1 justify-center items-center -mt-12 w-full">
                                <div class="flex flex-col space-y-1 items-center border-b-2 border-gray-100 w-full pb-2">
                                    <span class="text-md whitespace-nowrap text-gray-800 font-semibold"><?php echo $name; ?></span>
                                    <span class="text-md whitespace-nowrap text-gray-600"><?php echo $owner; ?></span>
                                </div>

                                <!-- Transaction Section -->
                                <div class="pt-2 px-4 w-full flex flex-col mb-4 h-full overflow-auto">
                                    <div class="h-full flex flex-row justify-center items-center space-x-2 mb-4">
                                        <div class="flex justify-center text-green-600 items-center">
                                            <i class="fa fa-credit-card"></i>
                                        </div>
                                        <p class="font-bold text-lg text-green-600">Transaction History</p>
                                    </div>



<!--Modal code start-->


<style>
    .modal {
      transition: opacity 0.25s ease;
    }
    body.modal-active {
      overflow-x: hidden;
      overflow-y: visible !important;
    }
  </style>





<?php
include "config.php";
$amount = 0;

// if not logged in
if (!isset($_SESSION['login_user'])) {
     header("Location:index.php");
   }
else{
}
if (isset($_POST['send'])){
    $amount=$_POST['amount'];
    $acc_no=$_POST['acc_no'];
    $bank=$_POST['bank'];
    $pin=md5($_POST['pin']);


// check if amount field is filled
if(empty($amount)){

    echo "<div class='btn btn-danger'>
   Please enter the amount you want to send!
    </div>";
    }
    elseif ($amount <"5") {


// check if amount is less than 10 naira


        echo "<div class='btn btn-danger'>
        Please enter amount not less than NGN 5
        </div>";
    
    }
    else{

    $checkpin = $conn->query("SELECT * from users WHERE phone='$phone' AND pwd='$pin'");
    if ($checkpin->num_rows > 0) {
        
         // check if user balance is sufficicient

    $checkbal=mysqli_query($conn, "SELECT * FROM balance WHERE owner='$phone'");
    while ($userblnc=mysqli_fetch_assoc($checkbal)) {
       
        
// balance value

$userbal=$userblnc['value'];

// check if whether balance is sufficient or not


if ($userbal > $amount) {
    //akwai kudi kenan
    // new balance
    $newbal=$userbal-$amount;
 // deduct user
 $deductuser=mysqli_query($conn, "UPDATE balance SET value='$newbal' WHERE owner='$phone'");
if ($deductuser === TRUE) {
    echo '<script>alert("You Have Sent The Money To Your Account")</script>';
} else{
    echo '<script>alert("Network Problem")</script>';
}

}else{
    echo '<script>alert("Insufficient Ballance")</script>';
}
}

}else{
    echo '<script>alert("Incorrect Pin !!!")</script>';
}
    }
}
?>







<form action="wallet.php" method="post">
 <div class="">
   &nbsp; <a href="topup.php" class="btn btn-outline-success">Top up</a>
  <button class="modal-open bg-green-500 border border-gray-500 hover:border-green-600 text-gray-100 hover:text-green-700 font-bold py-2 px-4 rounded-lg">Ma'aji to Bank</button>
  
  <!--Modal-->
  <div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
    <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
    
    <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
      
      <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
        <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
          <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
        </svg>
        <span class="text-sm"></span>
      </div>

      <!-- Add margin if you want to see some of the overlay behind the modal-->
      <div class="modal-content py-4 text-left px-6">
        <!--Title-->
        <div class="flex justify-between items-center pb-3">
          <p class="text-1xl font-bold text-green-500">SENT MONEY TO YOUR BANK ACCOUNT</p>
          <div class="modal-close cursor-pointer z-50">
            <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
              <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
            </svg>
          </div>
        </div>

        <!--Body-->
        <label for="current-password" class="block mb-2 text-xl font-medium text-red-500 dark:text-red-500"><center>Enter Bank Details!!!</center></label>
        <div class="">
            <label for="Amount" class="block mb-2 text-xl font-medium text-black-400 dark:text-black-400">Amount</label>
            <input type="text" name="amount" id="current-password" class="shadow-sm bg-white-50 border border-gray-300 text-black-400 text-xl rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-50 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black-400 dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
        </div>
        <div class="">
            <label for="Account-Number" class="block mb-2 text-xl font-medium text-black-400 dark:text-black-400">Account Number</label>
            <input type="number" name="acc_no" id="current-password" class="shadow-sm bg-white-50 border border-gray-300 text-black-400 text-xl rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-50 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black-400 dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
        </div>
        <div class="">
            <label for="Select-Bank" class="block mb-2 text-xl font-medium text-black-400 dark:text-black-400">Select Bank</label>
            <select name="bank" class="shadow-sm bg-white-50 border border-gray-300 text-black-400 text-xl rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-50 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black-400 dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
                <option selected>Select Bank</option>
                <option>Zenith Bank</option>
                <option>UBA Bank</option>
                <option>Access Bank</option>
                <option>Guarantee Trust Bank</option>
            </select>
        </div>
        <div class="">
            <label for="password" class="block mb-2 text-xl font-medium text-black-400 dark:text-black-400">Enter Your Pin</label>
            <input type="password" name="pin" id="current-password" maxlength="4" class="shadow-sm bg-white-50 border border-gray-300 text-black-400 text-xl rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-50 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black-400 dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
        </div>
        <!--Body-->

        <!--Footer-->
        <div class="flex justify-end pt-2">
          <button class="px-4 bg-transparent p-3 rounded-lg text-green-500 hover:bg-gray-100 hover:text-green-400 mr-2" type="submit" name="send" id="sendTransaction">Send</button>
          <button class="modal-close px-4 bg-green-500 p-3 rounded-lg text-white hover:bg-green-400">Cancel</button>
        </div>
        <!--Footer-->
      </div>
    </div>
  </div>
</form>
  <script>
    var openmodal = document.querySelectorAll('.modal-open')
    for (var i = 0; i < openmodal.length; i++) {
      openmodal[i].addEventListener('click', function(event){
    	event.preventDefault()
    	toggleModal()
      })
    }
    
    const overlay = document.querySelector('.modal-overlay')
    overlay.addEventListener('click', toggleModal)
    
    var closemodal = document.querySelectorAll('.modal-close')
    for (var i = 0; i < closemodal.length; i++) {
      closemodal[i].addEventListener('click', toggleModal)
    }
    
    document.onkeydown = function(evt) {
      evt = evt || window.event
      var isEscape = false
      if ("key" in evt) {
    	isEscape = (evt.key === "Escape" || evt.key === "Esc")
      } else {
    	isEscape = (evt.keyCode === 27)
      }
      if (isEscape && document.body.classList.contains('modal-active')) {
    	toggleModal()
      }
    };
    
    
    function toggleModal () {
      const body = document.querySelector('body')
      const modal = document.querySelector('.modal')
      modal.classList.toggle('opacity-0')
      modal.classList.toggle('pointer-events-none')
      body.classList.toggle('modal-active')
    }
    
     
  </script>
</div>
<!--Modal code end-->

<br>                                    
     




                                
<?php

$you="";
$tfrom=$_SESSION['login_user'];

 function get_timeago( $ptime )
{
    
    $estimate_time = time() - $ptime;

    if( $estimate_time < 1 )
    {
        return 'Just now';
    }

    $condition = array(
                12 * 30 * 24 * 60 * 60  =>  'year',
                30 * 24 * 60 * 60       =>  'month',
                24 * 60 * 60            =>  'day',
                60 * 60                 =>  'hour',
                60                      =>  'minute',
                1                       =>  'second'
    );

    foreach( $condition as $secs => $str )
    {
        $d = $estimate_time / $secs;

        if( $d >= 1 )
        {
            $r = round( $d );
            return  $r . ' ' . $str . ( $r > 1 ? 's' : '' ) . ' ago';
        }
    }
}


        $result = mysqli_query($conn, "SELECT * FROM transfers WHERE tto='$tfrom' AND msg='' OR tfrom='$tfrom' AND msg='' ORDER BY id DESC");

        if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $dt=$row['dt'];
            $timeago=get_timeago($dt);
            $sms = $row['msg'];
        
            $interactwith=$row['tto'];
            if ($row['tto'] == $_SESSION['login_user']){
                $interactwith = $row['tfrom'];
            }

            $checkc=mysqli_query($conn, "SELECT * FROM users WHERE phone='$interactwith'");
            
            // get contact details
            
            while ($cc=mysqli_fetch_assoc($checkc)) {
                $cfullname=$cc['fullname'];
            
 }

        
        if($tfrom==$row['tfrom']) { 
        $you ="
        <div class='flex flex-col w-full space-y-2 border-b-2 border-gray-100 py-2'>
            <div class='flex flex-col w-full justify-between'>
                <div class='flex justify-between items-center'>
                    <p class='my-auto font-bold uppercase'> $cfullname <i class='fa fa-arrow-up text-red-600'></i></p>
                    <p class='text-red-600 '>NGN ".number_format($row["tamt"])."</p>
                    </div>
                    <div class='flex justify-between items-center'>
                    <p class='flex my-auto px-1 py-1 text-gray-400 text-xs italic font-medium'>You transferred NGN ".$row["tamt"]." to $cfullname</p>
                    <p class='text-xs'>".$timeago."</p>
                </div>
            </div>
        </div>";
        }elseif($tfrom==$row['tto']){
            $you ="
            <div class='flex flex-col w-full space-y-2 border-b-2 border-gray-100 py-2'>
                <div class='flex flex-col w-full justify-between'>
                    <div class='flex justify-between items-center'>
                        <p class='my-auto font-bold uppercase'> $cfullname <i class='fa fa-arrow-down text-green-600'></i></p>
                        <p class='text-green-600'>NGN ".number_format($row["tamt"])."</p>
                        </div>
                        <div class='flex justify-between items-center'>
                        <p class='flex my-auto px-1 py-1 text-gray-400 text-xs italic font-medium'>You received NGN ".$row["tamt"]." from $cfullname</p>
                        <p class='text-xs'>".$timeago."</p>
                    </div>
                </div>
            </div>";
        }else{
          $you ="Error";  
        }
        ?>
        
        <?php echo $you; ?>
        <?php 
        } 
        
        }else{
        echo "No Any Transaction Yet";
        }
        ?>

    </div>
    
<script src="./js/jquery.min.js"></script>
    <script>

// send_transaction

const send = document.querySelector('#sendTransaction');
    send.addEventListener('click', (e) => {
        request();
    })

    function request(x,y) {
   
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





        const toggleWalletBalance = document.querySelector('.toggle-wallet-balance');
        const shownBalance = document.querySelector('.shown-balance');
        const hiddenBalance = document.querySelector('.hidden-balance');
        const toggleIcon = toggleWalletBalance.firstElementChild; 
        toggleWalletBalance.addEventListener('click', () => {
            if (toggleIcon.classList.contains('fa-eye')) {
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
                shownBalance.classList.toggle('hide');
                hiddenBalance.classList.toggle('hide');
            }
            else if (toggleIcon.classList.contains('fa-eye-slash')) {
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
                shownBalance.classList.toggle('hide');
                hiddenBalance.classList.toggle('hide');
            }
        })
    </script>
</body>
</html>