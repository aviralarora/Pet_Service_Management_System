
<?php

require('connection.php');
session_start();
if(!empty($_SESSION["uid"])){
  header("Location: dashboard.php");
}
if(isset($_POST["submit"])){
  $email = $_POST["email"];
  $password = $_POST["password"];
  $result = mysqli_query($con, "SELECT * FROM customer WHERE email = '$email'");
  $row = mysqli_fetch_assoc($result);
  $result2 = mysqli_query($con, "SELECT admin FROM customer WHERE email ='$email'");
  $row2 = mysqli_fetch_assoc($result2);

  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["uid"] = $row["uid"];
      if($row2["admin"] == 1)
      header("Location: dashboard.php");
      else
      header("Location: home.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
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


    <style>
      .header {
    width: 100%;
    height: 100vh;
    background: url(img/login.jpg);
    background-repeat: no-repeat;
    background-size: cover;
      }
      </style>
</head>

<body>
    <!-- Header Section -->
    <div class="header" id="home">
        <nav id="navbar">
            <a href="#home" class="logo"><img src="img/logo.png" width="30%"><span></span></a>
            <div class="links" id="nav">
                <a href="home.php">Home</a>
                <a href="home.php#about">About</a>
                <a href="home.php#blog">Blog</a>
                <a href="home.php#service">Services</a>
                <a href="home.php#shop">Products</a>
                <a href="home.php#contact">Contact</a>
                <a href="home.phplogin.php">Login</a>
            </div>
            <div class="fas fa-bars" id="menu-btn" onclick="openmenu()"></div>
            <div class="fa-solid fa-xmark" id="close" onclick="closemenu()"></div>
        </nav>
            <div class="content">         
              <a href="cart.php"><button class="btn" style="color: black;">Proceed to Checkout</button></a>
            </div>
          </div>
        </div>
    </div>
    <!-- Header Section End -->

        <!-- Products Section -->

        <section class="team" id="shop">
        <h1 class="heading"> Our <span>Products</span></h1>
        <p class="heading-description">We deliver our products free door to door 24x7 = 360</p>
        <div class="container">
            <div class="team-box">
                <div class="team-img">
                    <img src="img/pic-1.png" alt="">
                </div>
                <div class="team-content">
                    <h3>John Deo</h3>
                    <p>Cook</p>
                    <div class="social">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="team-box">
                <div class="team-img">
                    <img src="img/pic-2.png" alt="">
                </div>
                <div class="team-content">
                    <h3>John Deo</h3>
                    <p>Cook</p>
                    <div class="social">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="team-box">
                <div class="team-img">
                    <img src="img/pic-3.png" alt="">
                </div>
                <div class="team-content">
                    <h3>John Deo</h3>
                    <p>Cook</p>
                    <div class="social">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="team-box">
                <div class="team-img">
                    <img src="img/pic-2.png" alt="">
                </div>
                <div class="team-content">
                    <h3>John Deo</h3>
                    <p>Cook</p>
                    <div class="social">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    </div>
                </div>
            </div>
            <a href="shop.php"><button class="btn" style="color: black;">See More</button></a>
        </div>
        
    </section>
    <!-- Team Section End-->


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="script.js"></script>
</body>

</html>