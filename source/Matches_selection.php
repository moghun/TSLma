<!DOCTYPE html>
<html>
<form action= "start.php" method="POST">

    <button class="btn btn-primary", style ="color: black;">BACK</button>
</form>

<body  {
 style="background-image: url(images/yellow_green.jpg);  background-repeat: no-repeat;background-attachment: fixed; background-size: 100% 100%;"
}>
<head>
	<title>Matches</title>
	<h1>Matches</h1>

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

<tr> <th> match_id </th> <th> stadium </th> <th>num_cards</th> <th>home_goal</th> <th>away_goal</th> <th>opponent_id</th> <th>match_date</th> <th>result</th></tr> 

<?php

include "config.php";

$sql_statement = "SELECT * FROM matches";

$return = mysqli_query($db, $sql_statement);

while($row = mysqli_fetch_assoc($return))
{
  $match_id = $row['match_id'];
  $stadium = $row['stadium'];
  $num_cards = $row['num_cards'];
  $home_goal = $row['home_goal'];
  $away_goal = $row['away_goal'];
  $opponent_id = $row['opponent_id'];
  $match_date = $row['match_date'];
  $result = $row['result'];

	echo "<tr>" . "<th>" . $match_id . "</th>" . "<th>" . $stadium . "</th>" . "<th>" . $num_cards . "</th>". "<th>" . $home_goal . "</th>". "<th>" . 
	$away_goal . "</th>". "<th>" . $opponent_id . "</th>". "<th>" . $match_date . "</th>". "<th>" . $result . "</th>" . "</tr>";
}

?>

</table>
</div>

</body>
</html>