<?php

//I have removed the include files as at current there is no need for them to be in this file.
// ************************** INCLUDE FILES ************************** 
include("modals.php");
// ************************** INCLUDE FILES **************************

?>

<html lang="en" data-bs-theme="dark">
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
  
<!-- ************************** NAVBAR START ************************** -->

<nav class="reltive navbar navbar-expand-lg navbar-light bg-primary">
    <div class="container">
      <a class="navbar-brand fs-3" href="/index.php"><strong>R.B.Gaming</strong></a>

      <!-- ************** THIS IS THE HAMBURGER BUTTON ************** -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- ************** END OF HAMBURGER BUTTON ************** -->

      <div class="collapse navbar-collapse" id="navbarsExample07">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 fs-6">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="Account/sign_up.php"><b>Register</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../games.php"><b>Games</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="modal" data-bs-target="#login"><b>Sign In</b></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false"><b>More</b></a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="about.php"><b>About</b></a></li>
              <li><a class="dropdown-item" href="faq.php"><b>FAQ</b></a></li>
              <li><a class="dropdown-item" href="contact_us.php"><b>Contact Us</b></a></li>
            </ul>
          </li>
        </ul>
        <form role="search">
          <input class="form-control" type="search" placeholder="Search" aria-label="Search">
        </form>
      </div>
    </div>
  </nav>

<div class="p-3 fs-1 text-primary-emphasis bg-info-subtle border border-primary-subtle rounded-3 text-center">
  <b>Retro Browser Gaming</b>
</div>

<!-- ************************** NAVBAR END ************************** -->




</head>

<body>






</body>



</html>