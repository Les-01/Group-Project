<?php //This opens the php
 session_start(); //This starts the session
       
include("../config/conn.php"); //This is an inclusion line and includes the conn.php file
include("../config/functions.php"); //This is an inclusion line and includes the functions.php file

    
    $Username = $_SESSION['Username']; //This line is creating a new variable called '$Username' and this element is populated by the $_SESSION variable.

     $query = "SELECT * FROM `blacklist_tbl` WHERE `Username` LIKE '".$Username."'"; //This line runs a query on the database to select everything from the row that matches the '$Username' variable.
      $result = mysqli_query($con, $query); //This line creates a variable $result which will be populated from the outcome of the databse check above.
    
      
      if($result && mysqli_num_rows ($result) > 0) //This line is saying that if the number of rows that match the $Username varable are greater than 0 then to run the below code.
      { //This opens the if statement
        $User_Data = mysqli_fetch_assoc($result); //This line is creating a new variable $User_Data and populting it with the information provided by the database.
        
                
                $_SESSION['Username'] = $User_Data['Username']; //This is creating a new variable called '$_SESSION['Username'] and populating this element from the variable $User_Data['Username']
                $_SESSION['Email'] = $User_Data['Email']; //This is creating a new variable called '$_SESSION['Email'] and populating this element from the variable $User_Data['Email'] 
                $_SESSION['BL_Reason'] = $User_Data['BL_Reason']; //This is creating a new variable called '$_SESSION['BL_Reason'] and populating this element from the variable $User_Data['BL_Reason']

    
     header("location: ../Account/blacklisted.php"); //This line takes the user to a different page. In this case the user will be taken to the Blacklisted.php page. 
    }// This line closes the if statement

    //I did not create an else option for this code as I don't want the code to continue if there is not a populated row within the database that links to the user.

?> <!-- This closes the php for the last time. -->