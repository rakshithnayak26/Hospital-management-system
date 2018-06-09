<?php
$con=mysqli_connect("localhost","root","","hmsdb");
function display_docs()
{
    global $con;
       $query="select * from doctb ";
       $result=mysqli_query($con,$query) or die(mysqli_error($con));
       while($row =mysqli_fetch_array($result))
       {
           $name=$row['name'];
           echo '<option value='.$name.'>'.$name.'</option>';
       }
    
}


function disprec()
{
    global $con;
       $query="select * from allid ";
       $result=mysqli_query($con,$query) or die(mysqli_error($con));
       while($row =mysqli_fetch_array($result))
       {
           $prid=$row['prid'];
           echo '<option value='.$prid.'>'.$prid.'</option>';
       }
    
}

?>
