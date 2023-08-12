<?php

include("connection.php");
session_start();
if(!empty($_SESSION["uid"])){
$query = "select * from customer";
$result = mysqli_query($con,$query);

$query2 = "select * from customer where membership=1";
$result2 = mysqli_query($con,$query2);
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
                        <a class = "active" href="#">
                            <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                            <span class="title">Customers</span>
                        </a>
                    </li>
                    <li>
                        <a href="pets.php">
                            <span class="icon"><ion-icon name="fish-outline"></ion-icon></span>
                            <span class="title">Pets</span>
                        </a>
                    </li>
                    <li>
                        <a href="products.php">
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
                        <h2>Customers List</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <td>Name</td>
                                <td>Age</td>
                                <td>Gender</td>
                                <td>Phone Number</td>
                                <td>Email</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>                               
                                <?php
                                
                                    while($row = mysqli_fetch_assoc($result))
                                    {
                                ?>
                                <td><?php echo $row['name'] ?></td>
                                <td><?php echo $row['age'] ?></td>
                                <td><?php echo $row['gender'] ?></td>
                                <td><?php echo $row['phone'] ?></td>
                                <td><?php echo $row['email'] ?></td>

                            </tr>       
                                <?php
                                    }                                   
                                ?>  
                        </tbody>
                    </table>
                </div>

                <div class="recentMembers">
                    <div class="header">
                        <h2>Recent Memberships</h2>
                    </div>
                    
                    <table>
                        <tbody>
                        <tr>                               
                                <?php
                                
                                    while($row = mysqli_fetch_assoc($result2))
                                    {
                                ?>
                                <td><?php echo $row['name'] ?></td>
                            </tr>
                            <?php
                                    }                                   
                                ?>
                        
                    </tbody>
                    </table>
                </div>
            </div>

            </div>
        </div>


        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

        
    </body>
</html>