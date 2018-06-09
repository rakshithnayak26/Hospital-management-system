<?php

$con=mysqli_connect("localhost","root","","hmsdb");
$contact=$_POST['contact'];
$status=$_POST['State'];
$query="update appoint set payment='$status' where contact='$contact'";
$result=  mysqli_query($con, $query) or die(mysqli_error($con));

      echo "<script>alert('Payment Status Changed')</script>";
         echo"<script>window.open('admin-panel.php','_self')</script>"; 
         
         
     

?>
