<?php
include('session.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name ="keywords" content="tenants">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <title>Tenants Record</title>
</head>
<body><br>
    <div class="content">
        <div class="row justify-content-center">
<div class="row justify-content-center">
            <div class="col-md-4" style="text-align:left; margin-left: 10%; border: 1px solid #000080; border-radius: 3px; padding: 10px; background:#fafafa;background-image:url(images/tt.jpg);">
            <h4>New Tenant</h4>
        <hr>
    <form action="save_tenants.php" method="POST">

            <label for="Name">Name</label>
            <input class="form-control" type="name" name="name" placeholder="Enter Tenant name." autocomplete="off" required>

            <label for="phone">phone:</label>
            <input class="form-control" type="text" name="phone"placeholder=" Enter phone number." autocomplete="off" required>

            <label for="email">email</label>
            <input class="form-control" type="email" name="email" placeholder="Enter Email Address" autocomplete="off" required>
           <label for="propertyname">propertyname:</label>
            <input class="form-control" type="text" name="propertyname"placeholder="Enterpropertyname" autocomplete="off" required><br>
             <label for="location">location:</label>
            <input class="form-control" type="text" name="location" placeholder="Enter rental location"autocomplete="off" required><br>
          <label for="date">date:</label>
            <input class="form-control" type="date" name="date" autocomplete="off" required><br>
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <button class="btn btn-warning" type="reset">Reset</button>
               
                        
                    
                    
                </form>         
           </div>
            </div>
        
    </div>

</body>
</html>