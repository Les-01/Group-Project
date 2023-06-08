<?php //This opens the php for the file

session_start(); // This line starts the session and is included on every page.

include("../config/conn.php"); // This is the inclusion line that includes the config file found in the con directory.
include("../config/functions.php");  // This is the inclusion line that includes the functions file from the config directory.

  

    if ($_SERVER['REQUEST_METHOD'] == "POST")  // This line is an 'if' statement that is saying that if the server is going to request the info posted from the previous page.
{
    $Username = $_POST['Username']; // This is creating a new variable '$Username' which will store the posted infor from the previous page that the user populated into the 'Username' field.
    $Password = md5($_POST['Password']); // This is creating a new variable '$Password' which will store the posted infor from the previous page that the user populated into the 'Password' field. 'md5' is the encryption type that is being used. This is adding a layer of security and can't be easily reverse engineered. This even prevents the admin of the database and website from being able to see the password too so the user haas no worries there.


    if (!empty($Username) && !empty($Password)) // This line here is checking that the fields aren't empty and ensuring the username doesn't contian numbers. '!' mens not. so the method '!empty($user_Name)' is saying field 'User_Name' is not empty.
    {
       // Read from database

        $query = "select * from `user_tbl` where  Username = '$Username' limit 1"; // This line will check from the table users on the database to see if they match with the username the user has input. The code is limited to only gather one username per attempt. 

       $result = mysqli_query($con, $query); // This line is using the variable 'result' which will hold the query gathered from the previous line of code.

       if($result) // This line is saying if result has been populated then to run the below code.
       {
          if($result && mysqli_num_rows ($result) > 0) // This line is saying that if the result that comes back from the server has a row of greater than zero that will mean there is a user matching the credentials
          {
              $User_Data = mysqli_fetch_assoc($result); // This line means that a new variable 'User Data' will gather the information from the database and store it to the 'result' variable.
              
              if($User_Data['Password'] === $Password) // This line is saying if the password gathered from the above query matches the one input by the user then run the below code otherwise skip this and move the the 'else' statement.
              {
                $_SESSION['User_ID'] = $User_Data['User_ID']; // This is creating a new variable called '$_SESSION['Ussr_ID']' in this variable will be the data from variable '$_SESSION['User_ID'].
                $_SESSION['Username'] = $User_Data['Username']; // This is creating a new variable called '$_SESSION['Username']' in this variable will be the data from variable '$_SESSION['Username'].
                $_SESSION['User_Password'] = $User_Data['Password'];// This is creating a new variable called '$_SESSION['Password']' in this variable will be the data from variable '$_SESSION['Password'].
                $_SESSION['Tier'] = $User_Data['Tier'];// This is creating a new variable called '$_SESSION['Tier']' in this variable will be the data from variable '$_SESSION['Tier']. The tier is the level of access the user will be granted, (user, admin or tester).
                $_SESSION['Warnings'] = $User_Data['Warnings']; // This is creating a new variable called '$_SESSION['Warnings']' in this variable will be the data from variable '$_SESSION['Warnings'] This will be gathering information to see if the user has any warning on their account and will use them in a function from the function php.
                $_SESSION['Blacklisted'] = $User_Data['Blacklisted'];// This is creating a new variable called '$_SESSION['Blacklisted']' in this variable will be the data from variable '$_SESSION['Blacklisted'] This will check to see if the user has been blacklisted or not, if they are then the system will flag them. This is explained in the function. 

                if($_SESSION['Blacklisted'] === 'FALSE'){
                  header("location: ../index.php"); // This line will redirect the user to the index/home page 
                exit(); // This will kill the code, so if the code doesn't all run and the redirect doesn't work, if the user clicks the back button in the browser they won't be signed in as the code will be killed.
                } 
               }
              else
              { // This is the beginning of an else statement that will run if the above paramters arent met.
              echo "Error, username & password don't match"; // This will display the message on the screen for the user.
              ?><br><button id="button5" onclick="history.back()">Go Back</button><?php // This is a back button that the user can click if this else statement is triggered.
            } // This closes the above corresponding 'if' statement.
          } // This closes the above corresponding 'if' statement.
        } // This closes the above corresponding 'if' statement.
       else //This is an else statement
       { //This is the opening bracket for the else statement
        header("location: ../index.php"); //This is a header and will navigate the user to the index page when triggered
       } //This is the closing bracket for the else statement
    
       
       

    } // This closes the above corresponding 'if' statement.
    else //This is an else statement
    { // This is opening a new else statement.
        echo "Error, username & password aren't populated"; // This will display the message on the screen for the user.
        ?><br><button id="button5" onclick="history.back()">Go Back</button><?php // This is a back button that the user can click if this else statement is triggered.      
    } //This is the closing brackwet for the else statement
} //This is the closing bracket for the master if statement
  

?><!-- This closes off the php for the final time on this file -->