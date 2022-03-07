<?php
include "config.php"; 
if (!empty($_POST['s_year'])){ 
$s_year = $_POST['s_year']; 
$team_id = $_POST['team_id']; 
$points = $_POST['points']; 
$goals_conceded = $_POST['goals_conceded']; 
$goals_scored = $_POST['goals_scored']; 
$win_number = $_POST['win_number']; 
$lose_number = $_POST['lose_number']; 
$draw_number = $_POST['draw_number'];
$sql_statement =
"INSERT INTO team_stats(s_year, team_id, points, goals_conceded, goals_scored, win_number, lose_number,draw_number) 
VALUES ($s_year,'$team_id', $points, $goals_conceded, $goals_scored, $win_number, $lose_number,$draw_number)"; 
$result = mysqli_query($db, $sql_statement);
echo "Your result is: " . $result;
} 
?>