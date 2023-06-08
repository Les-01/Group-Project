<?php //This starts the php
	
	session_start(); // This starts the session.
	include("config/conn.php"); //This includes the conn.php file
	include("config/functions.php"); //This includes the functions.php file
	
	if(($User_Data = access_login($con)) == true) //'IF' statement to determine if user is logged in to assign navbar file based on user 'tier'.
	{
		// Here the 'navbar_check' function is called.
		navbar_check($con);
		$_SESSION['Username'] = $User_Data['Username'];
		$_SESSION['Tier'] = $User_Data['Tier'];
	}
	// If user not logged in.
	else
	{
	include("Navbars/general_navbar.php");
	}
    // Here the 'bg_check2' function is called.
	bg_check2($con);
?> <!-- This closes the php -->

<!-------------------- Basic parameters for HTML -------------------->
<html> <!-- This opens the html section -->

    <head> <!-- This opens the head section -->
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" /> 
        <meta name="viewport" content="width=device-width, initial-scale=1" /> 
	<!-------------------- Bootstrap Link ------------------>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
	rel="stylesheet" integrity="sha382-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
	integrity="sha382-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	<!-------------------- CSS Link ------------------>
	<link rel="stylesheet" href="css/styles.css">
	<!--------------------  CSS framework  -------------------->
		
	</head> <!-- This closes the head section -->
	<body> <!-- This opens the body section -->
		<!--------------------  Main Page Divs  -------------------->
		
		<div class="games_main" style="align-items: justify-content-center;"> <!-- This is a new div that has been created with the class and styles -->
			
				<!--------------------  Bootstrap Column Seperator  -------------------->
				
                <div class="responsive row p-5" style="align-items: center;"> <!-- This is a new div that has been created with the class and styles -->
					
						<!--------------------  Bootstrap Card  -------------------->
						
						<div class="col p-3"> <!-- This is a new div that has been created with the class -->
							<div class="p-3 mt-3 ms-5 mb-5 border border-warning border-4 rounded-3 bg-body rounded" style="color: #a3c; height: 95%;"> <!-- 'ms' is margin side, 'p' is padding 'mt' is margin top, 'mb' is margin bottom, 'bg' is background, 'col' is column, 'w' is width, 'h' is height. -->
							<h3 class="card-title text-center"><b><br>Snake</b></h3><br> <!-- This is the title of the game and will be displayed for the users to see, the title has been encapsulated within the H3 font format and the <b> for bold captions -->
							<img id="snake_thumb.jpg" class="card-img-top w-100" src="images/snake_thumb.jpg" alt="Snake"> <!-- This is the thumbnail that the users will be able to see and demonstrates when the game will look like -->
								<div id="Snake" class="card-body text-center"> <!-- This is another div set with the class and ID -->
									
									<p id="Snake-text" class="card-text"><br>Welcome to the classic game of Snake, your goal is to grow your snake by eating as many dots as possible without running into any obstacles or your own tail. Are you ready to slither your way to victory? <!-- This is a description paragraph to explain the aim of the game -->
										<br><br> Click play to have a go!</p><br> <!-- This is the prompt to try the game -->
									<a href="Games/snake/main.html" id=Snake class="btn btn-warning w-100" style="visibility: <?php access_check($con) ?>;">Play</a> <!-- This is the button that will go to the game. This is where the injection of php comes in and uses the proxy that i mentioned previously on the functions file, the access_check will retunr a 'show' or 'hidden', ehich will complete the code -->
								</div> <!-- This closes the div -->
							</div> <!-- This closes the div -->
						</div> <!-- This closes the div -->
                        
                        

						<!--------------------  Bootstrap Table  --------------------> 
						<div class="col p-3"> <!-- This is a new div that has been created with the class -->
							<div class="p-3 mt-3 ms-5 mb-5 border border-warning border-4 rounded-3 bg-body rounded" style="color: #a3c; height: 95%;"> <!-- 'ms' is margin side, 'p' is padding 'mt' is margin top, 'mb' is margin bottom, 'bg' is background, 'col' is column, 'w' is width, 'h' is height. -->
							<h3 class="card-title text-center"><b><br>Noughts & Crosses</b></h3><br> <!-- This is the title of the game and will be displayed for the users to see, the title has been encapsulated within the H3 font format and the <b> for bold captions -->
							<img id="noughts_thumb.jpg" class="card-img-top w-100" src="images/noughts_n_crosses.jpg" alt="Noughts&Crosses"> <!-- This is the thumbnail that the users will be able to see and demonstrates when the game will look like -->
								<div id="Noughts_N_Crosses" class="card-body text-center"> <!-- This is another div set with the class and ID -->
									
									<p id="Noughts_N_Crosses-text" class="card-text"><br>Welcome to the multiplayer version of Noughts and Crosses, also known as Tic-Tac-Toe. This is a game of strategy and skill, where two players take turns placing their X's and O's on 
										a 3x3 grid, trying to get three in a row horizontally, vertically, or diagonally. Can you outsmart your opponent and claim victory?<br><br></p><br><br> <!-- This is a description paragraph to explain the aim of the game -->
									<a href="Games/noughts_and_crosses/index.html" id=noughts_and_crosses class="btn btn-outline-white btn-warning w-100" style="visibility: <?php access_check($con) ?>;">Play</a> <!-- This is the button that will go to the game. This is where the injection of php comes in and uses the proxy that i mentioned previously on the functions file, the access_check will retunr a 'show' or 'hidden', ehich will complete the code -->
								</div> <!-- This closes the div -->
							</div> <!-- This closes the div -->
						</div> <!-- This closes the div -->
						<!--------------------  Bootstrap Card  -------------------->
						<div class="col p-3"> <!-- This is a new div that has been created with the class -->
							<div class="p-3 mt-3 ms-5 mb-5 border border-warning border-4 rounded-3 bg-body rounded" style="color: #a3c; height: 95%;"> <!-- 'ms' is margin side, 'p' is padding 'mt' is margin top, 'mb' is margin bottom, 'bg' is background, 'col' is column, 'w' is width, 'h' is height. -->
							<h3 class="card-title text-center"><b><br>The Cube</b></h3><br> <!-- This is the title of the game and will be displayed for the users to see, the title has been encapsulated within the H3 font format and the <b> for bold captions -->
							<img id="The_Cube-img" class="card-img-top w-100" src="images/cube2.jpg" alt="Image of a cube maze"> <!-- This is the thumbnail that the users will be able to see and demonstrates when the game will look like -->
								<div id="The_Cube" class="card-body text-center"> <!-- This is another div set with the class and ID -->
									
									<p id="The_Cube-text" class="card-text"><br>Trapped in a maze of ever changing interconnected cube-shaped rooms, your only chance of survival is to successfully navigate your way through the maze to find a way out. 
										One wrong turn lead you straight back to the start. Can you escape the cube?</p><br> <!-- This is a description paragraph to explain the aim of the game -->
									<a href="Games/the_cube/index.html" id=the_cube class="btn btn-outline-white btn-warning w-100" style="visibility: <?php access_check($con) ?>;">Play</a> <!-- This is the button that will go to the game. This is where the injection of php comes in and uses the proxy that i mentioned previously on the functions file, the access_check will retunr a 'show' or 'hidden', ehich will complete the code -->
								</div> <!-- This closes the div -->
							</div> <!-- This closes the div -->
						</div> <!-- This closes the div -->
					</div> <!-- This closes the div -->
				
		
	</body> <!-- This closes the body section  -->
	<!--------------------  JavaScript CDNs  -------------------->
	<script src="js/jquery-3.6.0.js"></script> <!-- This includes a javascript script -->
	<script src="js/Main.js"></script> <!-- This includes a javascript script  -->
</html> <!-- This closes the html section -->