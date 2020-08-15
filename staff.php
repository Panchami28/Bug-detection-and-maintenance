<!DOCTYPE html>
<html lang="en">
<head>
  <title>ADD STAFF</title>
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
     <form class="form-inline" method="POST"> 
    <div class="form-group">
    <label>Name :</label>
    <input type="text" name="name"><br><br>
    <label>Address :</label>
    <textarea  id="addr" name="addr"  rows="3" cols="50"></textarea>
    <br><br>
    <label>Contact Number :</label>
    <input type="text" name="no"><br><br>
    <label for="Email">Email :</label>
    <input type="email" name="em"><br><br>
    <label>Designation :</label>
    <input type="text" name="desig"><br><br>
   <input type="submit" name="add" value="Add Staff">
  </div>
</div>
</form>
</div>
<?php
    include('db.php');
    if(isset($_POST['add']))
    {
      $n=$_POST['name'];
      $a=$_POST['addr'];
      $no=$_POST['no'];
      $em=$_POST['em'];
      $d=$_POST['desig'];

      $qry=mysqli_query($con,"INSERT INTO `staff`(`sid`,`sname`, `saddress`, `scontact`, `semail`, `sdesig`) VALUES (0,'$n','$a','$no','$em','$d')") or die(mysqli_error($con));
        if($qry==true)
        {
          echo "
          <script>
                 alert('Staff added');
                 window.location='dash.php';
             </script>   
          ";

        }
        else
        {
          echo "
          <script>
                 alert('Failed');
                 window.location='staff.php';
             </script>   

          ";
        }
    }
    ?>


</body>
</html>
 