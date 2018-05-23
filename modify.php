<?php
		session_start();
		$servername="localhost";
		$username="root";
		$password="";
		$dbname="mech";
		
		$conn=mysqli_connect($servername,$username,$password,$dbname);

		
		$id=$_GET['id'];

		?>
		
		<form method="post" action="">
			<input type="date" name="newDate">
			<button type="Submit">Change date</button>
		</form>

		<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			//if(isset($_POST['Submit'])){
				$newDate=$_POST['newDate'];
				$sql="UPDATE MyUsers SET Dt='$newDate' WHERE ID='$id'";
				//echo $sql;
				$result=mysqli_query($conn,$sql);
				echo $newDate;
				header("Location:adminPage.php");
				


				
			//}
			
		}
	?>