<!DOCTYPE html>
<?php include('fromdb.php');?>
<html lang="en">
  <head>
    <!-- Required meta tags -->   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <style type="text/css">
    button:hover{cursor:pointer;}
    #inputbtn:hover{cursor:pointer;}
  </style>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="navbar-brand"><i class="fa fa-hospital-o" aria-hidden="true"></i> Global Hospital</div>
  <button class="navbar-toggler" type="button"  data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav mr-auto">
       <li class="nav-item">
        <a class="nav-link" href="index.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" method="post" action="search.php">
      <input class="form-control mr-sm-2" type="text" placeholder="Enter contact number" aria-label="Search" name="contact">
      <input type="submit" class="btn btn-outline-light my-2 my-sm-0 btn btn-outline-light" id="inputbtn" name="search_submit" value="Search">
    </form>
  </div>
</nav>
      <div style="background-color:#c2c2f2">
      <div class="jumbotron" style="border-radius:0;background:url('images/background5.jpg');background-size:cover;height:400px;"></div>
   <div class="container-fluid" style="margin-top:50px;">
    <div class="row">
  <div class="col-md-3">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Appointment</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Payment Status</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Doctors</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Prescription</a>
    <a class="list-group-item list-group-item-action" id="list-branch-list" data-toggle="list" href="#list-branch" role="tab" aria-controls="branch">Branches</a>
    </div><br>
  </div>
  <div class="col-md-9">
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
        <div class="container-fluid">
          <div class="card">    
              <div class="card-body" style="background-color:#3498DB;color:#ffffff;"> 
                  <center><h4>Book an appointment</h4></center></div> <br>
              <div class="card-body">
              <form class="form-group" method="post" action="appointment.php">
                <div class="row">
                    
                  <div class="col-md-4"><label>First Name:</label></div>
                  <div class="col-md-8"><input type="text" class="form-control" name="fname"></div><br><br>
                  <div class="col-md-4"><label>Last Name:</label></div>
                  <div class="col-md-8"><input type="text" class="form-control"  name="lname"></div><br><br>
                  <div class="col-md-4"><label>Email id:</label></div>
                  <div class="col-md-8"><input type="text"  class="form-control" name="email"></div><br><br>
                  <div class="col-md-4"><label>Contact Number:</label></div>
                  <div class="col-md-8"><input type="text" class="form-control"  name="contact"></div><br><br>
                  <div class="col-md-4"><label>Doctor:</label></div>
                  <div class="col-md-8">
                    <select name="doctor" class="form-control" >
                        
                      <!--<option value="Dr.Punam">Dr.Punam</option>
                      <option value="Dr.Ashok">Dr.Ashok </option> -->
                      <?php display_docs(); ?>
                    </select>
                  </div><br><br>
                    <div class="col-md-4"><label>Prescription ID:</label></div>
                  <div class="col-md-8">
                  
                   <select name="prids" class="form-control" >
                        
                      <?php disprec(); ?>
                    </select>
                  </div><br><br>
                  
                  <div class="col-md-4"><label>Payment:</label></div>
                  <div class="col-md-8">
                    <select name="payment" class="form-control" >
                      <option value="Paid">Paid</option>
                      <option value="Pay later">Pay later</option>
                    </select>
                  </div><br><br><br>
                  <div class="col-md-4">
                    <input type="submit" id="inputbt" name="pat_submit" value="Book Appointment" class="btn btn-primary">
                  </div>
                  <div class="col-md-8"></div>                  
                </div>
              </form>
            </div>
          </div>
        </div><br>
      </div>
      
        <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                 <div class="container-fluid">
          <div class="card">    
              <div class="card-body" style="background-color:#3498DB;color:#ffffff;"> 
                  <center><h4>Update payment status</h4></center></div> <br>         
                <div class="card-body">
                    <form class="form-group" method="post" action="status.php">
                        <input type="text" name="contact" class="form-control" placeholder="Enter contact" > <br>
                        <select name="State" class="form-control"> 
                            <option value="paid"> Paid </option>
                            <option value="pay later"> Pay later </option>
                        </select><br> <hr>
                        <input type="submit" value="update" name="update_data" class="btn btn-primary">
                    </form>
                    </div>      
            </div><br><br>
            </div>
        </div>
      
      
        <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
            
        <div class="container" style="background-color:#3498DB;color:#ffffff;text-align:left;padding-bottom:10px;">
  <center><h4><br>Doctor Details</h4></center>
  <table class="table table-hover" style="background-color:#ffffff; color:#000000;">
      <tbody>
          <tr style="background-color:#2885d6; color:#ffffff;"> 
      <th>ID</th>
        <th>Name</th>
      <th>Qualification</th>
      <th>Experience</th>
      <th>Contact</th>
      <th>Timings</th>
    </tr>
 
    <?php
    $con=mysqli_connect("localhost","root","","hmsdb");
    $query="select * from detail";
 $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
    $did=$row['did'];
        $name=$row['name'];
    $qual=$row['qualification'];
    $exp=$row['experience'];
    $contact=$row['contact'];
    $timings=$row['time'];
    echo '<tr>
       <td>'.$did.'</td> 
      <td>'.$name.'</td>
      <td>'.$qual.'</td>
      <td>'.$exp.'</td>
      <td>'.$contact.'</td>
      <td>'.$timings.'</td>
    </tr>';
  } ?>
      <br>
      </tbody>
  </table>
        </div>
        </div>
        <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
      
             <div class="container-fluid">
          <div class="card">    
              <div class="card-body" style="background-color:#3498DB;color:#ffffff;"> 
                  <center><h4>Prescription</h4></center></div> <br>         
                <div class="card-body">
                    <form class="form-group" method="post" action="unique.php">
                        <input type="text" name="id" class="form-control" placeholder="Enter the unique ID given" > <br>
                         <input type="submit"  value="Submit" name="update_data" class="btn btn-primary">
                    </form>
                    </div>  
            </div><br><br>
            </div>
        </div>
            
            <div class="tab-pane fade" id="list-branch" role="tabpanel" aria-labelledby="list-branch-list">
                
                 <div class="container" style="background-color:#3498DB;color:#ffffff;text-align:left;padding-bottom:10px;">
  <center><h4><br>Our Branches</h4></center>
  <table class="table table-hover" style="background-color:#ffffff; color:#000000;">
      <tbody>
          <tr style="background-color:#2885d6; color:#ffffff;"> 
      <th>Hospital</th>
      <th>Address</th>
      <th>Contact</th>
    </tr>
 
    <?php
    $con=mysqli_connect("localhost","root","","hmsdb");
    $query="select * from branches";
 $result=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($result)){
    $hospital=$row['hospital'];
    $address=$row['address'];
    $ph=$row['contact'];
    echo '<tr>
      <td>'.$hospital.'</td>
      <td>'.$address.'</td>
      <td>'.$ph.'</td>
    </tr>';
  } ?>
      <br>
      </tbody>
  </table>
        </div>
                
                
            </div>
            
        </div>
    </div>
  </div>
</div>
   </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>