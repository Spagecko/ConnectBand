<?php include 'connection.php'; ?>
<html>
<head>
  <title>Admin Panel - Local Bands </title>
  <link rel="stylesheet" type="text/css" href="styles/style_admin.css">
</head>
<body>
  <div id="header">
    <center><img src="admin.ico" alt="admin">
    <h3> Welcome to Admin Panel | Local Bands </h3></center>
  </div>
  <!-- search agent -->
  <?php
    if (isset($_POST['search'])){
      $search=$_POST['valueToSearch'];
      $sql = "SELECT * FROM feedback_master WHERE band_id LIKE '%{$search}%'";
    }else{
      $sql = "SELECT * FROM feedback_master";
      $search = "";
    }
    $result = mysqli_query($conn, $sql);
  ?>
  <!-- search bar -->
  <div id="sidemenu">
    <form id="form" action="" method="POST">
      <input type="text" name="valueToSearch" placeholder="Search..">
      <input type="submit" name = "search" value="SEARCH">
    </form>
  </div>

  <div id="data">
    <br>
    <br>
    <center><h1 style="float:left">Feedback Available</h1></center>
    <br>
    <br>
    <br>
    <br>
    <br>
  </div>

  <!-- search display -->
  <div>
    <form method = "POST" action = "">
      <table>
        <tr>
          <th>Band ID</th>
          <th >Feedback</th>
          <th>Action</th>
        </tr>
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
          <td><?php echo $row["band_id"] ?></td>
          <td><?php echo $row["feedback_data"] ?></td>
          <td>
            <a href="?idd=<?php echo $row['user_id']?>" >delete</a>
          </td>
        </tr>
      <?php
      }
      if( isset($_GET['idd']))
    	{
    		$id = $_GET['idd'];
        $result = $conn->query("DELETE FROM feedback_master where user_id = '$id'");
    		if($result){
          header('location: admin_panel.php');
        }else{
          echo "Not delete messages.";
        }
    	}
      ?>
      </table>
    </form>
  </div>



</body>
</html>
