
<?php //This starts the php

session_start(); // This line starts the session and this will be included on every page.

include("../config/conn.php"); //This includes the conn.php file
include("../config/functions.php"); //This includes the functions.php file 

  
if ($_SERVER['REQUEST_METHOD'] == "POST") //This is an if statement that is capturing any information that has been posted through from the main page
{ //this is the opening bracket for the if statement

$Username = $_POST['uname']; //This is a new variable which is being populated by the posted information
$NewUsername = $_POST['new_uname']; //This is a new variable which is being populated by the posted information
$Password = md5($_POST['password']); //This is a new variable which is being populated by the posted information

if (!empty($Username) && !empty($NewUsername) && !empty($Password)) // This line here is checking that the fields aren't empty and ensuring the username doesn't contian numbers. '!' mens not. so the method '!empty($user_Name)' is saying field 'User_Name' is not empty.
    { //This is the opening bracket of the if statement

      $query = "select * from user_tbl where Username = '$Username' limit 1"; // This line will check from the table users on the database to see if they match with the username the user has input. The code is limited to only gather one username per attempt. 

       $result = mysqli_query($con, $query); // This line is using the variable 'result' which will hold the query gathered from the previous line of code.

       if($result) // This line is saying if result has been populated then to run the below code.
       { //This is the opening bracket of the if statement
          if($result && mysqli_num_rows ($result) > 0) // This line is saying that if the result that comes back from the server has a row of greater than zero that will mean there is a user matching the credentials
          { //This is the opening bracket of the if statement
              $User_Data = mysqli_fetch_assoc($result); // This sline means that a new variable 'User Data' will gather the information from the database and store it to the 'result' variable.
              
              if(($User_Data['Username'] === $Username) + ($User_Data['Password'] === $Password)) // This line is saying if the email gathered from the above query matches the one input by the user then run the below code otherwise skip this and move the the 'else' statement.
              { //This is the opening bracket of the if statement

                $query = "UPDATE `user_tbl` SET `Username` = '" .$NewUsername. "'  WHERE `User_ID` LIKE '" .$User_Data['User_ID']. "'"; //This will update the DB at the location provided.
                mysqli_query($con, $query);
                header('location: ../profile.php'); //This will redirect the user to the profile page if triggered
                die; // This line will kill the code and makes sure nothing bleeds over into any other pages.
              } //This is the closing bracket for the if statement
          } //This is the closing bracket for the if statement
       } //This is the closing bracket for the if statement
          
        echo "Incorrect credentials, please check and try again."; //This is a message that will be displayed to the user if triggered
        ?><br><button id="button5" onclick="history.back()">Go Back</button><?php //This is a back button that is also displayed alongside the above message when triggered

        
        } //This is the closing bracket for the if statement
    } //This is the closing bracket for the if statement
    else //This is an else statement
    { //This is an opening bracket for the else statement
        
        echo "Please populate all fields!"; //This is a message that will be displayed to the user if triggered
        ?><br><button id="button5" onclick="history.back()">Go Back</button><?php //This is a back button that is also displayed alongside the above message when triggered
       
    } //This is the closing bracket for the else statement



?> <!-- This closes off the php for the final time -->