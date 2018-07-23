<?php

$connect = mysqli_connect("localhost", "root", "", "connectband");  
	if($connect === false){
		die("ERROR: " . mysqli_connect_error());
	}
	else
	{
		$result = $connect->query("select count(*) as 'Count' from feedback_master fm, band_master bm where fm.band_id = bm.band_id");
		while($row = mysqli_fetch_array($result))  
		{
			echo $row['Count'];
		}
	}



?>