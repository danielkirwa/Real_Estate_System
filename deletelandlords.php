<?php
$name=$_POST['name'];
include ('dbconnect.php');
echo $name;
$del ="delete from landlords where name='$name'";
if($delQuery=mysqli_query($conn,$del))
{
    ?>
    <script>
        echo("The user was deleted successfully ");
    </script>

    <?php
    head ('location:viewlandlords.php');
}
else{
    ?>
    <script>
        echo("the process was not successful please repeate");
    </script>
    <?php
}
?>