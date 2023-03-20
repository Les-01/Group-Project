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
  <div class="middle  bg-info-subtle border border-primary-subtle rounded-3 text-center w-50">
    <h1>FAQ - COMING SOON</h1>
    <hr>
    <p>Work In Progress! <br> Available Soon</p>
    <p>We need to go over these questions, change and add some.</p>
    <ul style="text-align: left;">
      <li>Q: Why should I sign up to this website? </li>
      <li>A: So you can play games on your browser...for FREE! </li><br>
      <li>Q: How do I sign up? </li>
      <li>A: Click the 'Register' button along the top navigation bar. </li><br>
      <li>Q: How do I change my profile picture? </li>
      <li>A: Just simply click on your image when on the 'Profile' page. </li><br>  
      <li>Q: How did you come up with the idea for this site?</li>
      <li>A: blah blah </li><br>
      <li>Q: What does this website have to offer?</li>
      <li>A: blah blah </li><br>
      <li>Q: How do I update my details? </li>
      <li>A: blah blah </li><br>
      <li>Q: What does the 'Gamer Score' get calculated? </li>
      <li>A: blah blah </li><br>
      <li>Q: Will more games be added? </li>
      <li>A: Short answer, YES! However, it DOES take time to write the code for these games and then intergrate it into the website.</li><br>
      
    </ul>
  </div>
  <div class="bottomleft bg-info-subtle border border-primary-subtle rounded-3 text-center">
    
  </div>
</div>
<!-- ************************** COMING SOON ************************** -->


</body>


</html>