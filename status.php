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
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 75%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

}
</style>

<center>

<body>
 <hr>
    <table border="1">
    <thead>
        <tr>
            <th>   Bug Name   </th>
            <th>   Bug Type   </th>
            <th>   Bug Description   </th>
            <th>   Status   </th>
        </tr>
    </thead>
    <tbody>
        <?php
        include('db.php');
        $sql =mysqli_query($con,"SELECT * FROM bugg");// change the table name to assign table where the status is available

        while($res=mysqli_fetch_array($sql)) 
        {
          echo'
          <tr>
          <td>'.$res['bname'].'</td>
          <td>'.$res['btype'].'</td>
          <td>'.$res['bdes'].'</td>
          </tr>
          ';
        } 
        ?>
    </tbody>
    </table>

    </center> 



</body>
</html>