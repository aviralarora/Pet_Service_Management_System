<?php

require("connection.php");
session_start();
if(!empty($_SESSION["uid"])){
    $uid = $_SESSION["uid"];
    $result0 = mysqli_query($con, "SELECT * FROM customer WHERE uid = $uid");
    $row0 = mysqli_fetch_assoc($result0);

    $query = "SELECT COUNT(uid) as customer_count FROM customer";
    $result = mysqli_query($con,$query);
    $row = mysqli_fetch_assoc($result);

    $query = "SELECT COUNT(pid) as pet_count FROM pet";
    $result2 = mysqli_query($con,$query);
    $row2 = mysqli_fetch_assoc($result2);

    $query = "SELECT SUM(amount) as total_amount FROM transactions";
    $result7 = mysqli_query($con,$query);
    $row7 = mysqli_fetch_assoc($result7);

    $query = "SELECT SUM(amount) as total_amount FROM sales";
    $result8 = mysqli_query($con,$query);
    $row8 = mysqli_fetch_assoc($result8);

    $query = "SELECT * FROM sales";
    $result9 = mysqli_query($con,$query);



    $query = "select * from transactions";
    $result3 = mysqli_query($con,$query);

    $query = "SELECT * FROM transactions JOIN customer ON transactions.uid = customer.uid ";
    $result4 = mysqli_query($con,$query);


    $query = "SELECT * FROM transactions JOIN services ON transactions.sid = services.sid ";
    $result5 = mysqli_query($con,$query);


    $query = "SELECT * FROM transactions JOIN pet ON transactions.pid = pet.pid ";
    $result6 = mysqli_query($con,$query);


    $query = "SELECT * FROM sales JOIN products ON sales.pid = products.pid ";
    $result10 = mysqli_query($con,$query);
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
                            <span class="title">House Of Fur<br></span>
                            <!-- <span class="welcome"><br>Welcome <?php echo $row0["name"]; ?></span> -->
                        </a>
                    </li>
                    <li>
                        <a class = "active" href="#">
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
                            <span class="icon"><ion-icon name="fish-outline"></ion-icon></span>
                            <span class="title">Pets</span>
                        </a>
                    </li>
                    <li>
                        <a href="products.php">
                            <span class="icon"><ion-icon name="storefront-outline"></ion-icon></ion-icon></span>
                            <span class="title">Products</span>
                        </a>
                    </li>
                    <li>
                        <a href="logout.php">
                            <span class="icon"><ion-icon name="exit-outline"></ion-icon></span>
                            <span class="title">Sign Out</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>


        <div class="main">
        <!-- <h1>Welcome <?php echo $row0["name"]; ?></h1> -->
            <div class="chartBox">
                <div class="chart">
                    <div>
                        <div class="numbers"><?php echo "$".$row7["total_amount"]; ?></div>
                        <div class="chartName">Pet Services</div>
                    </div>
                    <div class="iconChart">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>
                <div class="chart">
                    <div>
                        <div class="numbers"><?php echo "$".$row8["total_amount"]; ?></div>
                        <div class="chartName">Product Sales</div>
                    </div>
                    <div class="iconChart">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>
                <div class="chart">
                    <div>
                        <div class="numbers"><?php echo $row["customer_count"]; ?></div>
                        <div class="chartName">Total Customers</div>
                    </div>
                    <div class="iconChart">
                        <ion-icon name="person-outline"></ion-icon>
                    </div>
                </div>
                <div class="chart">
                    <div>
                        <div class="numbers"><?php echo $row2["pet_count"]; ?></div>
                        <div class="chartName">Total Pets</div>
                    </div>
                    <div class="iconChart">
                        <ion-icon name="fish-outline"></ion-icon>
                    </div>
                </div>
            </div>
            <div class="details">
                <div class="list">
                    <div class="header">
                        <h2>Services Log</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <td>Owner</td>
                                <td>Pet Name</td>
                                <td>Service</td>
                                <td>Date</td>
                                <td>Amount</td>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>                               
                                <?php
                                
                                    while($row3 = mysqli_fetch_assoc($result3))
                                    {
                                        $row4 = mysqli_fetch_assoc($result4);
                                        $row5 = mysqli_fetch_assoc($result5);
                                        $row6 = mysqli_fetch_assoc($result6);
                                ?>
                                <td><?php echo $row4['name'] ?></td>
                                <td><?php echo $row6['name'] ?></td>
                                <td><?php echo $row5['sname'] ?></td>
                                <td><?php echo $row3['time'] ?></td>
                                <td><?php echo "$".$row3['amount'] ?></td>

                            </tr>       
                                <?php
                                    }                                   
                                ?> 
                        </tbody>
                    </table>
                </div>
                <div class="recentMembers">
                    <div class="header">
                        <h2>Sales Log</h2>
                    </div>
                    
                    <table>
                    <thead>
                            <tr>
                                <td>Product</td>
                                <td>Quantity</td>
                                <td>Amount</td>
                            </tr>
                        </thead>
                        <tbody>
                        <tr>                               
                                <?php
                                
                                    while($row9 = mysqli_fetch_assoc($result9))
                                    {
                                        $row10 = mysqli_fetch_assoc($result10);
                                ?>
                                <td><?php echo $row10['name'] ?></td>
                                <td><?php echo $row9['quantity'] ?></td>
                                <td><?php echo $row9['amount'] ?></td>                               
                            </tr>
                            <?php
                                    }                                   
                                ?>
                        
                    </tbody>
                    </table>
                </div>
            </div>            
        </div>


        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    </body>
</html>