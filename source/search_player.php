<!DOCTYPE html>
<html>
<form action= "start.php" method="POST">

    <button class="btn btn-primary", style ="color: black;">BACK</button>
</form>    
<body  {
 style="background-image: url(images/yellow_green.jpg);  background-repeat: no-repeat;background-attachment: fixed; background-size: 100% 100%;"
}>
<h2> Player Details</h2>
<p> Player ID - Player Name - Player Surname </p>
</html>
<?php
include "config.php"; 
?>
<form action="search_player_f.php" method="GET">
<select name="ids">
<?php
$sql_command =
"SELECT player_id, p_name_first, p_name_sur FROM plyr_cont";  //Buras� table'a g�re g�ncellenecek
$myresult = mysqli_query($db, $sql_command); 
while($id_rows = mysqli_fetch_assoc($myresult)) { //while'dan echoya while echo dahil de�il g�ncellenecek
$player_id = $id_rows['player_id']; 
$p_name_sur = $id_rows['p_name_sur']; 
$p_name_first = $id_rows['p_name_first']; 
echo "<option value=$player_id>". $player_id . " - " . $p_name_first . " - " . $p_name_sur . "</option>";  //option value yan�na primary key, di�er tarafsa kullan�c� nas�l
}                                                                        //g�rmesi laz�msa
?>
</select>
<button>SHOW</button>
</form>