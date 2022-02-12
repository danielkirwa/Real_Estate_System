

<?php

$conn = mysqli_connect('localhost','root',"",'real_estate') or die(mysql_error());
$address=filter_input(INPUT_POST,'address');
$email=filter_input(INPUT_POST,'email');
$password=filter_input(INPUT_POST,'password');
$sql="select * from landlords where email='$email' and password='$password'";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($res);
$count=mysqli_num_rows($res);
if($count==1)
{
    ?>
    <script>alert("contact the system admin<u>0743283327</u>");</script>
    <?php
    header("location:property.php");
}
else{
    echo "contact the system admin <u>0743283327</u>";
    echo"<button><a href='index.php'</a>Back</button>";
}
?>