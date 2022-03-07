<!DOCTYPE html>
<html>
    
<form action= "start.php" method="POST">

    <button class="btn btn-primary", style ="color: black;">BACK</button>
</form>
<body  {
 style="background-image: url(images/yellow_green.jpg);  background-repeat: no-repeat;background-attachment: fixed; background-size: 100% 100%;"
}>
<h2> Deleting Seasons</h2>
<p> Year - Season Name</p>
</html>
<?php
include "config.php"; 
?>
<form action="Seasons_delete_f.php" method="GET">
<select name="ids">
<?php
$sql_command =
"SELECT s_year, s_name, champion_team FROM seasons";  //Burası table'a göre güncellenecek
$myresult = mysqli_query($db, $sql_command); 
while($id_rows = mysqli_fetch_assoc($myresult)) { //while'dan echoya while echo dahil değil güncellenecek
$s_year = $id_rows['s_year']; 
$s_name = $id_rows['s_name']; 
$champion_team = $id_rows['champion_team']; 
echo "<option value=$s_year>". $s_year . " - " . $s_name . "</option>";  //option value yanına primary key, diğer tarafsa kullanıcı nasıl
}                                                                        //görmesi lazımsa
?>
</select>
<button>DELETE</button>
</form>