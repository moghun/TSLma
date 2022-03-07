<!DOCTYPE html>
<html>
<form action= "start.php" method="POST">

    <button class="btn btn-primary", style ="color: black;">BACK</button>
</form>  

<body  {
 style="background-image: url(images/yellow_green.jpg);  background-repeat: no-repeat;background-attachment: fixed; background-size: 100% 100%;"
}>
<head>
	<title>Plays With</title>
	<h1>Plays With</h1>

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

<tr> <th> team_id </th> <th> match_id </th> <th>host</th> </tr> 

<?php

include "config.php";

$sql_statement = "SELECT * FROM plays";

$result = mysqli_query($db, $sql_statement);

while($row = mysqli_fetch_assoc($result))
{
  $team_id = $row['team_id'];
  $match_id = $row['match_id'];
  $host = $row['host'];

	echo "<tr>" . "<th>" . $team_id . "</th>" . "<th>" . $match_id . "</th>" . "<th>" . $host . "</th>" . "</tr>";
}

?>

</table>
</div>

</body>
</html>