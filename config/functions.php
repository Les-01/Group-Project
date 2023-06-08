<?php // This opens the php for the page

// ******************************** LOGIN CHECK ********************************
function check_login($con) // this is a function created to check login and work to validate the user. 'con' means to connect to the database via the con file.
{ //This opens the function code
    if(isset($_SESSION['User_ID'])) // This line is saying if there is a session set with User ID then run the code below
    { //This ooens the if statement
        $ID = $_SESSION['User_ID']; // This line is creating a new variable called 'ID' which will hold the information 'User ID'
        $query = "select * from user_tbl where User_ID='$ID' limit 1"; // This line creates another variable called 'query' and this line will hold the information obtained from the database
        $result = mysqli_query($con, $query); // This line creates another variable called 'result' and will hold the query which is a combination of the con and the query varibles.
        if($result && mysqli_num_rows ($result) > 0) // This line is saying that if the result that comes back from the server has a row of greater than zero that will mean there is a user matching the credentials and to run the below code
        { //This opens a new if statement
            $User_Data = mysqli_fetch_assoc($result); // This line means that a new variable 'User Data' will gather the information from the database and store it to the 'result' variable.
            return $User_Data; // This will return the user data from the database.
        } //This closes the if statement
    } //This closes the if statement
} //This closes the function code
// ******************************** LOGIN CHECK ********************************

// ******************************** ACCESS LOGIN CHECK ********************************
function access_login($con) // this is a function created to check login and work to validate the user. 'con' means to connect to the database via the con file.
{ //This opens the function code
    if(isset($_SESSION['User_ID'])) // This line is saying if there is a session set with User ID then run the code below
    { //This ooens the if statement
        $ID = $_SESSION['User_ID']; // This line is creating a new variable called 'ID' which will hold the information 'User ID'
        $query = "select * from user_tbl where User_ID='$ID' limit 1"; // This line creates another variable called 'query' and this line will hold the information obtained from the database
        $result = mysqli_query($con, $query); // This line creates another variable called 'result' and will hold the query which is a combination of the con and the query varibles.
        if($result && mysqli_num_rows ($result) > 0) // This line is saying that if the result that comes back from the server has a row of greater than zero that will mean there is a user matching the credentials and to run the below code
        { //This ooens the if statement
            $User_Data = mysqli_fetch_assoc($result); // This line means that a new variable 'User Data' will gather the information from the database and store it to the 'result' variable.
            return $User_Data; // This will return the user data from the database.
        } //This closes the if statement
    } //This closes the if statement
    else //This starts an else statement
    { //This opens the else statement
    
      
      
      echo '<script type="text/javascript">'; //This is injected code to run an alert
      echo ' alert("To play any of our games, please login or register!")'; // This is the alert that will be shown to the user when they access a page that requires you to be logged in.
      echo '</script>'; //This closes the script
        
    } //This closes the else statement
} //This closes the function code
// ******************************** ACCESS LOGIN CHECK ********************************



// ******************************** NAVBAR SELECTOR ********************************
function navbar_check($con) //This is a function created to decide which navbar should be displayed
{ //This starts the function code
    
    if ($_SESSION['Tier'] == 'User') //This opens an if statement which is saying that if the data stored within the '$_SESSION['Tier']' variable is eqaul to 'User' then to run the below code
      { //This opens the if statement
        include("Navbars/user_navbar.php"); //This is an inclusion line and will include the user navbar
      } //This closes the if statement

  elseif($_SESSION['Tier'] == 'Admin') //This is an elseif statement which is essentially saying otherwise if the '$_SESSION['Tier']' variable is populated with 'Admin' then run the below code
    { //This opens the elseif statement
      include("Navbars/admin_navbar.php"); //This includes the admin navbar
    } //This closes the elseif statement
    elseif($_SESSION['Tier'] == 'Tester') //This is an elseif statement which is essentially saying otherwise if the '$_SESSION['Tier']' variable is populated with 'Tester' then run the below code
    { //This opens the elseif statement
      include("Navbars/test_navbar.php");
    } //This closes the elseif statement
} //This closes the function code
// ******************************** NAVBAR SELECTOR ********************************


// ******************************** PROFILE USER IMAGE ********************************


function user_image($con) //This is a new function that will select and show the users image if they have uploaded one and if they havent then then it will display the 
{
  if(isset($_SESSION['User_ID'])){ //This checks to see if the '$_SESSION['User_ID']' variable is populated and if it is then it will run the below code.
    $UID = $_SESSION['User_ID']; //This creates a new variable for the inforamtion in the above variable to be saved into

    $sql = "SELECT * FROM `image_tbl` WHERE `User_ID` LIKE '".$UID."' limit 1"; // This is selecting images from 'tbl_images'.
    $result = $con -> query($sql); // This line is querying the database.

    if ($rows = $result -> fetch_assoc()) // This line is essentially saying that while there is a row in the database, fetch it. This also means that every image on the database table will be shown.
    
    { //This opens the if statement
    
?> <br><!-- This is a temporary close of the php to inject some HTML, followed by a page break -->
<div class="user_image"> <!-- This line create a div and implements a class -->
  <a data-bs-toggle="modal" data-bs-target="#img_upload"> <!-- This line is creating a button that has a modal linked and this will be displayed when the user clicks it. -->
    <img border="2" src="<?php echo $rows['Image_Dir']; ?>" alt="<?php echo $rows['Image_Title']; ?>" width="300" height="300" class="rounded-circle"><br> <!-- This line is creating a borader for the image and there is an injection of php in this line that allows the linkage to the databse to gather the image from the image table. -->
  </a> <!-- This closes the button -->
</div> <!-- This closes the div -->

<?php //This reopens the php
}else{// This is creating an else statement
  ?> <!-- This once again close the php for some HTML coding -->
  <div class="container"> <!-- This creates a new div with the class of container -->
    <p style="font-size: 30px;">Click<button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#img_upload">here</button> to upload your profile picture<p> <!-- This creates a sentence for the user to see and as you can see there is a button included that is linked to a modal -->
 
  </div> <!-- This closes the div -->
  <?php // This reopens the php
} //This closes the else sattement
} //This closes the if statement
} //This closes the function code

// ******************************** PROFILE USER IMAGE ********************************

// ******************************** BG SELECTOR ********************************
// The below code doesn't seem to work right now I keep getting the following error message on the index page 'assigning "void" from a function navbar_check()'
function bg_check($con) //This is a function that checks the background and chooses which is selceted to appear based on the logged in user and the parameters below
{ //This opens the function code

    
    if(isset($_SESSION['User_ID'])) //This is an if statement and checks if the user is logged in and the variable has been populated.
      { //This opens the if statement
        include("Misc_Files/gamingbg.php"); //This includes the live background providing a user is logged in.
      } //This closes the if statement
  else //This is an else statement which is triggered if the above parameters aren't met.
    { // This is the opening bracket for the else statement
      include("Misc_Files/static_cityscape.php"); //This includes the static background which is displayed to all users not logged in
    } //This is the closing bracket of the elese statement
    
} //This closes off the function code
// ******************************** BG SELECTOR ********************************


 //--------------------  This is the function 'saveUserScore'  --------------------
    // The variables in the parenthesis are passed to the function
    function saveSnakeUserScore($con, $varuName, $varScore, $varGameId, $varUserId)
    { 
        // SQL INSERT INTO statement to insert the values stored in the variables into the 'rbg_retro_browser_gaming' database table 'highscore_tbl' into the specified fields.
        $sql = "INSERT INTO `dbs10401952`.`snake_highscore_tbl` (`score_id`, `score`, `user_name`, `User_ID`, `game_id`) 
        VALUES (NULL, '".$varScore."' , '".$varuName."', '".$varUserId."', '".$varGameId."')";     
        // This passes the variables $conn and $sql to the the function 'mysqli_query'.
        mysqli_query ($con, $sql);
        // This redirects to the 'highscores.php'.
        header("location: ../../highscores.php"); 	
        
        // This ends the process stopping the script from running.    
        exit();
    }

    //--------------------  This is the function 'saveUserScore'  --------------------
    // The variables in the parenthesis are passed to the function
    function saveUserScore($con, $varuName, $varScore, $varGameId, $varUserId)
    { 
        // SQL INSERT INTO statement to insert the values stored in the variables into the 'rbg_retro_browser_gaming' database table 'highscore_tbl' into the specified fields.
        $sql = "INSERT INTO `dbs10401952`.`highscore_tbl` (`score_id`, `score`, `user_name`, `User_ID`, `game_id`) 
        VALUES (NULL, '".$varScore."' , '".$varuName."', '".$varUserId."', '".$varGameId."')";     
        // This passes the variables $conn and $sql to the the function 'mysqli_query'.
        mysqli_query ($con, $sql);
        // This redirects to the 'highscores.php'.
        header("location: ../../highscores.php"); 	
        
        // This ends the process stopping the script from running.    
        exit();
    }
    

// ******************************** ACCESS CHECK ******************************** 
    function access_check($con) //This is the function access check which checks the level of clearance the user has when navigating the website.
    { //This is the opening bracket for the function code
      if(isset($_SESSION['User_ID'])) //This is the if statement which checks to see if there is a user logged in and if the variable has been populated.
      { //This is the opening bracket for the if statement
        ?>show<?php //This is and injected HTML the location this code responds to requires a show or hidden function. The access_check($con) is working like a proxy.
      } //This is the closing bracket for the if statement
  else //This is an else statement
    { //This is the opening bracket for the else statement
      ?>hidden<?php //This is the other word as i mentioned above, this will send 'hidden' back to the page requesting the check
    } // This is the closing bracket for the else statement
    } //This is the closing bracket of the function code
 // ******************************** ACCESS CHECK ********************************   
    
    
// ******************************** BLACKLIST CHECKER ********************************
function BL_Check($con) // 'BL_Check' stands for Blacklist Check, this is a function I created and works with a process page to get the desired effect. This function is designed to see if a user has access to the website or if they have been banned.
    { //This is the opening bracket for the function code
        if($_SESSION['Warnings'] == 1) //This line is assessing if the there is a number in the warning column of the user table, if there is it will be saved in the $_SESSION['Warnings'] variable
        { //This is the opening bracket for the if statement
        echo "**ALERT** You have 1 warning for inappropriate behaviour against your account! 2 more and you'll be blacklisted."; //This is a message that will be displayed to the user and will remain at the top of the landing page whilst the user remains logged in.
        } //This is the closing bracket for the if statement

        elseif($_SESSION['Warnings'] == 2) //This is an elseif statement and is saying that if the top parameters aren't met then to move onto thsi section, is there the number 2 stored in the warning variable
        { //This is the opening bracket for the elseif statement
        Echo "**ALERT** You have 2 warnings for inappropriate behaviour against your account! 1 more and you'll be blacklisted!"; //This is a warning message that will be displayed for the user, and like before it will remain at the top of the landing page screen while logged in
        } //This is the closing bracket of the elseif statement
    } //This is the closing bracket for the function code
      
    
// ******************************** BLACKLIST CHECKER ********************************
?> <!-- This is the closing bracket of the php for the file for the last time. -->
