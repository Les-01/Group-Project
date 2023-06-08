<?php //This line opens the php

session_start(); //This line starts the session

include ("../config/conn.php"); //This is an inclusion line and includes the conn.php file
include ("../config/functions.php"); //This is an inclusion line that includes the functions.php file


$_SESSION['User_ID']; //This is a variable which is holding the users 'User ID' 
$varUserID = $_SESSION['User_ID']; //This is creating a new variable to hold the users ID


// File Delete Start

    $sql = "DELETE FROM image_tbl where User_ID = '".$varUserID."'"; //This line deletes any image that is in the User_ID matching row on the image table within the database and deletes it

    $result = $con->query($sql); //This line is creating a new variable called result and is populated via the result of the above sql query

    
// File Delete Finish

header("location: ../index.php"); //This is a header function which will automatically navigate the user to the 'index' page.
?> <!-- This is the last time the php is closed on this file. -->