<body>

<div align="center">

	<table>

<tr> <th> ID </th> <th> SENDER </th> <th>MESSAGE</th> </tr> 

<?php

include "config.php";

$sql_statement = "SELECT * FROM messages";

$result = mysqli_query($db, $sql_statement);

while($row = mysqli_fetch_assoc($result))
{
  $id = $row['id'];
  $mysender = $row['sender'];
	$message = $row['message'];

	echo "<tr>" . "<th>" . $id . "</th>" . "<th>" . $mysender . "</th>" . "<th>" . $message . "</th>" . "</tr>";
}

?>

</table>
</div>

</body>
</html>