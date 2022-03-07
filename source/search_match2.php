<!DOCTYPE html>
<html>
<form action= "start.php" method="POST">

    <button class="btn btn-primary", style ="color: black;">BACK</button>
</form>    
<body  {
 style="background-image: url(images/yellow_green.jpg);  background-repeat: no-repeat;background-attachment: fixed; background-size: 100% 100%;"
}>
<h2> Matches Details</h2>
<p> Match Date - Stadium </p>
</html>
<?php
include "config.php"; 
?>
<form action="search_match.php" method="GET">
<select name="ids">
<?php
$sql_command =
"SELECT match_id, stadium, match_date FROM matches";  //Burasý table'a göre güncellenecek
$myresult = mysqli_query($db, $sql_command); 
while($id_rows = mysqli_fetch_assoc($myresult)) { //while'dan echoya while echo dahil deðil güncellenecek
$match_id = $id_rows['match_id']; 
$stadium = $id_rows['stadium']; 
$match_date = $id_rows['match_date']; 
echo "<option value=$match_id>". $match_id . " - " . $match_date . " - " . $stadium . "</option>";  //option value yanýna primary key, diðer tarafsa kullanýcý nasýl
}                                                                        //görmesi lazýmsa
?>
</select>
<button>SHOW</button>
</form>