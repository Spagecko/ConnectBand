<?php
	session_start(); 
	//echo "called";
	echo $_POST['bandid'];
	if (isset($_POST['send']))
	{
		$url = "http://localhost/connect%20band/index.php";
		$conn = mysqli_connect("localhost", "root", "", "connectband") 
				or die ('Cannot connect to db');
		
		if($conn==true)
		{
			//$uid = 7;
			$uid = $_SESSION['userid'];
			$message = $_POST['message'];
			
			$bandid  = $_POST['band_id'];
			
			//$vote = "true";
			$sql = "INSERT INTO feedback_master (user_id, band_id, feedback_data)
			VALUES ($uid, $bandid, '$message')";

			if ($conn->query($sql) === TRUE) {
				//echo "New record created successfully";
				header('Location: '.$url);
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}

			$conn->close();
		}
					
	}
											
										 
										 
 ?>