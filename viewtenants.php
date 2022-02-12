<?php include('master.php');
    include('dbconnect.php');
?>
<doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name ="keywords" content="student">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <title>Tenants</title>
</head>
    <body><br>
        <div class="content" style="margin-left: 15%;margin-top: 5%;">
            <h3><i class='fa fa-users'></i> Tenants List</h3>
            <div class='row'>
                <?php 
                    $sql = "SELECT * FROM `tenants`";
                    if ($res = mysqli_query($conn, $sql)) { 
                        if (mysqli_num_rows($res) > 0) { 
                            echo "<table class='table table-sm table-stripped' style='width:90%'>"; 
                            echo "<tr style='background:#f9f9f9;'>"; 
                            echo "<th>Name</th>"; 
                            echo "<th>Phone</th>"; 
                            echo "<th>Email</th>"; 
                            echo "<th>Propertyname</th>";
                            echo "<th>location</th>";
                             echo "<th>Date</th>";
                            echo "<th>Edit</th>";
                            echo "<th>Del</th>";
                            echo "</tr>"; 
                            while ($row = mysqli_fetch_array($res)) { 
                                echo "<tr>"; 
                                echo "<td>".$row['name']."</td>"; 
                                echo "<td>".$row['phone']."</td>"; 
                                echo "<td>".$row['email']."</td>"; 
                                echo "<td>".$row['propertyname']."</td>"; 
                                echo "<td>".$row['location']."</td>"; 
                                 echo "<td>".$row['date']."</td>"; 
                                echo "<td><a href=''><i class='fa fa-edit'></i></td>";
                                echo "<td><a href=''><i class='fa fa-trash'></i></td>";
                                // echo "<td><a href='deletelandlord.php?id=$row["id"]' onClick='return("Are you Sure You want to Delete?")'></td>";
                                echo "</tr>"; 
                            } 
                            echo "</table>"; 
                        } 
                        else { 
                            echo "No matching records are found."; 
                        } 
                    } 
                    else { 
                        echo "ERROR: Could not able to execute $sql. "
                                                    .mysqli_error($conn); 
                    } 
                    mysqli_close($conn); 
                ?>
            </div>
        </div>
    </body>
</html>

