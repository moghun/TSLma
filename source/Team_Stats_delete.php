<!DOCTYPE html>
<html>
    
<form action= "start.php" method="POST">

    <button class="btn btn-primary", style ="color: black;">BACK</button>
</form>

<body  {
 style="background-image: url(images/yellow_green.jpg);  background-repeat: no-repeat;background-attachment: fixed; background-size: 100% 100%;"
}>
<h2> Deleting Team Stats</h2>
<p> Year - Team ID</p>
</html>
<?php
include "config.php"; 
?>
</form>
<form action="Team_Stats_delete_f.php" method="POST">  
<select name="ids">
<?php
$sql_command =
"SELECT s_year, team_id FROM team_stats";  //Buras� table'a g�re g�ncellenecek
$result = mysqli_query($db, $sql_command); 
while($id_rows = mysqli_fetch_assoc($result)) { //while'dan echoya while echo dahil de�il g�ncellenecek
$s_year = $id_rows['s_year'];
$team_id = $id_rows['team_id'];
echo "<option value=('$s_year.'-'.$team_id)')>". $s_year ."  -  ". $team_id. "</option>"; 
}                                                                       
?>
</select>
<button>DELETE</button>
</form>