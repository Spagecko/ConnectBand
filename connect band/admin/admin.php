<?php
include 'connection.php';

if(isset($_POST['submit'])){

	//echo "called";
	$url = "http://localhost/connect%20band/admin/admin_panel.php";
    $uname=$_POST['username'];
    $password=$_POST['password'];
	//echo $uname.'     '.$password;
    $sql = "SELECT * FROM signin WHERE username='".$uname."'AND password='".$password."'";

    $result = mysqli_query($conn, $sql);
	//echo mysqli_num_rows($result);
    if(mysqli_num_rows($result) == 1){
        header('Location: '.$url);
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }

}
?>
<!DOCTYPE html>
<html>
<head>
  <title> Admin</title>
  <link rel="stylesheet" a href="css\style.css">
</head>
<body>
  <div class="container">
    <img src="admin.ico" alt="admin"/>
    <form action="" method="POST">
      <div>
        <input type="text" name="username" placeholder="Enter the User Name"/>
      </div>
      <div>
        <input type="password" name="password" placeholder="password"/>
      </div>
        <input type="submit" type="submit" value="LOGIN" name ="submit" class="btn-login"/>
    </form>
  </div>
</body>
</html>
