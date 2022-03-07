<!DOCTYPE html>
<html>
<form action= "start.php" method="POST">

    <button class="btn btn-primary", style ="color: black;">BACK</button>
</form>  
<body  {
 style="background-image: url(images/yellow_green.jpg);  background-repeat: no-repeat;background-attachment: fixed; background-size: 100% 100%;"
}>
<head>
	<title>Player</title>
	<h1>Player</h1>

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

<tr> <th> player_id </th> <th> p_name_first </th> <th>p_name_sur</th> <th>p_nationality</th> <th>position</th> <th>total_goal</th> <th>team_id</th> 
<th>start_date</th><th>end_date</th><th>wage</th></tr> 

<?php

include "config.php";

$sql_statement = "SELECT * FROM plyr_cont";

$result = mysqli_query($db, $sql_statement);

while($row = mysqli_fetch_assoc($result))
{
  $player_id = $row['player_id'];
  $p_name_first = $row['p_name_first'];
  $p_name_sur = $row['p_name_sur'];
  $p_nationality = $row['p_nationality'];
  $position = $row['position'];
  $total_goal = $row['total_goal'];
  $team_id = $row['team_id'];
  $start_date = $row['start_date'];
  $end_date = $row['end_date'];
  $wage = $row['wage'];

	echo "<tr>" . "<th>" . $player_id . "</th>" . "<th>" . $p_name_first . "</th>" . "<th>" . $p_name_sur . "</th>". "<th>" . $p_nationality . "</th>". "<th>" . 
	$position . "</th>". "<th>" . $total_goal . "</th>". "<th>" . $team_id . "</th>". "<th>" . $start_date . "</th>". "<th>" . $end_date . "</th>". "<th>" . $wage . "</th>" . "</tr>";
}

?>

</table>
</div>

</body>
</html>