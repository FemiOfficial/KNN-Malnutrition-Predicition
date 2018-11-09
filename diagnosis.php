<?php
include_once("res/connect.php");
include_once("res/session.php");
include_once("res/functions.php");

if($_SESSION == null){
  header("location:login.php");
}
if(isset($_POST["submitbtn"])){
  logOut();
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <meta content="Page description" name="description">
  <meta name="google" content="notranslate" />
  <meta content="" name="author">

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">

  <link href="./assets/apple-icon-180x180.png" rel="apple-touch-icon">
  <link href="./assets/favicon.ico" rel="icon">

  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/controls.js"></script>




  <title>PreNutri::User Profile</title>

<link href="./main.82cfd66e.css" rel="stylesheet">
</head>
<body>

<!-- Add your content of header -->
<header class="">
  <div class="navbar navbar-default visible-xs">
    <button type="button" class="navbar-toggle collapsed">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
    </button>
    <a href="./index.html" class="navbar-brand">A predictive nutritional status system</a>
  </div>
  <nav class="sidebar" style="background-color:gold;">
    <div class="navbar-collapse" id="navbar-collapse">
      <div class="site-header hidden-xs">
          <a class="site-brand" href="./index.html" title="">
            <img class="img-responsive site-logo" alt="" src="./assets/images/mashup-logo.svg">

          </a>
        <p>A predictive nutritional status system</p>
      </div>
      <ul class="nav">
        <form method="post">
        <li><a href="" title="Username" style="text-transform:uppercase; font-weight:bold;" >
          <?php echo "Hi, ".$_SESSION['username']; ?>
        </a></li>
        <li><button type="submit" name="submitbtn" title="Log Out" style="background:none; border:none; padding:0px;">Log Out</button></li>
      </form>
        <li><a href="./homepage.html" title="">Home</a></li>
        <li><a href="./project.html" title="">Health Tips</a></li>
        <li><a href="./food.html" title="">Recipes</a></li>
      </ul>
<p>Ainoko victoria iyeh</p>
        <p> @ 2018 </p>
      </nav>
    </div>
  </nav>
</header>
<div class = "col-md-6 col-md-offset-3 ">
  <div class="diagnosis-module" style="text-align:center;">
    <h2>Diagnosis Result</h2>
    <?php
    if(isset($_POST["diagnose-btn"])){
      $class = diagnose();
      if($class == "No"){
        ?>
        <p style="font-size:17px; text-transform:uppercase;;"><span style="font-weight:bold;"><?php echo "Congratulations, ".$_SESSION['username']; ?></span>
          you not malnurished but you should eat more
          carbonhydrte daily.
        </p>
        <?php
      }else{
        ?>
        <p style="font-size:17px; text-transform:uppercase;;"><span style="font-weight:bold;"><?php echo "Oops, ".$_SESSION['username']; ?></span>
          you malnurished please try to see a physician
           and improve your diet.
        </p>
        <?php
      }
    }

    ?>


  </div>

</div>
</div>


</body>
