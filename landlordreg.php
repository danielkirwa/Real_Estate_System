<!doctype html>
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
    <div>
        <a href="landlords.php"><button>NEW</button></a>
        <a href="save_landlords.php"><button>VIEW ALL landlords</button></a>
    
    </div>
    <div class="content">
        <div class="row justify-content-center">
            <div class="col-md-4" style="text-align:left; margin-left: 10%; border: 1px solid #000080; border-radius: 3px; padding: 20px; background: #fafafa;background-image:url(images/tt.jpg);">
                <h4>New landlord</h4>
                <hr>
                <form class="form-group" action="save_landlords.php" method="POST">

                    <label for="Name">Name</label>
                    <input type="text" class="form-control" name="Name" placeholder="Enter landlord Name." autocomplete="off" required>
    
     <label for="Address">Address:</label>
                    <input type="text" class="form-control" name="Address"placeholder="Enter Email Address" autocomplete="off" required>  

                    <label for="phone">phone:</label>
                    <input type="text" class="form-control" name="phone" placeholder="Enter phone number." autocomplete="off" required>

                    <label for="Email">Email:</label>
                    <input type="text" class="form-control" name="Email" autocomplete="off" required>

                    <label for="Date Joined">DATE</label>
                    <input type="date" class="form-control" name="Date Join" placeholder="Enter The Day the landlord Join." autocomplete="off" required><br/>
                    
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <button class="btn btn-warning" type="reset">Reset</button>
               
                        
                    <br>
                    
                </form>         

            </div>
               
        </div>
        
    </div>

</body>
</html>
