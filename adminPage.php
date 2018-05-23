<?php
	
	
	session_start();
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="mech";

	$conn=mysqli_connect($servername,$username,$password,$dbname);
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
  	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Aldrich"
</head>
<body style="background-color: #000; color: #fff ">
<div class="container-fluid" style="text-align: center">
	<nav class="navbar navbar-inverse">
			  
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
	</div>
	<div class="container">
	
	<?php
		$fill=$_SESSION['fill'];
		echo "<h2>" .$fill ."</h2><br><br>";
	?>
		
	 <form method="post" action="adminPage.php">
        <button type="submit" class="btn btn-success">Show list of the appoints</button><br><br>
        </form>
	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$fill="";
		echo $fill;
		$sql="SELECT * FROM MyUsers";            
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){                      		           	
            while ($row=mysqli_fetch_assoc($result)) {
                    echo "<div class=\"appoints\">Name: " .$row['Name']. "<br>Phone Number: 0" .$row['Phone']. "<br>Car Registration Number: " .$row['Registration']. "<br> Appoinment Date: " .$row['Dt']. "   <br> Mechanic Name: " .$row['Mechanix'].  "<br>" ;
                    	echo "<Button class=\"btn btn-warning\"><a style=\"color:#fff; text-decoration: none;font-family: Aldrich;\"  href='modify.php?id=".$row['ID']."'>Change Date</a></Button><Button class=\"btn btn-danger\"><a style=\"color:#fff; text-decoration: none;font-family: Aldrich;\"  href='modifyMech.php?id=".$row['ID']."'>Change Mechanix</a></Button> </div>";



		
			}
        }           
    }                  
           
?>    



	






</div>
</body>
</html>
