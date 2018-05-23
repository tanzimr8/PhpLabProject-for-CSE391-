<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Accsess</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" type="text/css" href="style.css">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="home.php">Home</a>
          </div>
          <ul class="nav navbar-nav">
            <li class="active"><a href="admin.php">Admin</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Mechanics
              <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Ricky Ponting</a></li>
                <li><a href="#">Brian Lara</a></li>
                <li><a href="#">Harshell Gibbs</a></li>
                <li><a href="#">Sachin Tendulker</a></li>
                <li><a href="#">Shane Bond</a></li>
              </ul>
            </li>
            <li><a href="#form">Make Your Appoinment</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
  </nav>
  
    

      <form class="form-horizontal" action="adminLogin.php" method="post">

        <div class="form-group">
          
          <label class="control-label col-sm-2" for="username">Username:</label>
          <div class="col-sm-6">
            <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Password:</label>
          <div class="col-sm-6">          
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
          </div>
        </div>
        <div class="form-group">        
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default" value="Submit">Submit</button>
          </div>
        </div>
        <?php 
  if(empty($_SESSION['fill'])){
              echo "";
      }
     else{
          $fill=$_SESSION['fill'];
          echo "<p style=\"color:red;\">" .$fill. "</p>";
          session_destroy(); 

  
          
    }
  ?>
      </form> 




</div>





</body>
</html>