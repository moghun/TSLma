<!DOCTYPE html>
<html>
<form action= "start.php" method="POST">

    <button class="btn btn-primary", style ="color: black;">BACK</button>
</form>  
<body  {
 style="background-image: url(images/yellow_green.jpg);  background-repeat: no-repeat;background-attachment: fixed; background-size: 100% 100%;"
}>
<head>
  <title>Match Details</title>
  <h1>Match Details</h1>

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

</head>
<body>

  <p style= "font-size:18px;">Informations about the match </p>
<br>

<div align="center">

  <table>
<tr> <th> match_date </th> <th> opponent_id </th> <th>home_goal </th> <th> away_goal</th></tr> 



<?php


include "config.php";
if(!empty($_GET['ids'])) 
{ 
$match_id = $_GET['ids']; }
$sql_statement = "SELECT m.home_goal, m.away_goal, m.opponent_id, m.match_date FROM matches m  WHERE m.match_id = $match_id";





$return = mysqli_query($db, $sql_statement);


while($row = mysqli_fetch_assoc($return))
{
  $home_goal = $row['home_goal'];
  $away_goal = $row['away_goal'];
  $opponent_id = $row['opponent_id'];
  $match_date = $row['match_date'];


  echo "<tr>" . "<th>" . $match_date . "</th>" . "<th>" . $opponent_id . "</th>". "<th>" . $home_goal . "</th>". "<th>" . $away_goal . "</th>" . "</tr>"; 

}
?>

</table>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


  <p style= "font-size:18px;"> Players in the match </p>
<br>

<div align="center">
  <table>
<tr> <th> player_id </th> <th> player_name </th> <th>player_surname </th> <th> position</th></tr> 



<?php


include "config.php";
if(!empty($_GET['ids'])) 
{ 
$match_id = $_GET['ids']; }
$sql_statement = "SELECT m.match_id, m.match_date, m.stadium FROM matches m , player_stats p WHERE m.match_id = $match_id";

$sql_statement2 = "SELECT pc.p_name_first, pc.p_name_sur, pc.player_id, pc.position FROM plyr_cont pc , player_stats p WHERE p.match_id = $match_id AND p.player_id = pc.player_id";




$return = mysqli_query($db, $sql_statement2);


while($row = mysqli_fetch_assoc($return))
{
  $player_id = $row['player_id'];
  $player_name = $row['p_name_first'];
  $player_s = $row['p_name_sur'];
  $position = $row['position'];


  echo "<tr>" . "<th>" . $player_id . "</th>" . "<th>" . $player_name . "</th>". "<th>" . $player_s . "</th>". "<th>" . $position . "</th>" . "</tr>"; 

}
?>

</table>
</div>

</body>
</html>