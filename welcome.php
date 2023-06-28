<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <link rel="stylesheet" media="screen and (max-width: 1225px)" href="assets/css/mediaquery2.css"> -->
    <link rel="stylesheet" media="screen and (max-width: 1030px)" href="assets/css/mediaquery.css">

</head>
<style>
  .redirect{
    display:flex; 
    align-items:center;
    justify-content:center; 
    text-decoration:none; 
    color:#ed0007;
    font-size:2rem;
}
.redirect a{
    text-decoration:none; color:white;
}
.redirect a:hover{
    color: #828282;
}
</style>
<body>
    <!-- navbar section -->
    <div id="overlay">
        <a href="index.php#Home-Page">Home</a><br>
        <a href="index.php#about-us">About Us</a><br>
        <a href="register.php">Register</a><br>
        <a href="login.php">Login</a><br>
        <a href="index.php#recommended">Recommended</a><br>
        <a href="index.php#domains">Domains</a><br>
        <a href="index.php#reviews">Reviews</a><br>
        <a href="index.php#sponsors">Sponsors</a><br>
        <a href="index.php#faq">F.A.Qs</a><br>
        <a href="index.php#contact">Contact Us</a><br>
    </div>
    <div id="mob-navbar">
        <div id="hamburger">
            <div></div>
        </div>
    </div>
    <!-- super parent for background gif -->
    <div class="superParent homepage" id="fullpage">
        <!-- about us -->
        <section class="about-us section" id="about-us">
            <div class="wrapper">
                <div class="main-heading">WELCOME <b><?php echo $_SESSION['username']?></b>!</div>
                <div class="redirect">
                  <h1>
                    Continue with the <a href="index.php">HOME</a> Page
                  </h1>
                </div>
        </section>
    </div>
</body>

</html>

