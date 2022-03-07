<!DOCTYPE html>
<html>
<form action= "start.php" method="POST">

    <button class="btn btn-primary", style ="color: black;">BACK</button>
</form>
<body  {
 style="background-image: url(images/yellow_green.jpg);  background-repeat: no-repeat;background-attachment: fixed; background-size: 100% 100%;"
}>
<h2> Deleting Manager</h2>
<p> Manager Name - Team ID</p>
</html>
<?php
include "config.php"; 
?>  
<form action="Man_Dir_delete_f.php" method="GET">
<select name="ids">
<?php
$sql_command =
"SELECT man_id, m_name_first, m_name_sur, team_id FROM man_dir";
$myresult = mysqli_query($db, $sql_command); 
while($id_rows = mysqli_fetch_assoc($myresult)) {
$man_id = $id_rows['man_id']; 
$m_name_first = $id_rows['m_name_first'];
$m_name_sur = $id_rows['m_name_sur']; 
$team_id = $id_rows['team_id']; 
echo "<option value=$man_id>". $m_name_first . " " . $m_name_sur. " - " . $team_id."</option>"; 
}                                                                       
?>
</select>
<button>DELETE</button>
</form>