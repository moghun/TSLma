<!DOCTYPE html>
<html>
<form action= "start.php" method="POST">

<button class="btn btn-primary", style ="color: black;">BACK</button>
</form>

<body  {
 style="background-image: url(images/yellow_green.jpg);  background-repeat: no-repeat;background-attachment: fixed; background-size: 100% 100%;"
}>
<h2> Deleting Matches</h2>
<p> Match Date - Stadium - Opponent</p>
</html>
<?php
include "config.php"; 
?>
<form action="Seasons_delete_f.php" method="GET">
<select name="ids">
<?php
$sql_command =
"SELECT match_id, stadium, match_date,opponent_id FROM matches";  //Buras� table'a g�re g�ncellenecek
$myresult = mysqli_query($db, $sql_command); 
while($id_rows = mysqli_fetch_assoc($myresult)) { //while'dan echoya while echo dahil de�il g�ncellenecek
$match_id = $id_rows['match_id']; 
$stadium = $id_rows['stadium']; 
$match_date = $id_rows['match_date']; 
$opponent_id = $id_rows['opponent_id']; 
echo "<option value=$match_id>". $match_date . " - " . $stadium ." - " . $opponent_id . "</option>";  //option value yan�na primary key, di�er tarafsa kullan�c� nas�l
}                                                                        //g�rmesi laz�msa
?>
</select>
<button>DELETE</button>
</form>