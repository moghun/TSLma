<!DOCTYPE html>
<html>
<form action= "start.php" method="POST">

    <button class="btn btn-primary", style ="color: black;">BACK</button>
</form>  
<body  {
 style="background-image: url(images/yellow_green.jpg);  background-repeat: no-repeat;background-attachment: fixed; background-size: 100% 100%;"
}>
<head>
  <title>Player Details</title>
  <h1>Player Details</h1>

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

<div align="center">

  <table>

<tr> <th> player_id </th> <th> player_name </th> <th>player_surname </th> <th> position </th> <th> nationality </th> <th> total_goal</th> <th> Wage </th> <th> Team </th></tr> 


<?php


include "config.php";
if(!empty($_GET['ids'])) 
{ 
$player_id = $_GET['ids']; }
$sql_statement = "SELECT p.player_id, p.p_name_first, p.p_name_sur, p.position, p.p_nationality, p.total_goal, p.wage, t.t_name
FROM plyr_cont p  , teams t WHERE p.player_id = $player_id AND p.team_id = t.team_id";

//$sql_statement2 = "SELECT pc.p_name_first, pc.p_name_sur, pc.player_id, pc.position FROM plyr_cont pc , player_stats p WHERE p.match_id = $match_id AND p.player_id = pc.player_id";




$return = mysqli_query($db, $sql_statement);


while($row = mysqli_fetch_assoc($return))
{
  $player_id = $row['player_id'];
  $player_name = $row['p_name_first'];
  $player_s = $row['p_name_sur'];
  $position = $row['position'];
  $p_nationality = $row['p_nationality'];
  $total_goal = $row['total_goal'];
  $wage = $row['wage'];
  $t_name = $row['t_name'];


  echo "<tr>" . "<th>" . $player_id . "</th>" . "<th>" . $player_name . "</th>". "<th>" . $player_s . "</th>". "<th>" . $position . "</th>" . "<th>" . $p_nationality
    . "</th>". "<th>" .  $total_goal . "</th>". "<th>" .  $wage   . "</th>". "<th>" .   $t_name  . "</th>" . "</tr>"; 

}
?>

</table>
</div>

</body>
</html>