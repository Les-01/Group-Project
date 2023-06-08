<?php
    // Start the session
    session_start();
    // This saves the value of the js cookie 'minutes' into the php variable '$score'
    $varMin = $_COOKIE['minutes'];
    // This saves the value of the js cookie 'seconds' into the php variable '$score'
    $varSec = $_COOKIE['seconds'];
    // This saves the value of the php variable '$varMin' in session.
    $_SESSION['minutes'] = $varMin;
    // This saves the value of the php variable '$varSec' in session.
    $_SESSION['seconds'] = $varSec;
  ?>
<!-- Basic parameters for HTML -->
<!doctype html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>The Cube</title>        
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!--------------------  Reference to custom CSS framework  -------------------->
        <link href="css/style.css" rel="stylesheet">          
    </head>
    <body>
        <div>
            <!--------------------  Header  -------------------->
            <h1>The Cube</h1>
            <!--------------------  Game Image  -------------------->
            <img src="images/cube_finish.jpg" alt="Fireworks">
            <!--------------------  Header  -------------------->
            <h1>Congratualtions! You Escaped The Cube in <?php echo $varMin; ?> minutes and <?php echo $varSec; ?> seconds!!</h1>
            <!--------------------  Game Text  -------------------->
            <p>
                You escaped the cube.
            </p>            
            <!--------------------  Button Div  -------------------->
            <div class="play_button_div ">
                <a href="white_1.php"><button class="green_play_button">Play Again?</button></a>
                <a href="the_cube_score.php"><button class="green_play_button">Save Your Time?</button></a>
                <a href="../../games.php"><button class="green_play_button">Games Library</button></a>
            </div>            
        </div>
    </body>
</html>
