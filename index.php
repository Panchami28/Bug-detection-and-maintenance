<html>
<head>
<title>welcome</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<br>


<body background="backg.webp">
<center>
	<div class="card" style="width:25rem;">
  <img src="login.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">
    	<div class="container">
    	<form method="POST" action"#">
    <label for="exampleInputEmail1"><B><h5>Username</h5></B></label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username" name="username">
    <small id="emailHelp" class="form-text text-muted">We'll never share your username with anyone else</small>
  </div>
  <div class="container">
    <label for="exampleInputPassword1"><B><h5>Password</h5></B></label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
  <div class="container">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div><br>
  <div class="container">
  <button type="submit" class="btn btn-primary" name="submit">SUBMIT</button>
  </div>
  <div class="container">
  </div>
    </p>
  </div>
  </div>
  </form>
</center>

<?php
    include('db.php');
    if(isset($_POST['submit']))
     {
     	$e=$_POST['username'];
     	$p=$_POST['password'];
        	
        	$qry=mysqli_query($con,"SELECT * FROM `admin` WHERE uname='$e' and pass='$p'");
            $res=mysqli_fetch_array($qry);
     
        		if($res == true)
    			{


                   echo "
        	        <script>
        	       alert('Login successful');
        	       window.location='dash.php';
        	       </script>
                   ";
                }
                else
                {
                	 echo "
        	        <script>
        	       alert('Wrong password');
        	       window.location='index.php';
        	       </script>
                   ";
                }     

        }
?>        

</body>
</html> 