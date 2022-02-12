<?php
?>
<doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name ="keywords" content="student">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <title>Landlord Record</title>
</head>
<body><br>
    <div class="content" style="margin-left: 10%;margin-top:5%;">
        <div class="row justify-content-center">
            <div class="col-md-4" style="text-align:left; margin-left: 10%; border: 1px solid #000080; border-radius:3px; padding:50px; background: #fafafa;background-image:url(images/tt.jpg);">
                <h4>New landlord</h4>
                <hr>
                <form action="save_landlords.php" method="POST">
                    <label for="name">Name</label>
                      <input type="text" class="form-control" name="name" placeholder="Enter landlord Name." autocomplete="off" required>
    
                     <label for="Address">Address:</label>
                    <input type="text" class="form-control" name="address"placeholder="Enter Address" autocomplete="off" required>  
            
                    <label for="phone">phone:</label>
                   <input type="text" class="form-control" name="phone" placeholder="Enter phone number." autocomplete="off" required>

                    <label for="Email">Email:</label>
                    <input type="email" class="form-control" name="email"placeholder="Enter email address" autocomplete="off" required>

                    <label for="Date">Date</label>
                    <input type="date" class="form-control" name="date_join" placeholder="The day  Joined." autocomplete="off" required>

                    <label for="Password">password:</label>
                    <input type="password" class="form-control" name="password" autocomplete="off" required>
                    <button class="btn btn-primary" type="submit">Submit</button>
                    <button class="btn btn-warning" type="reset">Reset</button>
               
                        
                    <br>
                    
                </form>         

            </div>
               
        </div>
        
    </div>

</body>
</html>

