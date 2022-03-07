<?php
include "config.php"; 
if (!empty($_POST['man_id'])){ 
$man_id = $_POST['man_id']; 
$m_name_first = $_POST['m_name_first']; 
$m_name_sur = $_POST['m_name_sur']; 
$m_nationality = $_POST['m_nationality']; 
$team_id = $_POST['team_id']; 
$m_duration = $_POST['m_duration']; 
$sql_statement =
"INSERT INTO man_dir(man_id, m_name_first, m_name_sur,m_nationality,team_id,m_duration) 
VALUES ('$man_id', '$m_name_first', '$m_name_sur', '$m_nationality', '$team_id', $m_duration)"; 
$result = mysqli_query($db, $sql_statement);
echo "Your result is: " . $result;
} 
?>