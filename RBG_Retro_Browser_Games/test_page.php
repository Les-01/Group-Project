<?php

session_start();

// ********************* INCLUDE FILES ********************* 
include("config/conn.php");
include("config/functions.php");
// ********************* INCLUDE FILES *********************

if(($User_Data = check_login($con)) == true)
{
navbar_check($con);
$_SESSION['Username'] = $User_Data['Username'];
$varUserID = $User_Data['User_ID'];
}
else
{
  include("Navbars/General_navbar.php");
}

?>

<!-- ********************* BOOTSTRAP & CSS ********************* -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" href="css/gamingbg.css">
<script src="js/gamingbg.js"></script>
<!-- ********************* BOOTSTRAP & CSS ********************* -->

<html lang="en" data-bs-theme="dark">
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>

</head>

<body>

<section class="vh-100" style="background-color: #f4f5f7;">
  <div class="container py-5 h-50 w-50">
    <div class="row d-flex justify-content-center align-items-center h-50">
      <div class="col col-lg-6 mb-4 mb-lg-0">
        <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">
            <div class="col-md-4 gradient-custom text-center text-white"
              style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
              <img src="<?php User_Image($con); ?>"
                alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
              <h5>Marie Horwitz</h5>
              <p>Web Designer</p>
              <i class="far fa-edit mb-5"></i>
            </div>
            <div class="col-md-8">
              <div class="card-body p-4">
                <h6>Information</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Email</h6>
                    <p class="text-muted">info@example.com</p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Phone</h6>
                    <p class="text-muted">123 456 789</p>
                  </div>
                </div>
                <h6>Projects</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Recent</h6>
                    <p class="text-muted">Lorem ipsum</p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Most Viewed</h6>
                    <p class="text-muted">Dolor sit amet</p>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<div class="alert alert-info" role="alert">
  A simple info alert—check it out!
</div>

<!-- ************************ TEMPORARY DROP-DOWN FROM BOOSTRAP ************************ -->
<div class="row g-2">
  <div class="col-md">
    <div class="form-floating">
      <input type="email" class="form-control" id="floatingInputGrid" placeholder="name@example.com" value="mdo@example.com">
      <label for="floatingInputGrid">Email address</label>
    </div>
  </div>
  <div class="col-md">
    <div class="form-floating">
      <select class="form-select" id="floatingSelectGrid">
        <option selected>Open this select menu</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>
      <label for="floatingSelectGrid">Works with selects</label>
    </div>
  </div>
</div>
<!-- ************************ TEMPORARY DROP-DOWN FROM BOOSTRAP ************************ -->


<!-- ************************ TEMPORARY FORM-CONTROL FROM BOOSTRAP ************************ -->
<form class="form-floating">
  <input type="email" class="form-control is-invalid" id="floatingInputInvalid" placeholder="name@example.com" value="test@example.com">
  <label for="floatingInputInvalid">Invalid input</label>
</form>
<!-- ************************ TEMPORARY form-control FROM BOOSTRAP ************************ -->


<!-- ************************ TEMPORARY FORM-CONTROL FROM BOOSTRAP ************************ -->
<form class="form-floating">
  <input type="email" class="form-control" id="floatingInputValue" placeholder="name@example.com" value="test@example.com">
  <label for="floatingInputValue">Input with value</label>
</form>
<!-- ************************ TEMPORARY FORM-CONTROL FROM BOOSTRAP ************************ -->


<!-- ************************ TEMPORARY FORM-CONTROL FROM BOOSTRAP ************************ -->
<div class="form-floating mb-3">
  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
  <label for="floatingInput">Email address</label>
</div>
<div class="form-floating">
  <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
  <label for="floatingPassword">Password</label>
</div>
<!-- ************************ TEMPORARY FORM-CONTROL FROM BOOSTRAP ************************ -->


<a href="https//getbootstrap.com/docs/5.3/components/alerts/">Alerts</a>
<a href="https://getbootstrap.com/docs/5.3/components/popovers/">Pop Overs</a>
<a href="https://getbootstrap.com/docs/5.3/components/toasts/">Toasts</a>

<div id="liveAlertPlaceholder"></div>
<button type="button" class="btn btn-primary" id="liveAlertBtn">Show live alert</button>


<!-- ************************ TEMPORARY CARD FROM BOOSTRAP ************************ -->
<div class="card text-bg-secondary mb-3" style="max-width: 540px;"> <!-- TEXT-BG-SECONDARY IS THE BACKGROUND COLOUR -->
  <div class="row g-0">
    <div class="col-md-4">
      <img src="..." class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>
<!-- ************************ TEMPORARY CARD FROM BOOSTRAP ************************ -->







</body>



</html>