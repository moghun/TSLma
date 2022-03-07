<?php
session_start();
if(!isset($_SESSION['IS_LOGIN'])){
    header('location:admin_login.php');
    die();
}
?>
<html>
<form action= "start.php" method="POST">

    <button class="btn btn-primary", style ="color: black;">BACK</button>
</form>
<body  {
    style="background-image: url(images/yellow_green.jpg);  background-repeat: no-repeat;background-attachment: fixed; background-size: 100% 100%;"
   }>
<style>
.button {
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  background-color: #FF0000;
}
</style>
<h1>Deletion</h1>
<h2>Select table that you want to delete from:</h2>
<br>
<br>
<form action= "Seasons_delete.php" method="POST">
    <button class="button">Seasons</button>
</form>
<form action= "Teams_delete.php" method="POST">
    <button class="button">Teams</button>
</form>
<form action= "Team_Stats_delete.php" method="POST">
    <button class="button">Team Stats</button>
</form>
<form action= "Man_Dir_delete.php" method="POST">
    <button class="button">Manager</button>
</form>
<form action= "Plyr_Cont_delete.php" method="POST">
    <button class="button">Player</button>
</form>
<form action= "FanG_Supp_delete.php" method="POST">
    <button class="button">Fan Groups</button>
</form>
<form action= "Matches_delete.php" method="POST">
    <button class="button">Matches</button>
</form>
<form action= "Player_Stats_delete.php" method="POST">
    <button class="button">Player Stats</button>
</form>
<form action= "Plays_delete.php" method="POST">
    <button class="button">Plays With</button>
</form>
<br>
</html>