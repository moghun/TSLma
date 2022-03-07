<!DOCTYPE html>
<html>
<form action= "start.php" method="POST">

    <button class="btn btn-primary", style ="color: black;">BACK</button>
</form>  
<body  {
 style="background-image: url(images/yellow_green.jpg);  background-repeat: no-repeat;background-attachment: fixed; background-size: 100% 100%;"
}>
<head>
	<title>Fan Groups</title>
	<h1>Fan Groups</h1>

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

<tr> <th> f_name </th> <th> number_of_people </th> <th>team_id</th> </tr> 

<?php

include "config.php";

$sql_statement = "SELECT * FROM fang_supp";

$result = mysqli_query($db, $sql_statement);

while($row = mysqli_fetch_assoc($result))
{
  $f_name = $row['f_name'];
  $number_of_people = $row['number_of_people'];
  $team_id = $row['team_id'];

	echo "<tr>" . "<th>" . $f_name . "</th>" . "<th>" . $number_of_people . "</th>" . "<th>" . $team_id . "</th>" . "</tr>";
}

?>

</table>
</div>

</body>
</html>