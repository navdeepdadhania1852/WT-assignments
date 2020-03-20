<?php
$firstName= $_POST["firstName"];
$lastName= $_POST["lastName"];
$email= $_POST["email"];
$Gender = $_POST["Gender"];
$date2= $_POST["date2"];

		
			$host = "localhost";
			$dbusername = "root";
			$dbpassword = "";
			$dbname = "data";
			// Create connection
			$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
			if (mysqli_connect_error())
			{
			die('Connect Error ('. mysqli_connect_errno() .') '
			. mysqli_connect_error());
			}
			else
			{
					$sql = "INSERT INTO workshopdata (firstName,lastName,email,Gender,date2)
					values ('$firstName','$lastName','$email','$Gender','$date2')";
					if ($conn->query($sql)){
					echo "New record is inserted successfully...";

					header('Refresh:3; url=form.html');
			}
			else
			{
					echo "Error: ". $sql ."
					". $conn->error;

			}
			    $conn->close();
			
			}


?>
