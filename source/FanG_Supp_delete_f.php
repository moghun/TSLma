<?php
include "config.php"; 
if(!empty($_GET['ids'])) 
{ 
$f_name = $_GET['ids'];  //primary key ekle
$sql_statement =
"DELETE FROM fang_supp WHERE f_name = $f_name";  //Buras�n� seaons yerine table, whereden sonraki 2 e�ittire primary key
$result = mysqli_query($db, $sql_statement); 
echo "Your result is " . $result; 
} 
?>