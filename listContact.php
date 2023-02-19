<?php

session_start();
include "config.php";
$owner = $_SESSION['login_user'];
$clist = "";


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



// get users order by lastest transaction
//     SELECT DISTINCT Category, MAX(CreationDate) 
// FROM MonitoringJob 
// GROUP BY Category  WHERE tfrom='$owner'
// ORDER BY MAX(CreationDate) DESC, Category



//     $search = "SELECT * from users ";
//     $result = mysqli_query($conn, $search);
//     $j=0;
//     while($row = mysqli_fetch_array($result)){
//         $user=$row['phone'];
//     $levels = array($user => 'true');
//     $j++;
// }




$getTr=mysqli_query($conn, "SELECT tfrom, tto, dt, msg, MAX(dt) 
 FROM transfers WHERE tto='$owner' OR tfrom='$owner'
  GROUP BY tfrom,tto  
   ORDER BY MAX(dt)  DESC , dt ");
// $getTr = mysqli_query($conn, "SELECT * from transfers WHERE tto='$owner' OR tfrom='$owner' ORDER BY id DESC");
while ($tto = mysqli_fetch_assoc($getTr)) {
    $otherPhone = $tto['tto'];
    
$getLatest = mysqli_query($conn, "SELECT * from transfers WHERE tto='$otherPhone' OR tfrom='$otherPhone' ORDER BY id DESC LIMIT 1");
$get = mysqli_fetch_assoc($getLatest);
$lastMsg = $get['msg'];
$date = $get['dt'];


    if ($otherPhone == $owner) {
        continue;
    // } elseif (in_array($checkId, $levels)) {
    //     echo $checkId;
    //     continue;

    } else {
        //get user contacts

        $owner = $_SESSION['login_user'];
        $getcs = mysqli_query($conn, "SELECT * FROM users WHERE phone='$otherPhone'");

        // getch the contacts
        while ($cs = mysqli_fetch_assoc($getcs)) {
            $cid = $cs['phone'];


            // get users fullname using his id
            $getcname = mysqli_query($conn, "SELECT * FROM users WHERE phone='$cid'");


            while ($cd = mysqli_fetch_assoc($getcname)) {
                $cname = $cd['fullname'];
                $cid = $cd['phone'];

                if ($cid == "+2347026662066") {
                    $dp = "ibrahim.jpg";
                } elseif ($cid == "+2348162224407") {
                    $dp = "prince.jpg";
                } elseif ($cid == "+2348101029771") {
                    $dp = "kene.jpg";
                } elseif ($cid == "+2348082905659") {
                    $dp = "suraj.jpg";
                } else {
                    $dp = "avatar.png";
                }
            }






            $clist .= " 


<ul class='flex flex-col divide divide-y '>
<a href='interact.php?interactwith=" . base64_encode($cid) . "'>
<li class='flex flex-row'>
<div class='select-none cursor-pointer flex flex-1 items-center p-4'>
    <div class='flex flex-col w-10 h-10 justify-center items-center mr-4'>
            <img alt='profil' src='./images/dps/" . $dp . "'
                class='mx-auto object-cover rounded-full h-15 w-15 ' />
    </div>
    <div class='flex-1 pl-1 mr-16'>
        <div class='absolute font-medium dark:text-black ' style='margin-top:-20px' >
            $cname
        </div>
        <div class='absolute text-gray-600 mt-1 dark:text-gray-700 text-sm'>
            ".$lastMsg."
        </div>
    </div>

    <div class='text-gray-600 dark:text-gray-700 text-xs mt-4'>
        " . get_timeago($date) . "
    </div>
</div>
</li>
</a>






                                    
                               
";
        }
    }
}

echo $clist;
