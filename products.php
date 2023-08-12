<?php

include("connection.php");
session_start();
if(!empty($_SESSION["uid"])){
$query = "select * from products";
$result = mysqli_query($con,$query);
//Add Product
if(isset($_POST["add_product"])){
    // Get input values from form
    $name = $_POST["name"];
    $price = $_POST["price"];

    // Prepare SQL statement
    $sql = "INSERT INTO products (name, price) VALUES ('$name', '$price')";
    $con->query($sql);

    $con->close();

}

// Edit product
// if(isset($_POST["save"])){
//     // Get input values from form
//     $pid = $_POST["pid"];
//     $name1 = $_POST["name"];
//     $price1 = $_POST["price"];

//     // Prepare SQL statement
//     $sql = "UPDATE products SET name='$name1', price='$price1' WHERE pid='$pid'";
//     $conn->query($sql);

// }

}
else{
  header("Location: login.php");
}


?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Dashboard</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body> 
        <div class="container">
            <div class="navigation">
                <ul>
                    <li>
                        <a href="#">
                            <span class="icon"><ion-icon name="logo-octocat"></ion-icon></span>
                            <span class="title">House Of Fur</span>
                        </a>
                    </li>
                    <li>
                        <a href="dashboard.php">
                            <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                            <span class="title">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="customers.php">
                            <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                            <span class="title">Customers</span>
                        </a>
                    </li>
                    <li>
                        <a href="pets.php">
                            <span class="icon"><ion-icon name="fish-outline"></ion-icon></ion-icon></span>
                            <span class="title">Pets</span>
                        </a>
                    </li>
                    <li>
                        <a class = "active" href="#">
                            <span class="icon"><ion-icon name="storefront-outline"></ion-icon></span>
                            <span class="title">Products</span>
                        </a>
                    </li>
                    <li>
                        <a href="home.php">
                            <span class="icon"><ion-icon name="exit-outline"></ion-icon></span>
                            <span class="title">Sign Out</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>



        <div class="main">
                <!-- <center>
                    <div class="search">
                        <label>
                            <input type="text" placeholder="Search">
                            <ion-icon name="search-outline"></ion-icon>
                        </label>               
                    </div>
                </center> -->
                <div class="details">
                <div class="list">
                    <div class="header">
                        <h2>Products List</h2>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <td>Name</td>
                                <td>Price</td>
                                <td>Edit</td>
                                <td>Save</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>                               
                                <?php
                                
                                    while($row = mysqli_fetch_assoc($result))
                                    {
                                ?>
                                <td><?php echo $row['name'] ?></td>
                                <td><?php echo "$".$row['price'] ?></td>
                                    <!-- <td> 
                                        <form method="POST" action="">
                                    <input type="text" class="name" name="name" required>
                                    <input type="number" class="number" name="price" step="0.01" required>
                                        </form>
                                    </td>
                                    <td><form method="POST" action=""><input type="submit" class="btn" name="save" value="save"></from></td> -->

                            </tr>       
                                <?php
                                    }                                   
                                ?>  
                        </tbody>
                    </table>
                </div>
                <div class="recentMembers">
                    <div class="header">
                        <h2>Add Product</h2>
                    </div>
                    
                    <table>
                    <thead>
                            <tr>
                                <td>Name</td>
                                <td>Price</td>
                                <td>Save</td>
                            </tr>
                        </thead>
                        <tbody>
                        <form method="POST" action="products.php">
                            <td><input type="text" class="text" name="name" required></td>
                            <td><input type="number" class="number" name="price" step="0.01" required></td>
                            <td><input type="submit" class ="btn" name="add_product" value="Add Product"></td>
                        </form>
                        
                    </tbody>
                    </table>
                </div>
            </div>
        </div>


        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


    </body>
</html>