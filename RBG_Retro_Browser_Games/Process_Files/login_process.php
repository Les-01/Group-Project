<?php

session_start(); // This line starts the session and is included on every page.

include("../config/conn.php");
include("../config/functions.php");  

  
if ($_SERVER['REQUEST_METHOD'] == "POST") 
{
    $Username = $_POST['Username'];   
    $Password = md5($_POST['Password']);


    if (!empty($Username) && !empty($Password)) // This line here is checking that the fields aren't empty and ensuring the username doesn't contian numbers. '!' mens not. so the method '!empty($user_Name)' is saying field 'User_Name' is not empty.
    {
       // Read from database

     // $query = "select * from tbl_users where User_Name = '$User_Name' limit 1"; // This line will check from the table users on the database to see if they match with the username the user has input. The code is limited to only gather one username per attempt. 
      $query = "select * from `user_tbl` where  Username = '$Username' limit 1";

       $result = mysqli_query($con, $query); // This line is using the variable 'result' which will hold the query gathered from the previous line of code.

       if($result) // This line is saying if result has been populated then to run the below code.
       {
          if($result && mysqli_num_rows ($result) > 0) // This line is saying that if the result that comes back from the server has a row of greater than zero that will mean there is a user matching the credentials
          {
              $User_Data = mysqli_fetch_assoc($result); // This line means that a new variable 'User Data' will gather the information from the database and store it to the 'result' variable.
              
              if($User_Data['Password'] === $Password) // This line is saying if the password gathered from the above query matches the one input by the user then run the below code otherwise skip this and move the the 'else' statement.
              {
                $_SESSION['User_ID'] = $User_Data['User_ID']; 
                $_SESSION['Username'] = $User_Data['Username']; 
                $_SESSION['User_Password'] = $User_Data['Password'];
                $_SESSION['Tier'] = $User_Data['Tier']; 
                header("location: ../index.php"); // This line will redirect the user to the index/home page if the above parameters are met.
                die; // This line will kill the code and makes sure nothing bleeds over into any other pages.
              }
          }
       }
       
       echo "Error, username & password don't match";
       ?><br><button id="button5" onclick="history.back()">Go Back</button><?php

    } 
    else
    {
        echo "Error, username & password aren't populated";
        ?><br><button id="button5" onclick="history.back()">Go Back</button><?php
       
        
    }
}
    



?>