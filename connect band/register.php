<?php
session_start();
if (isset($_POST['register']))
{
	$email = test_input($_POST["email"]);
	$fname= test_input($_POST["fname"]);
	$lname = test_input($_POST["lname"]);
	$pwd = test_input($_POST["pwd"]);
	$cellno = test_input($_POST["mobile"]);
	$user = test_input($_POST["uname"]);
	$url = "http://localhost/connect%20band/index.php";
	$conn = mysqli_connect("localhost", "root", "", "connectband") 
				or die ('Cannot connect to db');
				if($conn==true)
				{
					$bandid  = $_POST['band_id'];
					$message = $_POST['message'];
					$vote = "true";
					$sql = "INSERT INTO user_master (user_name, email, password, mobile, first_name, last_name)
					VALUES ('$user', '$email', '$pwd',$cellno,'$fname','$lname')";

					if ($conn->query($sql) === TRUE) {
						//echo "New record created successfully";
						//header('Location: '.$url);
					} else {
						echo "Error: " . $sql . "<br>" . $conn->error;
					}
					$result = $conn->query("SELECT * FROM `user_master` where user_name ='".$user."' and password ='".$pwd."'");
					while($row = mysqli_fetch_array($result))  
					{
						 $_SESSION['userid'] = $row['user_id'];
						 $_SESSION['username'] = $row['user_name'];
						header('Location: '.$url);
					}	
					$conn->close();
				}
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>