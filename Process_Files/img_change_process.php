<?php //This line opens the php for the page
session_start(); //This starts a session

include '../config/conn.php'; //This is an inclusion line which includes the conn.php file

{ //This opens the code to run
  if(isset($_SESSION['User_ID'])) //\This line is an if statement and is checking if the variable '$_SESSION['User_ID']' is populated then to run the below code.
  { //This opens the if statement
    $UID = $_SESSION['User_ID']; //This is creating a new variable $UID which stands for User ID.
       

            $sql = "DELETE FROM `image_tbl` where `User_ID` = '".$UID."'"; //This line is querying the image table and telling it to delete all images that are on the same row as the user ID.

                $result = $con->query($sql); //This creates a variable $result which is populated by the outcome of the query.
        
        { //This opens the next step of code to be processed
            $target_dir = "../Images/"; // This is saying target directory, this is the location that the picture is aiming to be placed. 
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); // This is creating a new variable $target_file and is populating it with the target directory variable and name of the file.
            $uploadOK = 1; //This is changing the variable $uploadOK to equal 1

            $UserID = $_SESSION['User_ID']; //This line is now chnaging the user ID back to the variable $UserID
            $Ititle = strtoupper($_POST['Image_Title']); // This line is saving the image title input by the user and allows that same name to be added to the database 'strtoupper' means string to uppercase, this just means the image title will be stored in capitals on the database.

                    if($uploadOK == 0) //This line is checking the $uploadOK variable, andd this line is saying that if the variable is still exhibiting a 0 then run the below code
                    { //This opens the if statement
                    echo "..Sorry file not uploaded"; //This displays a message on the screen for the user
                    } //This closes the if statement
                    
                    else //This starts an else statement
                    { //This opens the else statement
                    
                        if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) //This is an if statement within the else statement and is saying to move the uploaded file to the database
                    { //This opens the if statement
                            
                    $sql = "INSERT INTO `image_tbl`(`Image_ID`, `Image_Title`, `Image_Dir`, `User_ID`) 
                    VALUES (NULL, '$Ititle', '$target_file', '$UserID')"; // This line is now interacting with the database and inserting the information in this line into the database table. Each time the webpage is refreshed this code is run and creates a new entity into the table.
                    // echo "$sql";
                    $result = $con->query($sql);

                    
                    header('location:../profile.php'); // This is a header which will navigate the user back to their profile once the upload has completed.
                    } //This closes the if statement   
                    
                    else //This is an else statement which will run if the if statement's prior parameters aren't met.
                    { //This opens the else statement
                        echo "File upload unsuccessful. Try again."; //This displays a message on the screen for the user.
                        ?><br><button id="button5" onclick="history.back()">Go Back</button><?php //This is a back button and allows the user to navigate back a page.
                    } //This closes the else statement

                    } //This closes the else statement
                } //This closes the processed code section
            } //This closes the linked if statement
        } //This closes the code to be run section
?> <!-- This closes the php for the final time with this file -->