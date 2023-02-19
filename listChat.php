<?php

session_start();
include "config.php";
$owner = $_SESSION['login_user'];
$you = "";


function get_timeago($ptime)
{
    $estimate_time = time() - $ptime;

    if ($estimate_time <= 60) {
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

    foreach ($condition as $secs => $str) {
        $d = $estimate_time / $secs;

        if ($d >= 1) {
            $r = round($d);
            return  $r . ' ' . $str . ($r > 1 ? 's' : '') . ' ago';
        }
    }
}




include "config.php";


$tfrom = $_SESSION['login_user'];
// check if interactwith filde is fill
if (isset($_SESSION['interactwith'])) {
    // check users details
    $interactwith = $_SESSION['interactwith'];

    $checkc = mysqli_query($conn, "SELECT * FROM users WHERE phone='$interactwith'");

    // get contact details


    while ($cc = mysqli_fetch_assoc($checkc)) {
        $cfullname = $cc['fullname'];
    }


    $email = $owner;

    $r = $_SESSION['interactwith'];

    $result = mysqli_query($conn, "SELECT * FROM transfers WHERE tto='$r' AND tfrom='$email' OR tfrom='$r' AND tto='$email' ORDER BY id ASC");


    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {
            $dt = $row['dt'];
            $timeago = get_timeago($dt);
            $intwith = base64_decode($interactwith);

            if ($email == $row['tfrom'] && $row["msg"] == "") {
                $you = "

                <div class='flex w-full mt-2 space-x-3 max-w-xs ml-auto justify-end'>
                <div>
                    <div class='bg-green-600 text-white p-3 rounded-l-lg rounded-br-lg shadow-lg  '>
                        <p class='text-sm'> You transferred NGN " . number_format($row["tamt"]) . " to " . $cfullname . "<br>" . $row["dsc"] . " 
                        </p>
                    </div>
                    <span class='text-xs text-gray-500 leading-none'>" . $timeago . "</span>
                </div>
                <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
                        src='images/male-avatar.jpg'></div>
            </div>

               
                 ";
            } elseif (!empty($row["msg"]) && $email == $row["tfrom"]) {
                $you .= "
                <div class='flex w-full mt-2 space-x-3 max-w-xs ml-auto justify-end'>
                <div>
                    <div class='bg-green-600 text-white p-3 rounded-l-lg rounded-br-lg shadow-lg  '>
                        <p class='text-sm'>" . $row["msg"] . "
                        </p>
                    </div>
                    <span class='text-xs text-gray-500 leading-none'>" . $timeago . "</span>
                </div>
                <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
                        src='images/male-avatar.jpg'></div>
            </div>
                
               ";
            } elseif (!empty($row["msg"]) && $email !== $row["tfrom"]) {
                $you .= " 

                <div class='flex w-full mt-2 space-x-3 max-w-xs'>
                <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
                        src='images/female-avatar.jpg'></div>
                <div>
                    <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
                        <p class='text-sm'> " . $row["msg"] . "</p>
                    </div>
                    <span class='text-xs text-gray-500 leading-none'>" . $timeago . "</span>
                </div>
          
                
               ";
            } else {
                $you .= "
                <div class='flex w-full mt-2 space-x-3 max-w-xs'>
                <div class='flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 overflow-hidden'><img
                        src='images/female-avatar.jpg'></div>
                <div>
                    <div class='bg-gray-100 p-3 rounded-r-lg rounded-bl-lg shadow-lg'>
                        <p class='text-sm'>  " . $cfullname . " transferred NGN " . number_format($row["tamt"]) . " to you.</p>
                    </div>
                    <span class='text-xs text-gray-500 leading-none'>" . $timeago . "</span>
                </div>
  ";
            }




?>



            <div>
                <h4><?php
                    $you .= "<script>scrollDown()</script>";
                    echo $you;
                    $you = "";
                    ?>
                </h4>
            </div>
        <?php
        }
    } else {
        ?>
        <text class="text-lg text-center">
            Send money or message to <?php
                                        echo $cfullname;
                                        ?>
        </text>
<?php }
}

?>