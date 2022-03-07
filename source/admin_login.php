<?php
require ('db.php');
$error='';
session_start();
if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
	$sql= "SELECT * FROM admin_user where username='$username' AND password = '$password'";
	$res = mysqli_query($con,$sql);
	$count=mysqli_num_rows($res);
	if($count>0){
		$row = mysqli_fetch_assoc($res);
		$_SESSION['ROLE']=$row['role'];
		$_SESSION['IS_LOGIN']='yes';
		if($row['role'] == 1){
			header('location:index.php');
			die();
		}if($row['role'] == 2){
			header('location:index.php');
			die();
		}
	}else{
		$error = "Please enter correct login details";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset = "UTF-8">
	<meta http-equiv="X-UA-Compatible" content= "IE=edge">
	<meta name= "viewport" content= "width=device-width">
	<title> Admin Login Panel </title>
	<link rel= "stylesheet" href= "admin_style.css">
</head>
<body>
	<div class="container">
		<div class= "myform">
			<form method= "post">
				<h2>ADMIN LOGIN</h2>
				<input type= "username" name="username" class="form-control" 
				placeholder= "Username" required="required" autofocus="autofocus">
				<input type= "password" name= "password" class="form-control"
				placeholder= "Password" required="required">
				<input type="submit" name= "submit" class="btn btn-primary btn-block">
				<?php echo $error?>
			</form>
		</div>
		<div class= "image">
			<img src= "https://icons.iconarchive.com/icons/aha-soft/free-large-boss/256/Admin-icon.png" width="300px">
		</div>
	</div>
		
</body>
</html>