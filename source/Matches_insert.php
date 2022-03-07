<?php
include "config.php"; 
if (!empty($_POST['match_id'])){ 
$match_id = $_POST['match_id']; 
$stadium = $_POST['stadium']; 
$num_cards = $_POST['num_cards']; 
$home_goal = $_POST['home_goal']; 
$away_goal = $_POST['away_goal']; 
$opponent_id = $_POST['opponent_id']; 
$match_date = $_POST['match_date']; 
$result = $_POST['result'];
$sql_statement =
"INSERT INTO team_stats(match_id, stadium, num_cards, home_goal, away_goal, opponent_id, match_date,result) 
VALUES ($match_id,$stadium, $num_cards, $home_goal, $away_goal, $opponent_id, $match_date,$result)"; 
$return = mysqli_query($db, $sql_statement);
echo "Your result is: " . $return;
} 
?>