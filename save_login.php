<?php



include 'dbconnect.php';


    $name= filter_input(INPUT_POST,'name');
    $email= filter_input(INPUT_POST,'email');
    $phone= filter_input(INPUT_POST,'phone');
    $word= filter_input(INPUT_POST,'word');
    $conn=mysqli_connect('localhost','root',"",'real_estate');
    $sql = "INSERT INTO login(name,email,phone,password) values ('$name','$email','$phone','$word')";
   $res=mysqli_query($conn,$sql);
    if(!$res)
    {
        echo "There was an error in inserting the data";

    }
else{
    $check="select * from login where email='$email'";
    $row=mysqli_fetch_assoc(mysqli_query($conn,$check));
    echo "The data has been saved successfully";
    echo " your Identification number is {$row['id']}";
    echo "<br/> click <a href='systemlogin.php'>here</a> to move to login page";
}
   /* Header("Location: login.php");*/
?>