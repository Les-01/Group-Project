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
  include("Navbars/general_navbar.php");
}

bg_check($con);

?>

<!-- ********************* BOOTSTRAP & CSS ********************* -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha382-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/styles.css">
<!-- ********************* BOOTSTRAP & CSS ********************* -->

<head>
  
<!-- https://www.w3schools.com/howto/howto_css_chat.asp -->

</head>

<body>
<br><br>
<div class="d-flex p-2 bd-highlight justify-content-center">
  <div class="card">
<div class="container g-5 text-center" style="color: #a3c;>
<br>
<div class="user_image">  
  <?php User_Image($con); ?> <!-- This is a function I created to slim down the amount of code required on the page -->
  <!-- <button data-bs-toggle="modal" data-bs-target="#img_upload">Click To Add/Upload Profile Image</button><br> -->
  <a><b>Gamer Score: </b><?php echo $User_Data['Gamer_Score']; ?></a>
  
</div>
    
  <div class="container">
    <div class="box g-5 text-center fs-4">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="color: #a3c;>  
        
        <br>
        <li>
          <a>Username: <?php echo $User_Data['Username']; ?> <button class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#username_change">Edit</button> </a>
        </li><br>
        <li>
          <a>Email: <?php echo $User_Data['Email']; ?></a> <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#email_change">Edit</button>
        </li><br>
        <li>
          <a>First Name: <?php echo $User_Data['Fname']; ?></a> <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#fname_change">Edit</button>
        </li><br>
        <li>
          <a>Surname: <?php echo $User_Data['Sname']; ?></a> <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#sname_change">Edit</button>
        </li><br>
        <li>
          <a><b>Password: ********** </b></a><button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#password_change">Edit</button>
        </li>
        <br>

      </ul>
    </div>
  </div>
</div>
</div>
</div>
<br><br><br><br><br>


</body>

</html>