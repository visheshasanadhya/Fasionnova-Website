<?php 
    error_reporting(0);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce Website</title>
    
   
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />



    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
    <header class="mainnav">
        <div class="logo_container">
            <a href="#"><img class="logo_sixe" src="https://raise-content.s3.amazonaws.com/MP-OPs/FashionNova/FashionNova-Logo.png" alt="Img_not_found"></a>
        </div>
        <div class="nav_bar" >
            <a href="index.html" target="blank">Home</a>
            <a href="men.html" target="blank">Men</a>
            <a href="women.html" target="blank">Women</a>
            <a href="boys.html" target="blank">Boys</a>
            <a href="girls.html" target="blank">Girls</a>
            <a href="living.html" target="blank">Home & Living</a>
        </div>
        <div class="search_bar">
            <div  id="search_nav" class="material-symbols-outlined search_icon">search <input class="search" type="search" placeholder=" Search for product , brand and more"></div>
            <!-- <label for="search_nav"><input type="search" placeholder=" Search for product , brand and more." class=" search_input"></label> -->

            
            <!-- <input class="search_input" placeholder="Search for product , brand and more -->
        </div>
        <div class="action_bar">
            <div class="action_container">
                <span class="material-symbols-outlined action_icon ">person</span>
                <span class="action_name">Profile</span>
            </div>
            <a href="wishlist.html" target="_blank">
                <div class="action_container">
                    <span class="material-symbols-outlined action_icon "></span>
                    <span class="action_name" href="wishlist.html">Wishlist</span>
                </div>
            </a>
            <a class="action_container"  href="bag.html">
                <span class="material-symbols-outlined action_icon ">shopping_bag</span>
                <span class="action_name">Bag</span>
                <span class="bag-item-count">0</span>
            </a>
        </div>
    </header> 
    <div class="main">
        <button class="log_btn">Login</button>
        <div class="wrapper">
            <form action="" method="post" >
                <button class="cross">&#x2715;</button>
                <h1 style="text-align: center;">Login</h1>
                <div class="name-pass-box">
                    <input type="text" placeholder="Enter number or email" name="number" required><i class="fa-solid fa-user"></i>
                </div>
                <div class="name-pass-box">
                    <input type="password" placeholder="Enter password" name="password" required ><i class="fa-solid fa-lock"></i>
                </div>

                <div class="rem_for">
                   <div class="check"> <input type="checkbox" name="checkbox" id="rem_check">remember me</div>
                    <a href="forget.html">Forget password</a>
                </div>

                    <!-- <button>Login</button> -->
                    <input type="submit"  class="log" name="sumit">

                <div class="reg">
                    Don't have password?<a href="register.php" target="_blank">register</a>
                </div>
            </form>
        </div>

        

    </div>
    <footer>
            <div class="footer_container">
                <div class="footer_column">
                    <h3>ONLINE SHOPPING</h3>
    
                    <a href="#">Men</a>
                    <a href="#">Women</a>
                    <a href="#">Kids</a>
                    <a href="#">Home & Living</a>
                    <a href="#">Beauty</a>
                    <a href="#">Gift Card</a>
                    <a href="#">Myntra Insider</a>
                </div>
    
                <div class="footer_column">
                    <h3>ONLINE SHOPPING</h3>
    
                    <a href="men.html">Men</a>
                    <a href="women.html">Women</a>
                    <a href="kids.html">Kids</a>
                    <a href="home_and_living">Home & Living</a>
                    <a href="beauty">Beauty</a>
                    <a href="gift_card">Gift Card</a>
                    <a href="#">Myntra Insider</a>
                </div>
    
                <div class="footer_column">
                    <h3>ONLINE SHOPPING</h3>
    
                    <a href="#">Men</a>
                    <a href="#">Women</a>
                    <a href="#">Kids</a>
                    <a href="#">Home & Living</a>
                    <a href="#">Beauty</a>
                    <a href="#">Gift Card</a>
                    <a href="#">Myntra Insider</a>
                </div>
            </div>
            
    
            <div class="copyright">
                <div class="reverse">© 2023 www.myntra.com. All rights reserved.</div>
            </div>
            <div class="php">
            <?php
    require 'connection.php';
    // echo "hello";
    if(isset($_POST["sumit"])){
        $pn=$_POST["number"];
        $pass=$_POST["password"];
        $email=$_POST["number"];
        $result=mysqli_query($conn,"select * from customer WHERE phone_number ='$pn' OR email='$email'");
        $row = mysqli_fetch_assoc($result);
        
        if(mysqli_num_rows($result) > 0){
            echo "$pass";
            
            if($pass == $row["password"]){
                $_SESSION["login"]=true;
                $_SESSION["id"]=$row["phone_number"];
                // echo "<script> alert('successfull matter'); </script>";
                // header("Location: register.php");
                echo "<script> window.location.href='index.html' </script>";
            }
            else{
                echo "<script> alert('wrong password'); </script>";
            }
        }
        
    }
    else{
            if($pass!=""){
                echo "<script> alert('user not register'); </script>";
            }
            
       
      }

?>

            </div>

            <!-- <div class="line"></div> -->
    </footer>
    <script src="login.js"></script>
    <!-- <script src="items.js"></script>
    <script src="index.js"></script> -->
    <!-- <script src="bag.js"></script> -->
</body>
</html>


