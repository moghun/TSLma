<!DOCTYPE html>
<html>
<form action= "start.php" method="POST">

    <button class="btn btn-primary", style ="color: black;">BACK</button>
</form>    
<body  {
 style="background-image: url(images/yellow_green.jpg);  background-repeat: no-repeat;background-attachment: fixed; background-size: 100% 100%;"
}>
<h2> Deleting Fan Group</h2>
<p> Fan Group Name - Team ID</p>
</html>
<?php
include "config.php"; 
?>
<form action="Seasons_delete_f.php" method="GET">
<select name="ids">
<?php
$sql_command =
"SELECT f_name, team_id FROM fang_supp";  //Buras� table'a g�re g�ncellenecek
$myresult = mysqli_query($db, $sql_command); 
while($id_rows = mysqli_fetch_assoc($myresult)) { //while'dan echoya while echo dahil de�il g�ncellenecek
$f_name = $id_rows['f_name']; 
$team_id = $id_rows['team_id']; 
echo "<option value=$f_name>". $f_name . " - " . $team_id . "</option>"; 
}                                                                       
?>
</select>
<button>DELETE</button>
</form>