<!DOCTYPE html>
<html>
  
<form action= "start.php" method="POST">

    <button class="btn btn-primary", style ="color: black;">BACK</button>
</form>
<body  {
 style="background-image: url(images/yellow_green.jpg);  background-repeat: no-repeat;background-attachment: fixed; background-size: 100% 100%;"
}>
<head>
	<title>Player Stats</title>
	<h1>Player Stats</h1>

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

<tr> <th> player_id </th> <th> match_id </th> <th>num_goals</th> <th>num_assists</th> <th>num_cards</th> <th>p_duration</th> </tr> 

<?php

include "config.php";

$sql_statement = "SELECT * FROM player_stats";

$result = mysqli_query($db, $sql_statement);

while($row = mysqli_fetch_assoc($result))
{
  $player_id = $row['player_id'];
  $match_id = $row['match_id'];
  $num_goals = $row['num_goals'];
  $num_assists = $row['num_assists'];
  $num_cards = $row['num_cards'];
  $p_duration = $row['p_duration'];


	echo "<tr>" . "<th>" . $player_id . "</th>" . "<th>" . $match_id . "</th>" . "<th>" . $num_goals . "</th>". "<th>" . $num_assists . "</th>". "<th>" . 
	$num_cards . "</th>". "<th>" . $p_duration . "</th>" . "</tr>";
}

?>

</table>
</div>

</body>
</html>