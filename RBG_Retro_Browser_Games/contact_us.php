<?php

session_start();

// ********************* INCLUDE FILES ********************* 
include("Config/conn.php");
include("Config/functions.php");
//include("Misc_Files/liveBG.php");
//include("Navbars/general_navbar.php");
// ********************* INCLUDE FILES *********************

//$User_Data = check_login($con);
if(($User_Data = check_login($con)) == true)
{
navbar_check($con);
$_SESSION['Username'] = $User_Data['Username'];
}
else
{
  include("Navbars/General_navbar.php");
}

?>

<!-- ********************* BOOTSTRAP & CSS ********************* -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" href="css/coming_soon.css">
<!-- ********************* BOOTSTRAP & CSS ********************* -->

<head>
  


</head>

<body>

<!-- ************************** BACKGROUND INCLUDE ************************** -->  
<style>
body {
  background-image: url('images/cpu_circuit.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>
<!-- ************************** BACKGROUND INCLUDE ************************** -->



<!-- ************************** COMING SOON ************************** -->
<div class="bgimg">
  <div class="middle  bg-info-subtle border border-primary-subtle rounded-3 text-center w-50 h-25">
    <h1>CONTACT US - COMING SOON</h1>
    <hr>
    <p>Under construction <br> Available in a few weeks</p>
  </div>
  <div class="bottomleft bg-info-subtle border border-primary-subtle rounded-3 text-center">
    <p>We need to decide what we are going to put on this page!</p>
  </div>
</div>
<!-- ************************** COMING SOON ************************** -->

</body>

</html>