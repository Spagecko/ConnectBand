<?php
if (isset($_POST['send'])) {
$conn = mysqli_connect("localhost", "root", "", "connectband") 
		or die ('Cannot connect to db');
$uid = 1;
$bid = 2;
$subject  = $_POST['message'];
$vote = "true";
$sql = "INSERT INTO feedback_master (user_id, band_id, feedback_data,vote)
VALUES ($uid, $bid, '$subject',$vote)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
	<form  method="post" action="submit.php">
		<div>
			<input type="text" name="name" placeholder="Name" class="form-control">
		</div>
		<div>
			<input type="text" name="mail" placeholder="E-Mail" class="form-control">
		</div>
		<div>
			<input type="text" name="subject" placeholder="Subject" class="form-control">
		</div>
		<div>
			<textarea  name="message" placeholder="Massage" class="form-control" cols="4" rows="4"></textarea>
		</div>
		<div>
			<input type="submit" name="send" class="btn btn-primary" value="Send">
		</div>
	</form>
</body>
</html>