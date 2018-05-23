<?php
	session_start();
	include 'action_page.php'; 
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="mech";

	$conn=mysqli_connect($servername,$username,$password,$dbname);
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if(!$conn){
			die("Connection failed: " .mysqli_connect_error());
		}
		if ($_SERVER["REQUEST_METHOD"] == "POST") {	
			$uname=$_POST['uname'];
			$password=$_POST['pwd'];

			if ($uname=="admin" && $password=="admin1234") {
				$fill="Welcome admin";
				$_SESSION['fill']=$fill;
				header('Location:adminPage.php');
			}	
			else{
				$fill="Wrong Password or Username, please try again";
				$_SESSION['fill']=$fill;
				header('Location:admin.php');
			}	
		}	
	}