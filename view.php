<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard</title>
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
      <li class="active"><a href="#">Home</a></li>
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
  font-size: 28px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>


<body>


<div class="sidenav">
  <a href=view.php>Submission of the Bug</a>
  <a href=status.php>Status of Submission</a>
</div>



<style>
/* Style inputs, select elements and textareas */
input[type=text], select, textarea{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
}

/* Style the label to display next to the inputs */
label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

/* Style the submit button */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

/* Style the container */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

/* Floating column for labels: 25% width */
.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

/* Floating column for inputs: 75% width */
.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}


</style>

<body>

<div class="container">
  <form action="#" method="POST">

   <div class="row">
      <div class="col-25">
        <label>Bug Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="bname" name="bname" placeholder="Bug name">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label>Bug Type</label>
      </div>
      <div class="col-75">
        <input type="text" id="btype" name="btype" placeholder="Bug Type">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label>Bug Description</label>
      </div>
      <div class="col-75">
        <textarea id="bdes" name="bdes" placeholder="Write about bug.." style="height:200px"></textarea>
      </div>
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
      $i2=$_POST['bname'];
      $i3=$_POST['btype'];
      $i4=$_POST['bdes'];
          
         
      $qry=mysqli_query($con,"INSERT INTO `bugg`(`bid`, `bname`, `btype`, `bdes`) VALUES (0,'$i2','$i3','$i4')") or die(mysqli_error($con));
               

            if($qry == true)
               {


                   echo "
                  <script>
                 alert('Bug details submitted succesfully');
                 window.location='view.php';
                 </script>
                   ";
                }
                else
                {
                   echo "
                  <script>
                 alert('Bug details not submitted successfully');
                 window.location='view.php';
                 </script>
                   ";
                }     

     }
?>        



</body>
</html>