<!DOCTYPE html>
<html>
<form action= "start.php" method="POST">

    <button class="btn btn-primary", style ="color: black;">BACK</button>
</form>  
<body  {
 style="background-image: url(images/yellow_green.jpg);  background-repeat: no-repeat;background-attachment: fixed; background-size: 100% 100%;"
}>
<head>
	<title>Teams</title>
	<h1>Teams</h1>

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

<tr> <th> team_id </th> <th> t_name </th> <th>foundation_year</th> </tr> 

<?php

include "config.php";

$sql_statement = "SELECT * FROM teams";

$result = mysqli_query($db, $sql_statement);

while($row = mysqli_fetch_assoc($result))
{
  $team_id = $row['team_id'];
  $t_name = $row['t_name'];
  $foundation_year = $row['foundation_year'];

	echo "<tr>" . "<th>" . $team_id . "</th>" . "<th>" . $t_name . "</th>" . "<th>" . $foundation_year . "</th>" . "</tr>";
}

?>

</table>
</div>

</body>
</html>