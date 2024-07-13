
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="register.css">
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
        </div>
        <div class="action_bar" >
            <a href="login.php" target="_blank">
                <div class="action_container">
                    <span class="material-symbols-outlined action_icon ">person</span>
                    <span class="action_name" href="login.php">Profile</span>
                </div>
            </a>
            <div class="action_container">
                <span class="material-symbols-outlined action_icon ">favorite</span>
                <span class="action_name">Wishlist</span>
            </div>
            <a class="action_container" href="bag.html">
                <span class="material-symbols-outlined action_icon ">shopping_bag</span>
                <span class="action_name">Bag</span>
                <span class="bag-item-count">0</span>
            </a>
        </div>
    </header> 

<!-- main section -->

    <div class="main">
        <form class="" action="" method="post" >
    <div class="container">
       
        <div class="box">
            <input type="text" name="firstname" required="required">
            <span>First Name</span>
        </div>
        <div class="box">
            <input type="text" required="required" name="lastname">
            <span>Last Name</span>
        </div>
        <div class="box">
            <input type="text" required="required" name="email">
            <span>Email Id</span>
        </div>
        <div class="box">
            <input type="password" required="required" minlength="6" name="password">
            <span>password</span>
        </div>
        <div class="box">
            <input type="text" required="required" name="pincode">
            <span>Pincode</span>
        </div>
        <div class="box">
            <input type="number" required="required" name="phone_number" minlength="10" maxlength="10">
            <span>phone number</span>
        </div>
        <div class="box">
            <input type="text" required="required" name="address">
            <span>Address</span>
        </div>
        <!-- <button class="btn box">Register</button> -->
        <input type="submit" class=" btn" name="submit">
    </div>
       

</div>

</form>
<div class="php">
    
<?php
    require 'connection.php';
    
    if(isset($_POST["submit"])){
        $fn=$_POST['firstname'];
    $ln=$_POST['lastname'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $pin=$_POST['pincode'];
    $pn=$_POST['phone_number'];
    $add=$_POST['address'];
    $dupliacte=mysqli_query($conn,"select * from customer WHERE email='$email' ");
    if(mysqli_num_rows($dupliacte) > 0){
        echo
        "<script> alert('Email already taken'); </script>";
    }
    else{
        if($pass==$pass){
            $query="insert into customer VALUES('$fn','$ln','$email','$pass','$pin','$pn','$add')"; 
            mysqli_query($conn,$query);
            echo "<script> alert('register successfully'); </script>";
        }
        else{
            echo "<script> aler('failed to register!'); </script>";
        }
    }
}
    else{
        echo "failed";
    }



    ?>
</div>
</body>
</html>


