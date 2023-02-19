<?php
session_start();
include "dp.php";
if (!isset($_SESSION['login_user'])) {
   header("location:index.php");
}
$owner=$_SESSION['login_user'];
$clist="";
include "config.php";









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





?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/logo/logo2.png" type="image/x-icon" />
    <title>Ma'aji</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="js/tailwind.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/tailwind.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.3.4/dist/flowbite.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/v4-shims.min.js" integrity="sha512-jV9c9TgJKs4VzfA+DtPAXJqOMs0gsEmfhKEgtT4TqE7SPjwXiDmtDKsh1FXIPX/gDFcckXaVB7xNKD+LIS5GmA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/solid.min.js" integrity="sha512-C92U8X5fKxCN7C6A/AttDsqXQiB7gxwvg/9JCxcqR6KV+F0nvMBwL4wuQc+PwCfQGfazIe7Cm5g0VaHaoZ/BOQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/regular.min.js" integrity="sha512-eH31QC2/CLTAQpugtCMQh/w68mbefCbaDTsSbmqOk86RICy523PnuNMaFfQ5cAkwwJ1dsnn7OUt8bfkF24zprg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/solid.min.js"
        integrity="sha512-C92U8X5fKxCN7C6A/AttDsqXQiB7gxwvg/9JCxcqR6KV+F0nvMBwL4wuQc+PwCfQGfazIe7Cm5g0VaHaoZ/BOQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <style>
        body::-webkit-scrollbar, div::-webkit-scrollbar {
  width: 0px;
  max-height: 50px;
}
 
body::-webkit-scrollbar-track, div::-webkit-scrollbar-track {
  box-shadow: inset 0 0 3px rgba(0, 0, 0, 0.3);
}
 
body::-webkit-scrollbar-thumb, div::-webkit-scrollbar-thumb {
  background-color: #fff;
  outline: 1px solid #fff;
}
@media only screen and (max-width: 600px) {

.nav-columns td{
    width: 20%;
    transition: .5s;
    font-size:20px;
}

.label-size{
    font-size:14px;
}
}
    </style>
</head>

<body class="overflow-x-hidden">
    <div class="row overflow-x-hidden">
    <div id="main-section " class="col-md-4 col-lg-4 fixed overflow-y-auto h-full ">
    <section class="mt-0 mb-0 p-4 fixed z-10 bg-white dark:bg-green-800 top-header">
        <nav class="container p-3 mx-auto lg:flex lg:justify-between lg:items-center full">
            <div class="flex items-center justify-between">
                <div>
                    <img src="./images/logo/logo2.png" class="h-7" lt="">
                </div>
                </div>
                <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
        </nav>
    </section>

   

 <div class="position-relative  container contact-list-side flex-col mx-auto w-full items-center justify-center bg-white dark:bg-gray-800 rounded-lg ">

<div id="contactList"></div>

  
        </ul>
    </div>


   





    <footer class="bottom-nav shadow-teal-500 " style="width:100%">
        <div align="center">
            <table class="nav-columns">
                <tr class="nav-icon-container">
                    <td class="active td"><a href="main.php"><i class="fa fa-home"></i><label class="label-size">Home</label></a></td>
                    <td class="td"><a href="services.php"><i class="fa fa-bar-chart"></i><label class="label-size">Services</label> </a></td>
                    <td class="td"><a href="wallet.php"><i class="fa fa-credit-card"></i><label class="label-size">Wallet</label></a></td>
                    <td class="td"><a href="search.php"><i class="fa fa-users"></i><label class="label-size">contacts</label></a></td>
                    <td class="td"><a href="account-settings.php"><i class="fa fa-gears"></i><label class="label-size">Settings</label></a></td>
                </tr>
            </table>
        </div>
    </footer>

</div>




<div id="interaction" class="col-md-8 col-lg-8 overflow-x-hidden right-0 h-full fixed z-50 shadow-none">
  
    <div class="general-container bg-gray-100 h-screen flex justify-center shadow-none">


    <?php
    if (isset($_GET['interactwith']) && !empty($_GET['interactwith'])) {

    $_SESSION['interactwith']=base64_decode($_GET['interactwith']);

        include "config.php";
  
        
        $tfrom=$_SESSION['login_user'];
        // check if interactwith filde is fill
        if (isset($_SESSION['interactwith'])) {
            // check users details
        $interactwith=$_SESSION['interactwith'];
       
        $checkc=mysqli_query($conn, "SELECT * FROM users WHERE phone='$interactwith'");
        
        // get contact details
        
       
        while ($cc=mysqli_fetch_assoc($checkc)) {
            $cfullname=$cc['fullname'];
        
        
        }
        ?>
  
        

    

        <!-- Component Start -->
        <div id="" class="flex flex-col flex-grow h-full w-full bg-white shadow-xl rounded-lg overflow-hidden">
            <div class="chat-head w-full">
                <div class="flex justify-between items-center border-solid border-2 py-2 px-4 items-center">
                    <div class="flex justify-center items-center">
                        <a href="main.php"><button class="text-green-600 mr-4"><i
                                    class="fa fa-chevron-left"></i></button></a>
                        <div class="profile-photo-container w-10 h-10 border-1 rounded-full mr-2 overflow-hidden"><img
                                src="images/male-avatar.jpg" class="w-full" alt=""></div>
                        <div class="profile-name-last_seen flex flex-col">
                            <div class="w-full font-semibold">
                                <p>  <?php echo $cfullname; ?>
                                </p>
                            </div>
                            <div class="w-full text-xs">
                                <p>Online</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="text-lg"><i class="fa fa-gear"></i></div>
                    </div>
                </div>
            </div>










       
        
             

             
    







            <div id="chat-container" class="flex flex-col flex-grow h-0 p-4 overflow-auto">



                           
            <?php
                $email=$tfrom;
                
                $r= $_SESSION['interactwith'];
                
                $result = mysqli_query($conn, "SELECT * FROM transfers WHERE tto='$r' AND tfrom='$email' OR tfrom='$r' AND tto='$email' ORDER BY id ASC");
                
                
                if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                
                    $intwith=base64_decode($interactwith);
                
                if($email==$row['tfrom'] && $row["msg"]==""){ 
                $you ="

                <div class='flex w-full mt-2 space-x-3 max-w-xs ml-auto justify-end'>
                <div>
                    <div class='bg-green-600 text-white p-3 rounded-l-lg rounded-br-lg shadow-lg  '>
                        <p class='text-sm'> You transferred NGN ".number_format($row["tamt"])." to ".$cfullname."<br>".$row["dsc"]." 
                        </p>
                    </div>
                    <span class='text-xs text-gray-500 leading-none'>".date("d/m/Y h:i:s A")."</span>
                </div>
                <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
                        src='images/male-avatar.jpg'></div>
            </div>

               
                 " ;
                }elseif(!empty($row["msg"]) && $email==$row["tfrom"]){
                $you="
                <div class='flex w-full mt-2 space-x-3 max-w-xs ml-auto justify-end'>
                <div>
                    <div class='bg-green-600 text-white p-3 rounded-l-lg rounded-br-lg shadow-lg  '>
                        <p class='text-sm'>".$row["msg"]."
                        </p>
                    </div>
                    <span class='text-xs text-gray-500 leading-none'>".date("d/m/Y h:i:s A")."</span>
                </div>
                <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
                        src='images/male-avatar.jpg'></div>
            </div>
                
               ";
                }elseif(!empty($row["msg"]) && $email!==$row["tfrom"]){
                $you=" 

                <div class='flex w-full mt-2 space-x-3 max-w-xs'>
                <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
                        src='images/female-avatar.jpg'></div>
                <div>
                    <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
                        <p class='text-sm'> ".$row["msg"]."</p>
                    </div>
                    <span class='text-xs text-gray-500 leading-none'>".date("d/m/Y h:i:s A", $row["dt"])."</span>
                </div>
          
                
               ";
                
                }else{
                $you = "
                <div class='flex w-full mt-2 space-x-3 max-w-xs'>
                <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
                        src='images/female-avatar.jpg'></div>
                <div>
                    <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
                        <p class='text-sm'>  ".$cfullname. " transferred NGN ".number_format($row["tamt"])." to you.</p>
                    </div>
                    <span class='text-xs text-gray-500 leading-none'>".date("d/m/Y h:i:s A", $row["dt"])."</span>
                </div>
  ";
                }
                
                
                
                
                ?>
                
               
                
                <div>
                <h4><?php 
                echo $you;
                 ?>
                </h4>
                
                </div>
                <?php 
                } 
                
                }else{ ?>
                <text class="text-lg text-center">
                Send money or message to <?php
                echo $cfullname;
                ?>
               </text>
                <?php }
                
                
                
                
                }
                else{
                echo "User could not be found";
                }
                ?>
        


               
                
                
               
               
                
               
                

            </div>
            <form method="post" action="msgsend.php" id="smsg">

            <div class="bg-gray-100">
                <div class="flex justify-center items-center p-4 border-gray-300 border-t-2">

                <input type="hidden" value="<?php echo $tfrom;?>" name="tfrom" >
                            <input type="hidden" value="<?php echo $interactwith;?>" name="tto">
                        <div id="mresf"></div>

                    <input
                        class="chat-input flex items-center h-10 w-5/6 px-3 text-sm border-2 border-gray-300 rounded-2xl mx-1"
                        type="text" placeholder="Type your message…" name="msg">
                    <button id="send-money"
                        class="send-transaction border-1 border-green-300 rounded-full h-10 w-auto pr-2 pl-2  mx-1 text-white bg-green-600 transition visible"
                        type="button" data-modal-toggle="authentication-modal">Send&nbsp;Money</button>
                    <button id="send-chat"
                        class="send-transaction border-1 border-green-300 rounded-full h-10 w-10 mx-1 text-white bg-green-600 transition visually-hidden"><i
                            class="fa fa-paper-plane"></i></button>
                </div>
            </div>
            </form>
        </div>


<?php

    }
else{




?>
    <div class="h-screen w-full border-l-2">
        <div class="flex h-full flex-col justify-between items-center py-6">
            <div class="h-4/5 flex flex-col items-center justify-center w-4/5">
                <div class="flex w-full justify-center">
                    <img src="images/logo/logo1.png" alt="">
                </div>
                <div class="bg-gray-100">
                    <div class="text-xl flex justify-center w-full">
                        Send, recieve money and chat with family and friends on Maaji.<br>

                    </div>
                </div>
            </div>
            <div class=" flex justify-center w-full">
                <div class="flex justify-center items-center space-x-2">
                    <span data-testid="lock-small" data-icon="lock-small" class="">
                        <svg width="10" height="12" viewBox="0 0 10 12" class=""><path d="M5.008 1.6c1.375 0 2.501 1.074 2.586 2.427l.005.164v1.271h.158c.585 0 1.059.48 1.059 1.07v3.351c0 .59-.474 1.07-1.059 1.07h-5.5c-.582 0-1.057-.48-1.057-1.07V6.531c0-.59.474-1.069 1.058-1.069h.158V4.191c0-1.375 1.075-2.501 2.429-2.586l.163-.005Zm0 1.248c-.696 0-1.272.534-1.337 1.214l-.006.129-.002 1.271H6.35l.001-1.271c0-.653-.47-1.2-1.088-1.319l-.126-.018-.129-.006Z" fill="currentColor"></path></svg>
                    </span>
                    <span class="">End-to-end encrypted</span>
                </div>
            </div>

        </div>
    </div>
<?php






}
?>








        <div id="authentication-modal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">
            <div class="relative p-4 w-full max-w-md h-full md:h-auto">

                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <div class="flex justify-end p-2">
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                            data-modal-toggle="authentication-modal">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <form class="px-6 pb-4 space-y-6 lg:px-8 sm:pb-6 xl:pb-8 w-full" action="#">
                        <h3 class="text-xl font-medium text-gray-900 dark:text-dark">send money to family and friends
                        </h3>
                        <div>
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Amount</label>
                            <input type="tel" name="password" placeholder="NGN 1000"
                                class="amount flex bg-gray-50 text-center text-2xl items-center justify-center border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2 dark:bg-gray-50 dark:border-gray-500 dark:placeholder-gray-400 dark:text-dark"
                                required="">
                        </div>
                        <div>
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-600">Pass
                                code</label>
                            <div align="center">
                                <table class="nav-columns w-full">
                                    <tr class="nav-icon-container justify-between  p-0">
                                        <td class="p-2 pl-0">
                                            <input type="password" name="password" maxlength="1" id="pass1" placeholder="*"
                                                class="flex bg-gray-50 text-center text-3xl items-center justify-center border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-50 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                required="">
                                        </td>
                                        <td class="p-2">
                                            <input type="password" name="password" maxlength="1" id="pass2" placeholder="*"
                                                class="flex bg-gray-50 text-center text-3xl items-center justify-center border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-50 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                required="">
                                        </td>
                                        <td class="p-2">
                                            <input type="password" name="password" maxlength="1" id="pass3" placeholder="*"
                                                class="flex bg-gray-50 text-center text-3xl items-center justify-center border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-50 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                required="">
                                        </td>
                                        <td class="p-2">
                                            <input type="password" name="password" maxlength="1" id="pass4" placeholder="*"
                                                class="flex bg-gray-50 text-center text-3xl items-center justify-center border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-50 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                required="">
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <button id="send"
                            class="w-full text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
                            disabled>Send</button>

                    </form>
                </div>
            </div>
        </div>

    </div>
    </div>
    </div>
</div>
    <script>
    
    
    window.setTimeout(function() {
        //   window.location.reload();
        jQuery.ajax({
            url: "listContact.php",
            // data:'searchInput='+$("#searchInput").val(),
            type: "POST",
            success: function(data) {
                $("#contactList").html(data);
            },
            error: function() {}
        });
    }, 5000);

  var elem = document.getElementById('chat-container');
  elem.scrollTop = elem.scrollHeight;


        const chatInput = document.querySelector('.chat-input');
        const sendMoney = document.querySelector('#send-money');
        const sendChat = document.querySelector('#send-chat');
        chatInput.addEventListener('keyup', (e) => {

            if (e.currentTarget.value.length > 0) {
                sendChat.classList.remove('visually-hidden');
                sendChat.classList.add('visible');
                sendMoney.classList.remove('visible');
                sendMoney.classList.add('visually-hidden');
            }
            else {
                sendChat.classList.remove('visible');
                sendChat.classList.add('visually-hidden');
                sendMoney.classList.remove('visually-hidden');
                sendMoney.classList.add('visible');
            }
        });


        const passOne = document.querySelector('#pass1');
        const pass2 = document.querySelector('#pass2');
        const pass3 = document.querySelector('#pass3');
        const pass4 = document.querySelector('#pass4');
        const send = document.querySelector('#send');
        const amount = document.querySelector('.amount');
        passOne.addEventListener('keyup', (e) => {

            if (e.currentTarget.value.length > 0) {
                passOne.classList.remove('dark:bg-gray-50');
                passOne.classList.remove('bg-gray-50');
                passOne.classList.add('dark:bg-green-600');
                passOne.classList.add('bg-green-600');
                pass2.focus();
                send.disabled = true;

            }

        });
        pass2.addEventListener('keyup', (e) => {

            if (e.currentTarget.value.length > 0) {
                pass2.classList.remove('dark:bg-gray-50');
                pass2.classList.remove('bg-gray-50');
                pass2.classList.add('dark:bg-green-600');
                pass2.classList.add('bg-green-600');
                pass3.focus();
                send.disabled = true;

            }

        });
        pass3.addEventListener('keyup', (e) => {

            if (e.currentTarget.value.length > 0) {
                pass3.classList.remove('dark:bg-gray-50');
                pass3.classList.remove('bg-gray-50');
                pass3.classList.add('dark:bg-green-600');
                pass3.classList.add('bg-green-600');
                pass4.focus();
                send.disabled = true;

            }

        });
        pass4.addEventListener('keyup', (e) => {

            if (e.currentTarget.value.length > 0) {
                pass4.classList.remove('dark:bg-gray-50');
                pass4.classList.remove('bg-gray-50');
                pass4.classList.add('dark:bg-green-600');
                pass4.classList.add('bg-green-600');
                send.disabled = false;
                send.click();
            }

        });

        send.addEventListener('click', (e) => {
            if (amount.value.length <= 0) {
                amount.focus();
            } else {
                swal({
                    title: "Sent!",
                    text: "You have successfully send " + amount.value + " to Sooraj muhammad",
                    type: "success",
                    timer: 5000,
                    showConfirmButton: false

                    // }, function () {
                    //     window.reload();
                    // });

                });

            }
        });

        if (amount.value.length > 0 && passOne.value.length > 0 && pass2.value.length > 0 && pass3.value.length > 0 && pass4.value.length > 0) {
            send.disabled = false;
        }




    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="./js/custom.js"></script>
    <script src="./js/jquery.min.js"></script>
    <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>



</body>
</html>




<!--transfer/send message-->

<script type="text/javascript">
        function on() {
            document.getElementById("overlay").style.display = "block";
        }

        // This function is used to get error message for all ajax calls
        function getErrorMessage(jqXHR, exception) {
            var msg = '';
            if (jqXHR.status === 0) {
                msg = '<div class="alert alert-danger" role="alert">Internet connection lost!\n Please connect to internet and retry.</div>';
            } else if (jqXHR.status == 404) {
                msg = '<div class="alert alert-danger" role="alert">Requested page not found. [404]</div>';
            } else if (jqXHR.status == 500) {
                msg = '<div class="alert alert-danger" role="alert">Internal Server Error [500].</div>';
            } else if (exception === 'parsererror') {
                msg = '<div class="alert alert-danger" role="alert">Requested JSON parse failed.</div>';
            } else if (exception === 'timeout') {
                msg = '<div class="alert alert-danger" role="alert">Time out error.</div>';
            } else if (exception === 'abort') {
                msg = '<div class="alert alert-danger" role="alert">Ajax request aborted.</div>';
            } else {
                msg = '<div class="alert alert-danger" role="alert">Uncaught Error.</div>\n' + jqXHR.responseText;
            }

            ///
            $("#err").html(msg).fadeIn(); 
        }




var auto_refresh = setInterval(
function ()
{
$('#contactList').load('listContact.php');
scrollDown();
}, 2000);



        $(document).ready(function (e) {
            $("#smsg").on('submit',(function(e) {
                e.preventDefault();

                $.ajax({
                    url: "msgsend.php",
                    type: "POST",
                    data:  new FormData(this),
                    contentType: false,
                    cache: false,
                    processData:false,
                    beforeSend : function() {
                        $("#mresf").html("Sending message").fadeIn();
                    },
                    success: function(data) {
                        $("#mresf").html(data).fadeIn();
                        $("#smsg")[0].reset()
                         window.location.reload();
                      
                    },
                    error: function (jqXHR, exception) {
                        console.log(jqXHR);
                        getErrorMessage(jqXHR, exception);
                   
                        $("#mresf").html(data).fadeIn();
                    },
                });

            }));

        });
    


        $(document).ready(function (e) {
            $("#trsf").on('submit',(function(e) {
                e.preventDefault();

                $.ajax({
                    url: "transfer.php",
                    type: "POST",
                    data:  new FormData(this),
                    contentType: false,
                    cache: false,
                    processData:false,
                    beforeSend : function() {
                        $("#tresf").html("Transaction in progress...").fadeIn();
                    },
                    success: function(data) {
                        $("#tresf").html(data).fadeIn();
                        $("#overlay").css("display", "none");
                        $("#tnx").animate({ scrollTop: $("#tnx").prop('scrollHeight') }, "fast");
                    },
                    error: function (jqXHR, exception) {
                        console.log(jqXHR);
                        getErrorMessage(jqXHR, exception);
                  
                        $("#tresf").html(data).fadeIn();
                    },
                });

            }));

        });
    </script>