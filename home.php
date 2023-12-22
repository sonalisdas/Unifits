<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home_styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#about").click(function(){
                $("#panal").slideToggle("slow");
            })
        })
    </script>
    <title>Home</title>
</head>
<?php

   session_start();

   if( isset( $_SESSION['counter'] ) ) {

      $_SESSION['counter'] += 1;

   }else {

      $_SESSION['counter'] = 1;

   }

   $my_Msg = "This page is visited ".  $_SESSION['counter'];

   $my_Msg .= " time during this session.";

?>
<body>
        <div class="head">
            <b class="sn">kheertthana 2160489</b>
            <?php  echo ( $my_Msg ); ?>
            <a class="log" href="log_in.html"><b>Log in<img src="images/user (1).png" alt="log" class="img1"></b></a>
       </div>
       <div class="nav">
        <b class="topic">UNIFITS</b>
        <div class="list">
        <a href="home.php">Home</a>
        <a href="shop.html">Shop</a>
        <a href="stockists.html">Stockists</a>
        <a href="Customer Care.html">Customer Care</a>
        </div>  
       </div>
       <div class="img3" style="background-image: url(images/bg_pic.png);">
        <div class="div1" >
            
            <b class="div2" >When COZINESS <br>Meets UNIQUENESS <br></b>
            <a href="shop.html"><button type="submit" class="b1">Shop Now</button></a>
        </div>
       </div>
       <div class="div3" >
        FREE SHIPPING WORLDWIDE
       </div>
       <div id="about" class="p8">To our Dear Customers....</div>
       <div class="div4" id="panal">
            <p class="p1"> <b>A letter to customers from Uni-Fits</b></p>
            <p class="p3">
                At Uni-Fits, we are passionate about fashion and committed to bringing you the latest trends and styles
                in clothing. Our mission is to provide you with a seamless online shopping experience where you can discover 
                a diverse range of high-quality clothing while keeping comfortness as the first priority.
            </p>
            <p class="p2">Our Story:</p>
            <p class="p3">
                Uni-Fits was born out of a passion for fashion and a desire to break away from the conventional clothing
                options available in the market. Our journey began in 2000, with a vision to create a
                curated selection of clothing that celebrates individuality and ensures maximum comfort for our customers. 
                Since then, we have been on a mission to bring you a wide range of unique, stylish, and cozy outfits that 
                speak to your personal style.
            </p>
            <p class="p2">Comfort is Key:</p>
            <p class="p3">
                We understand the importance of feeling comfortable in your clothes, as it directly impacts your 
                confidence and well-being. That's why we prioritize comfort in every garment we offer. Our team 
                meticulously selects fabrics and designs that ensure a cozy and relaxed fit, making you feel at ease
                all day long. <br>
                Thank you for choosing Uni-Fits as your fashion destination. 
                We look forward to helping you discover clothing that reflects your unique style and keeps 
                you comfortable throughout your journey. <br><br><br>
                Happy shopping! <br><br>
                SONALI <br>
                Founder, Uni-Fits <br>

            </p>
       </div>
       <div class="div5">
        <div class="p4">STAY CONNECTED <br>
        <img src="images/twitter.png" alt="tw" class="img4">
        <img src="images/fb.png" alt="fb" class="img4">
        <img src="images/ig.png" alt="" class="img4">
        </div>
        <div class="p5">© 2023 by UNI-FITS. Powered and secured by Bit by Bit</div>
        <div class="p6" >NEED ASSISTANCE?
            <p class="p7">123-456-7890 <br>unifits@gmil.com</p>
        </div>
       </div>
  
</body>
</html>