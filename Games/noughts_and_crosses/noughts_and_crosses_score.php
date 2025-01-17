<?php
    // This starts the php session.
    session_start();
    // This saves the value of the js cookie 'minutes' into the php variable '$Min'
    $Min = $_COOKIE['minutes'];
    // This saves the value of the js cookie 'seconds' into the php variable '$Sec'
    $Sec = $_COOKIE['seconds'];
    // This saves the string value ':' into the php variable '$Col'.
    $Col = ':'; 
    // This declares the php variable '$score' and assigns it the concatenated values of the variables '$Min', '$Col' and '$Sec'.
    $score = $Min . $Col . $Sec;
    // This stores the value of the variable '$score' in session'
    $_SESSION['game_score'] = $score;
    // This saves the noughts and crosses game id (2) in the session variable 'game_id'
    $_SESSION['game_id'] = 2;
?>

<!-- Basic parameters for HTML -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Score</title>
        <!--------------------  Reference to custom CSS framework  -------------------->
        <style>
            body {	
                font-family: Arial, Helvetica, sans-serif;
                font-size: 14px;
                color: rgb(0, 0, 0);
                background-image: url("../..//Images/high_back.png"); 	
                width: 100%;
	            height: 100%;
                background-size: cover;
            }

            .wrapper {
                width: 75%;
                height: auto;
                margin: 0 auto; 
                text-align:center;
            } 

            /*--------------------  Form Boxes CSS  --------------------*/
            .username_entry_form-box {
                background-color: rgba(0, 0, 0, 0.75);
                margin: auto auto;
                padding: 40px;
                border-radius: 5px;
                box-shadow: 0 0 10px #000;
                position: absolute;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                width: 500px;
                height: 650px;
            }

            /*--------------------  Form Button CSS  --------------------*/
            .username_entry_form-box button {
                background-color: deepskyblue;
                color: #fff;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                width: 50%;
                font-size: 18px;
                padding: 8px;
                margin: 25px 25px 5px 25px;
            }

            /*--------------------  Form Input Box CSS  --------------------*/
            .username_entry_form-box input {
                margin: 8px 0px;
                border: none;
                padding: 8px;
                border-radius: 5px;
                width: 100%;
                font-size: 14px;
                font-family: Arial, Helvetica, sans-serif;
            }       
        </style>
        <!--------------------  Reference to Bootstrap Javascript framework  -------------------->
        <script src="js/bootstrap_bundle_min.js"></script>
    </head>
    <body>
        <div class="wrapper">   
            <!--------------------  HTML Header  -------------------->
        <h1 style="color: white;">You Won In <?php echo $Min;?> Minutes And <?php echo $Sec;?> Seconds!</h1>
        <!--------------------  Enter user name, POSTS value to 'noughts_and_crosses_score_process.php'  -------------------->
                    <div class="username_entry_form-box">		
                    <h2 style="color: white;">Enter Your Username To Save Your Time</h2>
                          <form action="noughts_and_crosses_score_process.php" method="post">
                            <input placeholder="Username" type="text" name="uName">                       
                            <button type="submit" name="submit">OK</button>
                          </form><br>
                          <a style="color: white" href="index.html">Go back and try again?</a?>                                 
                  </div>                    
          </div>            
     </body>
</html>