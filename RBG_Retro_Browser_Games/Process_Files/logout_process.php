<?php

session_start(); // This line carries the existent session over onto this page
setcookie(session_name(), '', 100); //This line is setting website cookies to null so essentially telling them to forget everything
session_unset(); // This line is using the 'unset' codmmand which will deselect any set session data like user name etc..
session_destroy(); // This will now destroy the session 
$_SESSION = array(); // This line will start a new array that is empty?
header('location:../signed_out_index.php'); // This will now direct the user to the landing page.

?>