<?php
include "config.php"; 
if (!empty($_POST['player_id'])){ 
$player_id = $_POST['player_id']; 
$match_id = $_POST['match_id']; 
$num_goals = $_POST['num_goals']; 
$num_assists = $_POST['num_assists']; 
$num_cards = $_POST['num_cards']; 
$p_duration = $_POST['p_duration']; 

$sql_statement =
"INSERT INTO teams(player_id, match_id, num_goals, num_assists, num_cards, p_duration) 
VALUES ($player_id,$match_id,$num_goals, $num_assists, $num_cards, $p_duration)"; 
$result = mysqli_query($db, $sql_statement);
echo "Your result is: " . $result;
} 
?>