<?php
include "config.php"; 
if (!empty($_POST['team_id'])){ 
$team_id = $_POST['team_id']; 
$match_id = $_POST['match_id']; 
$host = $_POST['host']; 
$sql_statement =
"INSERT INTO teams(team_id, match_id, host) 
VALUES ('$team_id','$match_id','$host')"; 
$result = mysqli_query($db, $sql_statement);
echo "Your result is: " . $result;
} 
?>