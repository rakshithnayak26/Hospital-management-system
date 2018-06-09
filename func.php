<?php
$username=$_POST['username'];
	$password=$_POST['password'];
	$check_username="/admin/";
    	$check_password="/root/";
	if(preg_match_all($check_username,$username)&&preg_match_all($check_password,$password))
		header("Location:admin-panel.php");
	else {
	 echo "<script>alert('Error Login')</script>";
         echo"<script>window.open('index.php','_self')</script>";
	}
        
        
?>