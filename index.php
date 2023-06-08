<?php //This starts the php

session_start(); //This starts the session
if ($_SESSION['BL_Message_displayed'] == 'yes') // This is an if statement that is checking if the blacklisted message has been displayed yet, if  it has then the below code will run, if not then the rest of the page will run as normal.
{ //This is the opening bracket for thre if statement
    header("Location: Process_Files/logout_process.php"); //This is a redirect that takes the user to the logout page if the above parameters have been met and this is triggered
} //This is the closing bracket for the if statement


// ********************* INCLUDE FILES ********************* 
include("config/conn.php"); //This includes the conn.php file
include("config/functions.php"); //This includes the functions.php file
// ********************* INCLUDE FILES *********************

if(($User_Data = check_login($con)) == true) // Finally, I figured this out as I decided to use a boolean value. This checks if the user has been logged in
{ //This is the opening bracket for the if statement
BL_Check($con); //This is a function that checks if the user has been blacklisted

navbar_check($con); // This is the function to check the navbar that needs to be displayed for the user.
$_SESSION['Username'] = $User_Data['Username']; //This is creating a variable and storing the data that was collected from the databaase during the user log in process.
$_SESSION['Email'] = $User_Data['Email']; //This is creating a variable and storing the data that was collected from the databaase during the user log in process.
$_SESSION['Tier'] = $User_Data['Tier']; //This is creating a variable and storing the data that was collected from the databaase during the user log in process.

} //This is the closing bracket for the if statement
else //This is an else statement which is triggered if the above parameters aren't met.
{ //This is the opening bracket for the else statement
  include("Navbars/general_navbar.php"); //This is the included navbar that will be used if the else statement is triggered
} //This is the closing bracket for the else statement

bg_check($con); //This checks the background that should be displayed on the page

?> <!-- This closes the php -->

<!-- **************** BOOTSTRAP (this includes the bootstrap CSS and Javascript files) **************** -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<!-- ********************* BOOTSTRAP ********************* -->

<!-- **************** MY CSS (this includes the CSS and Javascripts that I created) **************** -->
<link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" href="css/gamingbg.css">
<script src="js/gamingbg.js"></script>
<!-- ********************* MY CSS ********************* -->
<html> <!-- This is the opening of the html section -->
<head> <!-- This opens the head section-->
<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- This is creating the viewport parameters which sets the scale of the page based upon the device the user is viewing the content on. -->
<link rel="icon" type="Image/x-icon" href="Images/Retro_Logo.jpg"> <!-- This is a test and is suppposed to put an icon in the corner of the tab that is open in the browser, currently this doesn't work on the live version, This is something I am still currently developing and working out. -->







</head> <!-- This closes the head section -->

<body> <!-- This opens the body section -->

<!-- There is nothing here as I figured it is easier to use modals to load information and they can be called at any time. -->





</body> <!-- This closes the body section -->

</html> <!-- This closes the html section -->