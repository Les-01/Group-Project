<?php
session_start();

include '../config/conn.php';

$target_dir = "../Images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOK = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
$UserID = $_SESSION['User_ID'];
$Ititle = strtoupper($_POST['Image_Title']); // This line is saving the image title input by the user and allows that same name to be added to the database
 //'strtoupper' means string to uppercase.

/* if($_FILES["fileToUpload"]["name"] >= 500000) // This is setting the max size of the file to be uploaded to the database.
{
    echo "Sorry File is too large";
    $upLoadOK = 0;
}
*/
if($uploadOK == 0)
{

  echo "..Sorry file not uploaded";
}
else
{

  if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
  {
        
   $sql = "INSERT INTO `image_tbl`(`Image_ID`, `Image_Title`, `Image_Dir`, `User_ID`) 
VALUES (NULL, '$Ititle', '$target_file', '$UserID')"; // This line is now interacting with the database and inserting the information in this line into the database table. Each time the webpage is refreshed this code is run and creates a new entity into the table.
// echo "$sql";
$result = $con->query($sql);

echo "Image: $Ititle was uploaded successfully!";
?><br><button id="button5" onclick="history.back()">Go Back</button><?php
  }   
  else
  {
    echo "File upload unsuccessful. Try again.";
    ?><br><button id="button5" onclick="history.back()">Go Back</button><?php
  }

  

}

//header("location: ../Website/Gallery.php");
?>