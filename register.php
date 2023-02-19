<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/logo/logo2.png" type="image/x-icon" />
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="js/tailwind.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/tailwind.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.3.4/dist/flowbite.min.css" />
    <script type="" src="./js/tailwind.js"></script>
 <style>
.top-logo{
    justify-content: center;
	align-items: center;
	display: flex;
    width: 300px;
}
.disclaimer{
    display: none;
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
    margin-top: 15px;
    margin-bottom: 15px;
    width: 40%;
    margin-left:30%;
    display: flex;
}
.third2{
    padding-left: 50px;
    padding-right: 370px ;
    font-size: 13px;
    margin-bottom: 20px;
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
.mrg{
    margin-top: 1.5%;
}
        @media only screen and (max-width: 600px) {
.mrg{
    margin-top: 5%;
}
.ppp{
    font-size: 15px;
}
.second-container2{
    width: 90%;
}
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
}
.cent{
    justify-content: center;
    align-items: center;
    display: block;
}
}
    </style>
</head>
<body>
<div class="top-logo-sec">
    <img src="./images/logo/logo2.png"  class="top-logo" lt="">
</div>
<div class="mrg">

</div>
<form method="POST" action="otp.php">
    <div class="single-top1 ">
        <p class="ppp">Enter Your Phone Number</p>
        <div>
            <input type="tel" class="width bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-50 dark:border-gray-200 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" name="phone" value="+234" required="" minlength="14">
            <button type="submit" class=" apply-loan-btn focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"> Next</button> 
        </div>
    </div>
</form>
</body>
</html>