

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
<body style="background-color: #fff;color: #333; ">
<div class="container-fluid">

		<form action="" method="post">
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
			        </div>
			        </div>
			        </form>

      <?php
    session_start();
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="mech";
    
    $conn=mysqli_connect($servername,$username,$password,$dbname);

    
    $id=$_GET['id'];

    ?>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      //if(isset($_POST['Submit'])){
        $newMech=$_POST['optradio'];
        $sql="UPDATE MyUsers SET Mechanix='$newMech' WHERE ID='$id'";
        //echo $sql;
        $result=mysqli_query($conn,$sql);
        echo $newDate;
        header("Location:adminPage.php");
        


        
      //}
      
    }
  ?>        



		

</div>
</body>
</html>
