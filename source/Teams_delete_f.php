<?php
include "config.php"; 
if(!empty($_GET['ids'])) 
{ 
$team_id = $_GET['ids']; 
$sql_statement =
"DELETE FROM teams WHERE team_id = $team_id"; 
$result = mysqli_query($db, $sql_statement); 
echo "Your result is " . $result; 
} 
?>