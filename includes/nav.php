<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
  
<head> 
	 
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width = device-width, initial-scale = 1, shrink-to-fit=no">
	

<!--	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"> -->
	<link rel="shortcut icon" href="/favicon.jpg"/>
  <link href="bootstrap.min.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">	
	<link rel="stylesheet" media="screen and (max-width: 767.5px)" href="navcollapse.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="bootstrap.min.js"></script> 

  
  </head>
<body>
  <nav class="navbar navbar-default">
  <div class="container-fluid">
	<!-- responsive navbar for mobiles -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  <a class="navbar-brand" rel="home" href="index.php">
    <img id="logo" src="favicon.jpg">
  </a>
  </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php"><span class="navedit" id="home">Home</span></a></li>
        <li><a href="aboutUs.php"><span class="navedit">About Us</span></a></li>
        <li><a href="faq.php"><span class="navedit">FAQ</span></a></li>
        <li><a href="contactUs.php"><span class="navedit">Contact Us</span></a></li>
        <li><a href="register.php"><span class="navedit">Register</span></a></li>
      </ul>
      
      
      
    <div class="loginForm" id="loginForm">
    <form class="navbar-form navbar-right" role="search" method="post" action="checkLogin.php">
      <div class="form-group">
          <input type="text" class="form-control" name="myusername" placeholder="Username">
      </div>
      <div class="form-group">
          <input type="password" class="form-control" name="mypassword" placeholder="Password">
          <!--<label id="fp">Forgot Password?</label>-->
      </div>
      <button type="submit" class="btn btn-default">Sign In</button>
    </form>
    <label id="fp" class="navbar-right fp">Forgot Password?</label>
    </div>  
    
    
    <div class="loggedIn" id="loggedIn">

      
<div class="btn-group navbar-form navbar-right">
  <button type="button" class="btn btn-primary"><?= $_SESSION['username']?></button>
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="caret"></span>
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu">
    <li><a href="profile.php">Profile</a></li>
    <li><a href="#">Upcoming Events</a></li>
    <li role="separator" class="divider"></li>
    <li><a href="signOut.php">Sign out</a></li>
  </ul>
</div>
      
    </div>
    
    
    </div>
  </div>
  </nav>
    
  <div id ="title">
    <img id="logo2" src="favicon2.jpg"/>
  </div>
  
  
  
  </body>
  
  <style>
    .loginForm{
              display: block;
    }

    .loggedIn{
      display: none; /*hidden by default */
    }
    
    .fp{
      inline-size: -webkit-fill-available;
      text-align: right;
      padding-right: 4.8%;
    }
    
  </style>
      <?php
    $username = $_SESSION['username'];
?>
  <script>
    
    var loginForm = document.getElementById('loginForm');
    var loggedIn = document.getElementById('loggedIn');
    var username = '<?php echo $username; ?>';
    
    if(username != ""){
      loginForm.style.display = "none";
      loggedIn.style.display = "block";
    }
    

  </script>