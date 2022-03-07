<!DOCTYPE html>
<html>
<form action= "start.php" method="POST">

    <button class="btn btn-primary", style ="color: black;">BACK</button>
</form>    
<body  {
 style="background-image: url(images/yellow_green.jpg);  background-repeat: no-repeat;background-attachment: fixed; background-size: 100% 100%;"
}>
<h2> Deleting Team</h2>
<p> Team Name</p>
</html>
<?php
include "config.php"; 
?>
<form action="Teams_delete_f.php" method="GET">
<select name="ids">
<?php
$sql_command =
"SELECT team_id, t_name, foundation_year FROM Teams"; 
$myresult = mysqli_query($db, $sql_command); 
while($id_rows = mysqli_fetch_assoc($myresult)) { 
$team_id = $id_rows['team_id']; 
$t_name = $id_rows['t_name']; 
$foundation_year = $id_rows['foundation_year']; 
echo "<option value=$team_id>". $t_name . "</option>"; 
} 
?>
</select>
<button>DELETE</button>
</form>