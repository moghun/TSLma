<?php
include "config.php"; 
if (!empty($_POST['s_year'])){ // Check sname is not empty
$s_year = $_POST['s_year']; 
$s_name = $_POST['s_name']; 
$champion_team = $_POST['champion_team']; 
$sql_statement =
"INSERT INTO seasons(s_year, s_name, champion_team) 
VALUES ($s_year,'$s_name','$champion_team')"; 
$result = mysqli_query($db, $sql_statement);
echo "Your result is: " . $result;
} 
?>