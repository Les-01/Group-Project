<?php

session_start();
$_SESSION['BL_Message_displayed'] = 'yes';

include("../config/conn.php");
include("../config/functions.php");

check_login($con);

$Username = $_SESSION['Username'];
$Email = $_SESSION['Email'];
$BL_Reason = $_SESSION['BL_Reason'];

?>

<!-- ********************* BOOTSTRAP & CSS ********************* -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/styles.css">
<!-- ********************* BOOTSTRAP & CSS ********************* -->

<head>
  
</head>

<body>

<!-- ************************** COMING SOON ************************** -->
<div class="card h-100" style="align-items: center;">
  <div class="middle bg-info-subtle border border-primary-subtle rounded-3 text-center w-75 h-45 mt-5">
    <p><h1>**ALERT**</h1>
      <br><h5>ALL access has been revoked for User: <h4><?php echo $Username; ?></h4>
      <br><b>Reason:</b>
      <br> <h4><?php echo $BL_Reason; ?></h4>
      <br><br>You no longer have access to the services provided by Retro Browser Gaming (RBG).
      <br> If you wish to challenge this decision please contact us on:</h5>
      <br><br><h3>support@highersphere.co.uk</h3>
    </p>
  </div>
</div>
<!-- ************************** COMING SOON ************************** -->

</body>

</html>