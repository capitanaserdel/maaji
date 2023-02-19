
<?php
session_start();
include "config.php";
$phone=$_SESSION['login_user'];
 
// if not logged in
if (!isset($_SESSION['login_user'])) {
     header("Location:index.php");
   }
else{
}
if (isset($_POST['submit'])){
    $oldpin=md5($_POST['oldpin']);
    $newpin=md5($_POST['newpin']);
    $cnewpin=md5($_POST['cnewpin']);
    
    if ($newpin != $cnewpin){
        echo '<script>alert("Your Pin Do Not Match")</script>';
    }else{
        $checkpin = $conn->query("SELECT * from users WHERE phone='$phone' AND pwd='$oldpin'");
    if ($checkpin->num_rows > 0) {
        $update = $conn->query("UPDATE users SET pwd='$newpin' WHERE phone='$phone'");
        if ($update === TRUE) {
            echo '<script>alert("You have successfully changed your pin")</script>';
        }else{
            echo '<script>alert("Something Went Wrong")</script>';
        }
    }else{
        echo '<script>alert("Old pin is incorrect")</script>';
    }
}
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/logo/logo2.png" type="image/x-icon"/>
    <title>Profile | Ma'aji</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/tailwind.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.3.4/dist/flowbite.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<style>
    .hide {
        display: none;
    }
    
    /* Tab content - closed */
    .tab-content {
        max-height: 0;
        -webkit-transition: max-height .35s;
        -o-transition: max-height .35s;
        transition: max-height .35s;
    }
    /* :checked - resize to full height */
    .tab input:checked ~ .tab-content {
        max-height: 100vh;
    }
    /* Label formatting when open */
    .tab input:checked + label{
        /*@apply text-xl p-5 border-l-2 border-indigo-500 bg-gray-100 text-indigo*/
        font-size: 1.25rem; /*.text-xl*/
        padding: 1.25rem; /*.p-5*/
        border-left-width: 2px; /*.border-l-2*/
        border-color: #16A34A; /*.border-green*/
        background-color: #f8fafc; /*.bg-gray-100 */
        color: #16A34A; /*.text-green*/
    }
    /* Icon */
    .tab label::after {
        float:right;
        right: 0;
        top: 0;
        display: block;
        width: 1.5em;
        height: 1.5em;
        line-height: 1.5;
        font-size: 1.25rem;
        text-align: center;
        -webkit-transition: all .35s;
        -o-transition: all .35s;
        transition: all .35s;
    }
    /* Icon formatting - closed */
    .tab input[type=checkbox] + label::after {
        content: "+";
        font-weight:bold; /*.font-bold*/
        border-width: 1px; /*.border*/
        border-radius: 9999px; /*.rounded-full */
        border-color: #b8c2cc; /*.border-grey*/
    }
    .tab input[type=radio] + label::after {
        content: "\25BE";
        font-weight:bold; /*.font-bold*/
        border-width: 1px; /*.border*/
        border-radius: 9999px; /*.rounded-full */
        border-color: #b8c2cc; /*.border-grey*/
    }
    /* Icon formatting - open */
    .tab input[type=checkbox]:checked + label::after {
        transform: rotate(315deg);
        background-color: #16A34A; /*.bg-green*/
        color: #f8fafc; /*.text-grey-lightest*/
    }
    .tab input[type=radio]:checked + label::after {
        transform: rotateX(180deg);
        background-color: #16A34A; /*.bg-green*/
        color: #f8fafc; /*.text-grey-lightest*/
    }
</style>

<body>

    <div class="bg-gray-100">
        <div class='flex justify-center space-x-2 w-full bg-white overflow-auto mx-auto h-screen'>
            <div class="flex justify-center min-w-sm w-full md:max-w-3xl lg:max-w-5xl border border-gray-100 bg-white hover:shadow-xl">
                <div class="w-full overflow-auto">
                    <header class="bg-green-600 px-4 py-2 text-green-100">
                        <div class="flex space-x-2 items-center">
                            <div class="flex">
                                <span><a href="main.php" class="hover:text-white"><i class="fa fa-arrow-left text-xl"></a></i></span>
                            </div>
                            <div class="flex">
                                <span><i class="fa fa-gear text-xl"></i></span>
                            </div>
                            <div class="flex text-lg md:2xl">
                                <div class="">Settings</div>
                            </div>
                        </div>
                    </header>
                    <div class="">
                        <div class="flex flex-col justify-center py-4">
                            <div class="flex justify-center">
                                <div class="font-semibold text-xl md:text-3xl ">Account Settings</div>
                            </div>
                            <div class="flex items-center justify-center py-4">
                                <div class="flex">
                                    <div class="">
                                        <div class="w-full md:w-4/5 mx-auto">
                                            <div class="shadow-md">
                                               <div class="border-green-500 tab w-full overflow-hidden">
                                                    <input class="absolute opacity-0 " id="tab-multi-one" type="checkbox" name="tabs">
                                                    <label class="block p-3 px-4 leading-normal cursor-pointer" for="tab-multi-one">Change Language</label>
                                                    <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-green-500 leading-normal">
                                                        <div class="flex py-2 px-4">
                                                            <form>
                                                                <div class="flex flex-col space-y-4">
                                                                    <div class="">
                                                                        <select title="Select Language">
                                                                            <option value="Select Language" disabled>Select Language</option>
                                                                            <option value="Select Language">English</option>
                                                                            <option value="Select Language">Hausa</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="">
                                                                        <button type='button' class="text-blue-600 bg-blue-100 border-2 border-blue-600 px-3 py-1">Change Language</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>



                                                
<?php
include "config.php";
 
// if not logged in
if (!isset($_SESSION['login_user'])) {
     header("Location:index.php");
   }
else{
}
if (isset($_POST['del'])){
    $pin=md5($_POST['pin']);
    $checkpin = $conn->query("SELECT * from users WHERE phone='$phone' AND pwd='$pin'");
    if ($checkpin->num_rows > 0){
    $del = $conn->query("DELETE from users WHERE phone='$phone' AND pwd='$pin'");
    if ($del === TRUE) {
        echo '<script>alert("You have Deleted Your Maaji Account ");
        window.location.href="logout.php";
        </script>';
    }else{
        echo '<script>alert("Network Unavailable, Try Again Later")</script>';   
    }
} else{
    echo '<script>alert("Incorrect Pin")</script>'; 
}
}
?>


                                                
                                                <div class="tab w-full overflow-hidden border-t">
                                                    <input class="absolute opacity-0 " id="tab-multi-two" type="checkbox" name="tabs">
                                                    <label class="block p-3 px-4 leading-normal cursor-pointer" for="tab-multi-two">Delete my account</label>
                                                    <div class="tab-content overflow-hidden border-l-2 bg-gray-100 leading-normal">
                                                        <div class="flex py-2 px-4">
                                                            <form action="account-settings.php" method="post">
                                                                <div class="delete-acct-btn-container flex flex-col md:flex-row space-x-4 md:items-center">





<!--Modal code start-->


<style>
    .disclaimer {
        display: none;
    }
    .modal {
      transition: opacity 0.25s ease;
    }
    body.modal-active {
      overflow-x: hidden;
      overflow-y: visible !important;
    }
  </style>


<div class="">
  
  <button class="modal-open bg-red-500 border border-gray-500 hover:border-red-600 text-gray-100 hover:text-red-700 font-bold py-2 px-4 rounded-lg">Delete Account</button>
  
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
          <p class="text-2xl font-bold text-red-500">DELETE ACCOUNT!!!</p>
          <div class="modal-close cursor-pointer z-50">
            <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
              <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
            </svg>
          </div>
        </div>

        <!--Body-->
        <label for="current-password" class="block mb-2 text-xl font-medium text-red-500 dark:text-red-500"><center>Are You Sure You Want to Delete Your Ma'aji Account!</center></label>
        <div class="">
            <label for="current-password" class="block mb-2 text-xl font-medium text-black-400 dark:text-black-400">Enter Your Pin</label>
            <input type="password" name="pin" id="current-password" maxlength="4" class="shadow-sm bg-white-50 border border-gray-300 text-black-400 text-xl rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-50 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black-400 dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
        </div>
        <!--Body-->

        <!--Footer-->
        <div class="flex justify-end pt-2">
          <button class="px-4 bg-transparent p-3 rounded-lg text-green-500 hover:bg-gray-100 hover:text-green-400 mr-2" type="submit" name="del">Yes</button>
          <button class="modal-close px-4 bg-green-500 p-3 rounded-lg text-white hover:bg-green-400">No</button>
        </div>
        <!--Footer-->
      </div>
    </div>
  </div>

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






                                                                    
                                                                </div>
                                                            </form> 
                                                        </div>
                                                    </div>
                                                </div>
                                               <div class="tab w-full overflow-hidden border-t">
                                                    <input class="absolute opacity-0 " id="tab-multi-three" type="checkbox" name="tabs">
                                                    <label class="block p-3 px-4 leading-normal cursor-pointer" for="tab-multi-three">Change Pin</label>
                                                    <div class="tab-content overflow-hidden border-l-2 bg-gray-100 leading-normal">
                                                        <div class="flex py-2 px-4">
                                                            <form action="account-settings.php" method="post">
                                                                <div class=" flex flex-col">
                                                                    <div class="mb-4">
                                                                        <div class="">
                                                                            <label for="current-password" class="block mb-2 text-xl font-medium text-black-400 dark:text-black-400">Old Pin</label>
                                                                            <input type="password" name="oldpin" id="current-password" maxlength="4" class="shadow-sm bg-white-50 border border-gray-300 text-black-400 text-xl rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-50 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black-400 dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
                                                                        </div>
                                                                        <div class="">
                                                                            <label for="new-password" class="block mb-2 text-xl font-medium text-black-400 dark:text-black-400">New Pin</label>
                                                                            <input type="password" name="newpin" id="new-password" maxlength="4" class="shadow-sm bg-white-50 border border-gray-300 text-black-400 text-xl rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-50 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black-400 dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
                                                                        </div>
                                                                        <div class="">
                                                                            <label for="confirm-password" class="block mb-2 text-xl font-medium text-black-400 dark:text-black-400">Confirm New Pin</label>
                                                                            <input type="password" name="cnewpin" id="confirm-password" maxlength="4" class="shadow-sm bg-white-50 border border-gray-300 text-black-400 text-xl rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-50 dark:border-gray-600 dark:placeholder-gray-400 dark:text-black-400 dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="">
                                                                        <button class="px-2 py-1 border-2 border-green-600 bg-green-100 text-green-600" type="submit" name="submit">Save changes</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                               <div class="tab w-full overflow-hidden border-t">
                                                    <input class="absolute opacity-0 " id="tab-multi-four" type="checkbox" name="tabs">
                                                    <label class="block p-3 px-4 leading-normal cursor-pointer" for="tab-multi-four">Block/Unblock Account</label>
                                                    <div class="tab-content overflow-hidden border-l-2 bg-gray-100 leading-normal">
                                                        <div class="flex py-2 px-4">
                                                            <span class="px-2 py-1 border-2 border-red-600 bg-red-100 text-red-600" type="button">Block Account</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab w-full overflow-hidden border-t">
                                                     <input class="absolute opacity-0 " id="tab-multi-five" type="checkbox" name="tabs">
                                                     <label class="block p-3 px-4 leading-normal cursor-pointer" for="tab-multi-five">Help Center</label>
                                                     <div class="tab-content overflow-hidden border-l-2 bg-gray-100 leading-normal">
                                                         <div class="flex py-2 px-4">
                                                            <div class="mb-6">
                                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. In delectus aperiam obcaecati sunt, suscipit quae. Quidem fugiat quae nihil fugit earum recusandae voluptate illo autem a quisquam, expedita, ullam ducimus.
                                                            </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                            </div>
                                            <br>
                                            <form action="logout.php" method="post">
                                            <div class="">
                                                <button class="px-2 py-1 border-2 border-red-600 bg-red-500 text-gray-100" type="submit" name="logout">Logout</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    </script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="js/tailwind.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/v4-shims.min.js" integrity="sha512-jV9c9TgJKs4VzfA+DtPAXJqOMs0gsEmfhKEgtT4TqE7SPjwXiDmtDKsh1FXIPX/gDFcckXaVB7xNKD+LIS5GmA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/solid.min.js" integrity="sha512-C92U8X5fKxCN7C6A/AttDsqXQiB7gxwvg/9JCxcqR6KV+F0nvMBwL4wuQc+PwCfQGfazIe7Cm5g0VaHaoZ/BOQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/regular.min.js" integrity="sha512-eH31QC2/CLTAQpugtCMQh/w68mbefCbaDTsSbmqOk86RICy523PnuNMaFfQ5cAkwwJ1dsnn7OUt8bfkF24zprg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        /* Optional Javascript to close the radio button version by clicking it again */
        var myRadios = document.getElementsByName('tabs2');
        var setCheck;
        var x = 0;
        for(x = 0; x < myRadios.length; x++){
            myRadios[x].onclick = function(){
                if(setCheck != this){
                    setCheck = this;
                }else{
                    this.checked = false;
                    setCheck = null;
            }
            };
        }

        const deleteAcctBtn = document.querySelector('.delete-acct-btn');
        const deleteAcctBtnContainer = document.querySelector('.delete-acct-btn-container');
        const confirmDeletion = document.querySelector('.confirm-deletion');

        deleteAcctBtn.addEventListener('click', (e) => {
            e.preventDefault();
            confirmDeletion.innerHTML = `
                                        <div class="flex flex-col md:flex-row space-x-3">
                                            <div class="mb-2">Are you sure you want to delete your Ma'aji account?</div>
                                            <div class="">
                                                <div class="flex space-x-3">
                                                    <div class=""><button type="button" class="bg-gray-100 text-red-600 border-1 border-red-600 px-2 py-1 delete-status-btn yes-delete">Yes</button></div>
                                                    <div class=""><button type="button" class="bg-gray-100 text-green-600 border-1 border-green-600 px-2 py-1 delete-status-btn cancel-delete">Cancel</button></div>
                                                </div>
                                            </div>
                                        </div>
                                        `
            deleteStatus();
        })

        function deleteStatus () {
            const deleteStatusBtns = document.querySelectorAll('.delete-status-btn');
            deleteStatusBtns.forEach(deleteStatusBtn => {
                deleteStatusBtn.addEventListener('click', (e) => {
                    if (e.currentTarget.classList.contains('yes-delete'));
                    if (e.currentTarget.classList.contains('cancel-delete'));
                    confirmDeletion.innerHTML = '';
                })
            });
        }
   </script>

</body>
</html>




