<?php 
include('master.php');
?>
<html>
<head>
<title>ALL POTENTIAL CUSTOMERS</title>

  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
  <script src="js/jquery.js.js"></script>
  <script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">

</head>
<body>
<?php include 'dbconnect.php'?>

<br>
    <div class="content" style="margin-left: 15%;margin-top: 5%;margin-right:2%;padding: 5px;>
        <div class="row justify-content-center">

<?php

$connection=mysqli_connect("localhost","root","","real_estate"); //connect to database

//select all details of those who have applied for certificates

 $select="SELECT id,name, phone, email, date FROM customers";
 
 $result=mysqli_query($connection,$select);  //execuitng the query;
 
 $i=1; // used to display number of items
 
  
  
 echo "<table class='table table-bordered table-stripped' border='1'> ";
 echo "<tr><th COLSPAN='4'><font color='green'>Potential customers </font></th></tr>";
echo "<tr>
<th><font color='brown'>Id</th>
<th><font color='brown'>Name</th>
 <th><font color='brown'>Phone</th>
 <th><font color='red'>Email</th>
 <th><font color='blue'>Date</th>
 <th><font color='red'>EDIT &nbsp; VIEW &nbsp; DELETE&nbsp; </th>
 </tr>";
 
 $i=1;

 while($row=mysqli_fetch_array($result))  //reading all the values from the tables
  { 
?>


<tr class="del<?php echo $id ?>">
  <td  class="hide"><?php echo $candidate_rows['abc']; ?></td>
  <td align="center"><?php echo $row['id']; ?></td>
  <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['phone']; ?></td>
  <td><?php echo $row['email']; ?></td>
  <td><?php echo $row['date']; ?></td>
  <td>
  <a class="btn btn-Success" href="edit_customers.php<?php echo '?id='.$id; ?>"><i class="icon-edit icon-small"></i>Edit</a>
  <a class="btn btn-info"href="view_customers.php<?php echo '?id='.$id; ?>"><i class="icon-list icon-small"></i>View</a>
  <a class="btn btn-danger"href="delete.php<?php echo '?name='.$name; ?>"><i class="icon-trash icon-small"></i>Delete</a>
  </td>


<?php
$i++;
  
 
  		
echo "</tr>";

  }
 echo "</table>";
echo "<input type='button' value='print' onclick='window.print()' />";

?>
</div>

<button><a href="master.php">Back </button>
</body>
</html>