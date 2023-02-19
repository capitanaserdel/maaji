<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/logo/logo2.png" type="image/x-icon" />
    <title>Create Account | Maaji</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="js/tailwind.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/tailwind.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.3.4/dist/flowbite.min.css" />
    <script type="" src="./js/tailwind.js"></script>
    <style type="text/css">
         
         #overlay {
           position: fixed;
           display: none;
           width: 100%;
           height: 100%;
           top: 0;
           left: 0;
           right: 0;
           bottom: 0;
           background-color: rgb(0, 0, 0 , 90%);;
           z-index: 2;
           cursor: pointer;
           color:white;
         }
         
         .lds-ellipsis {
   display: inline-block;
   position: relative;
   width: 80px;
   height: 80px;
 }
 .lds-ellipsis div {
   position: absolute;
   top: 33px;
   width: 13px;
   height: 13px;
   border-radius: 50%;
   background: #fff;
   animation-timing-function: cubic-bezier(0, 1, 1, 0);
 }
 .lds-ellipsis div:nth-child(1) {
   left: 8px;
   animation: lds-ellipsis1 0.6s infinite;
 }
 .lds-ellipsis div:nth-child(2) {
   left: 8px;
   animation: lds-ellipsis2 0.6s infinite;
 }
 .lds-ellipsis div:nth-child(3) {
   left: 32px;
   animation: lds-ellipsis2 0.6s infinite;
 }
 .lds-ellipsis div:nth-child(4) {
   left: 56px;
   animation: lds-ellipsis3 0.6s infinite;
 }
 @keyframes lds-ellipsis1 {
   0% {
     transform: scale(0);
   }
   100% {
     transform: scale(1);
   }
 }
 @keyframes lds-ellipsis3 {
   0% {
     transform: scale(1);
   }
   100% {
     transform: scale(0);
   }
 }
 @keyframes lds-ellipsis2 {
   0% {
     transform: translate(0, 0);
   }
   100% {
     transform: translate(24px, 0);
   }
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
    width: 40%;
    margin-left:30%;
    margin-top: 15px;
}
.second-container2{
text-align: center;
width: 30%;
justify-content: center;
align-items: center;
display: block;
justify-content: space-evenly;

}
.single-top1{
    font-size: 27px;
    color: #303030;
    text-align: center;
    justify-content: space-evenly;
}
.ppp{
    font-size: 15px;
}
        @media only screen and (max-width: 600px) {
.single-top1{
    font-size: 27px;
    color: #303030;
}
.top-logo {
    width: 200px;
}
.top-logo-sec{
    margin-top: 100px;
    justify-content: center;
	align-items: center;
	display: flex;
    width: 100%;
    height: auto;
}
.width{
    width: 90%;
    margin-left:5%;
    margin-top: 15px;
}
}
 
 
 
 </style>
</head>
<body>
<div class="top-logo-sec">
    <img src="./images/logo/logo2.png"  class="top-logo" lt="">
</div>
<form method="POST" action="createacct.php" id="form">
    <div class="single-top1 ">
        <div>
            <input type="text" name="name" class="width bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-50 dark:border-gray-200 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Full Name" required="">
            <input type="password" maxlength="4" name="pwd" class="width bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-50 dark:border-gray-200 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Create Pin" required="">
            <input type="password" maxlength="4" name="cpwd" class="width bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-50 dark:border-gray-200 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Comfirm Pin" required="">
            <button type="submit" style="margin-top: 10px;" class=" apply-loan-btn focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Create Account</button> 
        </div>
    </div>
</form>



<div id="overlay">
        <div style="padding:20px; margin-top: 150px;">
          <center>
         <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
        
        </center>
        </div>
        </div>
        <div id="err" class="fixed-bottom btn text-center" ></div>

</body>
</html>



<script type="text/javascript">


    function on() {
      document.getElementById("overlay").style.display = "block";
    }
    
    
    // This function is used to get error message for all ajax calls
    function getErrorMessage(jqXHR, exception) {
        var msg = '';
        if (jqXHR.status === 0) {
            msg = '<div class="btn btn-danger" role="alert">Internet connection lost!\n Please connect to internet and retry.</div>';
        } else if (jqXHR.status == 404) {
            msg = '<div class="btn btn-danger" role="alert">Requested page not found. [404]</div>';
        } else if (jqXHR.status == 500) {
            msg = '<div class="btn btn-danger" role="alert">Internal Server Error [500].</div>';
        } else if (exception === 'parsererror') {
            msg = '<div class="btn btn-danger" role="alert">Requested JSON parse failed.</div>';
        } else if (exception === 'timeout') {
            msg = '<div class="btn btn-danger" role="alert">Time out error.</div>';
        } else if (exception === 'abort') {
            msg = '<div class="btn btn-danger" role="alert">Ajax request aborted.</div>';
        } else {
            msg = '<div class="btn btn-danger" role="alert">Uncaught Error.</div>\n' + jqXHR.responseText;
        }
        
        ///
         $("#err").html(msg).fadeIn(); 
    }
    
    
       $(document).ready(function (e) {
     $("#form").on('submit',(function(e) {
      e.preventDefault();
    
     $.ajax({
             url: "createacct.php",
       type: "POST",
       data:  new FormData(this),
       contentType: false,
             cache: false,
       processData:false,
       beforeSend : function()
       {
     
       on();
       },
       success: function(data)
          {
       $("#err").html(data).fadeIn();
         $("#overlay").css("display", "none");
          },
       error: function (jqXHR, exception) {
                console.log(jqXHR);
                getErrorMessage(jqXHR, exception);
                   $("#overlay").css("display", "none");
                  $("#err").html(data).fadeIn();
              
    
               
            },
    
    
    
    
     });
    
    }));
    
    });
    </script>