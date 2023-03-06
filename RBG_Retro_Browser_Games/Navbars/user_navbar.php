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
      <a class="navbar-brand fs-3" href="../index2.php"><strong>R.B.Gaming</strong></a>

      <!-- ************** THIS IS THE HAMBURGER BUTTON ********** -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- ************* END OF HAMBURGER BUTTON *********** -->

      <div class="collapse navbar-collapse" id="navbarsExample07">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="../profile.php">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../gallery.php">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Process_Files/logout.php">Logout</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">More</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="../about.php">About</a></li>
              <li><a class="dropdown-item" href="../faq.php">FAQ</a></li>
              <li><a class="dropdown-item" href="../contact_us.php">Contact Us</a></li>
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
</div>

<!-- ************************** NAVBAR END ************************** -->
<div class="wrapper"> <!-- Still trying to work out how to allow other divs to be placed over the top -->
<!-- ************************** BACKGROUND INCLUDE ************************** -->
<?php include("Misc_Files/gamingbg.php"); ?>
<!-- ************************** BACKGROUND INCLUDE ************************** -->
</div>


</head>


<body>





</body>



</html>