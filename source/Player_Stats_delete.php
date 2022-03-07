<!DOCTYPE html>
<html>
<form action= "start.php" method="POST">

    <button class="btn btn-primary", style ="color: black;">BACK</button>
</form>    
<body  {
 style="background-image: url(images/yellow_green.jpg);  background-repeat: no-repeat;background-attachment: fixed; background-size: 100% 100%;"
}>
<h2> Deleting Player Stats</h2>
<p> Match ID - Player ID</p>
</html>
<?php
include "config.php"; 
?>
</form>
<form action="Player_Stats_delete_f.php" method="POST">
<select name="ids">
<?php
$sql_command =
"SELECT match_id, player_id FROM player_stats";  //Buras� table'a g�re g�ncellenecek
$result = mysqli_query($db, $sql_command); 
while($id_rows = mysqli_fetch_assoc($result)) { //while'dan echoya while echo dahil de�il g�ncellenecek
$match_id = $id_rows['match_id'];
$player_id = $id_rows['player_id'];
echo "<option value=('$match_id.'-'.$player_id)')>". $match_id ."  -  ". $player_id. "</option>"; 
}                                                                       
?>
</select>
<button>DELETE</button>
</form>