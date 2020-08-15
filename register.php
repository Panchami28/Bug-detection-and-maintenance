<<!DOCTYPE html>
<html>
<head>
    <title>register</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<center>
<body background="backg11.jfif">

<h1><font face="arial" size="24"><u>Welcome to register page</u></h1></font>

<div class="card" style="width: 25rem;">
  
  <div class="card-body">
    <h10 class="card-title">Register Now</h10>

    <p class="card-text">
     <form method="post"> 
    <div class="container"> <label>Name</label>
    <input type="text" name="Name"></div><br>
    <label for="exampleInputEmail1">Email</label>
    <input type="email" name="Email"><br><br>
    <label>Password</label>
    <input type="password" name="Password"><br><br>
    <label>Phone Number</label>
    <input type="number" name="Contact" size="25"><br><br>
    
   <input type="submit" name="add" value="Register">
  
  </div>
</div>

   
    
 </form>
</center>
     <?php
    include('db.php');
    if(isset($_POST['add']))
    {
        $n=$_POST['Name'];
        $i=$_POST['Id'];
        $e=$_POST['Email'];
        $p=$_POST['Password'];
        $c=$_POST['Contact'];

        $qry=mysqli_query($con,"INSERT INTO `clogin`(`Name`, `Id`, `Email`, `Password`, `Contact`) VALUES ('$n','0','$e','$p','$c')") or die(mysqli_error($con));
        if($qry==true)
        {
            echo "
            <script>
                   alert('Registered');
                   window.location='clogin.php';
               </script>   
            ";

        }
        else
        {
            echo "
            <script>
                   alert('Failed');
                   window.location='register.php';
               </script>   

            ";
        }
    }
    ?>
</body>
</html>
