<?php
include "config.php"; 
if (!empty($_POST['f_name'])){ 
$f_name = $_POST['f_name']; 
$number_of_people = $_POST['number_of_people']; 
$team_id = $_POST['team_id']; 
$sql_statement =
"INSERT INTO FanG_Supp (f_name, number_of_people, team_id) 
VALUES ('$f_name',$number_of_people,'$team_id')"; 
$result = mysqli_query($db, $sql_statement);
echo "Your result is: " . $result;
} 
?>