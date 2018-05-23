<?php
	session_start();
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="mech";

	$conn=mysqli_connect($servername,$username,$password,$dbname);
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if(!$conn){
			die("Connection failed: " .mysqli_connect_error());
		}
		

		$Name= $_POST['name'];
		$Address= $_POST['add'];
		$Phone= $_POST['phone'];
		$License= $_POST['license'];
		$Regi= $_POST['regi'];
		$Date= $_POST['date'];
		$Mechanix= $_POST['optradio'];
		

		
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($Name) || empty($Address) || empty($Phone) || empty($License) || empty($Regi) ||  empty($Date) || empty($Mechanix)){
				$msg= "Please fill up all the information";
				$_SESSION['msg']=$msg;
				header("Location:home.php#form");
			}
			else{
				$ssql="SELECT Mechanix FROM MyUsers Where dt='$Date' AND Mechanix='$Mechanix'";
					if(mysqli_query($conn,$ssql)){
						$result=mysqli_query($conn,$ssql);
						$vac=mysqli_num_rows($result);
						
					}	
					//echo $vac;
					if($vac>3){
						$msg= "Sorry " .$Name.  ", " .$Mechanix. " is not available on that day";
						$_SESSION['msg']=$msg;
						header("Location:home.php#form");
					}
					else{

						$sql= "INSERT INTO MyUsers (Name, Address, Phone, License, Registration, Dt, Mechanix, Vacancy) 
						VALUES ('$Name', '$Address', '$Phone', '$License', '$Regi', '$Date', '$Mechanix', '5')";
						if (mysqli_query($conn, $sql)) {
				    		$msg= "Thank you " .$Name. " ,Your entry is recorded";
							$_SESSION['msg']=$msg;

							
							header("Location:home.php#form");
						}		 
						else {
				    		echo "Error:  <br>" . mysqli_error($conn). "<br>";
						}
					}
		 		}	
			}
		}
	?> 