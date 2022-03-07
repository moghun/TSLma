<?php
include "config.php"; 
if(!empty($_GET['ids'])) 
{ 
$player_id = $_GET['ids'];  //primary key ekle
$sql_statement =
"DELETE FROM plyr_cont WHERE player_id = $player_id";  //Burasýný seaons yerine table, whereden sonraki 2 eþittire primary key
$result = mysqli_query($db, $sql_statement); 
echo "Your result is " . $result; 
} 
?>