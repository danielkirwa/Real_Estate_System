<?php
    $name=$_POST['name'];
    include('dbconnect.php');
    echo $name;
   $del="delete from landlords where name='$name'";
    if($delQuery=mysqli_query($conn,$del))
    {
        ?>
        <script>
        echo("The user was deleted successfully");
        </script>

        <?php
        //header('location:master.php');
    }
    else{
        ?>
        <script>
        echo("The process was not successful please repeat");
        </script>
        <?php
    }
?>