
<style>
ul li{
  color:#00ff00;
  list-style:none;
  width:150px;
}
ul li ul li{
  display:none;
}
ul li:hover ul li{
  display:block;
}
ul li a{
  text-decoration:none;
}
.image{
  border-radius:70px;
}
#dash{
  background-color:green;
  width:200px;
  height:200px;
  font-weight:bold;
  border:5px solid black;
  text-align:left;
  display:none;
}
a{
  color:white;
  font-weight:bold;
  text-decoration:none;
}
/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color:#F54444  ;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color:black;
}
 </style>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">

    <body style="background-color:gray;">
    <div>
     <body style="background-color:gray;">
</div>
  <body background="images/ni.jpg">
    
    <center>
      <h1 style="background-color:gray"><img src="images/2.jpg"height="100px" width="300px" class="image"><font size="+0"></font>
      </center></h1>
      <hr>
     <h1 style="background-color:gray;color:#00ff00"> <marquee>WELCOME TO REAL ESTATE...</marquee>
     <hr>
    </div> 
    
 </div>

<div class="topnav">
  <a href="#">Home</a>
  <a href="login.php">Admin</a>
  <a href="loginform.php">Landlord</a>
   <a href="tenantpage.php">See available rooms</a>
</div> 


<script>
function display()
{
document.getElementById("dash").style.display="block";
}
function hide()
{
  document.getElementById("dash").style.display="none";
}
</script>
<footer style="position:absolute;bottom:5%;right:5%"></footer>
</html> 