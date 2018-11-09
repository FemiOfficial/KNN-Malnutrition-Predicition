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
  <div class="diagnosis-module">
    <form role="form" method = "post" action="diagnosis.php">
          <h2>Diagnosis Q/A</h2>
          <br>

      <div class = "first_part">
        <div class = "symtom_feature">
            <h5>Pain in the Bones</h5>
            <label class="radio-inline">
            <input type="radio" name="pain_bones" value = "1">Low
            </label>
            <label class="radio-inline">
              <input type="radio" name="pain_bones" value = "2">Moderate
            </label>
            <label class="radio-inline">
              <input type="radio" name="pain_bones" value = "3">Severe
            </label>
            <label class="radio-inline">
              <input type="radio" name="pain_bones" value ="0" >None
            </label>
        </div>
        <div class = "symtom_feature">
            <h5>Pain in the Arm</h5>
            <label class="radio-inline">
              <input type="radio" name="pain_arm" value = "1" >Low
            </label>
            <label class="radio-inline">
              <input type="radio" name="pain_arm" value = "2" >Moderate
            </label>
            <label class="radio-inline">
              <input type="radio" name="pain_arm" value ="3" >Severe
            </label>
            <label class="radio-inline">
              <input type="radio" name="pain_arm" value ="0" >None
            </label>
        </div>
        <div class = "symtom_feature">
            <h5>Pain in the Legs</h5>
            <label class="radio-inline">
              <input type="radio" name="pain_leg" value = "1" >Low
            </label>
            <label class="radio-inline">
              <input type="radio" name="pain_leg" value = "2" >Moderate
            </label>
            <label class="radio-inline">
              <input type="radio" name="pain_leg" value ="3" >Severe
            </label>
            <label class="radio-inline">
              <input type="radio" name="pain_leg" value = "0">None
            </label>
        </div>
        <div class = "symtom_feature">
            <h5>Stunted Growth</h5>
            <label class="radio-inline">
              <input type="radio" name="st_growth" value = "1" >Low
            </label>
            <label class="radio-inline">
              <input type="radio" name="st_growth" value = "2">Moderate
            </label>
            <label class="radio-inline">
              <input type="radio" name="st_growth" value = "3">Severe
            </label>
            <label class="radio-inline">
              <input type="radio" name="st_growth" value = "0">None
            </label>
        </div>
        <div class = "symtom_feature">
            <h5>Muscle Cramps</h5>
            <label class="radio-inline">
              <input type="radio" name="muscle_cramps" value = "1">Low
            </label>
            <label class="radio-inline">
              <input type="radio" name="muscle_cramps" value = "2">Moderate
            </label>
            <label class="radio-inline">
              <input type="radio" name="muscle_cramps" value = "3">Severe
            </label>
            <label class="radio-inline">
              <input type="radio" name="muscle_cramps" value = "0">None
            </label>
        </div>
        <div class = "form-group first" style = "float:right;">
          <a class = "btn btn-warning">Next</a>
        </div>
      </div>
      <div class = "second_part">
        <div class = "symtom_feature">
            <h5>Drowsiness</h5>
            <label class="radio-inline">
              <input type="radio" name="drowsiness" value = "1">Low
            </label>
            <label class="radio-inline">
              <input type="radio" name="drowsiness" value = "2">Moderate
            </label>
            <label class="radio-inline">
              <input type="radio" name="drowsiness" value = "3">Severe
            </label>
            <label class="radio-inline">
              <input type="radio" name="drowsiness" value = "0">None
            </label>
        </div>
        <div class = "symtom_feature">
            <h5>Teeth Deformation</h5>
            <label class="radio-inline">
              <input type="radio" name="teeth_deform" value = "1">Low
            </label>
            <label class="radio-inline">
              <input type="radio" name="teeth_deform" value = "2">Moderate
            </label>
            <label class="radio-inline">
              <input type="radio" name="teeth_deform" value = "3">Severe
            </label>
            <label class="radio-inline">
              <input type="radio" name="teeth_deform" value = "0">None
            </label>
        </div>
        <div class = "symtom_feature">
            <h5>Weakness</h5>
            <label class="radio-inline">
              <input type="radio" name="weakness" value = "1">Low
            </label>
            <label class="radio-inline">
              <input type="radio" name="weakness" value = "2">Moderate
            </label>
            <label class="radio-inline">
              <input type="radio" name="weakness" value = "3">Severe
            </label>
            <label class="radio-inline">
              <input type="radio" name="weakness" value = "0">None
            </label>
        </div>
        <div class = "symtom_feature">
            <h5>Weight Loss</h5>
              <label class="radio-inline">
                <input type="radio" name="weight_loss" value = "1">Low
              </label>
            <label class="radio-inline">
              <input type="radio" name="weight_loss" value = "2">Moderate
            </label>
            <label class="radio-inline">
              <input type="radio" name="weight_loss" value = "3">Severe
            </label>
            <label class="radio-inline">
              <input type="radio" name="weight_loss" value = "0">None
            </label>
        </div>
        <div class = "symtom_feature">
            <h5>Dry Skin</h5>
            <label class="radio-inline">
              <input type="radio" name="dry_skin" value = "1">Low
            </label>
            <label class="radio-inline">
              <input type="radio" name="dry_skin" value = "2">Moderate
            </label>
            <label class="radio-inline">
              <input type="radio" name="dry_skin" value = "3">Severe
            </label>
            <label class="radio-inline">
              <input type="radio" name="dry_skin" value = "0">None
            </label>
        </div>
        <div class = "form-group second" style = "float:right;">
          <a class = "btn btn-warning">Next</a>
        </div>
      </div>
      <div class = "third_part">
        <div class = "symtom_feature">
            <h5>Poor Concentration</h5>
            <label class="radio-inline">
              <input type="radio" name="poor_conc" value = "1">Low
            </label>
            <label class="radio-inline">
              <input type="radio" name="poor_conc" value = "2">Moderate
            </label>
            <label class="radio-inline">
              <input type="radio" name="poor_conc" value = "3">Severe
            </label>
            <label class="radio-inline">
              <input type="radio" name="poor_conc" value = "0">None
            </label>
        </div>
        <div class = "symtom_feature">
            <h5>Vomitting</h5>
            <label class="radio-inline">
              <input type="radio" name="vomit" value = "1">Low
            </label>
            <label class="radio-inline">
              <input type="radio" name="vomit" value = "2">Moderate
            </label>
            <label class="radio-inline">
              <input type="radio" name="vomit" value = "3">Severe
            </label>
            <label class="radio-inline">
              <input type="radio" name="vomit" value = "0">None
            </label>
        </div>
        <div class = "symtom_feature">
            <h5>Nausea</h5>
            <label class="radio-inline">
              <input type="radio" name="nausea" value = "1">Low
            </label>
            <label class="radio-inline">
              <input type="radio" name="nausea" value = "2">Moderate
            </label>
            <label class="radio-inline">
              <input type="radio" name="nausea" value = "3">Severe
            </label>
            <label class="radio-inline">
              <input type="radio" name="nausea" value = "0">None
            </label>
        </div>
        <div class = "symtom_feature">
            <h5>Diahorea</h5>
            <label class="radio-inline">
              <input type="radio" name="diahorea" value = "1">Low
            </label>
            <label class="radio-inline">
              <input type="radio" name="diahorea" value = "2">Moderate
            </label>
            <label class="radio-inline">
              <input type="radio" name="diahorea" value = "3">Severe
            </label>
            <label class="radio-inline">
              <input type="radio" name="diahorea" value = "0">None
            </label>
        </div>
        <div class = "symtom_feature">
            <h5>Dizziness</h5>
            <label class="radio-inline">
              <input type="radio" name="dizzy" value = "1">Low
            </label>
            <label class="radio-inline">
              <input type="radio" name="dizzy" value = "2">Moderate
            </label>
            <label class="radio-inline">
              <input type="radio" name="dizzy" value = "3">Severe
            </label>
            <label class="radio-inline">
              <input type="radio" name="dizzy" value = "0">None
            </label>
        </div>
        <div class = "form-group third" style = "float:right;">
          <a class = "btn btn-warning">Next</a>
        </div>
      </div>
      <div class = "fourth_part">
        <div class = "symtom_feature">
            <h5>Irregular Heartbeat</h5>
            <label class="radio-inline">
              <input type="radio" name="heartbeat_irregular" value = "1">Low
            </label>
            <label class="radio-inline">
              <input type="radio" name="heartbeat_irregular" value = "2">Moderate
            </label>
            <label class="radio-inline">
              <input type="radio" name="heartbeat_irregular" value = "3">Severe
            </label>
            <label class="radio-inline">
              <input type="radio" name="heartbeat_irregular" value = "0">None
            </label>
        </div>
        <div class = "symtom_feature">
            <h5>Headache</h5>
            <label class="radio-inline">
              <input type="radio" name="headache" value = "1">Low
            </label>
            <label class="radio-inline">
              <input type="radio" name="headache" value = "2">Moderate
            </label>
            <label class="radio-inline">
              <input type="radio" name="headache" value = "3">Severe
            </label>
            <label class="radio-inline">
              <input type="radio" name="headache" value = "0">None
            </label>
        </div>
        <div class = "symtom_feature">
            <h5>Cold Feet</h5>
            <label class="radio-inline">
              <input type="radio" name="cold_feet" value = "1">Low
            </label>
            <label class="radio-inline">
              <input type="radio" name="cold_feet" value = "2">Moderate
            </label>
            <label class="radio-inline">
              <input type="radio" name="cold_feet" value = "3">Severe
            </label>
            <label class="radio-inline">
              <input type="radio" name="cold_feet" value = "0">None
            </label>
        </div>
        <div class = "symtom_feature">
            <h5>Pale Skin</h5>
            <label class="radio-inline">
              <input type="radio" name="pale_skin" value = "1">Low
            </label>
            <label class="radio-inline">
              <input type="radio" name="pale_skin" value = "2">Moderate
            </label>
            <label class="radio-inline">
              <input type="radio" name="pale_skin" value = "3">Severe
            </label>
            <label class="radio-inline">
              <input type="radio" name="pale_skin" value = "0">None
            </label>
        </div>
        <div class = "symtom_feature">
            <h5>Chest Pain</h5>
            <label class="radio-inline">
              <input type="radio" name="chest_pain" value = "1">Low
            </label>
            <label class="radio-inline">
              <input type="radio" name="chest_pain" value = "2">Moderate
            </label>
            <label class="radio-inline">
              <input type="radio" name="chest_pain" value = "3">Severe
            </label>
            <label class="radio-inline">
              <input type="radio" name="chest_pain" value = "0">None
            </label>
        </div>
      </div>
      <div class = "form-group submit-btn" style = "margin-top: 30px; display:none;float:right;">
        <button type = "submit" name ="diagnose-btn" class = "btn btn-primary">Diagnose</button>
      </div>
    </form>

  </div>



</div>
</div>


</body>
