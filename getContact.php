<?php
session_start();
include "config.php";
$owner=$_SESSION['login_user'];
$clist = "";
if ($_SERVER['REQUEST_METHOD']==="POST" ) {
    // if(!empty($_POST['searchInput'])){
   $contact=$_POST['searchInput'];

   $getcs=mysqli_query($conn, "SELECT * FROM users WHERE phone like '$contact%' or phone like '%$contact%' OR phone like '%$contact' AND phone!='$owner' ORDER BY fullname ASC");
   $count = mysqli_num_rows($getcs);
   if ($count > 0) {
    // getch the contacts
while ($cs=mysqli_fetch_assoc($getcs)) {
$cid=$cs['phone'];


// get users fullname using his id
$getcname=mysqli_query($conn, "SELECT * FROM users WHERE phone='$cid'");


while ($cd=mysqli_fetch_assoc($getcname)) {
$cname=$cd['fullname'];
$cid=$cd['phone'];

if ($cid=="+2347026662066") {
    $dp="ibrahim.jpg";
    
   }
   elseif ($cid=="+2348162224407") {
       $dp="prince.jpg";
   
     
   }
   elseif ($cid=="+2348101029771") {
       $dp="kene.jpg";
  
     
   }
   
   
   
   
   elseif ($cid=="+2348082905659") {
       $dp="suraj.jpg";
   
     
   }
   else {
       $dp="avatar.png";

   }
   }
   



$clist.=" 
 
    
<ul class='flex flex-col divide divide-y '>
<a href='interact.php?interactwith=".base64_encode($cid)."'>
    <li class='flex flex-row'>
    <div class='select-none cursor-pointer flex flex-1 items-center p-4'>
        <div class='flex flex-col w-10 h-10 justify-center items-center mr-4'>
                <img alt='profil' src='./images/dps/".$dp."'
                    class='mx-auto object-cover rounded-full h-15 w-15 ' />
        </div>
        <div class='flex-1 pl-1 mr-16'>
            <div class='font-medium dark:text-black'>
                $cname
            </div>
            <div class='text-gray-600 dark:text-gray-700 text-sm'>
                ".$cid."
            </div>
        </div>

    </div>
</li>
</a>






                                        
                                   
";
}


}else{

    $getWithName=mysqli_query($conn, "SELECT * FROM users WHERE fullname like '$contact%' or fullname like '%$contact%' OR fullname like '%$contact' AND phone!='$owner' ");
    $count2 = mysqli_num_rows($getWithName);
    if ($count2 > 0) {
     // getch the contacts
 while ($cs=mysqli_fetch_assoc($getWithName)) {
 $cid=$cs['phone'];
 
 
 // get users fullname using his id
 $getcname=mysqli_query($conn, "SELECT * FROM users WHERE phone='$cid'");
 
 
 while ($cd=mysqli_fetch_assoc($getcname)) {
 $cname=$cd['fullname'];
 $cid=$cd['phone'];
 
 if ($cid=="+2347026662066") {
     $dp="ibrahim.jpg";
     
    }
    elseif ($cid=="+2348162224407") {
        $dp="prince.jpg";
    
      
    }
    elseif ($cid=="+2348101029771") {
        $dp="kene.jpg";
   
      
    }
    
    
    
    
    elseif ($cid=="+2348082905659") {
        $dp="suraj.jpg";
    
      
    }
    else {
        $dp="avatar.png";
 
    }
    }
    
 
 
 

$clist.=" 
 
    
<ul class='flex flex-col divide divide-y '>
<a href='interact.php?interactwith=".base64_encode($cid)."'>
    <li class='flex flex-row'>
    <div class='select-none cursor-pointer flex flex-1 items-center p-4'>
        <div class='flex flex-col w-10 h-10 justify-center items-center mr-4'>
                <img alt='profil' src='./images/dps/".$dp."'
                    class='mx-auto object-cover rounded-full h-15 w-15 ' />
        </div>
        <div class='flex-1 pl-1 mr-16'>
            <div class='font-medium dark:text-black'>
                $cname
            </div>
            <div class='text-gray-600 dark:text-gray-700 text-sm'>
                ".$cid."
            </div>
        </div>

    </div>
</li>
</a>






                                        
                                   
";

 }

}


else{
    $clist = "Result not found for ".$contact;

}


}
echo $clist;

}
