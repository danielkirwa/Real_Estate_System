<?php

$conn = mysqli_connect('localhost','root','','real_estate') or die(mysql_error());
$address=filter_input(INPUT_POST,'address');
$email=filter_input(INPUT_POST,'email');
$password=filter_input(INPUT_POST,'password');
$sql="select * from landlords where adresss='$address' and email='$email' and password='$password'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($res);
$count=mysqli_num_rows($res);
if($count==1)
{
    ?>
    <script>alert("Login successful");</script>
    <?php
    header("location:.php");
}
else{
    echo "Please try again there was an error";
}
?>