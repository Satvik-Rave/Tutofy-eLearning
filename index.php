A<?php

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <!-- navbar section -->
    <div id="overlay">
        <a href="#Home-Page">Home</a><br>
        <a href="#about-us">About Us</a><br>
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
        <a href="#recommended">Recommended</a><br>
        <a href="#domains">Domains</a><br>
        <a href="#reviews">Reviews</a><br>
        <a href="#sponsors">Sponsors</a><br>
        <a href="#faq">F.A.Qs</a><br>
        <a href="#contact">Contact Us</a><br>
    </div>
    <div id="mob-navbar">
        <div id="hamburger">
            <div></div>
        </div>
    </div>
    <!-- super parent for background gif -->
    <div class="superParent" id="fullpage">
        <!-- home parent for all of home page elements -->
        <section class="section homeParent" id="Home-Page">
            <!-- ssit logo -->
            <div class="wrapper">
                <!-- <div class="ssit-logo">
                    <img src="./assets/images/logo2.jpg">
                </div> -->
                <!-- headings for both mobile and desktop -->
                <div class="heading">
                    <!-- before tile  -->

                    <!-- title and title images -->
                    <div class="title">
                        <div class="before-title">&nbspRevolution in Education</div>
                        <!-- mobile image -->
                        <img class="h4cmob" src="assets/images/logo2.jpg">

                        <!-- h4c title -->
                        <img class="h4ctitle" src="assets/images/logo1.jpg">

                        <!-- adding timer along with logo as flexbox -->
                        <div class="flexbox1">
                            <!-- links of homepage -->
                            <ul class="links">
                                <!-- buttons -->
                                <?php
                                    // session_start();
                        
                                    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
                                    {
                                        // header("location: login.php");
                                    }
                                    else{
                                        echo " <li class='tlink1' style='display: flex; justify-content: center; align-items: center;'>
                                        <form id='search' action='info.php' method='get' style='display: flex; justify-content: center; align-items: center;'>";
                                        echo "<input type='text' name='search' placeholder='Search by name'>
                                        <input type='image' src='./assets/images/search.svg' alt='Submit' style='height:25px; width:25px' onclick='formSubmit()'>";
                                        echo "</form></li>";
                                    }
                                ?>
                                
                                <li class="tlink"><a href="./assets/images/E-tutor.pdf" download>Download Brochure<img
                                            src="./assets/images/Download.svg"></a></li>
                                <?php
                                    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
                                    {
                                        echo "<li class='tlink'><a href='register.php'>Register <img
                                        src='./assets/images/Add User Male.svg'></a></li>
                                        <li class='tlink'><a href='login.php'>Login<pre> </pre><img src='./assets/images/login.png'></a>
                                        </li>";
                                    }
                                ?>
                                </li>
                                <li class="tlink"><a href="form.php">Queries Form<pre> </pre><img src="./assets/images/form.png"></a>
                                </li>
                                <?php
                                    if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
                                    {
                                        
                                    }
                                    else{
                                        echo "<li class='tlink'><a href='logout.php'>Logout<pre> </pre><img src='./assets/images/logout.png'></a>
                                        </li>";
                                    }
                                ?>

                            </ul>
                            <!-- desktop image -->
                            <img class="h4cdesk" src="assets/images/logo2.jpg">

                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- about us -->
        <section class="about-us section" id="about-us">
            <div class="wrapper">
                <div class="main-heading">ABOUT US</div>
                <div class="info">Tutofy would like to bring upon a <b><span
                            style="border-bottom:1px solid dodgerblue;">REVOLUTION</span></b> in the industry of education and tutoring.<br>The main motive behind TUTOFY is to simplify the method of learning and reduce the time of searching a particular video over the internet.<br><br> E-tutoring can be defined as teaching, support, management and assessment of students on programmes of study that involve a significant use of online technologies. e-tutoring is only different to tutoring in terms of the involvement of technology. Herein, however, are contained vital differences in terms of time, distance and the specific technologies adopted, and these all have implications for teaching staff. The capabilities required can be quite different to face-to-face teaching both in terms of integrating appropriate forms of technology into learning activities and in managing and supporting students' learning online.<br><b>Welcome to the journey of learning.</b></div>
            </div>
        </section>
        <section class="recommended section" id="recommended">
            <div class="wrapper">
                <div class="main-heading">Recommended</div>
                <div class="card-container">
                    <div class="card">
                    <div class="card-head">Sorting -DSA</div><br>
                        <div class="card-desc">A Sorting Algorithm is used to rearrange a given array or list elements according to a comparison operator on the elements.<br>
                        <p>Click the icons to watch..</p></div>
                        <div class="card-img"><a href="https://www.youtube.com/watch?v=Y0-9xN36MrM" target="_blank"><img src="./assets/images/simple-snippet.jpg"></a></div>
                        <div class="card-img"><a href="https://www.youtube.com/watch?v=p__ETf2CKY4" target="_blank"><img src="./assets/images/abdul-barai.jpg"></a></div>
                    </div>
                    <div class="card">
                    <div class="card-head">Relational algebra -DBMS</div><br>
                        <div class="card-desc">Relational algebra is a procedural query language, which takes instances of relations as input and yields instances of relations as output.<br>
                        <p>Click the icons to watch..</p>
                        </div>
                        <div class="card-img"><a href="https://www.udemy.com/course/introduction-to-relational-database-and-sql/" target="_blank"><img src="./assets/images/Udemy-Logo.png"></a></div>
                        <div class="card-img"><a href="https://www.javatpoint.com/dbms-relational-algebra" target="_blank"><img src="./assets/images/jtp-logo.png"></a></div>
                    </div>


                    <div class="card">
                    <div class="card-head">Semaphore -OS</div><br>
                        <div class="card-desc">Semaphores are integer variables that are used to solve the critical section problem by using two atomic operations, wait and signal that are used for process synchronization.<br>
                        <p>Click the icons to watch..</p>
                        </div>
                        <div class="card-img"><a href="https://www.udemy.com/course/synchronization-in-linux-kernel-programming" target="_blank"><img src="./assets/images/Mooc-logo.svg"></a></div>
                        <div class="card-img"><a href="https://www.youtube.com/watch?v=eoGkJWgxurQ" target="_blank"><img src="./assets/images/gatesmasher.jpg"></a></div>
                    </div>
                    <div class="card">
                    <div class="card-head">Node Js -Web Development</div><br>
                        <div class="card-desc">Node. js is a platform built on Chrome's JavaScript runtime for easily building fast and scalable network applications. Node. js uses an event-driven, non-blocking I/O model that makes it lightweight and efficient, perfect for data-intensive real-time applications.<br>
                        <p>Click the icons to watch..</p>
                        </div>
                        <div class="card-img"><a href="https://www.freecodecamp.org/news/free-8-hour-node-express-course/" target="_blank"><img src="./assets/images/freecodecamp.jpg"></a></div>
                        <div class="card-img"><a href="https://www.edx.org/course/introduction-to-nodejs-2"><img src="./assets/images/edx-logo.svg" target="_blank"></a></div>
                    </div>


                    <div class="card">
                    <div class="card-head">Java script -Web Development</div><br>
                        <div class="card-desc">JavaScript is a high-level, often just-in-time compiled language that conforms to the ECMAScript standard. It has dynamic typing, prototype-based object-orientation, and first-class functions.<br>
                        <p>Click the icons to watch..</p>
                        </div>
                        <div class="card-img"><a href="https://www.w3schools.com/js/" target="_blank"><img src="./assets/images/W3-logo.png"></a></div>
                        <div class="card-img"><a href="https://www.edx.org/learn/javascript" target="_blank"><img src="./assets/images/edx-logo.svg"></a></div>
                        <div class="card-img"><a href="https://www.freecodecamp.org/news/what-is-javascript/" target="_blank"><img src="./assets/images/freecodecamp.jpg"></a></div>
                    </div>
                    <div class="card">
                    <div class="card-head">Error Detection -CAO</div><br>
                        <div class="card-desc">Errors in the received frames are detected by means of Parity Check and Cyclic Redundancy Check (CRC). In both cases, few extra bits are sent along with actual data to confirm that bits received at other end are same as they were sent.<br>
                        <p>Click the icons to watch..</p>
                        </div>
                        <div class="card-img"><a href="https://www.youtube.com/watch?v=z90ADQUQjsk" target="_blank"><img src="./assets/images/Mooc-logo.svg"></a></div>
                        <div class="card-img"><a href="https://www.coursera.org/lecture/fundamentals-network-communications/error-control-parity-checks-BS6X4" target="_blank"><img src="./assets/images/edx-logo.svg"></a></div>
                    </div>
                    <div class="card">
                    <div class="card-head">IPV6 -Network and communication</div><br>
                        <div class="card-desc">Internet Protocol version 6 (IPv6) is the most recent version of the Internet Protocol (IP), the communications protocol that provides an identification and location system for computers on networks and routes traffic across the Internet....<br>
                        <p>Click the icons to watch..</p></div>
                        <div class="card-img"><a href="https://www.youtube.com/watch?v=Y0-9xN36MrM" target="_blank"><img src="./assets/images/W3-logo.png"></a></div>
                        <div class="card-img"><a href="https://www.youtube.com/watch?v=Y0-9xN36MrM" target="_blank"><img src="./assets/images/gatesmasher.jpg"></a></div>
                    </div>
                    <div class="card">
                    <div class="card-head">Dijkstra's Algorithm -DSA</div><br>
                        <div class="card-desc">Dijkstra's algorithm allows us to find the shortest path between any two vertices of a graph.It differs from the minimum spanning tree because the shortest distance between two vertices might not include all the vertices of the graph.<br>
                        <p>Click the icons to watch..</p>
                        </div>
                        <div class="card-img"><a href="https://www.youtube.com/watch?v=XB4MIexjvY0" target="_blank"><img src="./assets/images/jenny-lecture.jpg"></a></div>
                        <div class="card-img"><a href="https://www.youtube.com/watch?v=Y0-9xN36MrM" target="_blank"><img src="./assets/images/edx-logo.svg"></a></div>
                    </div>
                </div>
        </section>
        <section class="domains section" id="domains">
            <div class="wrapper">
                <div class="main-heading">DOMAINS</div> 
                <div class="group1">
                    
                    <div class="card1-container">
                        <div class="card1-head">JAVA PROGRAMMING</div>
                        <div class="card1-img"><img src="./assets/images/logo2.jpg" style="border-radius: 30%;"></div>
                    </div>
                    <div class="card1-container">
                        <div class="card1-head">ANDROID DEVELOPMENT</div>
                        <div class="card1-img"><img src="./assets/images/logo2.jpg" style="border-radius: 30%;"></div>
                    </div>
                    <div class="card1-container">
                        <div class="card1-head">DATA STRUCTURE</div>
                        <div class="card1-img"><img src="./assets/images/logo2.jpg" style="border-radius: 30%;"></div>
                    </div>
                    <div class="card1-container">
                        <div class="card1-head">WEB DEVELOPMENT</div>
                        <div class="card1-img"><img src="./assets/images/logo2.jpg" style="border-radius: 30%;"></div>
                    </div>
                    <div class="card1-container">
                        <div class="card1-head">MACHINE LEARNING</div>
                        <div class="card1-img"><img src="./assets/images/logo2.jpg" style="border-radius: 30%;"></div>
                    </div>
                    <div class="card1-container">
                        <div class="card1-head">ARTIFICIAL INTELLIGENCE</div>
                        <div class="card1-img"><img src="./assets/images/logo2.jpg" style="border-radius: 30%;"></div>
                    </div>

                </div>

            </div>
    </div>
    </section>
    
    <section class="review-section" id="reviews">
        <div class="wrapper">
        <div class="main-heading">REVIEWS</div>
        <div class="rcards" style="display:flex; justify-content:center;">
            <div class="reviewcard" style="margin:1%">
                <img src="assets/images/mom.png" alt="reviewer1" style=" border-radius: 50%;">
                <h1>Robert Stevan</h1>
                <p class="title">Newyork ,USA</p>
                <p style="font-size: 20px; font-weight: bold;"> Data Structure and Analysis</p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span><br>
                <p>A detailed review of one of the most important skills in academic research: information seeking. In particular, I enjoyed the tutorials on Mendeley and reference management tools. Highly recommended!</p>
                <a href="#"><i class="fa fa-whatsapp"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-facebook-official"></i></a>
            </div>
            <div class="reviewcard" style="margin:1%">
                <img src="assets/images/dad.jpg" alt="reviewer2" style="border-radius: 50%;">
                <h1>Emmie Smith</h1>
                <p class="title">London, UK</p>
                <p style="font-size: 20px; font-weight: bold;"> Web Development</p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span><br>
                <p>The course was very comprehensive and easy to understand. The instructors made sure that they are giving the information in a way that won't make me confused. Thank you so much for this great course!</p>
    
                <a href="#"><i class="fa fa-whatsapp"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-facebook-official"></i></a>
            </div>
            <div class="reviewcard" style="margin:1%">
                <img src="assets/images/son.png" alt="reviewer3" style="border-radius: 50%;">
                <h1>David Miller</h1>
                <p class="title">Paris, Germany</p>
                <p style="font-size: 20px; font-weight: bold;"> Database Management System</p>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span><br>
                <p>This is one of the best course I have completed regarding Preparing a Scientific, well written Research. The course is organised in the best way to support learners in academic information seeking. Thanks to all the amazing instructors.</p>
    
                <a href="#"><i class="fa fa-whatsapp"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-facebook-official"></i></a>
            </div>
        </div>
        </div>
    </section>
    <section class="sponsors section" id="sponsors">
        <div class="wrapper">
            <div class="main-heading">SPONSORS</div>
            <div class="sponsor-grp">

                <div class="sponsor-card">
                    <h3 id="sponsor-title">Proud Sponsors</h3>
                    <div class="sponsor-img">
                        <img class="sp-logo" src="./assets/images/sponsor-1.svg">
                        <img class="sp-logo" src="./assets/images/sponsorimg-2.png">
                    </div>
                </div>

                <div class="group">
                    <div class="sponsor-card">
                        <h3 id="sponsor-title">INNOVATION PARTNER</h3>
                        <div class="sponsor-img">
                            <img class="sp-logo" src="./assets/images/sponsorimg-3.png">
                        </div>
                    </div>

                    <div class="sponsor-card">
                        <h3 id="sponsor-title">KNOWLEDGE PARTNER</h3>
                        <div class="sponsor-img">
                            <img class="sp-logo" src="./assets/images/sponsorimg-4.png">
                            <img class="sp-logo" src="./assets/images/sponsorimg-5.png">
                        </div>
                    </div>
                </div>
                <div class="group">
                    <div class="sponsor-card">
                        <h3 id="sponsor-title">PARTNER</h3>
                        <div class="sponsor-img">
                            <img class="sp-logo" src="./assets/images/sponsorimg-7.png">
                        </div>
                    </div>
                    <div class="sponsor-card">
                        <h3 id="sponsor-title">CERTIFICATE PARTNER</h3>
                        <div class="sponsor-img">
                            <img class="sp-logo" src="./assets/images/sponsorimg-8.png">
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>
    <section class="FAQ section" id="faq">
        <div class="wrapper">
            <div class="main-heading">F.A.Q.s</div>
            <div class="faq-container">
                <div class="faq-label">
                    <div class="faq-label-text">
                        Q: What will I find here?
                    </div>
                    <div class="faq-label-icon">
                        <span class="material-icons">
                            <img
                                src="https://img.icons8.com/external-vitaliy-gorbachev-fill-vitaly-gorbachev/60/000000/external-down-arrow-arrows-vitaliy-gorbachev-fill-vitaly-gorbachev.png" />
                        </span>
                    </div>
                </div>
                <div class="faq-answer ">
                    <div class="faq-answer-content">
                        Tutorial video suggestions from all platforms to provide you with the best choices.
                    </div>

                </div>
            </div>
            <!--2 question-->
            <div class="faq-container">
                <div class="faq-label">
                    <div class="faq-label-text">
                        Q: What is the registration fee?
                    </div>
                    <div class="faq-label-icon">
                        <span class="material-icons">
                            <img
                                src="https://img.icons8.com/external-vitaliy-gorbachev-fill-vitaly-gorbachev/60/000000/external-down-arrow-arrows-vitaliy-gorbachev-fill-vitaly-gorbachev.png" />
                        </span>
                    </div>

                </div>
                <div class="faq-answer ">
                    <div class="faq-answer-content">
                        Registrations are completely free and login will provide you personalized content.
                    </div>

                </div>
            </div>
            <!--2 question-->
            <div class="faq-container">
                <div class="faq-label">
                    <div class="faq-label-text">
                        Q. Does the site provide certification?
                    </div>
                    <div class="faq-label-icon">
                        <span class="material-icons">
                            <img
                                src="https://img.icons8.com/external-vitaliy-gorbachev-fill-vitaly-gorbachev/60/000000/external-down-arrow-arrows-vitaliy-gorbachev-fill-vitaly-gorbachev.png" />
                        </span>
                    </div>

                </div>
                <div class="faq-answer ">
                    <div class="faq-answer-content">
                        This is third party website for the host websites like udemy, coursera, javapoint and youtube.
                        These sites do provide certifications.
                    </div>

                </div>
            </div>
            <!--2 question-->
            <div class="faq-container">
                <div class="faq-label">
                    <div class="faq-label-text">
                        Q. How much does the courses cost?
                    </div>
                    <div class="faq-label-icon">
                        <span class="material-icons">
                            <img
                                src="https://img.icons8.com/external-vitaliy-gorbachev-fill-vitaly-gorbachev/60/000000/external-down-arrow-arrows-vitaliy-gorbachev-fill-vitaly-gorbachev.png" />
                        </span>
                    </div>

                </div>
                <div class="faq-answer ">
                    <div class="faq-answer-content">
                        Most of the course recommendations here aree free of cost, but the costof some of them depend on the content they provide and the host website policies.
                    </div>

                </div>
            </div>
            <!--2 question-->
            <div class="faq-container">
                <div class="faq-label">
                    <div class="faq-label-text">
                        Q. For how long can we access the course?
                    </div>
                    <div class="faq-label-icon">
                        <span class="material-icons">
                            <img
                                src="https://img.icons8.com/external-vitaliy-gorbachev-fill-vitaly-gorbachev/60/000000/external-down-arrow-arrows-vitaliy-gorbachev-fill-vitaly-gorbachev.png" />
                        </span>
                    </div>

                </div>
                <div class="faq-answer ">
                    <div class="faq-answer-content">
                        Depends on the subscriptions of the host website, otherwise your saved links will be in your profile forever.
                    </div>

                </div>
            </div>
            <!--2 question-->
            <div class="faq-container">
                <div class="faq-label">
                    <div class="faq-label-text">
                        Q. Do we need any pre-requisites to study a particular domain?
                    </div>
                    <div class="faq-label-icon">
                        <span class="material-icons">
                            <img
                                src="https://img.icons8.com/external-vitaliy-gorbachev-fill-vitaly-gorbachev/60/000000/external-down-arrow-arrows-vitaliy-gorbachev-fill-vitaly-gorbachev.png" />
                        </span>
                    </div>

                </div>
                <div class="faq-answer ">
                    <div class="faq-answer-content">
                        The course recommendations here start from a begineer to an expert level. So, no pre-requisites are needed.
                    </div>

                </div>
            </div>
        </div>

    </section>
    <section class="contact section" id="contact">
        <div class="wrapper">
            <div class="group3">
                <div class="contact-menu">
                    <ul style="margin-bottom:2rem; font-size: 1.5rem;">
                        <br><br>
                        <div style="color:tomato;margin-left: 0.5rem;">MENU</div><br>
                        <li>
                            <a href="#Home-Page">Home</a><br>
                        </li>
                        <li>
                            <a href="#about-us">About Us</a><br>
                        </li>
                        <li>
                            <a href="#recommended">Recommended</a><br>
                        </li>
                        <li>
                            <a href="#domains">Domains</a><br>
                        </li>
                        <li>
                            <a href="#reviews">Reviews</a><br>
                        </li>
                        <li>
                            <a href="#sponsors">Sponsors</a><br>
                        </li>
                        <li>
                            <a href="#faq">F.A.Qs</a><br>
                        </li>
                        <li>
                            <a href="#contact">Contact Us</a><br>
    
                        </li>
                    </ul>
                </div>
                <div class="footer">
                    <div class="ssit" style="font-size: 1rem;"><img src="./assets/images/logo1.jpg" height="70px">
                        Vellore Institute of Technology<br>
                        Vellore, Tamil Nadu - 632014</div>
                    <br>
                    <div class="con-info">
                        <div class="container">
                            <a href="mailto:satvik.jain2020@vitstudent.ac.in">
                                <div class="gmail"><img src="./assets/images/Gmail logo.png" height="30px">
                                    <div class="con-info">
                                        satvik.jain2020@vitstudent.ac.in </div>
                                </div>
                            </a>
                            <a href="tel:+919460290262">
                                <div class="whatsapp"><img src="./assets/images/WhatsApp.png" height="30px">
                                    <div class="con-info">+91 9460290262 </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="logos">
                        <div class="logo facebook"><a href="https://www.facebook.com/satvik.jain.7777" target="_blank"><img src="assets/images/Facebook.png" height="30px"></a></div>
                        <div class="logo instagram"><a href="https://www.instagram.com/satwick.ed/" target="_blank"><img src="./assets/images/Instagram-1.png" height="30px"></a></div>
                        <div class="logo youtube"><a href="https://www.youtube.com/channel/UCeVMnSShP_Iviwkknt83cww" target="_blank"><img src="./assets/images/YouTube-1.png" height="30px"></a></div>
                        <div class="logo linkedin"><a href="https://www.linkedin.com/in/satvik-jain-968455208/" target="_blank"><img src="./assets/images/LinkedIn Circled.png" height="30px"></a></div>
                    </div>
                </div>
            </div>
            <div class="footer-text">® TUTOFY - All Rights Reserved.</div>
        </div>
    </section>
    </div>

    </section>

    </div>

    <!-- js -->
    <script src="assets/js/script1.js"></script>
    <script type="text/JavaScript">
        function formSubmit(){
            document.getElementById('search').submit();    
        }
    </script>
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