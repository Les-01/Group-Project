<?php
session_start();

include '../config/conn.php';

{
  if(isset($_SESSION['User_ID'])){
    $IID = $_SESSION['User_ID'];
    //$varImageID = $_SESSION['Image_ID'];

    //$sql = "SELECT * FROM `image_tbl` WHERE `User_ID` LIKE '".$IID."' limit 1"; // This is selecting images from 'tbl_images'.
    //$result = $con -> query($sql); // This line is querying the database.

    //if ($rows = $result -> fetch_assoc()) // This line is essentially saying that while there is a row in the database, fetch it. This also means that every image on the database table will be shown.
    
      //  {
    

            $sql = "DELETE FROM `image_tbl` where `User_ID` = '".$IID."'";

                $result = $con->query($sql); 
        //}
        {
            $target_dir = "../Images/"; // This is saying target directory, this is the location that the picture is aiming to be placed. 
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            $uploadOK = 1;
//$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            $UserID = $_SESSION['User_ID'];
            $Ititle = strtoupper($_POST['Image_Title']); // This line is saving the image title input by the user and allows that same name to be added to the database
 //'strtoupper' means string to uppercase.

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
                    header('location:../profile.php');
                    }   
                    
                    else
                    {
                        echo "File upload unsuccessful. Try again.";
                        ?><br><button id="button5" onclick="history.back()">Go Back</button><?php
                    }

                    }
                }
            }
        }
?>