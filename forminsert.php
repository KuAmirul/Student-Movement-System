

<?php


$connection=mysqli_connect("localhost","root") or die("Cannot connect with mysql server");

$sql1 = "CREATE DATABASE IF NOT EXISTS s_record" ;
 mysqli_query($connection,$sql1); 
 
$sql2 = "  CREATE TABLE IF NOT EXISTS record(
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `date` varchar(80) NOT NULL,
  `vehId` varchar(50) NOT NULL,
  `vehModel` varchar(80) NOT NULL,
  `vehType` varchar(13) NOT NULL,
  `contact` varchar(13) NOT NULL,
  `destination` varchar(13) NOT NULL,
  `timeout` varchar(13) NOT NULL,
  `timein` varchar(13) NOT NULL,
  `purpose` varchar(13) NOT NULL,
   PRIMARY KEY (`id`))
 ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ";
    mysqli_query($connection,$sql2); 

$database = mysqli_select_db($connection,"s_record") or die("Cannot connect with student database");
	
// Escape user inputs for security
$id = mysqli_real_escape_string($connection, $_POST['id']);
$date = mysqli_real_escape_string($connection, $_POST['date']);
$vehId = mysqli_real_escape_string($connection, $_POST['vehId']);
$vehModel = mysqli_real_escape_string($connection, $_POST['vehModel']);
$vehType = mysqli_real_escape_string($connection, $_POST['vehType']);
$contact = mysqli_real_escape_string($connection, $_POST['contact']);
$destination = mysqli_real_escape_string($connection, $_POST['destination']);
$timeout = mysqli_real_escape_string($connection, $_POST['timeout']);
$timein = mysqli_real_escape_string($connection, $_POST['timein']);
$purpose = mysqli_real_escape_string($connection, $_POST['purpose']);

// insert query execution
$sql = "INSERT INTO s_record.record (id, date, vehId,vehModel,vehType,contact,destination,timeout,timein,purpose) 
		VALUES ('$id', '$date', '$vehId','$vehModel','$vehType','$contact','$destination','$timeout','$timein','$purpose')";

	if(mysqli_query($connection, $sql)){
		echo '<script type="text/javascript">'; 
		echo 'alert("Record succesfully submitted");'; 
		echo '</script>';
		header("Location: 1 Main Page.html");
		}
	else
		echo "<script type='text/javascript'>alert('failed!')</script>";

	
// close connection
mysqli_close($connection);
?>
