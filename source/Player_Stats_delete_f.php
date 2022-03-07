<?php
include "config.php"; 
if(!empty($_POST['ids'])) 
{ 
	list($match_id ,$player_id) = explode ("-",$_POST['ids'],2);
	$sql_statement =
	"DELETE FROM plays WHERE (match_id,player_id) in ($match_id,$player_id)"; 
	$result = mysqli_query($db, $sql_statement); 
	echo "Your result is " . $result; 
} 
?>