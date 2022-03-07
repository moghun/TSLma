<?php
include "config.php"; 
if(!empty($_GET['ids'])) 
{ 
$man_id = $_GET['ids'];
$sql_statement =
"DELETE FROM man_dir WHERE man_id = $man_id";  
$result = mysqli_query($db, $sql_statement); 
echo "Your result is " . $result; 
} 
?>