<?php

function check_login($con) // this is a function created to check login and work to validate the user. 'con' means to connect to the database via the con file.
{
    if(isset($_SESSION['User_ID'])) // This line is saying if there is a session set with User ID then run the code below
    {
        $ID = $_SESSION['User_ID']; // This line is creating a new variable called 'ID' which will hold the information 'User ID'
        $query = "select * from user_tbl where User_ID='$ID' limit 1"; // This line creates another variable called 'query' and this line will hold the information obtained from the database
        $result = mysqli_query($con, $query); // This line creates another variable called 'result' and will hold the query which is a combination of the con and the query varibles.
        if($result && mysqli_num_rows ($result) > 0) // This line is saying that if the result that comes back from the server has a row of greater than zero that will mean there is a user matching the credentials
        {
            $User_Data = mysqli_fetch_assoc($result); // This sline means that a new variable 'User Data' will gather the information from the database and store it to the 'result' variable.
            return $User_Data; // This will return the user data from the database.
        }
    }

}


// The below code doesn't seem to work right now I keep getting the following error message on the index page 'assigning "void" from a function navbar_check()'
function navbar_check($con){

    
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

?>
