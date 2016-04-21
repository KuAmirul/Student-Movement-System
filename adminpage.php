<?php
session_start();
if(!isset($_SESSION['id']) || !isset($_SESSION['password'])){
 header("Location: adminlogin.php");
} 
?>

<!doctype html>
<html>
<head>
	<title>Admin Page</title>
	<link href="style.css" type="text/css" rel="stylesheet" />
</head>
<body>
	<div class="content">
		<div class="top_block Title">
			<div class="content">
			<img src="http://i.imgur.com/0ipc0jG.jpg" style="width:auto;height:auto;" align="left">
			<h1>Welcome, Admin</h1>	<br>	
			
			</div><br>
			<div><h3><a href="logout.php">Logout</a><h3></div>
		</div>
		<div class="background Status">
		</div>
		<div class="left_block Status">
			<div class="content">
			<div class="rTable">
			<div class="rTableBody">
			<div class="rTableRow">
			<h3 class="rTableCell"><img src="https://www.leanstartupmachine.com/images/default_profile_photo.png" alt="profile" width="50" height="50" />&nbsp;Admin</h3>
			</div>
			</div>
			</div>
			</div>
		</div>

		<div class="background Body">
		</div>
		<div class="center_block Body">
		<div class="content Table">
			<div class="rTable">
			<div class="rTableBody">
			<div class="rTableRow">
			<?php

			$connection=mysqli_connect("localhost","root") or die("Cannot connect with mysql server");
			$database = mysqli_select_db($connection,"s_record") or die("Cannot connect with student database");
				
			$query="SELECT *FROM `s_record`.`record`"; 
			$result=mysqli_query($connection,$query) or die("error while retrieving data");
			mysqli_query($connection,"SELECT *FROM `s_record`.`record`") or die("error while retrieving data");
				
		
			echo "	<div class=rTableCell>ID</div>
					<div class=rTableCell>DATE</div>
					<div class=rTableCell>VEHICLE ID</div>
					<div class=rTableCell>VEHICLE MODEL</div>
					<div class=rTableCell>VEHICLE TYPE</div>
					<div class=rTableCell>CONTACT NO.</div>
					<div class=rTableCell>DESTINATION</div>
					<div class=rTableCell>EST. TIME OUT</div>
					<div class=rTableCell>EST. TIME IN</div>
					<div class=rTableCell>PURPOSE</div></div>";


			while($student_record=mysqli_fetch_assoc($result)){				
			echo "<div class=rTableRow><div class=rTableCell>{$student_record['id']}</div> ";		
			echo "<div class=rTableCell>{$student_record['date']}</div>" ;
			echo "<div class=rTableCell>{$student_record['vehId']}</div>" ;
			echo "<div class=rTableCell>{$student_record['vehModel']}</div>" ;
			echo "<div class=rTableCell>{$student_record['vehType']}</div>" ;
			echo "<div class=rTableCell>{$student_record['contact']}</div>" ;
			echo "<div class=rTableCell>{$student_record['destination']}</div>" ;
			echo "<div class=rTableCell>{$student_record['timeout']}</div>"; 
			echo "<div class=rTableCell>{$student_record['timein']}</div>" ;
			echo "<div class=rTableCell>{$student_record['purpose']}</div> </div>" ;
			}

			?>
	
		
		</div>
	</div>

</body>
</html>


