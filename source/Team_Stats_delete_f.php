<?php
include "config.php"; 
if(!empty($_POST['ids'])) 
{ 
	list($s_year ,$team_id) = explode ("-",$_POST['ids'],2);
	$sql_statement =
	"DELETE FROM team_stats WHERE team_stats.s_year = $s_year AND team_stats.team_id = $team_id"; 
	$result = mysqli_query($db, $sql_statement); 
	echo "Your result is " . $result; 
} 
?>