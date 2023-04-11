<?php
// ********************* INCLUDE FILES *********************
include("modals.php");
// ********************* INCLUDE FILES *********************
?>

<html lang="en" data-bs-theme="dark">    
<meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- ************************** NAVBAR START ************************** -->

<nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <div class="container">
      <a class="navbar-brand fs-3" href="index.php"><strong>R.B.Gaming (Tester Account) </strong></a>

      <!-- ************** THIS IS THE HAMBURGER BUTTON ********** -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- ************* END OF HAMBURGER BUTTON *********** -->

      <div class="collapse navbar-collapse" id="navbarsExample07">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="../profile.php"><B>Profile</B></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../games.php"><B>Games</B></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="highscores.php"><B>Highscores</B></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Process_Files/logout.php"><B>Logout</B></a>
          </li>

          <!-- ************* DROPDOWN BUTTON START *********** -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false"><B>More</B></a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="../about.php"><B>About</B></a></li>
              <li><a class="dropdown-item" href="../faq.php"><B>FAQ</B></a></li>
              <li><a class="dropdown-item" href="../contact_us.php"><B>Contact Us</B></a></li>
            </ul>
          </li>
          <!-- ************* DROPDOWN BUTTON END *********** -->

          <!-- ************* TESTER DROPDOWN BUTTON START *********** -->
        <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false"><b>Tester Options</b></a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="upload.php"><B>Image Upload</B></a></li>
            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#img_upload"><B>Image Upload2</B></a></li>
              <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#update"><B>Update</B></a></li>
              <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#remove"><B>Remove</a></li>
              <li><a class="dropdown-item" href="Process_Files/delete_img_process.php"><B>Delete</B></a></li>
              <li><a class="dropdown-item" href=test_page.php><B>Test Page<B></a></li></li>
            </ul>
          </li> 
          <!-- ************* TESTER DROPDOWN BUTTON END *********** -->
        
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
<div class="p-3 fs-1 text-info-emphasis bg-info-subtle border border-info-subtle rounded-3 text-center">
  <b>Logged in as "<?php echo $_SESSION['Username']; ?>"</b>
</div>
<!-- ************* NAVBAR BANNER END *********** -->

<!-- ************************** NAVBAR END ************************** -->

<!-- ************************** BACKGROUND INCLUDE ************************** -->  
<style>
body {
  
  background-image: url('../images/cpu_circuit.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
 
}
</style>
<!-- ************************** BACKGROUND INCLUDE ************************** -->