<?php
include 'dbconnect.php';

    $name= filter_input(INPUT_POST,'name');
    $phone= filter_input(INPUT_POST,'phone');
    $email= filter_input(INPUT_POST,'email');
    $date= filter_input(INPUT_POST,'date');
    $conn=mysqli_connect('localhost','root',"",'real_estate');
    $sql = "INSERT INTO customers(name,email,phone,date) values ('$name','$email','$phone','$date')";
    $res=mysqli_query($conn,$sql);
   $res=mysqli_query($conn,$sql);
   if(!$res)
    {
        echo "There was an error in inserting the data";

    }

else{

    echo "your details has been recieved and you will be contacted soon.Thank you.";
    //echo "The data has been saved successfully";
    echo"<a href ='index.php'>Back</a>";
}

?>