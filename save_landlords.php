<?php
include 'dbconnect.php';
    $name= filter_input(INPUT_POST,'name');
    $address= filter_input(INPUT_POST,'address');
    $email= filter_input(INPUT_POST,'email');
    $phone= filter_input(INPUT_POST,'phone');
    $date_joined = filter_input(INPUT_POST,'date_join');
    $password= filter_input(INPUT_POST,'password');
    $conn=mysqli_connect('localhost','root',"",'real_estate');
    $sql = "INSERT INTO landlords(address,name,email,phone,date_joined,password) values ('$address','$name','$email','$phone','$date_joined','$password')";
   $res=mysqli_query($conn,$sql);
    if(!$res)
    {
        echo "There was an error in inserting the data";

    }
else{
    $check="select * from landlords where email='$email'";
    $row=mysqli_fetch_assoc(mysqli_query($conn,$check));
    echo "The data has been saved successfully";
    //echo " your Identification number is {$row['id']}";
}
   Header("Location:master.php");
?>