<?php 
   session_start();

    $msg = '';
  
			 if($_REQUEST['id']=='admin@utp' && $_REQUEST['password']=='admin1234'){
			 $_SESSION['id'] = 'admin@utp';
			 $_SESSION['password'] = 'admin1234';
			 header("Location: adminpage.php");
			 }
			 else{
			 header("Location: adminlogin.html");
			 }
   
    
?>   
 
 <?php ob_end_flush(); ?>
