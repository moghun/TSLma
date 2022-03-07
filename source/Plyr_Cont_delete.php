<!DOCTYPE html>
<html>
    
<form action= "start.php" method="POST">

    <button class="btn btn-primary", style ="color: black;">BACK</button>
</form>
<body  {
 style="background-image: url(images/yellow_green.jpg);  background-repeat: no-repeat;background-attachment: fixed; background-size: 100% 100%;"
}>
<h2> Deleting Player</h2>
<p> Player Name - Team ID</p>
</html>
<?php
include "config.php"; 
?>
<form action="Seasons_delete_f.php" method="GET">
<select name="ids">
<?php
$sql_command =
"SELECT player_id, p_name_first, p_name_sur,team_id FROM plyr_cont";  //Buras� table'a g�re g�ncellenecek
$myresult = mysqli_query($db, $sql_command); 
while($id_rows = mysqli_fetch_assoc($myresult)) { //while'dan echoya while echo dahil de�il g�ncellenecek
$player_id = $id_rows['player_id']; 
$p_name_first = $id_rows['p_name_first']; 
$p_name_sur = $id_rows['p_name_sur'];
$team_id = $id_rows['team_id']; 
echo "<option value=$player_id>". $p_name_first . " " . $p_name_sur. " - " . $team_id."</option>";
}                                                                       
?>
</select>
<button>DELETE</button>
</form>