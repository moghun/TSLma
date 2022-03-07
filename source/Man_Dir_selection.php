<!DOCTYPE html>
<html>
<form action= "start.php" method="POST">

    <button class="btn btn-primary", style ="color: black;">BACK</button>
</form>  
<body  {
 style="background-image: url(images/yellow_green.jpg);  background-repeat: no-repeat;background-attachment: fixed; background-size: 100% 100%;"
}>
<head>
	<title>Manager</title>
	<h1>Manager</h1>

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

<tr> <th> man_id </th> <th> m_name_first </th> <th>m_name_sur</th> <th>m_nationality</th> <th>team_id</th> <th>m_duration</th> </tr> 

<?php

include "config.php";

$sql_statement = "SELECT * FROM man_dir";

$result = mysqli_query($db, $sql_statement);

while($row = mysqli_fetch_assoc($result))
{
  $man_id = $row['man_id'];
  $m_name_first = $row['m_name_first'];
  $m_name_sur = $row['m_name_sur'];
  $m_nationality = $row['m_nationality'];
  $team_id = $row['team_id'];
  $m_duration = $row['m_duration'];

	echo "<tr>" . "<th>" . $man_id . "</th>" . "<th>" . $m_name_first . "</th>" . "<th>" . $m_name_sur . "</th>". "<th>" . $m_nationality . "</th>". "<th>" . 
	$team_id . "</th>". "<th>" . $m_duration . "</th>" . "</tr>";
}

?>

</table>
</div>

</body>
</html>