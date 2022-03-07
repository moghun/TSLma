<!DOCTYPE html>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Start</title>    
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
          <form action= "selection.php" method="POST">

          <button class="btn btn-primary-light", style ="color: black;background-color: rgba(255, 241, 44, 0);">SELECTION</button>
        </form>
      </li>
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
<h1 style="font-size: 20px;">Select the operation you want to perform</h1>
<br>
<br>
<div class="row text-center">
    <div class="col-md-4 services">
        <img src="https://img.icons8.com/ios-filled/100/000000/add-database.png"/>   </div>  
    <div class="col-md-4 services">
        <img src="https://img.icons8.com/ios-filled/100/000000/delete-database.png"/>
    </div>  
    <div class="col-md-4 services">
        <img src="https://img.icons8.com/ios-filled/100/000000/search-database.png"/>
    </div>
<div class="col-md-4 services">
 <form action= "insertion.php" method="POST">

        <button class="btn btn-primary", style ="color: black; background-color: rgba(60, 168, 60, 0.63);">Insertion</button>
        </form> 
    </div>  

<div class="col-md-4 services">
        <form action= "deletion.php" method="POST">
        <button class="btn btn-primary", style ="color: black; background-color: rgba(60, 168, 60, 0.63);">Deletion</button>
        </form>
    </div>  
<div class="col-md-4 services">
        <form action= "search.php" method="POST">

        <button class="btn btn-primary", style ="color: black; background-color: rgba(60, 168, 60, 0.63);">Search</button>
        </form>
    </div>
</section>
  

<!------------footer section ------------>   
<section id="footer">
<img src="images/wave2.png" class="footer-img">   
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