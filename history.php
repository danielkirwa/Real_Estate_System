<?php
include('heading.php');
include('dbconnect.php');
include('session.php');

?>
</head>
<body>
<?php include('nav_top.php'); ?>
<div class="wrapper">
<div class="home_body">
	<button type="button" class="close" data-dismiss="modal">×</button>
	    <h3> </h3>
	  </div>
	    <a href="#" class="btn" data-dismiss="modal">Close</a>
		</div>
		</div>
		   <li>....</li>
	 </ul>
	<form class="navbar-form pull-right">
	<?php $result=mysqli_query($conn,"select * from history where User_id='$id_session'");
	$row=mysqli_fetch_array($result);
	?>
	<font color="white">Welcome:<i class="icon-user-md"></i><?php echo $row['User_Type']; ?></font>
	<a class="btn btn-danger" id="logout" data-toggle="modal" href="#myModal"><i class="icon-off"></i>&nbsp;Logout</a>
	<div class="modal hide fade" id="myModal">
	<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">×</button>
	    <h3> </h3>
	  </div>
	  <div class="modal-body">
	    <p><font color="gray">Are You Sure you Want to LogOut?</font></p>
	  </div>
	  <div class="modal-footer">
	    <a href="#" class="btn" data-dismiss="modal">No</a>
	    <a href="logout.php" class="btn btn-primary">Yes</a>
		</div>
		</div>

	</form>
	</div>
	</div>
	</div>
	
	
	<div id="element" class="hero-body">
	<table class="users-table">


<div class="demo_jui">
		<table cellpadding="0" cellspacing="0" border="0" class="display" id="log" class="jtable">
			<thead>
				<tr>
				<th>Date</th>
				<th>Action</th>
				<th>Data</th>
				<th>User</th>
				</tr>
			</thead>
			<tbody>

<?php $login_query=mysqli_query($conn,"select  * from login");
		while($login_rows=mysqli_fetch_array($login_query)){ $id=$login_rows['login_id'];?>

<tr class="del<?php echo $id ?>">
	<td>&nbsp;<?php echo $login_rows['date']; ?></td>
	<td><?php echo $login_rows['action']; ?></td>
	<td><?php echo $login_rows['data']; ?></td>
	<td>&nbsp;<?php echo $login_rows['user']; ?></td>
		
	
	</tr>
<?php } ?>

			</tbody>
		</table>
	</div>
	</div>
</div>
</body>
</html>
