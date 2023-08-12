<?php

require("connection.php");
session_start();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>House Of Fur</title>
    <!-- Custom css -->
    <link rel="stylesheet" href="home.css">
    <!-- Font Awesome Cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
</head>

<body>
    <!-- Header Section -->
    <div class="header" id="home">
        <nav id="navbar">
            <a href="#home" class="logo"><img src="img/logo.png" height="100%" width="30%"><span></span></a>
            <div class="links" id="nav">
                <a href="#home">Home</a>
                <a href="#about">About</a>
                <a href="#blog">Blog</a>
                <a href="#service">Services</a>
                <a href="#shop">Products</a>
                <a href="#contact">Contact</a>
                <a href="login.php">Login</a>
                <a href=""><ion-icon name="cart-outline"></ion-icon></a>
            </div>
            <div class="fas fa-bars" id="menu-btn" onclick="openmenu()"></div>
            <div class="fa-solid fa-xmark" id="close" onclick="closemenu()"></div>
        </nav>
        <div class="content">
            <h3>It's Just You & Your Pet</h3>
            <h1>where pets are cherished,<br>happiness flourished.</h1>
            <button class="btn">Book Now</button>
        </div>
    </div>
    <!-- Header Section End -->

    <!-- About Section -->
    <section class="about" id="about">
        <div class="container">
            <div class="image">

            </div>
            <div class="about-content">
                <h1>What makes us special?</h1>
                <h3>Lorem ipsum dolor sit amet consectetur odio.</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus, tempora maiores est aut nulla
                    dicta molestias temporibus consequuntur fugiat repellendus. Nobis suscipit at beatae obcaecati?
                    Omnis, earum. Nemo, culpa? Mollitia unde dignissimos reprehenderit architecto.</p>
                <button class="btn" style="color: black;">About Us</button>

            </div>
        </div>
    </section>
    <!-- About Section End-->

    <!-- Blog Section -->
    <section class="blog" id="blog">
        <h1 class="heading">Our <span>Blog</span></h1>
        <p class="heading-description">Read our blog and know more about our latest update..</p>
        <div class="container">
            <div class="post">
                <div class="blog-img">
                    <img src="img/post1.jpg" alt="">
                    <span>21 <br> Jun </span>
                </div>
                <div class="blog-content">
                    <h3>By admin |<span> John Doe</span></h3>
                    <h1>Tasty and refresing coffee</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus at minus explicabo?</p>
                </div>
            </div>
            <div class="post">
                <div class="blog-img">
                    <img src="img/post2.jpg" alt="">
                    <span>21 <br> Jun </span>
                </div>
                <div class="blog-content">
                    <h3>By admin |<span> John Doe</span></h3>
                    <h1>Tasty and refresing coffee</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus at minus explicabo?</p>
                </div>
            </div>
            <div class="post">
                <div class="blog-img">
                    <img src="img/post3.jpg" alt="">
                    <span>21 <br> Jun </span>
                </div>
                <div class="blog-content">
                    <h3>By admin |<span> John Doe</span></h3>
                    <h1>Tasty and refresing coffee</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus at minus explicabo?</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End-->
    <!-- Service Section -->
    <section class="service" id="service">
        <h1 class="heading">Our <span>Services</span></h1>
        <p class="heading-description"> Long lasting & true love your pets</p>
        <div class="container">
            <div class="service-box">
                <div class="service-img">
                    <img src="img/boarding.jpg" alt="">
                </div>
                <div class="service-content">
                    <h3>Boarding</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, tenetur?</p>
                </div>
            </div>
            <div class="service-box">
                <div class="service-img">
                    <img src="img/grooming.jpg" alt="">
                </div>
                <div class="service-content">
                    <h3>Grooming</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, tenetur?</p>
                </div>
            </div>
            <div class="service-box">
                <div class="service-img">
                    <img src="img/vaccination.jpg" alt="">
                </div>
                <div class="service-content">
                    <h3>Vaccination</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, tenetur?</p>
                </div>
        </div>
    </section>
    <!-- Service Section End -->



    <!-- Products Section -->

    <section class="team" id="shop">
        <h1 class="heading"> Our <span>Products</span></h1>
        <p class="heading-description">We deliver our products free door to door 24x7 = 360</p>
        <div class="container">
        <div class="team-box">
                <div class="team-img">
                    <img src="img/p2.png" alt="">
                </div>
                <div class="team-content">
                    <h3>Product 1</h3>
                    <p>100/-</p>
                    <div class="social">
                    <button class="btn" style="color: black;">Add to cart</button>
                    </div>
                </div>
            </div>
            <div class="team-box">
                <div class="team-img">
                    <img src="img/p2.png" alt="">
                </div>
                <div class="team-content">
                    <h3>Product 2</h3>
                    <p>150/-</p>
                    <div class="social">
                    <button class="btn" style="color: black;">Add to cart</button>
                    </div>
                </div>
            </div>
            <div class="team-box">
                <div class="team-img">
                    <img src="img/p2.png" alt="">
                </div>
                <div class="team-content">
                    <h3>Product 3</h3>
                    <p>700/-</p>
                    <div class="social">
                    <button class="btn" style="color: black;">Add to cart</button>
                    </div>
                </div>
            </div>
            <div class="team-box">
                <div class="team-img">
                    <img src="img/p2.png" alt="">
                </div>
                <div class="team-content">
                    <h3>Product 4</h3>
                    <p>625/-</p>
                    <div class="social">
                    <button class="btn" style="color: black;">Add to cart</button>
                    </div>
                </div>
            </div>
        </div>
        <center><a href="shop.php"><button class="btn" style="color: black;">See More</button></a></center>
        
    </section>
    <!-- Products Section End-->

    <!-- Contact Section  -->
    <section class="contact" id="contact">
        <h1 class="heading">Contact <span>Us</span></h1>
        <p class="heading-description">We are always here for you...</p>
        <div class="container">
            <div class="contact-box">
                <div>
                    <i class="fa-solid fa-envelope"></i>
                    <h2>Email address <br> <span>Send email anytime</span></h2>
                </div>
                <div>
                    <p>admin@domain.com</p>
                    <i class="fa-solid fa-right-long"></i>
                </div>
            </div>
            <div class="contact-box">
                <div>
                    <i class="fa-solid fa-location-dot"></i>
                    <h2>Address <br> <span>Find Us</span></h2>
                </div>
                <div>
                    <p>Patna , India</p>
                    <i class="fa-solid fa-right-long"></i>
                </div>
            </div>
            <div class="contact-box">
                <div>
                    <i class="fa-solid fa-phone"></i>
                    <h2>Call Us <br> <span>Call us anytime</span></h2>
                </div>
                <div>
                    <p>+1234567890</p>
                    <i class="fa-solid fa-right-long"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section End -->




    <!-- Footer Section -->
    <section class="footer">


        <div class="container">
            <div class="footer-box">
                <h3>about us </h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non laborum nisi id amet sit? Cum, rem?
                    Nam, in at. Officiis?</p>
                <p>Copyrights &copy; 2023 All rights reserved By <a href="home.php">House Of Fur</a></p>

            </div>
            <div class="footer-box">
                <h3>Newsletter</h3>
                <p>Stay updated with our latests</p>
                <form>
                    <input type="email" name="email" placeholder="user@gmail.com">
                    <button type="submit"><i class="fa-solid fa-right-long"></i></button>
                </form>
            </div>
            <div class="footer-box">
                <h3>Follow Us</h3>
                <p>Connect With Us On:</p>
                <div>
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                </div>

            </div>
        </div>
    </section>
    <!-- Footer Section End -->

    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>