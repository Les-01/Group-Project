<?php

session_start(); // This line starts the session and this will be included on every page.

include("../config/conn.php");
include("../config/functions.php");  

  
if ($_SERVER['REQUEST_METHOD'] == "POST") 
{
    $User_Name = $_POST['Username'];   
    $User_Email = $_POST['Email'];
    $User_Fname = $_POST['Fname'];
    $User_Pword = $_POST['Password'];
    $User_Pword2 = md5($_POST['Password2']);
    
    


    if (!empty($User_Name) && !empty($User_Email) && !empty($User_Fname) && !empty($User_Pword) && !empty($User_Pword2)) // This line here is checking that the fields aren't empty and ensuring the username doesn't contian numbers. '!' mens not. so the method '!empty($user_Name)' is saying field 'User_Name' is not empty.
    {
       if($User_Pword == $User_Pword2)
       {// Read from database

      $query = "select * from user_tbl where Username = '$User_Name' limit 1"; // This line will check from the table users on the database to see if they match with the username the user has input. The code is limited to only gather one username per attempt. 

       $result = mysqli_query($con, $query); // This line is using the variable 'result' which will hold the query gathered from the previous line of code.

       if($result) // This line is saying if result has been populated then to run the below code.
       {
          if($result && mysqli_num_rows ($result) > 0) // This line is saying that if the result that comes back from the server has a row of greater than zero that will mean there is a user matching the credentials
          {
              $User_Data = mysqli_fetch_assoc($result); // This sline means that a new variable 'User Data' will gather the information from the database and store it to the 'result' variable.
              
              if($User_Data['Email'] === $User_Email) // This line is saying if the email gathered from the above query matches the one input by the user then run the below code otherwise skip this and move the the 'else' statement.
              {

                
                $query = "UPDATE `user_tbl` SET `Password` = '" . $User_Pword . "'  WHERE `Email` LIKE '" . $User_Email . "'"; //This will update the DB at the location provided.
                //$result = $mysqli->query($sql);

        
                mysqli_query($con, $query);
                
                
                /* $_SESSION['User_ID'] = $User_Data['User_ID']; // This line is saying is the User ID gathered in session matches the user id that comes back from the user data then to run the below code.
                $_SESSION['User_Name'] = $User_Data['User_Name']; // This line is saying is the User ID gathered in session matches the user id that comes back from the user data then to run the below code.
                $_SESSION['User_Pword'] = $User_Data['User_Pword']; // This line is saying is the User ID gathered in session matches the user id that comes back from the user data then to run the below code.*/

                Echo "Success, your password has been updated!"; // This line will redirect the user to the index/home page if the above parameters are met.
                die; // This line will kill the code and makes sure nothing bleeds over into any other pages.
              }
          }
       }
          
        echo "Incorrect credentials, please check and try again.";
        ?><br><button id="button5" onclick="history.back()">Go Back</button><?php

        
        }
    } 
    else
    {
        
        echo "Please populate each field!";
        ?><br><button id="button5" onclick="history.back()">Go Back</button><?php
       
    }
}


?>