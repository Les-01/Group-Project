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
    }else{
    
      
      
      echo '<script type="text/javascript">'; //This is injected code to run an alert
      echo ' alert("To play any of our games, please login or register!")'; // This is the alert that will be shown to the user when they access a page that requires you to be logged in.
      echo '</script>'; //This closes the script
        
    }
}
// ******************************** ACCESS LOGIN CHECK ********************************



// ******************************** NAVBAR SELECTOR ********************************
// The below code doesn't seem to work right now I keep getting the following error message on the index page 'assigning "void" from a function navbar_check()'
function navbar_check($con)
{

    
    if ($_SESSION['Tier'] == 'User') 
      {  
        include("Navbars/user_navbar.php");
      }

  elseif($_SESSION['Tier'] == 'Admin')
    {
      include("Navbars/admin_navbar.php");
    }
    elseif($_SESSION['Tier'] == 'Tester')
    {
      include("Navbars/test_navbar.php");
    }
}
// ******************************** NAVBAR SELECTOR ********************************


// ******************************** PROFILE USER IMAGE ********************************


function user_image($con)
{
  if(isset($_SESSION['User_ID'])){
    $IID = $_SESSION['User_ID'];

    $sql = "SELECT * FROM `image_tbl` WHERE `User_ID` LIKE '".$IID."' limit 1"; // This is selecting images from 'tbl_images'.
    $result = $con -> query($sql); // This line is querying the database.

    if ($rows = $result -> fetch_assoc()) // This line is essentially saying that while there is a row in the database, fetch it. This also means that every image on the database table will be shown.
    
    {
    
?> <br>
<div class="user_image">  
  <a data-bs-toggle="modal" data-bs-target="#img_upload">
    <img border="2" src="<?php echo $rows['Image_Dir']; ?>" alt="<?php echo $rows['Image_Title']; ?>" width="300" height="300" class="rounded-circle"><br>
  </a>
</div>

<?php 
}else{
  ?>
  <div class="container">
    <p style="font-size: 30px;">Click<button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#img_upload">here</button> to upload your profile picture<p>
  <!-- <a class="pe-auto" data-bs-toggle="modal" data-bs-target="#img_upload">Click here to upload your profile picture.</a><br> -->
  </div>
  <?php
}
}
}

// ******************************** PROFILE USER IMAGE ********************************

// ******************************** BG SELECTOR ********************************
// The below code doesn't seem to work right now I keep getting the following error message on the index page 'assigning "void" from a function navbar_check()'
function bg_check($con)
{

    
    if(isset($_SESSION['User_ID'])) 
      { 
        include("Misc_Files/gamingbg.php"); 
      }
  else
    {
      include("Misc_Files/static_cityscape.php");
    }
    
}
// ******************************** BG SELECTOR ********************************


// ******************************** BG2 SELECTOR ********************************
// The below code doesn't seem to work right now I keep getting the following error message on the index page 'assigning "void" from a function navbar_check()'
function bg_check2($con)
{

    
    if(isset($_SESSION['User_ID'])) 
      { 
        include("Misc_Files/cityscape.php"); 
      }
  else
    {
      include("Misc_Files/static_cityscape.php");
    }
    
}
// ******************************** BG2 SELECTOR ********************************

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
    function access_check($con)
    {
      if(isset($_SESSION['User_ID'])) 
      { 
        ?>show<?php
      }
  else
    {
      ?>hidden<?php
    }
    }
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
?>