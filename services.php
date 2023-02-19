<?php
session_start();
if (!isset($_SESSION['login_user'])) {
   header("location:index.php");
}


$owner=$_SESSION['login_user'];

include "config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/logo/logo2.png" type="image/x-icon" />
    <title>Ma'aji Services</title>
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
    </style>
</head>

<body class="overflow-x-hidden">
    <div class="overflow-x-hidden">
    




<div class="w-full overflow-x-hidden right-0 h-full fixed z-50 shadow-none">
  
    <div class="general-container bg-gray-100 h-screen flex justify-center shadow-none">


   
    
        

    

        <!-- Component Start -->
        <div id="" class="flex flex-col top-0 fixed flex-grow h-full w-full bg-white shadow-xl rounded-lg overflow-hidden">
            <div class="chat-head w-full">
                <div class="flex justify-between items-center border-solid border-2 py-2 px-4 items-center">
                    <div class="flex justify-center items-center">
                        <a href="main.php"><button class="text-green-600 mr-4"><i
                                    class="fa fa-chevron-left"></i></button></a>
                        <div class="profile-photo-container w-10 h-10 border-1 rounded-full mr-2 overflow-hidden"><img
                                src="images/logo/logo1.png" class="w-full" alt=""></div>
                        <div class="profile-name-last_seen flex flex-col">
                            <div class="w-full font-semibold">
                                <p>  Maaji Services
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


            <div class='flex w-full mt-2 space-x-3 max-w-xs'>
                <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
                        src='images/logo/logo1.png'></div>
                <div>
                    <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
                    <p class='text-sm'> Hello <?php 
                      $userid=$_SESSION['login_user'];

                      $sql = "SELECT * FROM users WHERE phone ='$userid'";
                      $result = mysqli_query($conn,$sql);
                      while($userid=mysqli_fetch_assoc($result)){
                  
                      $fullname=$userid['fullname'];
                    echo $fullname;
                    }
                    ?>, welcome to Maaji Services.
                            <br>
                            1. Loan
                            <br>
                            2. Insurance
                            <br>
                            3. Investment
                        </p>
                    </div>
                    <span class='text-xs text-gray-500 leading-none'></span>
                </div>
            </div>

         

            <div id="mresf"></div>       
                

            </div>
            <form method="post" action="maajiservices.php" id="smsg">

            <div class="bg-gray-100">
                <div class="flex justify-center items-center p-4 border-gray-300 border-t-2">

                     
                      

                    <input
                        class="chat-input flex items-center h-10 w-5/6 px-3 text-sm border-2 border-gray-300 rounded-2xl mx-1"
                        type="text" placeholder="Type your reply..." name="msg" id="msg">
                   
                    <button id="send-chat"
                        class="send-transaction border-1 border-green-300 rounded-full h-10 w-10 mx-1 text-white bg-green-600 transition visually-hidden"><i
                            class="fa fa-paper-plane"></i></button>
                            <button disabled id="voiceNote"
                        class="border-1 border-green-300 rounded-full h-10 w-10 mx-1 text-white bg-green-600 transition "><i
                            class="fa fa-microphone"></i></button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>


    









        
    <script>
    function scrollDown(){        
  var elem = document.getElementById('chat-container');
  elem.scrollTop = elem.scrollHeight;
    }

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





        $(document).ready(function (e) {
            $("#smsg").on('submit',(function(e) {
                e.preventDefault();

                $.ajax({
                    url: "maajiservices.php",
                    type: "POST",
                    data:  new FormData(this),
                    contentType: false,
                    cache: false,
                    processData:false,
                    beforeSend : function() {
                       
                    },
                    success: function(data) {
                        $("#mresf").append("<div class='flex w-full mt-2 space-x-3 max-w-xs ml-auto justify-end'><div><div class='bg-green-600 text-white p-3 rounded-l-lg rounded-br-lg shadow-lg  '><p class='text-sm'> " + $("#msg").val() + "</p></div><span class='text-xs text-gray-500 leading-none'></span></div><div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img src='images/male-avatar.jpg'></div></div>").fadeIn();


                        $("#mresf").append(data).fadeIn();
                        $("#smsg")[0].reset()
                        
                      
                    },
                    error: function (jqXHR, exception) {
                        console.log(jqXHR);
                        getErrorMessage(jqXHR, exception);
                   
                        $("#mresf").append(data).fadeIn();
                    },
                });

            }));

        });
    
</script>
