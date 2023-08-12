
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
        <div class="content">   
  <div class="container mt-5">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Product Name</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Total</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Product 1</td>
          <td>$10</td>
          <td>2</td>
          <td>$20</td>
        </tr>
        <tr>
          <td>Product 2</td>
          <td>$20</td>
          <td>1</td>
          <td>$20</td>
        </tr>
        <tr>
          <td>Product 3</td>
          <td>$30</td>
          <td>3</td>
          <td>$90</td>
        </tr>
        <tr>
          <td colspan="3" class="text-right">Total</td>
          <td>$130</td>
        </tr>
      </tbody>
    </table>
    <div class="text-right">
      <a href="checkout.php"><button class="btn btn-primary">Checkout</button></a>
    </div>
  </div>

        </div>
    </div>
    <!-- Header Section End -->

    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"></script>
</body>

