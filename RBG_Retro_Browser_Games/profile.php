<?php

session_start();

// ********************* INCLUDE FILES ********************* 
include("Config/conn.php");
include("Config/functions.php");
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
<!-- ********************* BOOTSTRAP & CSS ********************* -->

<head>
  
<!-- https://www.w3schools.com/howto/howto_css_chat.asp -->

</head>

<body>
<div class="container g-5 text-center">
 <?php 
    $sql = "SELECT * FROM `image_tbl` WHERE `User_ID` LIKE '".$varUserID."'"; // This is selecting images from 'tbl_images'.
    $result = $con -> query($sql); // This line is querying the database.

    while ($rows = $result -> fetch_assoc()) // This line is essentially saying that while there is a row in the database, fetch it. This also means that every image on the database table will be shown.
    
    {
    
?>
<div class="gallery">
  <?php $_SESSION['Image_ID'] = $rows['Image_ID'] ?>
  <img border="2" alt="<?php echo $rows['Image_Title']; ?>" src="<?php echo $rows['Image_Dir']; ?>" width="300" height="300">
</div>
    

<?php 
}
?>

<div class="container">
  <div class="box g-5 text-center">
  <form>

    <br>
    <a><b>Username: </b><?php echo $User_Data['Username']; ?></a> <a class="button btn" data-bs-toggle="modal" data-bs-target="#Username_Edit">Edit</a> 
    <br>
    <a><b>Email: </b><?php echo $User_Data['Email']; ?></a> <a class="button btn" data-bs-toggle="modal" data-bs-target="#Email_Edit">Edit</a>
    <br>
    <a><b>First Name: </b><?php echo $User_Data['Fname']; ?></a> <a class="button btn" data-bs-toggle="modal" data-bs-target="#Fname_Edit">Edit</a>
    <br>
    <a><b>Second Name: </b><?php echo $User_Data['Sname']; ?></a> <a class="button btn" data-bs-toggle="modal" data-bs-target="#Sname_Edit">Edit</a>
    <br>
    <a><b>Gamer Score: </b><?php echo $User_Data['Gamer_Score']; ?></a> <a class="button btn" data-bs-toggle="modal" data-bs-target="#Username_Edit">Edit</a>
    <br>
    <a><b>Password: ********** </b></a> <a class="button btn" data-bs-toggle="modal" data-bs-target="#Password_Edit">Edit</a>


</form>
</div>
</div>
</div>


</body>

</html>