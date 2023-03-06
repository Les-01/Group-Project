<?php
// ********************* INCLUDE FILES *********************
include("modals.php");
// ********************* INCLUDE FILES *********************
?>

<html lang="en" data-bs-theme="dark">    
<meta name="viewport" content="width=device-width, initial-scale=1">

 <!-- ************************** NAVBAR START ************************** -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Eighth navbar example">
    <div class="container">
      <a class="navbar-brand" href="#">Testing</a>
      <!-- ************** THIS IS THE HAMBURGER BUTTON ********** -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- ************* END OF HAMBURGER BUTTON *********** -->

      <div class="collapse navbar-collapse" id="navbarsExample07">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
          </li>
          <!-- ************* DROPDOWN BUTTON START *********** -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <!-- ************* DROPDOWN BUTTON END *********** -->
        </ul>
        <form role="search">
          <input class="form-control" type="search" placeholder="Search" aria-label="Search">
        </form>
      </div>
    </div>
  </nav>
  <!-- ************************** NAVBAR END ************************** -->


  <!-- ************************** NAVBAR START ************************** -->

<nav class="navbar navbar-expand-lg navbar-dark bg-warning">
    <div class="container">
      <a class="navbar-brand fs-3" href="../index.php"><strong>R.B.Gaming (Admin) </strong></a>

      <!-- ************** THIS IS THE HAMBURGER BUTTON ********** -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
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

          <!-- ************* DROPDOWN BUTTON START *********** -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">More</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="../about.php">About</a></li>
              <li><a class="dropdown-item" href="../faq.php">FAQ</a></li>
              <li><a class="dropdown-item" href="../contact_us.php">Contact Us</a></li>
            </ul>
          </li>
          <!-- ************* DROPDOWN BUTTON END *********** -->

          <!-- ************* ADMIN DROPDOWN BUTTON START *********** -->
        <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Admin Options</a>
          <ul class="dropdown-menu">
              <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#update">Update</a></li>
              <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#remove">Remove</a></li>
            </ul>
          </li> 
          <!-- ************* ADMIN DROPDOWN BUTTON END *********** -->
        
        </ul> 
        <form role="search">
          <input class="form-control" type="search" placeholder="Search" aria-label="Search">

          <!-- <li class="nav-item">
            <a class="btn nav-link" data-bs-toggle="modal" data-bs-target="#pop_up"><b>Sign In<b></a>
          </li> -->
        </form>  
      </div>
    </div>
  </nav>

<!-- ************* NAVBAR BANNER START *********** -->
<div class="p-3 fs-1 text-warning-emphasis bg-warning-subtle border border-warning-subtle rounded-3 text-center">
  <b>Logged in as "<?php echo $_SESSION['Username']; ?>"</b>
</div>
<!-- ************* NAVBAR BANNER END *********** -->

<!-- ************************** NAVBAR END ************************** -->