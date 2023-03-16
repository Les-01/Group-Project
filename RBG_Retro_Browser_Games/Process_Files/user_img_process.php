<?php

session_start(); // This line starts the session and is included on every page.

include("../config/conn.php");
include("../config/functions.php");

if(($User_Data = check_login($con)) == true) // Finally, I figured this out as I decided to use a boolean value.
{
navbar_check($con);
$_SESSION['Username'] = $User_Data['Username'];
$_SESSION['Tier'] = $User_Data['Tier'];
}
else
{
  include("Navbars/General_navbar.php");
}

$UserID = $User_Data['User_ID'];


$sql = "SELECT * FROM `image_tbl` WHERE `User_ID` LIKE '".$UserID."'"; // This is selecting images from 'tbl_images'.
    $result = $con -> query($sql); // This line is querying the database.

    while ($rows = $result -> fetch_assoc()) // This line is essentially saying that while there is a row in the database, fetch it. This also means that every image on the database table will be shown.
    
    {

       if($rows <=1){

       

?>

<div class="gallery">
  <?php $_SESSION['Image_ID'] = $rows['Image_ID'] ?>
  <img border="2" alt="<?php echo $rows['Image_Title']; ?>" src="<?php echo $rows['Image_Dir']; ?>" width="400" height="400">
  <b><div class="desc"><?php echo $rows['Image_Title'];?><br></div></b>
  <button id="button" input type="button" onclick="window.location.href='#'">Delete</button><br><br>
</div>

<?php
}
}
?>