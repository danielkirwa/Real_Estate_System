<?php
// Start the session
session_start();
$conn = mysqli_connect('localhost','root','','real_estate') or die(mysql_error());
$email=filter_input(INPUT_POST,'email');
$pword=filter_input(INPUT_POST,'pword');
$sql="select * from tenants where email='$email' and password='$pword'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($res);
$count=mysqli_num_rows($res);
if($count==1)
{
    ?>
    <script>alert("Login successful");</script>
    <?php
    header("location:tenantpage.php");
}
else{
    echo "Please try again there was an error";
}
?>