<?php

session_start();

include ("../config/conn.php");
include ("../config/functions.php");

//$_SESSION['User_Name']; // '$_SESSION' is known as a superglobal variable which means it can be used on every page.
$_SESSION['User_ID'];
$varUserID = $_SESSION['User_ID'];
//$Image_ID = $_POST['Image_ID'];

//$varImageID = $_SESSION['Image_ID'];

// File Delete Start

    $sql = "DELETE FROM image_tbl where User_ID = '".$varUserID."'";

    $result = $con->query($sql);

    
// File Delete Finish

header("location: ../index.php");
?>