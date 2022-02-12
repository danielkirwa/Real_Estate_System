<!DOCTYPE html>
<html>
<head>
	<title>upload</title>
</head>
<body>
<form action="" method="POST" enctype="multipart/form-data">
	Upload:<input type="file" name="profile">
	<input type="submit" name="upload" value="upload">
</form>
</body>
</html>
<?php
if(isset($_POST['upload']))
{
	$profile_name=$_FILES['profile']['name'];
	$tmp_file=$_FILES['profile']['tmp_name'];
	$destin="images/".$profile_name;
	print_r($_FILES['profile']);
	if(move_uploaded_file($tmp_file,$destin))
	{
		echo "The image was successfully uploaded";
	}
	else{
		echo "Please try again";
	}
}
?>