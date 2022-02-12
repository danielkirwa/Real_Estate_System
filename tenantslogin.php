<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head><title>login form</title>
<style>
</style>
</head>
<body>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
<div class="content">
        <div class="row justify-content-center">
            <div class="col-md-4" style="text-align:left;width:20%; margin-left: 10%; border: 1px solid #000080; border-radius: 3px; padding: 20px; background: #fafafa;background-image:url(images/tt.jpg);">
            <form action="tenantpage.php" method="POST">
email:<br/><input type="email" name="email" placeholder="enter your username" required><br/><br/>
password:<br/><input type="password" name="pword" placeholder="enter the password" required><br/><br/><<input  class="btn btn-primary" type="submit" value="LOGIN" name="login"><br/> New tenant? click <a href="tenants.php">here</a>
</form>
</body>
</div>
</html>
