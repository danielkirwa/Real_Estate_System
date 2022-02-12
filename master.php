
<header role="banner">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/icon.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/custom.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.respons.css">

  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
  <h1 style="color:red;background:grey;"><img src="images/3.jpg"height="50px" width="90px" >Real Estate</h1></h1>
  <ul class="utilities">

  

    <br>
    <li class="logout btn btn-warning"><a href="login.php">Log Out</a></li>
  </ul>
</header>

<nav role='navigation'>

  <ul class="main">
    <li class="dashboard"><a href="index.php">Home page</a></li>
    <li class="users"><a href="landlords.php">New Landlords</a></li>
    <li class="users"><a href="alllandlords.php">All Landlords</a></li>
    <li class="users"><a href="allcustomers.php."login.php>Potential customers</a></li>
    <li class="users"><a href="admin.php">Add Admin </a></li>
    
  </ul>
</nav>
<div id="Admin"style="background-color:#ff00ff;width: 40%;height:500px;display: none;position: absolute;right:40%;top:100px;">
<table border="1">
  <tr>
    <td><a href="landlords.php">Register landlords</a></td>
    <td><a href="save_landlors.php">view Landlords</a></td>
  </tr>
</table>
</div>

<script>
  
  function showAdmin()
  {
  document.getElementById("Admin").style.display="block";
}

</script>