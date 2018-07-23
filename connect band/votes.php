<?php



?>
<?php
function getAllVotes($id)
	{
	/**
	Returns an array whose first element is votes_up and the second one is votes_down
	**/
	$conn = mysqli_connect("localhost", "root", "", "connectband") 
		    or die ('Cannot connect to db');
	$votes = array();
	$q = "SELECT * FROM voting WHERE id = $id";
	$r = mysqli_query($conn, $q);
	if(mysqli_num_rows($r)==1)//id found in the table
		{
		$row = mysqli_fetch_assoc($r);
		$votes[0] = $row['votes_up'];
		$votes[1] = $row['votes_down'];
		}
	mysqli_close($conn);
	return $votes;
	}

function getEffectiveVotes($id)
	{
	/**
	Returns an integer
	**/
	$votes = getAllVotes($id);
	$effectiveVote = $votes[0] - $votes[1];
	return $effectiveVote;
	}

$id = $_POST['id'];
$action = $_POST['action'];

//get the current votes
$cur_votes = getAllVotes($id);

//ok, now update the votes

if($action=='vote_up') //voting up
{
	$votes_up = $cur_votes[0]+1;
	$q = "UPDATE voting SET votes_up = $votes_up WHERE id = $id";
}
elseif($action=='vote_down') //voting down
{
	$votes_down = $cur_votes[1]+1;
	$q = "UPDATE voting SET votes_down = $votes_down WHERE id = $id";
}
$conn = mysqli_connect("localhost", "root", "", "connectband") 
		    or die ('Cannot connect to db');
$r = mysqli_query($conn, $q);
if($r) //voting done
	{
	$effectiveVote = getEffectiveVotes($id);
	echo $effectiveVote." votes";
	}
elseif(!$r) //voting failed
	{
	echo "Failed!";
	}
?>