<?php
	session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Car Mechanic</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" type="text/css" href="style.css">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Rationale" />
  	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Arvo" />
</head>
<body style="background-color: #000 ">
<div class="container-fluid">
	<nav class="navbar navbar-inverse" style="font-family: Rationale;font-size: 20px; position: fixed;width: 100%;">
			  
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
			  
	</nav>
	<div class="cover">
		<h1>Car Mechanics</h1>
		<p>Appoint Your Mechanics</p>

		
  
	</div>
	</div>
	<div class="container-fluid">
	<br><br><br><br><br><br>
	<div class="row" id="form">
		
  		<div class="col-sm-2"></div>
  		<div class="col-sm-12" style="border: 2px solid black; padding: 20px;background-color:#fff;color:#737373" >
  			<h3 align="center">Please Fill Up the Form</h3>
  			<form class="form-horizontal"  action="action_page.php" method="post">
			    <div class="form-group">
			      <label class="control-label col-sm-3" for="name">Name:</label>
			      <div class="col-sm-6">
			        <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
			      </div>
			    </div>
			    <div class="form-group">
			      <label class="control-label col-sm-3" for="address">Address:</label>
			      <div class="col-sm-6">          
			        <input type="text" class="form-control" id="add" placeholder="Enter Address" name="add">
			      </div>
			    </div>
			    
			    <div class="form-group">
			      <label class="control-label col-sm-3" for="phone">Phone Number:</label>
			      <div class="col-sm-6">          
			        <input type="number" class="form-control" id="phone" placeholder="Enter Phone Number" name="phone">
			      </div>
			    </div>
			    <div class="form-group">
			      <label class="control-label col-sm-3" for="license">Car License Number:</label>
			      <div class="col-sm-6">          
			        <input type="number" class="form-control" id="license" placeholder="Enter License No." name="license">
			      </div>
			    </div>
			    <div class="form-group">
			      <label class="control-label col-sm-3" for="regi">Car Registration Number:</label>
			      <div class="col-sm-6">          
			        <input type="number" class="form-control" id="regi" placeholder="Enter Registration Number" name="regi">
			      </div>
			    </div>
			    <div class="form-group">
			      <label class="control-label col-sm-3" for="date">Date:</label>
			      <div class="col-sm-6">          
			        <input type="date" class="form-control" id="date" placeholder="Enter Date" name="date">
			      </div>
			    </div>
			    <div class="form-group">
			    	<div class="col-sm-offset-2 col-sm-10">
			    	<h4>Choose your Mechanics</h4>
			    	<label class="radio-inline">
			    		<input type="radio" name="optradio" value="Ricky Ponting">Ricky Ponting
    				</label>
    				<label class="radio-inline">
      					<input type="radio" name="optradio" value="Brian Lara">Brian Lara
    				</label>
    				<label class="radio-inline">
      					<input type="radio" name="optradio" value="Harshell Gibbs">Harshell Gibbs
    				</label>
    				<label class="radio-inline">
      					<input type="radio" name="optradio" value="Sachin Tendulker">Sachin Tendulker
    				</label>
    				<label class="radio-inline">
      					<input type="radio" name="optradio" value="Shane Bond">Shane Bond
    				</label>
    				
    			</div>
    			</div>		
			    <div class="form-group">        
			      <div class="col-sm-offset-2 col-sm-6">
			        <button type="submit" class="btn btn-default">Submit</button>
			        <?php
			        if(empty($_SESSION['msg'])){
			        	$msg="";
			        }
			        else{
			        	$msg=$_SESSION['msg'];
			        	echo "<i><p style=\"color:red;font-size:18px\">*" .$msg. "</p></i>";
			        	session_destroy(); 	
			    	}
			        
			        
			        ?>
			      </div>
			    </div>
  			</form>
  		</div>
  		<div class="col-sm-2"></div>
	</div>
	
	
</div>
</body>
</html>