<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body style="background-color:#c2c2f2"> 
      
 <div class="container" style="background-color:#3498DB;color:#ffffff;text-align:left;padding-bottom:10px;">
  <center><h4><br>Medicines Prescribed</h4></center>
  <table class="table table-hover" style="background-color:#ffffff; color:#000000;">
      <tbody>
          <tr style="background-color:#2885d6; color:#ffffff;"> 
      <th>ID</th>
      <th>Medicines</th>
      <th> Dosage </th>
      <th>Start Date</th>
      <th>End Date </th>
    </tr>
  
    
    
   <?php
$con=mysqli_connect("localhost","root","","hmsdb");
    $id= $_POST['id'];
    $query = "SELECT * FROM `prescription` WHERE id='$id'";
    $result =  mysqli_query($con, $query) or die(mysqli_error($con));
     while($row=mysqli_fetch_array($result)){
    $id=$row['id'];
    $med=$row['medicine'];
    $time=$row['timings'];
    $sdate=$row['sdate'];
    $edate=$row['edate'];
    echo '<tr>
      <td>'.$id.'</td>
      <td>'.$med.'</td>
        <td>'.$time.'</td>  
        <td>'.$sdate.'</td>       
        <td>'.$edate.'</td>       
    </tr>';
    
     } 
         
         


?>

      </tbody>
  </table>


    </div>   
      
      
       <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>