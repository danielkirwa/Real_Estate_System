<?php
?>
<!doctype html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name ="keywords" content="property">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <title>property</title>
</head>
<body>
    <div>
    </div>
    <div class="row justify-content-center">
    <div class="col-md-4"style="margin-left:10%; auto;margin-right:border: 1px solid #000080;border:10px solid green;padding:5px;
                border-radius:0px;background: lightgoldenrodyellow;height:50%; ">
        <h2> property page</h2>
        <hr>
        <form action="save_property.php" method="POST" enctype="multipart/form-data">
            <label for="landlord_id">landlord_id</label>
            <input type="text" name="landlord_id" placeholder="Enter landlord_id." autocomplete="off" required><br><br>
<label for="propertyname">propertyname</label>
            <input type="text" name="propertyname" placeholder="Enter Real estate name." autocomplete="off" required><br><br>

            <label for="location">location</label>
            <input type="text" name="location"placeholder="Enter Location of the rentals." autocomplete="off" required><br><br>

            <label for="occupancy_status">occupancy_status</label>
            <input type="text" name="occupancy_status"placeholder="Enter occupancy status." autocomplete="off" required><br><br>
        
            <label for="price">price</label>
                        <input type="text" name="price" autocomplete="off" required><br><br>
            
            <label for="property_status">property_status</label>
            <input type="text" name="property_status" autocomplete="off" required><br><br>

            <label for="profile_pic">Profile photo</label>
           <input type="file" name="profile" accept="images/*">
            <button class="btn btn-primary" type="submit" name="upload">Submit</button>
                        <button class="btn btn-warning" type="reset">Reset</button>

        </form>
    </div>

</body>
</html>
