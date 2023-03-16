<?php

session_start();

// ********************* INCLUDE FILES ********************* 
include("Config/conn.php");
include("Config/functions.php");
// ********************* INCLUDE FILES *********************

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
    <h1>ABOUT - COMING SOON</h1>
    <hr>
    <p>Under construction <br> Available in a few weeks</p>
    <p>
      This website is a joint collaboration between Charles Skudder and Les Grint. <br>
      We have worked tirelessly to bring this website together and to bring you, <br>
      the user a great entertainment platform for gaming. It doesn't matter where you are, who you are, or what you are, so long as you have an internet connection we're sure you'll find a game that you'll enjoy! <br>
      If you don't, then feel free to reach out to us with your suggestions and we will endeavour to try our best! <br>
      If you encounter any issues, bugs, or have questions, be sure to check out our FAQ page <a href="faq.php">HERE</a> as we may have already answered your question.
      If we haven't then let us know via the <a href="contact_us.php">Contact Us</a> page.
      <br>
      Click the 'Games' tab on the navigation bar to browse the games already available, alternatively just click <a href="games.php">here</a>.<br>
      Happy gaming! <br><br>  
      Still to come:<br> 
      <ul>
         <li> A scoreboard - (so we can have a leaderboard which will allow our users to see where they rank based on their skill points earned <br> by playing the games)</li>
         <li> A Chat page - (a place that users can come together and share gaming tips and help each other to reach higher scores)</li>
         <li> New games - (We are currently looking into a first person shooter style game)</li>
      </ul>
      <br> 
    </p>
  </div>
</div>
<!-- ************************** COMING SOON ************************** -->

</body>

</html>