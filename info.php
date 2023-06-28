<?php
    $con = mysqli_connect("localhost","root","","links");
    if($con == false){
    dir('Error: Cannot connect');
    }
?>
    
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
        <?php
            session_start();

            if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
            {
                echo"<a href='register.php'>Register</a><br>
                <a href='login.php'>Login</a><br>";
            }
            else{
                echo "<a href='logout.php'>Logout</a><br>";
            }
        ?>
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
                <div class="main-heading">SEARCHES</div>
            </div>
            <div class="register" style="display:flex; align-items:center; justify-content:center;">
                    <?php
                        if(isset($_GET['search']))
                        {
                            $filtervalues = $_GET['search'];
                            $query = "SELECT * FROM `link_keys` WHERE CONCAT(KEY1,KEY2,KEY3) LIKE '%$filtervalues%' ";
                            $query_run = mysqli_query($con, $query);
                                if(mysqli_num_rows($query_run) > 0)
                                {
                                    foreach($query_run as $items)
                                    {
                                        $q1= "SELECT * FROM `links_desc` WHERE `TAG` LIKE '$items[NAME]'";
                                        $q1_run= mysqli_query($con, $q1);
                                        if(mysqli_num_rows($q1_run) > 0){
                                            foreach($q1_run as $i){
                                                echo "<div class='cardDesc'>";
                                                echo "<h2>".$i['NAME']."</h2><br>";
                                                echo $i['INFO']."<br>";
                                                echo "<a href='".$i['LINK']."' target='_blank' style='color:red;'>CLICK HERE!</a>";
                                                echo "</div>";
                                            }
                                        }
                                    }
                                }
                                else
                                {
                                    echo "<div class='cardDesc'>";
                                    echo "<h2>NO RECORDS FOUND</h2>";
                                    echo "</div>";
                                }                       
                        }
                    ?>
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