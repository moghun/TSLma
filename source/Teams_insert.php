<?php
include "config.php"; 
if (!empty($_POST['team_id'])){ 
$team_id = $_POST['team_id']; 
$t_name = $_POST['t_name']; 
$foundation_year = $_POST['foundation_year']; 
$sql_statement =
"INSERT INTO teams(team_id, t_name, foundation_year) 
VALUES ('$team_id','$t_name',$foundation_year)"; 
$result = mysqli_query($db, $sql_statement);
echo "Your result is: " . $result;
} 
?>