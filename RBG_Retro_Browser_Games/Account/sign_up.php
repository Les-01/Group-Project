<?php

session_start();

// ********************* INCLUDE FILES ********************* 
include ("../config/conn.php");
include("../config/functions.php");
//include("../Navbars/general_navbar.php");
// ********************* INCLUDE FILES *********************

?>

<!-- ********************* BOOTSTRAP ********************* -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/styles.css">
<!-- ********************* BOOTSTRAP ********************* -->

<html lang="en" data-bs-theme="dark"> <!-- This line is setting the language type for this html document to english and then setting the webpage theme to dark colour scheme -->


<head>

</head>

<body class="text-center" style="display: flex; align-items: center;" >


<!-- ********************* REGISTRY FORM START ********************* -->

<div class="container text-center">
  <div class="row align-items-center">    
    <div class="col">
      <main class="form-signin w-100 m-auto" style="max-width: 500;">
  <form action="../Process_Files/creation_process.php" method="POST">

    <img class="mb-4" src="../Images/Retro_games_logo.png" alt="Retro Games Logo" width="200" height="200">
    
    <h1 class="h3 mb-3 fw-normal"><b>Please fill out below fields</b></h1>

    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" name="Username" placeholder="Username">
      <label for="floatingInput">Create a Username</label>
    </div>
    <br>
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" name="Fname" placeholder="First Name">
      <label for="floatingInput">First Name</label>
    </div>
    <br>
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" name="Sname" placeholder="Surname">
      <label for="floatingInput">Surname</label>
    </div>
    <br>
    <div class="form-floating">
      <input type="email" class="form-control" id="floatingPassword" name="Email" placeholder="123@example.com">
      <label for="floatingPassword">Email</label>
    </div>
    <br>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" name="Password" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <br>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" name="Password2" placeholder="Password">
      <label for="floatingPassword">Retype-Password</label>
    </div>
    <br>

    <div class="checkbox mb-3">
      <!-- <label>
        <input type="checkbox" value="remember-me" name="remember_me"> Remember me
      </label> -->
    </div>
    <button class="w-100 btn btn-lg btn-primary bg-success border border-success-subtle" type="submit">Register</button>
    
  </form>
  <button class="w-100 btn btn-lg btn-primary bg-success border border-success-subtle" data-bs-toggle="modal" data-bs-target="#pop_up">Login Instead</button>
  <p class="mt-5 mb-3 text-muted">&copy; 2023</p> 
</main>
    </div>
    
  </div>
</div>
<!-- ********************* REGISTRY FORM END ********************* -->

<!-- ********************* LOGIN MODAL START ********************* -->
<form action="../Process_Files/login_process.php" method="POST">   
      <div class="modal fade" id="pop_up" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modal-title">Sign In Here</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> <!-- btn-close makes a cross and bootstrap knows where to put it within the div. data-bs-dismiss will dismiss the modal -->
            </div>
      
                <div class="modal-body">
                  <p>Please fill both fields</p>

                  <input type="text" class="form-control" id="test-email" name="Username" placeholder="Username">
                  <br>
                  <input type="password" class="form-control" id="test-email" name="Password" placeholder="Password">
                  <br>  
                  <label>
                      <input type="checkbox" value="remember-me" name="remember_me"> Remember me
                  </label>
    
                  <div class="modal-footer item-align center">
                    <button class="w-100 btn btn-lg btn-primary bg-success border border-success-subtle">Login</button>
                  </div>
                </div>
          </div>
        </div>
      </div>
    </form>

<!-- ********************* LOGIN MODAL END ********************* -->



</body>

</html>