<?php 
include('master.php');
?>

<html>
<head>
<center><title>ALL  REGISTERED LANDLORDS</title></center>

  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">

  <script src="js/jquery.js.js"></script>
  <script src="js/bootstrap.min.js"></script>


</head>
<body>
<?php include 'dbconnect.php'?>
<br>
    <div class="content" style="margin-left: 15%;margin-top: 5%;margin-right:2%;padding: 5px;>
        <div class="row justify-content-center">
      
<?php

$connection=mysqli_connect("localhost","root","","real_estate"); //connect to database

//select all details of those who have applied for certificates

 $select="SELECT id,address,name, phone, email,date_joined date FROM landlords";
 
 $result=mysqli_query($connection,$select);  //execuitng the query;
 
 $i=1; // used to display number of items
 
  
  
 echo "<table class='table table-bordered table-stripped' border='1'> ";
 echo "<tr><th COLSPAN='4'><font color='green'><i class='users'</i>ALL Registered Landlords </font></th></tr>";
echo "<tr>
<th><font color='brown'>Id</th>
<th><font color='brown'>Name</th>
<th><font color='brown'>address</th>
<th><font color='red'>Email</th>
 <th><font color='brown'>Phone</th>
 <th><font color='blue'>Date Joined</th>
 <th><font color='red'>EDIT &nbsp; VIEW &nbsp; DELETE&nbsp; </th>
 </tr>";
 
 $i=1;

 while($row=mysqli_fetch_assoc($result))  //reading all the values from the tables
  { 
 ?>
<tr class="del<?php echo $id ?>">
  <td  class="hide"><?php echo $candidate_rows['abc']; ?></td>
  <td align="center"><?php echo $row['id']; ?></td>
  <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['address']; ?></td>
  <td><?php echo $row['email']; ?></td>
  <td><?php echo $row['phone']; ?></td>
  <td><?php echo $row['date']; ?></td>


  <td>
    <li>
  <a class="btn btn-Success" href="edit_candidate.php<?php echo '?id='.$id; ?>"><i class="icon-edit icon-large"></i>Edit</a>
  <a class="btn btn-info"  data-toggle="modal" href="#<?php echo $id; ?>" ><i class="icon-list icon-large"></i>View</a>
  <a class="btn btn-danger" id="<?php echo $id; ?>"><i class="icon-trash icon-large"></i>Delete</a>
  </td>
</li>

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