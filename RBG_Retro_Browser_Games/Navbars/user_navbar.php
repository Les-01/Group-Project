<?php
//I have removed the include files as at current there is no need for them to be in this file.
// ********************* INCLUDE FILES ********************* 
//include ("Config/conn.php");
//include("Config/functions.php");
//include("config/navbar.php");
include("modals.php");
// ********************* INCLUDE FILES *********************

?>

<html lang="en" data-bs-theme="dark">
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>

<!-- ************************** NAVBAR START ************************** -->

<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
      <a class="navbar-brand fs-3" href="index.php"><strong>R.B.Gaming</strong></a>

      <!-- ************** THIS IS THE HAMBURGER BUTTON ********** -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- ************* END OF HAMBURGER BUTTON *********** -->

      <div class="collapse navbar-collapse" id="navbarsExample07">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <!-- <li class="nav-item">
            <a class="nav-link" data-bs-toggle="modal" data-bs-target="#profile"><b>Profile</b></a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" href="profile.php"><b>Profile</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="games.php"><b>Games</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="highscores.php"><B>Highscores</B></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Process_Files/logout.php"><b>Logout</b></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false"><b>More</b></a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#ABOUT"><b>About</b></a></li>
              <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#FAQ"><b>FAQ</b></a></li>
              <li><a class="dropdown-item" href="../contact_us.php"><b>Contact Us</b></a></li>
            </ul>
          </li>
        </ul>
        <form role="search">
          <input class="form-control" type="search" placeholder="Search" aria-label="Search">
        </form>
      </div>
    </div>
  </nav>

<div class="p-3 fs-1 text-danger-emphasis bg-danger-subtle border border-danger-subtle rounded-3 text-center">
  <b>Retro Browser Gaming</b>
  <br>
  <div class="fs-4">Logged in as: <b><?php echo $_SESSION['Username']; ?></b></div>
</div>

<!-- ************************** NAVBAR END ************************** -->






</head>


<body>





</body>



</html>