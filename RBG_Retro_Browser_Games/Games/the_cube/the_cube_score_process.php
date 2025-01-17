<?php
// This starts the session.
session_start();  
    // Link to 'config/conn.php' containing the database connection code and 'functions.php' containing all the application functions.
    // 'require_once' is used instead of 'include' as the require function is designed for when the file is required by your application
    // such as an important file containing configuration variables, without which the application would break. Whereas include is used to 
    // include files that the application flow would continue when not found, such as templates.
    require_once '../..//config/conn.php';
    require_once '../..//config/functions.php';      

     // This 'IF' statement declares that if the submit button has been used to access 'the_cube_score_process.php' execute the code within the 'IF' statement.
    if(isset($_POST['submit']))
    {
        // This assigns the values POSTED to 'the_cube_score_process.php' using '$_POST' method to the variables to be passed on to a function.
        $varuName = $_POST['uName'];
        $varScore = $_SESSION['game_score'];
        $varGameId = $_SESSION['game_id'];
        $varUserId = $_SESSION['User_ID']; 

        //--------------------  Reference to 'saveUserScore' function on 'functions.php'  --------------------
        saveUserScore($con, $varuName, $varScore, $varGameId, $varUserId);  
    } 
    
    // If the user gained access to 'the_cube_score_process.php' without using the submit button execute the code within the 'ELSE' statement.
    else {
        // This redirects the user to the snake game.
        header("location: index.html");
        // This ends the process stopping the script from running.
        exit();
    }
?>