
<?php
include "config.php"; 
if (!empty($_POST['player_id'])){ 
$player_id = $_POST['player_id']; 
$p_name_first = $_POST['p_name_first']; 
$p_name_sur = $_POST['p_name_sur']; 
$p_nationality = $_POST['p_nationality']; 
$team_id = $_POST['team_id']; 
$position = $_POST['position']; 
$total_goal = $_POST['total_goal']; 
$start_date = $_POST['start_date']; 
$end_date = $_POST['end_date']; 
$wage = $_POST['wage']; 

$sql_statement =
"INSERT INTO plyr_cont(player_id, p_name_first, p_name_sur,p_nationality,team_id,position,total_goal,start_date,end_date,wage) 
VALUES ($player_id, '$p_name_first', '$p_name_sur', '$p_nationality', '$team_id', '$position', $total_goal, $start_date,$end_date, $wage)"; 
$result = mysqli_query($db, $sql_statement);
echo "Your result is: " . $result;
} 
?>