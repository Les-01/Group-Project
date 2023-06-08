<?php //this opens the php

session_start(); // This line starts the session and this will be included on every page.

include("../config/conn.php"); //This is an inclusion line that includes the conn.php file
include("../config/functions.php"); //This is an inclusion line that includes the functions.php file

  
if ($_SERVER['REQUEST_METHOD'] == "POST") //This line is saying that if there is a server request posted from the previous page then to run the below parameters
{ //This opens the if statement

$Username = $_POST['uname']; //This is creating a new variable '$Username' and populating this element with the posted variable '$_POST['uname']
$Password = $_POST['password']; //This is creating a new variable '$Password' and populating this element with the posted variable '$_POST['Password']
$NewEmail = $_POST['new_email']; //This is creating a new variable '$NewEmail' and populating this element with the posted variable '$_POST['new_email']


if (!empty($Username) && !empty($NewEmail) && !empty($Password)) // This line here is checking that the fields aren't empty and ensuring the username doesn't contian numbers. '!' mens not. so the method '!empty($user_Name)' is saying field 'User_Name' is not empty.
    {

      $query = "select * from user_tbl where Username = '$Username' limit 1"; // This line will check from the table users on the database to see if they match with the username the user has input. The code is limited to only gather one username per attempt. 

       $result = mysqli_query($con, $query); // This line is using the variable 'result' which will hold the query gathered from the previous line of code.

       if($result) // This line is saying if result has been populated then to run the below code.
       {
          if($result && mysqli_num_rows ($result) > 0) // This line is saying that if the result that comes back from the server has a row of greater than zero that will mean there is a user matching the credentials
          {
              $User_Data = mysqli_fetch_assoc($result); // This sline means that a new variable 'User Data' will gather the information from the database and store it to the 'result' variable.
              
              if(($User_Data['Username'] === $Username) + ($User_Data['Password'] === $Password)) // This line is saying if the email gathered from the above query matches the one input by the user then run the below code otherwise skip this and move the the 'else' statement.
              {

                $query = "UPDATE `user_tbl` SET `Email` = '" .$NewEmail. "'  WHERE `User_ID` LIKE '" .$User_Data['User_ID']. "'"; //This will update the DB at the location provided.
                //$result = $mysqli->query($sql);
                mysqli_query($con, $query);
            
                header('location:../profile.php'); //This is a header and will automatically navigate the user to their profile page.
                die; // This line will kill the code and makes sure nothing bleeds over into any other pages.
              } //This closes the if statement
          } //This closes the encapsulating if statement
       } //This closes the outer encapsulating if statement
          
        echo "Incorrect credentials, please check and try again."; // This line will display 'Incorrect credentials, please check and try again' for the user to prompt them to try again.
        ?><br><button id="button5" onclick="history.back()">Go Back</button><?php //This line has an enjection of HTML, effectively what I did is closed the php temporarily for some HTML code to run and then reopened the php

        
        } // This closes the penultimate if statement
    } // This closes the main if statement
    else // This will run if the above parameters arent met.
    { //This opens the else statement
        
        echo "Please populate all fields!"; //This will display a message for the user as a prompt
        ?><br><button id="button5" onclick="history.back()">Go Back</button><?php //This line has an enjection of HTML, effectively what I did is closed the php temporarily for some HTML code to run and then reopened the php
       
    } //This closes the else statement



?><!-- This closes the php for the final time -->