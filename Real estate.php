<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students</title>
</head>
<body>
    <div>
        <a href="index.php"><button>NEW</button></a>
        <a href="students.php"><button>VIEW ALL STUDENTS</button></a>
    </div>
    <div>
        <table>
            <thead>
                <th>landlord</th>
                <th>Real Estate Name</th>
                <th>location </th>
                <th>Available of roooms</th>
                <th>Service provided</th>
                <th>price<th>
                <th>call/sms<th>
            </thead>
            <tbody>
                <?php
                    include "dbconnect.php";
                    $query = "select * from landlord_record;";
                    $result = mysqli_query($conn,$query);
                    while($row = mysqli_fetch_assoc($result)){
                    // while($row = $result->fetch_assoc()){
                        echo "<tr>";
                        echo "<td>".$row['reg_no']. "</td>";
                        echo "<td>".$row['name']. "</td>";
                        echo "<td>".$row['dob']. "</td>";
                        echo "<td>".$row['phone']. "</td>";
                        echo "<td>" ."<a href='#'><button>Delete</button></a>"."</td>";
                        echo "<td>"22 ."<a href='#'><button>Edit</button></a>"."</td>";
                        echo "</tr>";


                    }

                ?>
            </tbody>
        </table>
    </div>
    
</body>
</html>