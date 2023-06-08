<?php //This starts the php
session_start();
// ********************* INCLUDE FILES ********************* 
include ("Config/conn.php"); //This includes the conn.php file
include("Config/functions.php"); //This includes the functions.php file
// ********************* INCLUDE FILES *********************

$User_Data = check_login($con); // This line is checking that a user is logged in.
$navbar = navbar_check($con); // This line is checking what rank the user is (general, user, or admin) then includes the navbar based upon that rank.

?> <!-- this closes the php -->

<!-- ********************* BOOTSTRAP ********************* -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> <!-- This is an included bootstrap stylesheet -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> <!-- This is an included bootstrap script -->
<link rel="stylesheet" href="css/styles.css"> <!-- This is an included stylesheet -->
<!-- ********************* BOOTSTRAP ********************* -->

<html> <!-- This starts the html section -->

<head> <!-- This starts the head section -->
  
</head> <!-- This ends the head section -->

<body> <!-- This starts the body section -->

</body> <!-- This ends the body section -->

</html> <!-- This ends the html section -->