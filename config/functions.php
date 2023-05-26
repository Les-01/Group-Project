<?php

// ******************************** LOGIN CHECK ********************************
function check_login($con) // this is a function created to check login and work to validate the user. 'con' means to connect to the database via the con file.
{
    if(isset($_SESSION['User_ID'])) // This line is saying if there is a session set with User ID then run the code below
    {
        $ID = $_SESSION['User_ID']; // This line is creating a new variable called 'ID' which will hold the information 'User ID'
        $query = "select * from user_tbl where User_ID='$ID' limit 1"; // This line creates another variable called 'query' and this line will hold the information obtained from the database
        $result = mysqli_query($con, $query); // This line creates another variable called 'result' and will hold the query which is a combination of the con and the query varibles.
        if($result && mysqli_num_rows ($result) > 0) // This line is saying that if the result that comes back from the server has a row of greater than zero that will mean there is a user matching the credentials and to run the below code
        {
            $User_Data = mysqli_fetch_assoc($result); // This line means that a new variable 'User Data' will gather the information from the database and store it to the 'result' variable.
            return $User_Data; // This will return the user data from the database.
        }
    }
}
// ******************************** LOGIN CHECK ********************************

// ******************************** ACCESS LOGIN CHECK ********************************
function access_login($con) // this is a function created to check login and work to validate the user. 'con' means to connect to the database via the con file.
{ // This starts the function
    if(isset($_SESSION['User_ID'])) // This line is saying if there is a session set with User ID then run the code below
    { // This is the opeinging of the 'if' statement.
        $ID = $_SESSION['User_ID']; // This line is creating a new variable called 'ID' which will hold the information 'User ID'
        $query = "select * from user_tbl where User_ID='$ID' limit 1"; // This line creates another variable called 'query' and this line will hold the information obtained from the database
        $result = mysqli_query($con, $query); // This line creates another variable called 'result' and will hold the query which is a combination of the con and the query varibles.
        if($result && mysqli_num_rows ($result) > 0) // This line is saying that if the result that comes back from the server has a row of greater than zero that will mean there is a user matching the credentials and to run the below code
        { // This opens another 'if' statement nested inside the current one.
            $User_Data = mysqli_fetch_assoc($result); // This line means that a new variable 'User Data' will gather the information from the database and store it to the 'result' variable.
            return $User_Data; // This will return the user data from the database.
        } // This closes the the 'i
    }else{
    
      
      
      echo '<script type="text/javascript">'; //This is injected code to run an alert
      echo ' alert("To play any of our games, please login or register!")'; // This is the alert that will be shown to the user when they access a page that requires you to be logged in.
      echo '</script>'; //This closes the script
        
    }
}
// ******************************** ACCESS LOGIN CHECK ********************************



// ******************************** NAVBAR SELECTOR ********************************
// The below code doesn't seem to work right now I keep getting the following error message on the index page 'assigning "void" from a function navbar_check()'
function navbar_check($con) // This is a function that checks which navbar the webpges will use.
{ // This opens the function.

    
    if ($_SESSION['Tier'] == 'User') // This is an 'if' statement, this is essentially saying that if there is a session set and the variable '$_SESSION['User_ID']' is populated, then to run the code code inside the statement. This line is saying that if $_SESSION['Tier'] is equal to 'User' then run the below code.
      {  // This opens the 'if' statement.
        include("Navbars/user_navbar.php"); // This is an inclusion line that includes the navbar that is used for anyone registered as a user on the database. (this only applies to those registered with an account) 
      } // This closes the 'if' statement.

  elseif($_SESSION['Tier'] == 'Admin') // This is an 'elseif' statement and is essentially like saying otherwise run the below code. This says that if the variable '$_SESSION['Tier'] is equal to 'Admin' then run the below code.
    { // This opens the 'elseif' statement.
      include("Navbars/admin_navbar.php"); // This is an inclusion line and includes the navbar that is used by users logged in as an admin, when they log into the website.
    } // This closes the 'elseif' statement.
    elseif($_SESSION['Tier'] == 'Tester') // This is an 'elseif' statement and is essentially like saying otherwise run the below code. This says that if the variable '$_SESSION['Tier'] is equal to 'Tester' then run the below code.
    { // This opens the 'elseif' statement.
      include("Navbars/test_navbar.php"); // This is an inclusion line and includes the file for the Tester navbar. This will be run if none of the above parameters are met.
    } // This closes the 'elseif' statement.
} // This closes the function.
// ******************************** NAVBAR SELECTOR ********************************


// ******************************** PROFILE USER IMAGE ********************************
function user_image($con) // This is a newly created function that checks if the signed in user has a profile picture attached to theur account.
{ // This opens the function
  if(isset($_SESSION['User_ID'])) // This is an 'if' statement and it is checking to see if the user is signed in with an account. This is accomplished by checking to see if the '$_SESSION['User_ID']' variable is populated. If the variable is populated then the below code will run.
  { // This is the opening of the 'if' statement.
    $IID = $_SESSION['User_ID']; // This line is creating a new variable '$IID' this variable will hold the information for the varible '$_SESSION['User_ID']' 

    $sql = "SELECT * FROM `image_tbl` WHERE `User_ID` LIKE '".$IID."' limit 1"; // This is selecting images from 'tbl_images'.
    $result = $con -> query($sql); // This line is querying the database. Then storing anything found under the variable '$result'.

    if ($rows = $result -> fetch_assoc()) // This line is essentially saying that while there is a row in the database, fetch it. This also means that every image on the database table will be shown.
    
    { // This is the opening of another 'if' statement nested within the current one.
    
?> <br> <!-- This line is closing the PHP temporarily and <br> means line break. -->
<div class="user_image"> <!-- This line is a new div being opened with the class name as 'user_images' -->
  <a data-bs-toggle="modal" data-bs-target="#img_upload"> <!-- This line is creating a button that when clicked will load a modal. -->
    <img border="2" src="<?php echo $rows['Image_Dir']; ?>" alt="<?php echo $rows['Image_Title']; ?>" width="300" height="300" class="rounded-circle"><br> <!-- This line is housing the image taken from the database linked to the user who is signed in (unless they dont have an image, this will just be blank with a button). 'src' is source and has been injected with PHP to connect with the database and find the image linked to the user. 'echo' means to print it out or siplay, so the net section in the line is saying to display the variable '$rows['Image_Dir']' which will be holding an image if there was one in the database linked to the user. The PHP is closed and then 'alt' which means 'alternative' and will display the name of the image if the image can't be loaded. This information is gathered from another PHP injection. Next are the size dimensions of the image/border.-->
  </a> <!-- This closes the button. Because the image is encapsulated within the button, this makes the image THE button. -->
</div> <!-- This line closes the div -->

<?php // This line is opening PHP
} // This is closing the 'if' statement.
else{ //This is an 'else' statement followed by the opinging bracket of the statement.
  ?> <!-- This line is closing the PHP temporarily again -->
  <div class="container"> <!-- This is a new opening div with the class container -->
    <p style="font-size: 30px;">Click<button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#img_upload">here</button> to upload your profile picture<p> <!-- This is a button and text to prompt the user to click the button to upload their image.  -->
  </div> <!-- This is closing the div -->
  <?php // This is reopening the PHP.
}// This is closing the 'else' statement.
}// This is closing the 'if' statement.
} // This is closing the function.

// ******************************** PROFILE USER IMAGE ********************************

// ******************************** BG SELECTOR ********************************
// The below code doesn't seem to work right now I keep getting the following error message on the index page 'assigning "void" from a function navbar_check()'
function bg_check($con) // This is a function that I have created which checks to see which background the page the user is on is required.
{ //This opens the function

    
    if(isset($_SESSION['User_ID'])) // This is an 'if' statement, this is essentially saying that if there is a session set and the variable '$_SESSION['User_ID']' is populated then to run the code code inside the statement.
      { //This opens the 'if' statement 
        include("Misc_Files/gamingbg.php"); // This is an inclusion line which includes the file to which the background corresponds to.
      } // This closes the 'if' statement
  else // This is an 'else' statement. If the parameters above aren't met such as the session is set/populated then the 'else' statement will run instead.
    { // This opens the 'else' statement
      include("Misc_Files/static_cityscape.php"); // This is an inclusion line that includes a background, this one will load a different back ground based on the fact there is no session set.
    } // This closes the 'else' statement.
    
}// This closes the function
// ******************************** BG SELECTOR ********************************


// ******************************** BG2 SELECTOR ********************************
// The below code doesn't seem to work right now I keep getting the following error message on the index page 'assigning "void" from a function navbar_check()'
function bg_check2($con) // This is another function I have created that is again for a background check and works in the same way as the previous function for a background, but this one is using a diffferent background.
{ // This opens the function

    
    if(isset($_SESSION['User_ID'])) // This is an 'if' statement, this is essentially saying that if there is a session set and the variable '$_SESSION['User_ID']' is populated then to run the code code inside the statement.
      { // This opens the 'if' statement.
        include("Misc_Files/cityscape.php");  // This is an inclusion line and includes a files for the current webpges background
      } // This closes the 'if' statement.
  else // This is an else statement and will rung if the paramters for the 'if' statement above are not met.
    { // Tghis opens the 'else' statement.
      include("Misc_Files/static_cityscape.php"); // This is an inclusion line and includes the files for an alternative background.
    } // This closes the 'else' statement.
    
} // This closes the function.
// ******************************** BG2 SELECTOR ********************************

 //--------------------  This is the function 'saveUserScore'  --------------------
    // The variables in the parenthesis are passed to the function
    function saveSnakeUserScore($con, $varuName, $varScore, $varGameId, $varUserId)
    { 
        // SQL INSERT INTO statement to insert the values stored in the variables into the 'rbg_retro_browser_gaming' database table 'highscore_tbl' into the specified fields.
        $sql = "INSERT INTO `rbg_retro_browser_gaming`.`snake_highscore_tbl` (`score_id`, `score`, `user_name`, `User_ID`, `game_id`) 
        VALUES (NULL, '".$varScore."' , '".$varuName."', '".$varUserId."', '".$varGameId."')";     
        // This passes the variables $conn and $sql to the the function 'mysqli_query'.
        mysqli_query ($con, $sql);
        // This redirects to the 'highscores.php'.
        header("location: ../..//highscores.php"); 	
        
        // This ends the process stopping the script from running.    
        exit();
    }

    //--------------------  This is the function 'saveUserScore'  --------------------
    // The variables in the parenthesis are passed to the function
    function saveUserScore($con, $varuName, $varScore, $varGameId, $varUserId)
    { 
        // SQL INSERT INTO statement to insert the values stored in the variables into the 'rbg_retro_browser_gaming' database table 'highscore_tbl' into the specified fields.
        $sql = "INSERT INTO `rbg_retro_browser_gaming`.`highscore_tbl` (`score_id`, `score`, `user_name`, `User_ID`, `game_id`) 
        VALUES (NULL, '".$varScore."' , '".$varuName."', '".$varUserId."', '".$varGameId."')";     
        // This passes the variables $conn and $sql to the the function 'mysqli_query'.
        mysqli_query ($con, $sql);
        // This redirects to the 'highscores.php'.
        header("location: ../highscores.php"); 	
        
        // This ends the process stopping the script from running.    
        exit();
    }

    // ******************************** ACCESS CHECK ********************************
    function access_check($con) // This is a function I created to check the access clearance of the users that are on the website.
    { // This opens the function
      if(isset($_SESSION['User_ID'])) // This is an 'if' statement, this is essentially saying that if there is a session set and the variable '$_SESSION['User_ID']' is populated then to run the code code inside the statement.
      { // This opens the 'esle' statement.
        ?>show<?php // If the above paramters are met, then the code here will be used. This code is being used like a proxy. The code that this corresponds to is to display buttons.
      } // This closes the 'else' statement.
  else // This is an 'else' statement and is run if the above 'if' statement's paramters aren't met.
    { // This opens the 'else' statement
      ?>hidden<?php // This code will be run if the above paramters are NOT met. This will hide the buttons as mentioned above.
    } // This closes the 'else' statement.
    } // This closes the function.
// ******************************** ACCESS CHECK ********************************

// ******************************** BLACKLIST CHECKER ********************************
function BL_Check($con) // 'BL_Check' stands for Blacklist Check, this is a function I created and works with a process page to get the desired effect.
    {
        if($_SESSION['Warnings'] == 1)
        {
        echo "**ALERT** You have 1 warning for inappropriate behaviour against your account! 2 more and you'll be blacklisted.";
        //Perhaps worth doing a pop up or a modal popup?
        }

        elseif($_SESSION['Warnings'] == 2)
        {
        //header("location: ../index.php"); // This line will redirect the user to the index/home page if the above parameters are met.
        Echo "**ALERT** You have 2 warnings for inappropriate behaviour against your account! 1 more and you'll be blacklisted!";
        }
    } 
      
    
// ******************************** BLACKLIST CHECKER ********************************


// This closes the PHP for the page for a final time. ?>
