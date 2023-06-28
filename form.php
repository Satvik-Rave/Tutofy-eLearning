<?php
    require_once "config.php";
    if (isset($_POST['submit_q'])) {
        $name = $_POST['fname']; 
        $email = $_POST['email_1']; 
        $instructor = $_POST['instructor']; 
        $courses = $_POST['courses']; 
        $oc = $_POST['organized'];   
        $cw = $_POST['workload'];
        $cp = $_POST['projects']; 
        $dq = $_POST['questions']; 
        $expect = $_POST['expect']; 
        foreach($courses as $c1)  
        {  
            $str .= $c1.",";  
        }  
        mysqli_query($conn,"INSERT INTO `queries`(`Name`, `Email ID`, `Instructor`, `Courses`, `Organized Content`, `Course Workload`, `Competitive Projects`, `Daily Questions`, `Expectations`) VALUES ('$name','$email','$instructor','$str','$oc','$cw','$cp','$dq','$expect')");
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/form.css">
    <!-- <link rel="stylesheet" media="screen and (max-width: 1225px)" href="assets/css/mediaquery2.css"> -->
    <link rel="stylesheet" media="screen and (max-width: 1030px)" href="assets/css/mediaquery.css">

</head>

<body>
    <!-- navbar section -->
    <div id="overlay">
        <a href="index.php#Home-Page">Home</a><br>
        <a href="index.php#about-us">About Us</a><br>
        <?php
            // session_start();

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
                <div class="main-heading" style="margin:4rem 4rem 0 4rem">QUERY FORM</div>
            </div>
            <div class="register" style="display:flex; align-items:center; justify-content:center;">
                    <div class="cardRegister" style="font-size:1rem; width:50%; text-align:left;">
                    <form action="" method="post">
                        <label for="fname">Name</label>
                        <input type="text" id="fname" name="fname" placeholder="Enter Full Name"><br>
                        <label for="email_1">Email ID</label>
                        <input type="email" id="email_1" name="email_1" placeholder="Enter Your mail ID"><br>
                        <label for="lname">Instructor</label>
                        <input type="text" id="instructor" name="instructor" placeholder="Enter Instructor's name"><br>
                        <label>Courses</label><br>
                        <div class="courses">
                        <input type="checkbox" id="dsa" name="courses[]" value="DSA">
                        <label for="dsa"> DSA </label><br>
                        <input type="checkbox" id="webdev" name="courses[]" value="Web Development">
                        <label for="webdev"> Web Development </label><br>
                        <input type="checkbox" id="dbms" name="courses[]" value="DBMS">
                        <label for="dbms"> DBMS </label><br>
                        <input type="checkbox" id="os" name="courses[]" value="OS">
                        <label for="os"> Operating System </label><br>
                        <input type="checkbox" id="webmin" name="courses[]" value="Web Mining">
                        <label for="webmin"> Web Mining </label><br>
                        </div>
                        <label>Course Content</label><br>
                        <div class="c-content">
                        <table>
                            <tr>
                                <th></th>
                                <th>Must Contain</th>
                                <th>Recommended</th>
                                <th>Not necessary</th>
                            </tr>
                            <tr>
                                <td>Course Content organized</td>
                                <td><input type="radio" name="organized" value="Must Contain"></td>
                                <td><input type="radio" name="organized" value="Recommended"></td>
                                <td><input type="radio" name="organized" value="Not necessary"></td>
                            </tr>
                            <tr>
                                <td>Course Workload</td>
                                <td><input type="radio" name="workload" value="Must Contain"></td>
                                <td><input type="radio" name="workload" value="Recommended"></td>
                                <td><input type="radio" name="workload" value="Not necessary"></td>
                            </tr>
                            <tr>
                                <td>Course Competitive Projects</td>
                                <td><input type="radio" name="projects" value="Must Contain"></td>
                                <td><input type="radio" name="projects" value="Recommended"></td>
                                <td><input type="radio" name="projects" value="Not necessary"></td>
                            </tr>
                            <tr>
                                <td>Daily dose of questions</td>
                                <td><input type="radio" name="questions" value="Must Contain"></td>
                                <td><input type="radio" name="questions" value="Recommended"></td>
                                <td><input type="radio" name="questions" value="Not necessary"></td>
                            </tr>  
                        </table><br>
                        </div>
                        
                        <label for="question1">What do you expect from the course?</label><br>
                        <input type="text" id="question1" name="expect" placeholder="Your Answer"><br>

                        <div class="submit" style="display: flex; align-items:center; justify-content:center;">
                            <input type="submit" name="submit_q" value="SUBMIT" onclick="alert('Query Form submitted')">
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