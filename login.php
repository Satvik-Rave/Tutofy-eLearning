<?php
//This script will handle login
session_start();

// check if the user is already logged in
if(isset($_SESSION['username']))
{
    header("location: welcome.php");
    exit;
}
require_once "config.php";

$username = $password = "";
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter username + password";
    }
    else{
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }


if(empty($err))
{
    $sql = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_username);
    $param_username = $username;
    
    
    // Try to execute this statement
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt))
                    {
                        if(password_verify($password, $hashed_password))
                        {
                            // this means the password is corrct. Allow user to login
                            session_start();
                            $_SESSION["username"] = $username;
                            $_SESSION["id"] = $id;
                            $_SESSION["loggedin"] = true;

                            //Redirect user to welcome page
                            header("location: welcome.php");
                            
                        }
                    }

                }

    }
}    

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
                <div class="main-heading">LOGIN</div>
            </div>
            <div class="register" style="display:flex; align-items:center; justify-content:center;">
                <div class="cardRegister">
                    <form action="" method="post">
                        <label for="fname">Username: </label>
                        <input type="text" id="username" name="username" placeholder="Enter username"><br>
                        <label for="lname">Password: </label>
                        <input type="password" id="password" name="password" placeholder="Enter password"><br>
                        <div class="submit">
                            <input type="submit" value="SUBMIT">
                            <a href="register.php">
                                Haven't Registered?
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>

    <!-- js -->
    <script src="assets/js/script1.js"></script>
    <script>
        window.addEventListener('scroll', reveal);
        function reveal() {
            var reveals = document.getElementsByClassName('card');
            Array.from(reveals).forEach(element => {
                var windowHeight = window.innerHeight;
                var revealTop = element.getBoundingClientRect().top;
                var revealPoint = 100;

                if (revealTop < windowHeight - revealPoint) {
                    element.classList.add('active1');
                }
                else {
                    element.classList.remove('active1');
                }
            });
        }
    </script>
    <script>
         window.addEventListener('scroll', reveal);
        function reveal() {
            var reveals = document.getElementsByClassName('card1-container');
            Array.from(reveals).forEach(element => {
                var windowHeight = window.innerHeight;
                var revealTop = element.getBoundingClientRect().top;
                var revealPoint = 100;

                if (revealTop < windowHeight - revealPoint) {
                    element.classList.add('active1');
                }
                else {
                    element.classList.remove('active1');
                }
            });
        }
    </script>
</body>

</html>
