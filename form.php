<?php
session_start();
if(!isset($_SESSION['id1']) || !isset($_SESSION['password1'])){
 header("Location: login.php");
} 
?>

<!doctype html>
<link href="formstyle.css" type="text/css" rel="stylesheet" />
<html>
		<head>
			<title>Student Movement Form </title>
		</head>
		<body>


		<div class="Title">
		<img src="http://i.imgur.com/mBXSGzd.png" style="width:auto;height:auto;" align="left">
		<div ><br><h1>STUDENT MOVEMENT FORM</h1><br></div>
		</div>
		
		<form action="forminsert.php" method="post"  >
		<hr></hr>
			<div class="center_block Body">
			<div class="content Table">
			<div class="rTable">
			<div class="rTableBody">
			<div class="rTableRow">
			<div class="rTableCell"> <b>STUDENT ID:</b> <br> <input type="text" name="id"></div>
			<div class="rTableCell"> <b>DATE:</b> <br> <input type="date" name="date" min ="2000-01-01" </br></br></div>
			<div class="rTableCell"> <b>VEHICLE ID:</b> <br> <input type="text" name="vehId"></div>
			<div class="rTableCell"> <b>VEHICLE MODEL:</b> <br> <input type="text" name="vehModel"></div>
			</div>
			</div>
			</div>
			</div>
			</div>
		<br><br>
		
			<div class="center_block Body">
			<div class="content Table">
			<div class="rTable">
			<div class="rTableBody">
			<div class="rTableRow">
			<div class="rTableCell">  <b>VEHICLE TYPE:</b>  <br>
				<input type="radio" name="vehType" value="Motorcycle"> Motorcycle<br>
				<input type="radio" name="vehType" value="Car"> Car<br></div>
			<div class="rTableCell">  <b>CONTACT NUMBER:</b> <br> <input type="number" name="contact"></div>
			<div class="rTableCell"> <b>DESTINATION:</b> <br> <input type="text" name="destination"></div>
			</div>
			</div>
			</div>
			</div>
			</div>	
			
		<br></br>
		
		<div class="center_block Body">
			<div class="content Table">
			<div class="rTable">
			<div class="rTableBody">
			<div class="rTableRow">
			<div class="rTableCell"><b>ESTIMATED TIME OUT:</b> <br> <input type="time" name="timeout"></div>
			<div class="rTableCell">  <b>ESTIMATED TIME IN:</b> <br> <input type="time" name="timein"></div>
			<div class="rTableCell"> <b>PURPOSE:</b> <br> <textarea rows="4" cols="50" name="purpose"></textarea></div>
			</div>
			</div>
			</div>
			</div>
			</div>		
		
		<div>	<h3 align="right"><a href="logout.php">Logout</a></h3> </div>
		
			<p align="center">
		
				<button type="submit" onclick="submit()">Submit</button>
			</p>
								
			<script>
			function submit() {
				alert("Record successfully submitted!");
			}
			</script>
			
			<p align="center">
				<input type="button" value="Print" onclick="myFunction()"/>
			</p>						
			
			</form>	
			
			
			<script>
			function myFunction() {
				window.print();
			}
			</script>	
	
		</body>
	</html>
