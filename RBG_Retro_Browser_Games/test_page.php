<?php
session_start();
// ********************* INCLUDE FILES ********************* 
include ("config/conn.php");
include("config/functions.php");
//include("config/navbar.php");
// ********************* INCLUDE FILES *********************

?>

<!-- ********************* BOOTSTRAP ********************* -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/styles.css">
<!-- ********************* BOOTSTRAP ********************* -->

<html lang="en" data-bs-theme="dark">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- ************************** NAVBAR START ************************** -->

<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
      <a class="navbar-brand fs-3" href="index.php"><strong>R.B.Gaming</strong></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample07">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="Account/sign_up.php">Register</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index2.php">Admin Navbar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">General Navbar</a>
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

<head>



</head>

<body>

DropDown!

                    <div class="select">
                    <div class="select-btn">
                      <span class="Btn-text"> Select Option</span>
                      <i class="bx bx-chevron-down"></i>                    
                  </div>
                  <select name="Changes" id="Updater">
                    <option value="Username" id="$Username">Username</option>
                    <option value="Fname" id="$NewFname">First Name</option>
                    <option value="Sname" id="$NewSname">Second Name</option>
                    <option value="Email" id="$NewEmail">Email</option>
                    <option value="Rank" id="$NewRank">Rank</option>
                    <option value="Password" id="$NewPassword">Password</option>
                  </select>
                  </div>

<!-- ************************** DROPDOWN START ************************** -->
<div class="d-flex gap-5 justify-content-center">
  <div class="dropdown-menu d-block position-static pt-0 mx-0 rounded-3 shadow overflow-hidden w-280px">
    <form class="p-2 mb-2 bg-light border-bottom">
      <input type="search" class="form-control" autocomplete="false" placeholder="Type to filter...">
    </form>
    <ul class="list-unstyled mb-0">
      <li><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="#">
        <span class="d-inline-block bg-success rounded-circle p-1"></span>
        Action
      </a></li>
      <li><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="#">
        <span class="d-inline-block bg-primary rounded-circle p-1"></span>
        Another action
      </a></li>
      <li><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="#">
        <span class="d-inline-block bg-danger rounded-circle p-1"></span>
        Something else here
      </a></li>
      <li><a class="dropdown-item d-flex align-items-center gap-2 py-2" href="#">
        <span class="d-inline-block bg-info rounded-circle p-1"></span>
        Separated link
      </a></li>
    </ul>
  </div>
  <!-- ************************** DROPDOWN END ************************** -->


<!-- ************************** TOAST BOX ************************** -->

  <!-- Flexbox container for aligning the toasts -->
<div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center w-100">

  <!-- Then put toasts within -->
  <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <img src="..." class="rounded me-2" alt="...">
      <strong class="me-auto">Bootstrap</strong>
      <small>11 mins ago</small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
      Hello, world! This is a toast message.
    </div>
  </div>
</div>
<!-- https://getbootstrap.com/docs/5.3/components/toasts/ -->
<!-- ************************** TOAST BOX ************************** -->



<!-- ********************* TEST UPDATE MODAL START ********************* -->

    <form action="Process_Files/update_process.php" method="POST">   
      <div class="modal fade" id="update" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modal-title">Make Changes to an account</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> <!-- btn-close makes a cross and bootstrap knows where to put it within the div. data-bs-dismiss will dismiss the modal -->
            </div>
      
                <div class="modal-body">
                  <p>double check all details</p>
                  
                  <input type="text" class="form-control" id="Username" name="Username" placeholder="Current Username">
                  <br>

                  <div class="select">
                    <div class="select-btn">
                      <span class="Btn-text"> Select Option</span>
                      <i class="bx bx-chevron-down"></i>                    
                  </div>
                  <select name="Changes" id="Updater" method="POST">
                    <option value="Username" id="name">Username</option>
                    <option value="Fname" id="Fname">First Name</option>
                    <option value="Sname" id="Sname">Second Name</option>
                    <option value="Email" id="Email">Email</option>
                    <option value="Rank" id="Rank">Rank</option>
                    <option value="Password" id="Password">Password</option>
                  </select>
                  </div>
                  <br>
                  <input type="text" class="form-control" id="Updater" name="New" placeholder="Please fill out">
                  <br>

                  <!-- <input type="text" class="form-control" id="NewUsername" name="NewUsername" placeholder="New Username">
                  <br>
                  <input type="text" class="form-control" id="NewFname" name="NewFname" placeholder="New First Name">
                  <br>    
                  <input type="text" class="form-control" id="NewSname" name="NewSname" placeholder="New Second Name">
                  <br>
                  <input type="email" class="form-control" id="NewEmail" name="NewEmail" placeholder="New Email">
                  <br>
                  <input type="text" class="form-control" id="NewRank" name="NewRank" placeholder="New Rank">
                  <br>
                  <input type="password" class="form-control" id="NewPassword" name="NewPassword" placeholder="New Password">
                  <br> -->
                  <div class="modal-footer item-align center">
                    <button class="w-100 btn btn-lg btn-primary bg-success border border-success-subtle">Process</button>
                  </div>
                </div>
          </div>
        </div>
      </div>
    </form>
  

<!-- ********************* TEST UPDATE MODAL END ********************* -->



<div class="alert alert-info" role="alert">
  A simple info alert—check it out!
</div>


</body>



</html>