<?php //This opens the php

session_start(); // This line starts the session and this will be included on every page.

include("../config/conn.php"); //This includes the conn.php file
include("../config/functions.php"); //This includes the functions.php file

  
if ($_SERVER['REQUEST_METHOD'] == "POST") //This is an if statement that is capturing any information that has been posted through from the main page
{ //this is the opening bracket for the if statement
    $Username = $_POST['uname']; //This is a new variable which is being populated by the posted information   
    $Email = $_POST['email']; //This is a new variable which is being populated by the posted information 
    $Password = md5($_POST['password']); //This is a new variable which is being populated by the posted information 'md5' is the encryptiontype
    $NewPword = md5($_POST['new_pword']); //This is a new variable which is being populated by the posted information 'md5' is the encryptiontype
    $NewPword2 = md5($_POST['new_pword2']); //This is a new variable which is being populated by the posted information 'md5' is the encryptiontype
    
    


    if (!empty($Username) && !empty($Email) && !empty($Password) && !empty($NewPword) && !empty($NewPword2)) // This line here is checking that the fields aren't empty and ensuring the username doesn't contian numbers. '!' mens not. so the method '!empty($user_Name)' is saying field 'User_Name' is not empty.
    {
       if($NewPword == $NewPword2) //This line is an if statement and is ensuring that the new passwords match before proceeding
       { //This is the opening bracket of the if statement

      $query = "select * from user_tbl where Username = '$Username' limit 1"; // This line will check from the table users on the database to see if they match with the username the user has input. The code is limited to only gather one username per attempt. 

       $result = mysqli_query($con, $query); // This line is using the variable 'result' which will hold the query gathered from the previous line of code.

       if($result) // This line is saying if result has been populated then to run the below code.
       { //This is the opening bracket of the if statement
          if($result && mysqli_num_rows ($result) > 0) // This line is saying that if the result that comes back from the server has a row of greater than zero that will mean there is a user matching the credentials
          { //This is the opening bracket of the if statement
              $User_Data = mysqli_fetch_assoc($result); // This sline means that a new variable 'User Data' will gather the information from the database and store it to the 'result' variable.
              
              if(($User_Data['Username'] === $Username) + ($User_Data['Password'] === $Password) + ($User_Data['Email'] === $Email))// This line is saying if the email gathered from the above query matches the one input by the user then run the below code otherwise skip this and move the the 'else' statement.
              { //This is the opening bracket of the if statement

                
                $query = "UPDATE `user_tbl` SET `Password` = '" . $NewPword . "'  WHERE `User_ID` LIKE '" .$User_Data['User_ID']. "'"; //This will update the user table with the new password.
                        
                mysqli_query($con, $query);

                Echo "Success, your password has been updated!"; // This line will redirect the user to the index/home page if the above parameters are met.
                header('location:logout.php');
                die; // This line will kill the code and makes sure nothing bleeds over into any other pages.
              }else //This is an else statement
              { //This is the opening bracket of the else statement
              echo "Username, email or Password Incorrect, please try again!"; //This will display a message to the user
              } //This is the closing bracket for the else statement
          } //This is the closing bracket for the if statement
       } //This closes the if statement
    }else //This closes the if statement above and starts an else statement
    { //This is the opening bracket for the else statement
        echo "Passwords don't match! Please check and try again."; //This is a message that will be displayed for the user when triggered
        ?><br><button id="button5" onclick="history.back()">Go Back</button><?php //This is a go back button for the user to use if triggered
    } //This is the closing bracket of the else statement

        
        
    } //This is the closing bracket fore the if statement
    else //This is an else statement
    { //This is the opening bracket for the else statement
        
        echo "Please populate all fields!"; //This is a message that will be displayed for the user when triggered
        ?><br><button id="button5" onclick="history.back()">Go Back</button><?php //This is a go back button for the user to use if triggered
       
    }//This is the closing bracket of the else statement
} //This is the closong bracket for the master if statement


?> <!-- This closes off the php for the final time -->