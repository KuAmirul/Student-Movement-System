<?php 
   session_start();

    $msg = '';
             
   			 if($_REQUEST['id1']=='12345' && $_REQUEST['password1']=='qwer1234'){
			 $_SESSION['id1'] = '12345';
			 $_SESSION['password1'] = 'qwer1234';
			 header("Location: form.php");
			 }
			 else{
			 header("Location: login.html");
			 }
  
   
?>   
 
 <?php ob_end_flush(); ?>
