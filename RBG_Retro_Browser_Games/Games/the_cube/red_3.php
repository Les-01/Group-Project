<?php
  // This starts the session
  session_start();
  // This saves the value of the js cookie 'minutes' into the php variable '$varMin'
  $varMin = $_COOKIE['minutes'];
  // This saves the value of the js cookie 'seconds' into the php variable '$varSec'
  $varSec = $_COOKIE['seconds'];
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
        <script>
            // This is the 'generateRandomLink' method that randomly selects an element from the array 'links'.
            function generateRandomLink() 
            {
                // This declares the variable 'links' which has string values (page addresses) stored in it as elements.
                var links = 
                [
                    "black_1.php",
                    "black_2.php",
                    "black_3.php",
                    "blue_1.php",
                    "blue_2.php",
                    "blue_3.php",
                    "green_1.php",
                    "green_2.php",
                    "green_3.php",
                    "navy_blue_1.php",
                    "navy_blue_2.php",
                    "navy_blue_3.php",
                    "orange_1.php",
                    "orange_2.php",
                    "orange_3.php",
                    "white_1.php",
                    "white_2.php",
                    "white_3.php",
                    "yellow_1.php",
                    "yellow_2.php",
                    "yellow_3.php",
                ];

                // This uses the 'Math.floor', 'Math.random' and multipication combination to generate a random whole number. This is done because 'Math.random' will only generate a random number between 0 and 1, 
                // whereas Math.random used with Math.floor generates whole numbers. Here a random number will be generated between 0 and the number of element stored in the variable 'randomIndex'. 
                var randomIndex = Math.floor(Math.random() * links.length);
                // Here the 'links' array is passed the variable 'randomIndex' selecting the element at the randomly generated index and returning it. 
                return links[randomIndex];
            }

            // This is the 'setRandomLink' function which has been passed 'buttonId'. 
            function setRandomLink(buttonId) {
                // Here the 'getElementById' method is passed 'buttonId' and used to find the HTML element with an 'id' that matches 'buttonId'. The HTML element is then stored in the variable 'button'.
                var button = document.getElementById(buttonId);
                // Here the 'generateRandomLink' function is called to generate a random link from the 'links' array which is then assigned to the 'href' property of the HTML element assigned to the variable 'button'.
                button.href = generateRandomLink();
            }

            // The 'window.onload' is an event handler that is called once the 'window object' has finished loading. Here once the 'window object' has finished loading the 'setRandomLink' function is called six times. 
            // Each time the function is applied to a different buttonId setting the 'href' attribute of each button to a different random link.
            window.onload = function() {
                setRandomLink("button1");
                setRandomLink("button2");
                setRandomLink("button3");
                setRandomLink("button4");
                setRandomLink("button5");
                setRandomLink("button6");
            };

            // This addd a new entry to the user's browsing history.
            history.pushState(null, null, location.href);
            // This listens for when the user navigates within the website.
            window.addEventListener('popstate', function(event) 
            {
                // If the user tries to navigate back to a previous page, this pushes the user forward to the current page keeping them where they are.
                history.pushState(null, null, location.href);
            }); 

        </script> 
    </head>
    <body>
        <div>
            <!--------------------  Header  -------------------->
            <h1>The Cube  
                <!--------------------  Game Timer  -------------------->
                <!--------------------  This paragraph will display the minutes  -------------------->
                <p style="display: inline-block;" id="minutes">0</p> 
                <!--------------------  This paragraph will display the seperating colon  -------------------->
                <p style="display: inline-block;" id="col">:</p>
                <!--------------------  This paragraph will display the seconds  -------------------->
                <p style="display: inline-block;" id="seconds">0</p>    
            </h1>
            <!--------------------  Game Image  -------------------->
            <img src="images/red_3.jpg" alt="Left And Right Junction In The Cube">
            <!--------------------  Game Text  -------------------->
            <p>There is a junction ahead with both left and right turns, do you follow the Cube and turn left or right? Or go back and try to find another route?.</p>
            <!--------------------  Button Div  -------------------->
            <div class="play_button_div ">
                <a id="button1" href="#" onclick="document.cookie = 'minutes='+Min; document.cookie = 'seconds='+Sec;"><button class="red_play_button">Left</button></a>
                <a id="button2" href="#" onclick="document.cookie = 'minutes='+Min; document.cookie = 'seconds='+Sec;"><button class="red_play_button">Right</button></a>
                <a id="button3" href="#" onclick="document.cookie = 'minutes='+Min; document.cookie = 'seconds='+Sec;"><button class="red_play_button">Up</button></a>
                <a id="button4" href="#" onclick="document.cookie = 'minutes='+Min; document.cookie = 'seconds='+Sec;"><button class="red_play_button">Down</button></a>
                <a id="button5" href="#" onclick="document.cookie = 'minutes='+Min; document.cookie = 'seconds='+Sec;"><button class="red_play_button">Forward</button></a>
                <a id="button6" href="#" onclick="document.cookie = 'minutes='+Min; document.cookie = 'seconds='+Sec;"><button class="red_play_button">Back</button></a>
                <a href="index.html"><button class="quit_button">End Game</button></a>
            </div>            
        </div>
        <script>
            // This declares the 'var' type variable 'Sec' and assigns the value of the php variable 'varSec' to it.
            var Sec = "<?php echo $varSec; ?>";
            // This delares the 'var' type variable 'Min' and assigns the value of the php variable 'varMin' to it.
            var Min = "<?php echo $varMin; ?>";
            // This declares the var type 'Countdown' variable using the method 'setInterval' which has been passed 'function'. This will call the variable 'Countdown' at set intervals
            // executing the code block within the parenthesis.
            var Countdown = setInterval(function()
            {
                // This will add 1 to the value stored in the variable 'Sec'.
                ++Sec;
                // Here 'document.getElementById' is used to get the element with the id 'seconds' and display the contents of the variable 'Sec' in it.
                document.getElementById("seconds").innerHTML = Sec;
                // Here 'document.getElementById' is used to get the element with the id 'minutes' and display the contents of the variable 'Min' in it.
                document.getElementById("minutes").innerHTML = Min;
                // This 'if' statement states that if the value stored in the variable 'Sec' is less than or equal to 60 execute the code within the parenthesis.  
                if(Sec >=60)
                {
                    // This sets the value of the variable 'Sec' to 0.
                    Sec = 0;
                    // This will add 1 to the value stored in the variable 'Min'.
                    ++Min;                    
                }
                // This sets the interval timer for the execution of 'funtion' stored in the variable 'Countdown'.    
            }, 600);    
        </script>
    </body>
</html>