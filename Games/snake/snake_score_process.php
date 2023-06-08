<?php
// Start the session
session_start();  
    // Link to 'config/conn.php' containing the database connection code and 'functions.php' containing all the application functions.
    // 'require_once' is used instead of 'include' as the require function is designed for when the file is required by your application
    // such as an important file containing configuration variables, without which the application would break. Whereas include is used to 
    // include files that the application flow would continue when not found, such as templates.
    require_once '../..//config/conn.php';
    require_once '../..//config/functions.php';      
      

    // This 'IF' statement declares that if the submit button has been used to access this proccess page execute the code within the 'IF' statement.
    if(isset($_POST['submit']))
    {
        // This assigns the values POSTED to this page using '$_POST' method to the variables to be passed on to a function.
        $varuName = $_POST['uName'];
        $varScore = $_SESSION['game_score'];
        $varGameId = $_SESSION['game_id'];
        $varUserId = $_SESSION['User_ID']; 

        //--------------------  Reference to 'saveSnakeUserScore' function on 'functions.php'  --------------------
        saveSnakeUserScore($con, $varuName, $varScore, $varGameId, $varUserId);  
    } 
    
    // If the user gained access to this page without using the submit button execute the code within the 'ELSE' statement.
    else {
        // This redirects the user to the snake game.
        header("location: main.html");
        // This ends the process stopping the script from running.
        exit();
    }