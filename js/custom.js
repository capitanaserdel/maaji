$(document).ready(function () {
  $(window).scroll(function () {

    // check if scroll event happened
    if ($(document).scrollTop() == 0) {
      console.log("top");
      $(".banner").css("transform", "scale(1.8)"); // if not, reduce the scale by 0.02
      $(".banner").css("margin-top", "0px");
      $(".docks").css("transform", "translate(1000px, -817px)");
      $(".profile").css("transform", "translate(3400px, 603px)");
      $(".records").css("transform", "translate(-3000px, -303px)");
      $(".tab3").css("transform", "translate(-2500px, -4875px)");
    } else if ($(document).scrollTop() < 5) { // check if user scrolled more than 50 from top of the browser window
      // console.log('200');
      $(".banner").css("transform", "scale(1.78)");
      $(".banner").css("margin-top", "250px");
      $(".docks").css("transform", "translate(975px, -767)");
      $(".profile").css("transform", "translate(3300px, 593px)");
      $(".records").css("transform", "translate(-2900px, -293px)");
      $(".tab3").css("transform", "translate(-2450px, -4750px)");
    } else if ($(document).scrollTop() < 5) {
      $(".banner").css("transform", "scale(1.76)"); // if not, reduce the scale by 0.02
      $(".banner").css("margin-top", "250px");
      $(".docks").css("transform", "translate(950px, -717px)");
      $(".profile").css("transform", "translate(3200px, 583px)");
      $(".records").css("transform", "translate(-2800px, -283px)");
      $(".tab3").css("transform", "translate(-2400px, -4625px)");
    } else if ($(document).scrollTop() < 10) {
      $(".banner").css("transform", "scale(1.68)"); // if not, reduce the scale by 0.02
      $(".banner").css("margin-top", "250px");
      $(".docks").css("transform", "translate(925px, -667px)");
      $(".profile").css("transform", "translate(3100px, 573px)");
      $(".records").css("transform", "translate(-2700px, -273px)");
      $(".tab3").css("transform", "translate(-2350px, -4500px)");
    } else if ($(document).scrollTop() < 15) {
      $(".banner").css("transform", "scale(2.74)"); // if not, reduce the scale by 0.02
      $(".banner").css("margin-top", "250px");
      $(".docks").css("transform", "translate(900px, -617px)");
      $(".profile").css("transform", "translate(3000px, 563px)");
      $(".records").css("transform", "translate(-2600px, -263px)");
      $(".tab3").css("transform", "translate(-2300px, -4375px)");
    } else if ($(document).scrollTop() < 20) {
      $(".banner").css("transform", "scale(1.72)"); // if not, reduce the scale by 0.02
      $(".banner").css("margin-top", "250px");
      $(".docks").css("transform", "translate(875px, -567px)");
      $(".profile").css("transform", "translate(2900px, 553px)");
      $(".records").css("transform", "translate(-2500px, -253px)");
      $(".tab3").css("transform", "translate(-2250px, -4250px)");
    } else if ($(document).scrollTop() < 25) {
      $(".banner").css("transform", "scale(1.70)"); // if not, reduce the scale by 0.02
      $(".banner").css("margin-top", "250px");
      $(".docks").css("transform", "translate(850px, -517px)");
      $(".profile").css("transform", "translate(2800px, 543px)");
      $(".records").css("transform", "translate(-2400px, -243px)");
      $(".tab3").css("transform", "translate(-2200px, -4125px)");
    } else if ($(document).scrollTop() < 30) {
      $(".banner").css("transform", "scale(1.68)"); // if not, reduce the scale by 0.02
      $(".banner").css("margin-top", "250px");
      $(".docks").css("transform", "translate(825px, -467px)");
      $(".profile").css("transform", "translate(2700px, 533px)");
      $(".records").css("transform", "translate(-2300px, -233px)");
      $(".tab3").css("transform", "translate(-2500px, -4000px)");
    } else if ($(document).scrollTop() < 35) {
      $(".banner").css("transform", "scale(1.66)"); // if not, reduce the scale by 0.02
      $(".banner").css("margin-top", "250px");
      $(".docks").css("transform", "translate(800px, -417px)");
      $(".profile").css("transform", "translate(2600px, 523px)");
      $(".records").css("transform", "translate(-2200px, -223px)");
      $(".tab3").css("transform", "translate(-2150px, -3875px)");
    } else if ($(document).scrollTop() < 40) {
      $(".banner").css("transform", "scale(1.64)"); // if not, reduce the scale by 0.02
      $(".banner").css("margin-top", "250px");
      $(".docks").css("transform", "translate(775px, -367px)");
      $(".profile").css("transform", "translate(2500px, 513px)");
      $(".records").css("transform", "translate(-2100px, -213px)");
      $(".tab3").css("transform", "translate(-2100px, -3750px)");
    } else if ($(document).scrollTop() < 45) {
      $(".banner").css("transform", "scale(1.62)"); // if not, reduce the scale by 0.02
      $(".banner").css("margin-top", "250px");
      $(".docks").css("transform", "translate(750px, -317px)");
      $(".profile").css("transform", "translate(2400px, 503px)");
      $(".records").css("transform", "translate(-2000px, -203px)");
      $(".tab3").css("transform", "translate(-2050px, -3625px)");
    } else if ($(document).scrollTop() < 50) {
      $(".banner").css("transform", "scale(1.60)"); // if not, reduce the scale by 0.02
      $(".banner").css("margin-top", "250px");
      $(".docks").css("transform", "translate(725px, -267px)");
      $(".profile").css("transform", "translate(2300px, 493px)");
      $(".records").css("transform", "translate(-1900px, -193px)");
      $(".tab3").css("transform", "translate(-2000px, -3500px)");
    } else if ($(document).scrollTop() < 55) {
      $(".banner").css("transform", "scale(1.58)"); // if not, reduce the scale by 0.02
      $(".banner").css("margin-top", "250px");
      $(".docks").css("transform", "translate(700px, -217px)");
      $(".profile").css("transform", "translate(2200px, 483px)");
      $(".records").css("transform", "translate(-1800px, -183px)");
      $(".tab3").css("transform", "translate(-1950px, -3375px)");
    } else if ($(document).scrollTop() < 60) {
      $(".banner").css("transform", "scale(1.56)"); // if not, reduce the scale by 0.02
      $(".banner").css("margin-top", "250px");
      $(".docks").css("transform", "translate(675px, -167px)");
      $(".profile").css("transform", "translate(2100px, 473px)");
      $(".records").css("transform", "translate(-1700px, -173px)");
      $(".tab3").css("transform", "translate(-1900px, -3250px)");
    } else if ($(document).scrollTop() < 65) {
      $(".banner").css("transform", "scale(1.54)"); // if not, reduce the scale by 0.02
      $(".banner").css("margin-top", "250px");
      $(".docks").css("transform", "translate(650px, -117px)");
      $(".profile").css("transform", "translate(2000px, 463px)");
      $(".records").css("transform", "translate(-1600px, -163px)");
      $(".tab3").css("transform", "translate(-1850px, -3125px)");
    } else if ($(document).scrollTop() < 70) {
      $(".banner").css("transform", "scale(1.52)"); // if not, reduce the scale by 0.02
      $(".banner").css("margin-top", "250px");
      $(".docks").css("transform", "translate(625px, -67px)");
      $(".profile").css("transform", "translate(1900px, 453px)");
      $(".records").css("transform", "translate(-1500px, -153px)");
      $(".tab3").css("transform", "translate(-1800px, -3000px)");
    } else if ($(document).scrollTop() < 75) {
      $(".banner").css("transform", "scale(1.50)"); // if not, reduce the scale by 0.02
      $(".banner").css("margin-top", "250px");
      $(".docks").css("transform", "translate(600px, -17px)");
      $(".profile").css("transform", "translate(1800px, 443px)");
      $(".records").css("transform", "translate(-1400px, -143px)")
      $(".tab3").css("transform", "translate(-1750px, -2875px)");
    } else if ($(document).scrollTop() < 80) {
      $(".banner").css("transform", "scale(1.48)"); // if not, reduce the scale by 0.02
      $(".banner").css("margin-top", "250px");
      $(".docks").css("transform", "translate(575px, 33px)");
      $(".profile").css("transform", "translate(1700px, 433px) scale(0.88)");
      $(".records").css("transform", "translate(-1300px, -133px)  scale(0.88)");
      $(".tab3").css("transform", "translate(-1700px, -2750px)  scale(0.88)");
    } else if ($(document).scrollTop() < 85) {
      $(".banner").css("transform", "scale(1.46)"); // if not, reduce the scale by 0.02
      $(".banner").css("margin-top", "250px");
      $(".docks").css("transform", "translate(550px, 83px)");
      $(".profile").css("transform", "translate(1600px, 423px) scale(0.86)");
      $(".records").css("transform", "translate(-1200px, -123px)  scale(0.86)");
      $(".tab3").css("transform", "translate(-1650px, -2625px)  scale(0.86)");
    } else if ($(document).scrollTop() < 90) {
      $(".banner").css("transform", "scale(1.44)"); // if not, reduce the scale by 0.02
      $(".banner").css("margin-top", "250px");
      $(".docks").css("transform", "translate(525px, 133px)");
      $(".profile").css("transform", "translate(1500px, 413px) scale(0.84)");
      $(".records").css("transform", "translate(-1100px, -113px)  scale(0.84)");
      $(".tab3").css("transform", "translate(-1600px, -2500px)  scale(0.84)");
    } else if ($(document).scrollTop() < 95) {
      $(".banner").css("transform", "scale(1.42)"); // if not, reduce the scale by 0.02
      $(".banner").css("margin-top", "250px");
      $(".docks").css("transform", "translate(500px, 183px)");
      $(".profile").css("transform", "translate(1400px, 403px) scale(0.82)");
      $(".records").css("transform", "translate(-1000px, -103px)  scale(0.82)");
      $(".tab3").css("transform", "translate(-1550px, -2375px)  scale(0.82)");
    } else if ($(document).scrollTop() < 100) {
      $(".banner").css("transform", "scale(1.40)"); // if not, reduce the scale by 0.02
      $(".banner").css("margin-top", "250px");
      $(".docks").css("transform", "translate(475px, 233px)");
      $(".profile").css("transform", "translate(1300px, 393px) scale(0.80)");
      $(".records").css("transform", "translate(-900px, -93px)  scale(0.80)");
      $(".tab3").css("transform", "translate(-2500px, -2250px)  scale(0.80)");
    } else if ($(document).scrollTop() < 105) {
      $(".banner").css("transform", "scale(1.38)"); // if not, reduce the scale by 0.02
      $(".banner").css("margin-top", "250px");
      $(".docks").css("transform", "translate(450px, 283px)");
      $(".profile").css("transform", "translate(1200px, 383px) scale(0.78)");
      $(".records").css("transform", "translate(-800px, -83px)  scale(0.78)");
      $(".tab3").css("transform", "translate(-1500px, -2125px)  scale(0.78)");
    } else if ($(document).scrollTop() < 110) {
      $(".banner").css("transform", "scale(1.36)"); // if not, reduce the scale by 0.02
      $(".banner").css("margin-top", "250px");
      $(".docks").css("transform", "translate(425px, 333px)");
      $(".profile").css("transform", "translate(1100px, 373px) scale(0.76)");
      $(".records").css("transform", "translate(-700px, -73px)  scale(0.76)");
      $(".tab3").css("transform", "translate(-1450px, -2000px)  scale(0.76)");
    } else if ($(document).scrollTop() < 115) {
      $(".banner").css("transform", "scale(1.34)"); // if not, reduce the scale by 0.02
      $(".banner").css("margin-top", "250px");
      $(".docks").css("transform", "translate(400px, 383px)");
      $(".profile").css("transform", "translate(1000px, 363px) scale(0.74)");
      $(".records").css("transform", "translate(-600px, -63px)  scale(0.74)");
      $(".tab3").css("transform", "translate(-1400px, -1875px)  scale(0.74)");
    } else if ($(document).scrollTop() < 120) {
      $(".banner").css("transform", "scale(1.32)"); // if not, reduce the scale by 0.02
      $(".banner").css("margin-top", "250px");
      $(".docks").css("transform", "translate(375px, 433px)");
      $(".profile").css("transform", "translate(900px, 353px) scale(0.72)");
      $(".records").css("transform", "translate(-500px, -53px)  scale(0.72)");
      $(".tab3").css("transform", "translate(-1350px, -1750px)  scale(0.72)");
    } else if ($(document).scrollTop() < 125) {
      $(".banner").css("transform", "scale(1.30)"); // if not, reduce the scale by 0.02
      $(".banner").css("margin-top", "250px");
      $(".docks").css("transform", "translate(250px, 483px)");
      $(".profile").css("transform", "translate(800px, 343px) scale(0.70)");
      $(".records").css("transform", "translate(-400px, -43px)  scale(0.70)");
      $(".tab3").css("transform", "translate(-1300px, -1625px)  scale(0.70)");
    } else if ($(document).scrollTop() < 130) {
      $(".banner").css("transform", "scale(1.28)"); // if not, reduce the scale by 0.02
      $(".banner").css("margin-top", "250px");
      $(".docks").css("transform", "translate(325px, 533px)");
      $(".profile").css("transform", "translate(700px, 333px) scale(0.68)");
      $(".records").css("transform", "translate(-300px, -33px)  scale(0.68)");
      $(".tab3").css("transform", "translate(-1250px, -1500px)  scale(0.68)");
    } else if ($(document).scrollTop() < 135) {
      $(".banner").css("transform", "scale(1.26)"); // if not, reduce the scale by 0.02
      $(".banner").css("margin-top", "250px");
      $(".docks").css("transform", "translate(300px, 583px)");
      $(".profile").css("transform", "translate(600px, 323px) scale(0.66)");
      $(".records").css("transform", "translate(-200px, -23px)  scale(0.66)");
      $(".tab3").css("transform", "translate(-1200px, -1375px)  scale(0.66)");
    } else if ($(document).scrollTop() < 140) {
      $(".banner").css("transform", "scale(1.24)"); // if not, reduce the scale by 0.02
      $(".banner").css("margin-top", "250px");
      $(".docks").css("transform", "translate(275px, 633px)");
      $(".profile").css("transform", "translate(500px, 313px) scale(0.64)");
      $(".records").css("transform", "translate(-100px, -13px)  scale(0.64)");
      $(".tab3").css("transform", "translate(-1150px, -1250px)  scale(0.64)");
    } else if ($(document).scrollTop() < 145) {
      $(".banner").css("transform", "scale(1.22)"); // if not, reduce the scale by 0.02
      $(".banner").css("margin-top", "250px");
      $(".docks").css("transform", "translate(250px, 683px)");
      $(".profile").css("transform", "translate(400px, 303px) scale(0.62)");
      $(".records").css("transform", "translate(0px, -03px)  scale(0.62)");
      $(".tab3").css("transform", "translate(-1000px, -1125px)  scale(0.62)");
    } else if ($(document).scrollTop() < 150) {
      $(".banner").css("transform", "scale(1.20)"); // if not, reduce the scale by 0.02
      $(".banner").css("margin-top", "250px");
      $(".docks").css("transform", "translate(225px, 733px)");
      $(".profile").css("transform", "translate(300px, 293px) scale(0.60)");
      $(".records").css("transform", "translate(100px, 7px)  scale(0.60)");
      $(".tab3").css("transform", "translate(-950, -1000px)  scale(0.60)");
    } else if ($(document).scrollTop() < 155) {
      $(".banner").css("transform", "scale(1.18)"); // if not, reduce the scale by 0.02
      $(".banner").css("margin-top", "250px");
      $(".docks").css("transform", "translate(200px, 783px)");
      $(".profile").css("transform", "translate(200px, 283px) scale(0.58)");
      $(".records").css("transform", "translate(200px, 17px)  scale(0.58)");
      $(".tab3").css("transform", "translate(-900px, -875px)  scale(0.58)");
    } else if ($(document).scrollTop() < 160) {
      $(".banner").css("transform", "scale(1.16)"); // if not, reduce the scale by 0.02
      $(".banner").css("margin-top", "250px");
      $(".docks").css("transform", "translate(175px, 833px)");
      $(".profile").css("transform", "translate(100px, 273px) scale(0.56)");
      $(".records").css("transform", "translate(300px, 27px)  scale(0.56)");
      $(".tab3").css("transform", "translate(-850px, -750px)  scale(0.56)");
    } else if ($(document).scrollTop() < 165) {
      $(".banner").css("transform", "scale(1.14)"); // if not, reduce the scale by 0.02
      $(".banner").css("margin-top", "250px");
      $(".docks").css("transform", "translate(250px, 883px)");
      $(".profile").css("transform", "translate(0px, 263px) scale(0.54)");
      $(".records").css("transform", "translate(400px, 37px)  scale(0.54)");
      $(".tab3").css("transform", "translate(-800px, -625px)  scale(0.54)");
    } else if ($(document).scrollTop() < 170) {
      $(".banner").css("transform", "scale(1.12)"); // if not, reduce the scale by 0.02
      $(".banner").css("margin-top", "250px");
      $(".docks").css("transform", "translate(125px, 933px)");
      $(".profile").css("transform", "translate(-50px, 253px) scale(0.52)");
      $(".records").css("transform", "translate(500px, 47px)  scale(0.52)");
      $(".tab3").css("transform", "translate(-750px, -5000px)  scale(0.52)");
    } else if ($(document).scrollTop() < 175) {
      $(".banner").css("transform", "scale(1.10)"); // if not, reduce the scale by 0.02
      $(".banner").css("margin-top", "250px");
      $(".docks").css("transform", "translate(100px, 983px)");
      $(".profile").css("transform", "translate(-100px, 243px) scale(0.50)");
      $(".records").css("transform", "translate(500px, -57px)  scale(0.50)");
      $(".tab3").css("transform", "translate(-700px, -500px)  scale(0.50)");
    } else if ($(document).scrollTop() < 180) {
      $(".banner").css("transform", "scale(1.08)"); // if not, reduce the scale by 0.02
      $(".banner").css("margin-top", "250px");
      $(".docks").css("transform", "translate(75px, 1033px)");
      $(".profile").css("transform", "translate(-150px, 233px) scale(0.48)");
      $(".records").css("transform", "translate(500px, 67px)  scale(0.48)");
      $(".tab3").css("transform", "translate(-600px, -375px)  scale(0.48)");
    } else if ($(document).scrollTop() < 185) {
      $(".banner").css("transform", "scale(1.06)"); // if not, reduce the scale by 0.02
      $(".banner").css("margin-top", "250px");
      $(".docks").css("transform", "translate(50px, 1083px)");
      $(".profile").css("transform", "translate(-200px, 223px) scale(0.46)");
      $(".records").css("transform", "translate(500px, 87px)  scale(0.46)");
      $(".tab3").css("transform", "translate(-500px, -200px)  scale(0.46)");
    } else if ($(document).scrollTop() < 190) {
      $(".banner").css("transform", "scale(1.04)"); // if not, reduce the scale by 0.02
      $(".banner").css("margin-top", "250px");
      $(".docks").css("transform", "translate(25px, 1133px)");
      $(".profile").css("transform", "translate(-250px, 213px) scale(0.44)");
      $(".records").css("transform", "translate(500px, 107px)  scale(0.44)");
      $(".tab3").css("transform", "translate(-400px, -50px)  scale(0.44)");
    } else if ($(document).scrollTop() < 195) {
      $(".banner").css("transform", "scale(1.02)"); // if not, reduce the scale by 0.02
      $(".banner").css("margin-top", "250px");
      $(".docks").css("transform", "translate(0px, 1183px)");
      $(".profile").css("transform", "translate(-300px, 203px) scale(0.42)");
      $(".records").css("transform", "translate(500px, 137px)  scale(0.42)");
      $(".tab3").css("transform", "translate(-300px, 150px)  scale(0.42)");
    } else if ($(document).scrollTop() < 200) {
      $(".banner").css("transform", "scale(1.0)"); // if not, reduce the scale by 0.02
      $(".banner").css("margin-top", "250px");
      $(".docks").css("transform", "translate(0px, 1183px)");
      $(".profile").css("transform", "translate(-350px, 183px) scale(0.40)");
      $(".records").css("transform", "translate(500px, 257px)  scale(0.40)");
      $(".tab3").css("transform", "translate(-250px, 400px)  scale(0.40)");
    } else {
      $(".banner").css("transform", "scale(1.0)"); // if not, reduce the scale by 0.02
      $(".banner").css("margin-top", "250px");
      $(".docks").css("transform", "translate(0px, 1183px)");
      $(".profile").css("transform", "translate(-400px, 183px) scale(0.40)");
      $(".records").css("transform", "translate(400px, 277px)  scale(0.40)");
      $(".tab3").css("transform", "translate(-250px, 400px)  scale(0.40)");
    }
  });
});


// var step = 5;
// var maximum = 200;
// var banner_dec = 0.002;
// var scale = 1.8;
// var currentStep;
// var lastStep= 0;
// if ($(document).scrollTop() == 0){
// console.log("top");
// $(".banner").css("transform", "scale(1.8)"); // if not, reduce the scale by 0.02
// $(".banner").css("margin-top", "0px");
// $(".docks").css("transform", "translate(1000px, 3133px)");
// }

// while ($(document).scrollTop() >= step  && $(document).scrollTop() > 0) {
//   if (scale <= 1.0 || $(document).scrollTop() > 400) {
//     break
//   } else {
//     if(step > lastStep){
//       scale = scale - banner_dec;
//     $(".banner").css("transform", "scale(" + scale + ")");
//     $(".banner").css("margin-top", "250px");
//     console.log('scale' + scale);
//     console.log('step' + step);
//     console.log('laststep' + lastStep);
//     lastStep = step;
//     step += 5;
//     // banner_dec += banner_dec;
//     // continue;
//   }else{
//     if(step == 5){
//       $(".banner").css("margin-top", "0px");
//       console.log('end')
//       break;
//     }else{
//     scale = scale + banner_dec;
//     $(".banner").css("transform", "scale(" + scale + ")");
//       $(".banner").css("margin-top", "-250px");
//     console.log('scale' + scale);
//     console.log('step' + step);
//     console.log('laststep2' + lastStep);
//     lastStep = step;
//     step += 5;
//     // banner_dec += banner_dec;
//     // continue;
//   }
//   }
//   }

//   var reverse_scale = 200;


// }