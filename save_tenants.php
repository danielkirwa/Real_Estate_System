<?php    
// Start the session
session_start();
include('dbconnect.php');
include('session.php');

    $name= filter_input(INPUT_POST,'name');
    $phone= filter_input(INPUT_POST,'phone');
    $email= filter_input(INPUT_POST,'email');
    $propertyname= filter_input(INPUT_POST,'propertyname');
    $location = filter_input(INPUT_POST,'location');
    $date= filter_input(INPUT_POST,'date');
    $sql = "INSERT INTO tenants(name,phone,email,propertyname,location,date) values ('$name','$phone','$email','$propertyname','$location','$date')";
     $res=mysqli_query($conn,$sql);
    if(!$res)
    {
        echo "There was an error in inserting the data";

    }

else{
    echo "The query was successfull";
    echo"<button><a href='tenantpage.php'</a>Back</button>";
}
?>