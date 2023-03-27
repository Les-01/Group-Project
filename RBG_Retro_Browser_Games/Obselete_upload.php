<?php

session_start();

// ********************* INCLUDE FILES ********************* 
include("Config/conn.php");
include("Config/functions.php");
// ********************* INCLUDE FILES *********************

if(($User_Data = check_login($con)) == true) // Finally, I figured this out as I decided to use a boolean value.
{
navbar_check($con);
$_SESSION['Username'] = $User_Data['Username'];
$_SESSION['Tier'] = $User_Data['Tier'];
}
else
{
  include("Navbars/general_navbar.php");
}

?>

<html>


<head>

<title>Upload Profile Image</title> <!-- this is the title of the page and will show in the browser tab. -->
		
  <!-- ********************* BOOTSTRAP & CSS ********************* -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/styles.css"> <!-- This is my own CSS sheet that I have created and will be implemented throughout the webpage -->
<link rel="stylesheet" href="css/gamingbg.css">
<script src="js/gamingbg.js"></script>
<!-- ********************* BOOTSTRAP & CSS ********************* --> 

</head>


<body>

<div class="container g-5 text-center">
  

<div id="box">

  <!-- <form action="Process_Files/Img_Upload_Process.php" method="post" enctype="multipart/form-data">  This process will not work with the 'Get' method -->
  <form action="Process_Files/img_change_Process.php" method="post" enctype="multipart/form-data"> <!-- This process will not work with the 'Get' method -->
              
      File Name:<br><input type="text" name="Image_Title" id="Image_Title"><br><br> <!-- This line adds a field for the user to enter the name of the file they are uploading to the server. -->
      Please select the image you wish to upload:
      <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
      <input type="submit" value="Upload Image" name="submit"><br><br>

  </form>

  
</div>
</div>

</body>

</html>