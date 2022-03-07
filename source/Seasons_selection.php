<!DOCTYPE html>
<html>
<form action= "start.php" method="POST">

    <button class="btn btn-primary", style ="color: black;">BACK</button>
</form>  
<body  {
 style="background-image: url(images/yellow_green.jpg);  background-repeat: no-repeat;background-attachment: fixed; background-size: 100% 100%;"
}>
<head>
	<title>Seasons</title>
	<h1>Seasons</h1>

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

<tr> <th> s_year </th> <th> s_name </th> <th>champion_team</th> </tr> 

<?php

include "config.php";

$sql_statement = "SELECT * FROM seasons";

$result = mysqli_query($db, $sql_statement);

while($row = mysqli_fetch_assoc($result))
{
  $s_year = $row['s_year'];
  $s_name = $row['s_name'];
  $champion_team = $row['champion_team'];

	echo "<tr>" . "<th>" . $s_year . "</th>" . "<th>" . $s_name . "</th>" . "<th>" . $champion_team . "</th>" . "</tr>";
}

?>

</table>
</div>

</body>
</html>