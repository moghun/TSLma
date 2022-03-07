<?php
include "config.php"; 
if(!empty($_POST['ids'])) 
{ 
	list($match_id ,$team_id) = explode ("-",$_POST['ids'],2);
	$sql_statement =
	"DELETE FROM team_stats WHERE (match_id,team_id) in ($match_id,$team_id)"; 
	$result = mysqli_query($db, $sql_statement); 
	echo "Your result is " . $result; 
} 
?>