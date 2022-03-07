<?php
include "config.php"; 
if(!empty($_GET['ids'])) 
{ 
$s_year = $_GET['ids'];  //primary key ekle
$sql_statement =
"DELETE FROM matches WHERE match_id  = $match_id";  //Buras�n� seaons yerine table, whereden sonraki 2 e�ittire primary key
$result = mysqli_query($db, $sql_statement); 
echo "Your result is " . $result; 
} 
?>