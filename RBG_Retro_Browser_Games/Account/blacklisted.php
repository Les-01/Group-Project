<?php // This is the opening of PHP

session_start(); // This starts a session
$_SESSION['BL_Message_displayed'] = 'yes'; // This is a variable within the current session This changes the variable BL_Message_Displayed to yes. That means the code below will run, displaying the users username, and reason for thier blacklisting. 

include("../config/conn.php"); // This is an inclusion line which includes the conn.php file.
include("../config/functions.php"); //This is an inclusion file that is including the functions.php

check_login($con); //This is a function that checks if the user is logged in

$Username = $_SESSION['Username']; //This line creates a new variable '$Username' and populates it with the information from the $_SESSION.
$Email = $_SESSION['Email']; //This line creates a new variable '$Email' and populates it with the information from the $_SESSION.
$BL_Reason = $_SESSION['BL_Reason']; //This line creates a new variable '$BL_Reason' and populates it with the information from the $_SESSION.

?>

<!-- ********************* BOOTSTRAP & CSS ********************* -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> <!-- This is an inclusion, this includes the Bootstrap CSS file -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> <!-- This is an inclusion, this includes the Bootstrap script file -->
<link rel="stylesheet" href="css/styles.css"> <!-- This is an inclusion, this includes the my own CSS file -->
<!-- ********************* BOOTSTRAP & CSS ********************* -->
<html> <!-- This opens the HTML section. -->
<head> <!-- This opens the head section. -->
  
</head> <!-- This closes the head section. -->

<body> <!-- This opens the head section. -->

<!-- ************************** BLACKLISTED MESSAGE ************************** -->
<div class="card h-100" style="align-items: center;"> <!-- This is creating a new div for the card with the parameters within such as the height 'h' and aligned items. -->
  <div class="middle bg-info-subtle border border-primary-subtle rounded-3 text-center w-75 h-45 mt-5"> <!-- This is creating a new div within the current div which is the content of the card. -->
    <p><h1>**ALERT**</h1> <!-- This is the title that will be shown on the page with the 'h1' text size. -->
      <br><h5>ALL access has been revoked for User: <h4><?php echo $Username; ?></h4> <!-- This is the contecnt of the messsage essentially working like a sub-heading. -->
      <br><b>Reason:</b> <!-- This is just printing out the word 'Reason:' the syntax encapsulating the word 'b' is setting the text to be displayed in bold. -->
      <br> <h4><?php echo $BL_Reason; ?></h4> <!-- this is echoing out as in displaying the reason the user has been blacklisted and this information is taken from the database. As you can see, there is an injection of PHP in this line. -->
      <br><br>You no longer have access to the services provided by Retro Browser Gaming (RBG). <!-- 'br' means break which just the equivelant of pushing enter on a text file. This line is also displayed to the user. -->
      <br> If you wish to challenge this decision please contact us on:</h5> <!-- This line will be displayed, but again the line is encapsulated by the font size 'h5' -->
      <br><br><h3>support@highersphere.co.uk</h3> <!-- This line will dsiplay the text the same as the line before, but in a different font size. 'h3'. -->
    </p> <!-- This closes the paragraph. -->
  </div> <!-- This closes the internal div. -->
</div> <!-- This close the external div. -->
<!-- ************************** BLACKLISTED MESSAGE ************************** -->

</body><!-- This closes the body section. -->

</html> <!-- This closes the HTML. -->