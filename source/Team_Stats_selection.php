<!DOCTYPE html>
<html>
<form action= "start.php" method="POST">

    <button class="btn btn-primary", style ="color: black;">BACK</button>
</form>  
<body  {
 style="background-image: url(images/yellow_green.jpg);  background-repeat: no-repeat;background-attachment: fixed; background-size: 100% 100%;"
}>
<head>
	<title>Team Stats</title>
	<h1>Team Stats</h1>

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

<tr> <th> s_year </th> <th> team_id </th> <th>points</th> <th>goals_scored</th> <th>goals_conceded</th> <th>win_number</th> <th>lose_number</th> <th>draw_number</th></tr> 

<?php

include "config.php";

$sql_statement = "SELECT * FROM team_stats";

$result = mysqli_query($db, $sql_statement);

while($row = mysqli_fetch_assoc($result))
{
  $s_year = $row['s_year'];
  $team_id = $row['team_id'];
  $points = $row['points'];
  $goals_scored = $row['goals_scored'];
  $goals_conceded = $row['goals_conceded'];
  $win_number = $row['win_number'];
  $lose_number = $row['lose_number'];
  $draw_number = $row['draw_number'];

	echo "<tr>" . "<th>" . $s_year . "</th>" . "<th>" . $team_id . "</th>" . "<th>" . $points . "</th>". "<th>" . $goals_scored . "</th>". "<th>" . 
	$goals_conceded . "</th>". "<th>" . $win_number . "</th>". "<th>" . $lose_number . "</th>". "<th>" . $draw_number . "</th>" . "</tr>";
}

?>

</table>
</div>

</body>
</html>