<?php
session_start();
include('dbconnect.php');
   $landlord_id=filter_input(INPUT_POST,'landlord_id');
    $propertyname=filter_input(INPUT_POST,'propertyname');
    $location=filter_input(INPUT_POST,'location');
    $occupancy_status=filter_input(INPUT_POST,'occupancy_status');
    $price=filter_input(INPUT_POST,'price');
    $property_status=filter_input(INPUT_POST,'property_status');
  
    if(isset($_POST['upload']))
{
    $profile_name=$_FILES['profile']['name'];
    $tmp_file=$_FILES['profile']['tmp_name'];
    $destin="images/".$profile_name;
    print_r($_FILES['profile']);
    if(move_uploaded_file($tmp_file, $destin))
    {
          $sql="INSERT INTO property(landlord_id,propertyname,location,occupancy_status,price,property_status,profile_pic) values('$landlord_id','$propertyname','$location','$occupancy_status','$price','$property_status','$destin')";
    $res=mysqli_query($conn,$sql);
    if(!$res)
    {
        echo "There was an error in inserting the data";

    }
else{
    echo "The query was successfull<br>";
    echo "<a href='index.php' >Home</a>";
}
}
else{
    echo "There was an error in uploading the profile picture";
}
}
?>