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
    <div id="main-section " class="col-md-3 col-lg-3 fixed overflow-y-auto h-full w-full ">
    <section class="fiexd  mt-0 mb-0 p-4 fixed z-10 bg-white dark:bg-green-800 top-header w-full">
<form action="" id="searchform">
        <div class=" absolute w-full">
    <input type="search" id="searchInput" class="left-0 rounded-lg border-transparent flex-1 appearance-none border border-gray-300 w-full py-2 px-4 bg-white text-gray-700 placeholder-gray-400 shadow-sm text-base focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent" name="searchInput" placeholder="Search Number or Name"/>
    </div>
    </form>
    </section>












 <div class="position-relative  container contact-list-side flex-col mx-auto w-full w-full items-center justify-center bg-white dark:bg-gray-800 rounded-lg ">
       
 <div id="mresf"></div>
      

            
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

    <script>



        
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



       const search = document.querySelector("#searchInput");

       search.addEventListener('keyup', (e) => {
	$("#loaderIcon").show();
jQuery.ajax({
url: "getContact.php",
data:'searchInput='+$("#searchInput").val(),
type: "POST",
success:function(data){
$("#mresf").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
    });
        

    
    </script>