<?php
session_start();
if (!isset($_SESSION["user_id"])) {
    // Redirect to login page if user is not authenticated
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/home.css">

    </head>
    <body>

        <header class="head">
            <div class="h1">
                Welcome to my salon!
            </div>
            <div class="day">
                Mon-Sat: 8.00 am  to 7.00 pm 
                |
                8080075018
            </div>
        </header>

        <nav>
            <div class="nav">
            <span class="lakme">Salon</span>
            <ul class="list">
                <li><a href="index.php">Home</a></li>
                <li><a href="portfolio.php">Portfolio</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="aboutus.php">About us</a></li>
                <li><a href="https://www.inscapebeautysalon.com/blog">Blog</a></li>
                <li><a href="contactus.php">Contact</a></li>
                <li><a href="form3.php">Book Now</a></li>
            </ul>
        </div>
        </nav>

        <section class="sec1">
            <img src="img/img1.jpg" style="height: 550px;width:100%;">
        </section>

        <section class="sec2">
            <p class="p3">Our services</p>
            <p class="p4">The House of Hair Salon & Spa, incididunt ut labore et dolore magna aliqua.</p>
           
            <div class="box1">
            <img src="img/hair_brush.jpg">
            </div>

            <div class="box2">
            <img src="img/haircut.jpg">
            </div>
          
            <div class="box3">
                <img src="img/hair_style.jpg">
            </div>

            <div class="box4">
                <img src="img/facial.jpg">
            </div>
        </section>

        <section class="sec3">
            <div class="image">
                <img src="img/img2.jpg" alt="hair image" height="350px" class="img">
            </div>

            <div class="h2">
                <h2 >Why Choose Us</h2>
            </div>
            <div class="choose">
                <ul class="ul_li">
                    <li> We Strive For LIVE Answer On Our Calls.</li>
                    <li>A Wide Spectrum Of Skills And Experience.</li>
                    <li>Fast Response To Requests & Critical Response Time Guaranteed.</li>
                    <li>We Help Solve Your Business Problems.</li>
                </ul>
            </div>
        </section>
        
        <section class="sec4">
            <div class="div6">
                <p class="p5">Make Stilo Your<br>Number One Choice</p>
            </div>
            <div class="div7">
                <p class="p6">Lorem ipsum dolor sit amet, consectetur adipisicing elit,<br> sed do eiusmod tempor incididunt ut la. </p>
            </div>
            <div class="div8">
                <a href="form3.php"><button class="button1">BOOK AN APPOINTMENT</button></a>
                <a href="contactus.php"><button class="button2">Contact Us</button></a>

            </div>
        </section>

        <footer>
            <div class="div9">
                <h2>Salon</h2>
            </div>

            <div class="div10">
                <p><br><br>We would love to serve you and let you enjoy<br> your culinary experience. Excepteur sint<br> occaecat cupidatat non proident.<br><br><br>Copyright ©2023 All rights reserved | This <br>template is made by Vaibhav Shingte </p>
            </div>
            
            <div class="div11">
                <p class="p6">Opening Times</p>
                <p class="p7"><br>Monday to Friday: 10 am - 5 pm <br>Saturday: 12 pm - 6 pm</p>
            </div>
            <div class="div12">
                <p class="p8">Contact Us</p>
            </div>
            <div class="div13">
                <p class="p9"> <br>Mob: 7796801994<br>
                    E-mail: Hair@gmail.com<br>
                </p>
            </div>
        </footer>



    </body>
</html>