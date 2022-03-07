<?php
include "config.php"; 
if(!empty($_GET['ids'])) 
{ 
$s_year = $_GET['ids'];  //primary key ekle

//$search = "SELECT match_id  FROM matches WHERE match_date = 2019";
//$search_result = mysqli_query($db, $search);
//$matches = mysqli_fetch_assoc($search_result);
$sql_statement2 = "DELETE FROM team_stats WHERE s_year = $s_year"; //For deleting also from team_stats
$result2 = mysqli_query($db, $sql_statement2); 

$sql_statement4 = "DELETE FROM player_stats WHERE  match_id IN (SELECT match_id FROM matches where match_date = $s_year)";
$result4 = mysqli_query($db, $sql_statement4); 

$sql_statement5 = "DELETE FROM plays WHERE  match_id IN (SELECT match_id FROM matches where match_date = $s_year)";
$result5 = mysqli_query($db, $sql_statement5); 

$sql_statement3 = "DELETE FROM matches WHERE match_date = $s_year";
$result3 = mysqli_query($db, $sql_statement3); 



$sql_statement = "DELETE FROM seasons WHERE s_year = $s_year";  //Deleting from seasons
$result = mysqli_query($db, $sql_statement);    //We put this at the end since others are related to this one




echo "Your result is " . $result3; 
} 
?>