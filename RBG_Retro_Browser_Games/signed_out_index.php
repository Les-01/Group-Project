<?php
     //This closes the script


// ********************* INCLUDE FILES ********************* 
include("config/functions.php");
include("Navbars/general_navbar.php");
// ********************* INCLUDE FILES *********************

bg_check($con);

    echo '<script type="text/javascript">'; //This is injected code to run an alert
    echo 'alert("Sign-Out Successful! Please come back again soon.")'; // This is the alert that will be shown once the user has successfully registered.
    echo '</script>';


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