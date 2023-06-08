<?php //This is the start of the php

session_start(); //This starts the session

// ********************* INCLUDE FILES ********************* 
include("Config/conn.php"); //This includes the conn.php file
include("Config/functions.php"); //This includes the functions.php file
// ********************* INCLUDE FILES *********************

if(($User_Data = check_login($con)) == true) //This is checking the user is logged in
{ //This is the opening bracket to the if statement
navbar_check($con); //This is a function that checks which navbar should be displayed on the website
$_SESSION['Username'] = $User_Data['Username']; //This is creating a new variable that is being populated by the database 
$_SESSION['Tier'] = $User_Data['Tier']; //This is creating a new variable that is being populated by the database 
} //This is the closing bracket for the if statement
else //This is an else statement
{ //This is the opening bracket for the else statement
  include("Navbars/General_navbar.php"); //This is an inclusion line that disaplays the general navbar if triggered
} //This is the closong bracket for the else statement

?> <!-- This closes off the php -->


<!-- ********************* BOOTSTRAP ********************* -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> <!-- This is an included bootstrap stylesheet -->
<!-- ********************* BOOTSTRAP ********************* -->

<!-- ********************* MY CSS ********************* -->
<link rel="stylesheet" href="css/styles.css"> <!-- This is an included stylesheet -->
<link rel="stylesheet" href="css/gamingbg.css"> <!-- This is an included stylesheet -->
<script src="js/gamingbg.js"></script> <!-- This is an included script -->
<!-- ********************* MY CSS ********************* -->

<html> <!-- This starts the html section -->

<head> <!-- This starts the head section -->

</head> <!-- This ends the head section -->

<body> <!-- This starts the body section -->







</body> <!-- This ends the body section -->

</html> <!-- This ends the html section -->