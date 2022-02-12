<html>
<head><title>features of the rooms</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body style="background-color:gray;font-weight:bold;color:green;font-family:algerian;">
	<br>
	<hr>
<center><u>This are the features and the pictures of the rooms</u></center>
<hr>
    <br><br>
</body>
</html>
<?php


$conn = mysqli_connect('localhost','root','','real_estate') or die(mysql_error());
$sql="select * from property";
$res=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($res))
	

{
    echo "<div class='col-md-4' style='text-align:left; margin-left: 0%; border: 1px solid #000080;border:1px solid #000080; border-radius: 0px; padding:margin-bottom:2px; background:skyblue'>";
    echo "<table><tr style='margin-top:1px;'><td style='color:blue;font-weight:bold;height:0p%'>";
    echo "Property name:<u>{$row['propertyname']}</u></td><td style='color:blue;font-weight:bold'></tr><tr><td style='color:blue;font-weight:bold'>";
    echo "Location:<u>{$row['location']}</u></td>
    <td style='color:blue;font-weight:bold'></tr><tr><td style='color:blue;font-weight:bold'>";
    echo "OCCUPANCY STATUS:<u>{$row['occupancy_status']}</u></td><td style='color:blue;font-weight:bold'></tr><tr><td style='color:blue;font-weight:bold'>";
    echo "Property status:<u>{$row['property_status']}</u></td><td style='color:blue;font-weight:bold'></tr><tr><td style='color:blue;font-weight:bold'>";
    echo "Price:<u>{$row['price']}</u></td>";
    echo "<a href={$row['profile_pic']}><img src={$row['profile_pic']} height='100' width='200'></a>";
        echo "<button type='btn btn success' style='position:absolute;bottom:1%;color:;center:0%'><a href=customers.php>select the room</button>";

    echo "</tr></table></div>";


}
?>
