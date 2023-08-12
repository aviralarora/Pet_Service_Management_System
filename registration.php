<?php
require 'connection.php';
session_start();

if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $age = $_POST["age"];
  $gender = $_POST["gender"];
  $phone = $_POST["phone"];
  $email = $_POST["email"];
  $address = $_POST["address"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];

  $duplicate = mysqli_query($con, "SELECT * FROM customer WHERE email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Email Has Already Registered'); </script>";
  }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO customer VALUES('','$name','$age','$gender','$phone','$email','$address','$password','','')";
      mysqli_query($con, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
      $_SESSION['email'] = $email;
      $_SESSION['name'] = $name;
        header('Location: mail.php');
        exit;
      
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
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
    <title>House Of Fur</title>
    <!-- Custom css -->
    <link rel="stylesheet" href="home.css">
    <!-- Font Awesome Cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />

    <style>
      .header {
    width: 100%;
    height: 100vh;
    background: url(img/signup.jpg);
    background-repeat: no-repeat;
    background-size: cover;
      }
      </style>

</head>

<body>
    <!-- Header Section -->
    <div class="header" id="home">
        <nav id="navbar">
            <a href="#home" class="logo"><img src="img/logo.png" height="100%" width="30%"><span></span></a>
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
        <div class="content ">
            <h3>It's Just You & Your Pet</h3>
            <h1>Registration</h1>
            <form class="" action="" method="post" autocomplete="off">
              <label for="name">Name : </label>
              <input type="text" name="name" id = "name" required value=""> <br>
              <label for="age">Age : </label>
              <input type="text" name="age" id = "age" required value=""> <br>
              <label for="gender">Gender : </label>
              <input type="text" name="gender" id = "gender" required value=""> <br>
              <label for="phone">Phone : </label>
              <input type="number" name="phone" id = "phone" required value=""> <br>
              <label for="email">Email : </label>
              <input type="email" name="email" id = "email" required value=""> <br>
              <label for="address">Address : </label>
              <input type="text" name="address" id = "address" required value=""> <br>
              <label for="password">Password : </label>
              <input type="password" name="password" id = "password" required value=""> <br>
              <label for="confirmpassword">Confirm Password : </label>
              <input type="password" name="confirmpassword" id = "confirmpassword" required value=""> <br>
              <button type="submit" name="submit">Register</button>
            </form>
            <br>
            <a href="login.php">Login</a>

        </div>
    </div>
    <!-- Header Section End -->

    <script src="script.js"></script>
</body>

</html>
