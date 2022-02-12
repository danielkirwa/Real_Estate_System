<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
   
</head>
<body>

	<div>
	<div class="content" style="margin-left: 30%;">
        <div class="row justify-content-center">
        	
<div class="col-md-4" style="text-align:left;width:40%; border:1px solid #000080;margin-left:0%  border-radius: 3px; padding: 20px; background: #fafafa;margin-top:10%;background-image:url(images/tt.jpg); ">
                    <form action="" method="post">
                       <label>phone number:</label><input type="number" name="number" placeholder="enter phone number" required
                      <label>Email:</label><input type="email" name="email" placeholder="enter email address"  required>
				       <label>Password:</lable><input type="password" name="password" placehodler="enter the password" required><br/>
					   <input  class="btn btn-primary" type="submit"value="LOGIN" name="login"><br/> 
				</form>
			</container>
			<div>
			</div>
		</div>
</div>

</body>
</html>
<?php
include('dbconnect.php');
if(isset($_POST['login']))
{
    $email=$_POST['email'];
    $word=$_POST['password'];
    $sql="select * from login where email='$email' and password='$word'";
    $query=mysqli_query($conn,$sql);
    $count=mysqli_num_rows($query);
    if($count=='1')
    {
        header("location:master.php");
    }
    else{
        
    echo "check email and password or contact admin <u>0743283327<u> ";
    }
}

?>