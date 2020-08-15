<!DOCTYPE html>
<html>
<head>
  <title>Assign bugs</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>


<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href=dash.php>Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>



<style>
.sidenav {
  height: 100%;
  width: 160px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 18px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 160px; /* Same as the width of the sidenav */
  font-size: 14px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

.dropdown {
   position: absolute;
  top: 116px;
  left:375px;
  display: inline-block;
}

.f {
   position: absolute;
  top: 320px;
  left:375px;
  
}
label{
  width:200px;
  display: inline-block;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>



<div class="sidenav">
  <a href="#about">View Submission</a>
  <a href=assign.php>Assign bug</a>
  <a href="#clients">Clients</a>
  <a href=staff.php>Add staff</a>
</div>

<div class="main">
  <form class="form-inline" method="POST" action="#">
  <h4>Bug details:</h4>
  <br>
    <div class="form-group">
      <label for="type">Type of Bug:</label> 
      <div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">-select-
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <li><a href="#">Type1</a></li>
      <li><a href="#">Type2</a></li>
    </ul>
  </div>
    </div>
     <br><br>
    <div class="form-group">
      <label for="outline">Bug id:</label>
      <input type="text" class="form-control" id="bid" name="bid">
    </div>
    <br><br>
    <div class="form-group">
      <label for="outline">Project outline:</label>
      <input type="text" class="form-control" id="outline" name="outline">
    </div>
    <br><br>
    <div class="form-group">
      <label for="sec">Section containing bug:</label>
      <input type="text" class="form-control" id="section" name="section">
    </div>
    <br><br>
    <div class="form-group">
     <label for="descr">Bug description:</label>
     <div class="f"><textarea  id="descript" name="descript"  rows="4" cols="50"></textarea></div>
    </div>
    <br><br><br><br>
    <hr>
    <h4>Assigned Staff details:</h4>
    <br>
    <div class="form-group">
      <label for="pwd">Staff name:</label>
      <input type="name" class="form-control" id="name" name="name">
    </div>
    <br><br>
    <div class="form-group">
      <label for="pwd">Staff id:</label>
      <input type="id" class="form-control" id="sid" name="sid">
    </div>
    <br><br>
    <div class="form-group">
      <label for="pwd">Contact no:</label>
      <input type="text" class="form-control" id="cno" name="cno">
    </div>
    <br><br>
    <div class="form-group">
      <label for="pwd">Email id:</label>
      <input type="email" class="form-control" id="email" name="email">
    </div>
    <br><br>
    <div class="form-group">
      <label for="pwd">No of days assigned:</label>
      <input type="text" class="form-control" id="days" name="days">
    </div>
    <br>
    <hr>
    <button type="submit" class="btn btn-primary" name="submit"><h5><b>SUBMIT</b></h5></button>
    <br>
  </form>
</div>




<?php
    include('db.php');
    if(isset($_POST['submit']))
     {
      $i1=$_POST['bid'];
      $i2=$_POST['sid'];
      $i3=$_POST['days'];
          
          $qry=mysqli_query($con,"INSERT INTO `assign`(`bid`, `sid`, `days`) VALUES ('$i1','$i2','$i3')");
     
               if($qry == true)
               {


                   echo "
                  <script>
                 alert('Assigned successfully');
                 window.location='dash.php';
                 </script>
                   ";
                }
                else
                {
                   echo "
                  <script>
                 alert('Not successful');
                 window.location='assign.php';
                 </script>
                   ";
                }     

     }
?>        

</body>
</html>
