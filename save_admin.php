
<?php 
  // Start the session
session_start(); 
include('dbconnect.php');

    $name= filter_input(INPUT_POST,'name');
    $phone= filter_input(INPUT_POST,'phone');
    $email= filter_input(INPUT_POST,'email');
    $password= filter_input(INPUT_POST,'password');
    $sql = "INSERT INTO login(name,phone,email,password) values ('$name','$phone','$email','$password')";
     $res=mysqli_query($conn,$sql);
    if(!$res)
    {
        echo "There was an error in inserting the data";

    }

else{
    echo "The query was successfull<br>";
    echo "<a href='master.php'>Back </a>";
}
?>