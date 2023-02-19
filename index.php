<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/logo/logo2.png" type="image/x-icon" />
    <title>Ma'aji</title>
    <style>
        
body{
  min-height: 100vh;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;

}
.disclaimer{
    display: none;
}


.center-logo{
    width: 450px;
    transition: .4s;
}
.logoName{
    position: absolute;
    bottom: 0;
    margin-bottom: 70px;
}



@media only screen and (max-width: 600px) {
  .center-logo {
    width: 200px;
}
.logoName{
    width: 150px;
    position: absolute;
    bottom: 0;
    margin-bottom: 50px;
}
}
    </style>
</head>
<body>
    <img src="images/logo/logo1.png" class="center-logo" alt="">
    <script>
        setTimeout(function(){
           window.location.href = 'home.php';
        }, 2000);
     </script>
</body>
</html>