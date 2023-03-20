<?php

session_start();

// ********************* INCLUDE FILES ********************* 
include ("Config/conn.php");
include("Config/functions.php");
// ********************* INCLUDE FILES *********************

//$User_Data = check_login($con); // This line is checking that a user is logged in.

if(($user_Data = check_login($con)) == true)
{
navbar_check($con);
}
else
{
  include("Navbars/General_navbar.php");
}
?>



<!-- ********************* BOOTSTRAP ********************* -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<!-- ********************* BOOTSTRAP ********************* -->

<!-- ********************* MY CSS ********************* -->
<link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" href="css/gamingbg.css">
<script src="js/gamingbg.js"></script>
<!-- ********************* MY CSS ********************* -->

<head>
  


</head>

<body>



</body>

</html>
