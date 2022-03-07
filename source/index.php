<?php
session_start();
?>
<!DOCTYPE html>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Main Page</title>    
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    
<section id="nav-bar">
    
 
<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa fa-bars"></i>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <form action= "admin_login.php" method="POST">
        <button class="btn btn-primary-light", style ="color: black;background-color: rgba(255, 241, 44, 0);">ADMIN LOGIN</button>
        </form>
      </li>
      <?php if( isset($_SESSION['IS_LOGIN']) && $_SESSION['IS_LOGIN']=='yes'){?>
      <li class="nav-item">
        <form action= "logout.php" method="POST">
          <button class="btn btn-primary-light", style ="color: black;background-color: rgba(255, 241, 44, 0);">LOG OUT</button>
        </form>
      </li>
      <?php } ?>
      <li class="nav-item">
        <form action= "selection.php" method="POST">

        <button class="btn btn-primary-light", style ="color: black; background-color: rgba(255, 241, 44, 0);">SELECTION</button>
        </form>
      </li>
      <?php if(isset($_SESSION['ROLE']) && $_SESSION['ROLE']==1){?>
      <li class="nav-item">
        <form action= "insertion.php" method="POST">

        <button class="btn btn-primary-light", style ="color: black;background-color: rgba(255, 241, 44, 0);">INSERTION</button>
        </form>
      </li>
      <li class="nav-item">
        <form action= "deletion.php" method="POST">
        <button class="btn btn-primary-light", style ="color: black;background-color: rgba(255, 241, 44, 0);">DELETION</button>
        </form>
      </li>
      <?php } ?>
      <li class="nav-item">
        <form action= "search.php" method="POST">

        <button class="btn btn-primary-light", style ="color: black;background-color: rgba(255, 241, 44, 0);">SEARCH</button>
        </form>
      </li>
    </ul>
  </div>
</nav>
</section>  
    
<!--------------banner section-------------->   
    
<section id="banner">
<div class="container">
<div class="row">
<div class="col-md-6">
<p, style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; font-size:30px;">TSLMa</p>

</div> 
<div class="col-md-6 text-center">  
</div>
</div>    
</div>      
</section>  
    
<!------------Services Section-------------->

<section id="services">
<div class="container text-center">
<h1 class="title">Turkish Super League Monitoring Application</h1>
<br>
<img src="images/tsl_logo.png" alt="Trulli" width="330" height="250">
<br>
<div class="row text-center">
<div class="col-md-4 services">
<h4>INSERT</h4>
<p>Insert new seasons, teams, players and many other thing related</p>
</div>  
<div class="col-md-4 services">
<h4>DELETE</h4>
<p>Delete and manage according to your interests</p>
</div>  
<div class="col-md-4 services">
<h4>SEARCH</h4>
<p>View team, player, manager etc. informations and statiscis</p>
</div>


</div> 
    <form action= "start.php" method="POST">

    <button class="btn btn-primary", style ="color: black; background-color: rgba(60, 168, 60, 0.63);">Start</button>
  </form>
</div>   
</section>
  

<!------------footer section ------------>   
<section id="footer">
<div class="container">
<div class="row">
<div class="col-md-4 footer-box">
    <p>Melih Gursoy&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</p>
</div> 
<div class="col-md-4 footer-box">
    <p>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Muhammed Orhun Gale</p>
    
</div>
<div class="col-md-4 footer-box">
    <p>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Furkan Akgun</p>
    
</div>
</div>
</div>   
</section>    

    

</body>
</html>