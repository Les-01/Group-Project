<?php
	// This starts the session.
	session_start();
	// Link to 'config/conn.php' containing the database connection code and 'functions.php' containing all the application functions.
	include("config/conn.php");
	include("config/functions.php");
	// 'IF' statement to determine if user is logged in to assign navbar file based on user 'tier'.
	if(($User_Data = check_login($con)) == true)
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
?>

<!-------------------- Basic parameters for HTML -------------------->
<!doctype html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Games Library</title> 
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
		<style>
		body 
		{	
			background-image: url("Images/high_back.png"); 	
		}

		div.games_main 
		{	
			width: 1345px;
			height: auto;
			margin: 5em auto;
			padding: 50px;
			background-color: #E8E1C7;
			border-radius: 1em;		
		}	
		</style>
	</head>
	<body>
		<!--------------------  Main Page Divs  -------------------->
		<div class="games_main">		
			<div class="wrapper">
				<!--------------------  Bootstrap Column Seperator  -------------------->
				<div class="responsive row gy-2"> 
					<div class="row row-cols-2 row-cols-md-3 g-5">
						<!--------------------  Bootstrap Card  -------------------->
						<div class="col gy-2">
							<div class="shadow-lg p-3 mb-5 bg-body rounded">
							<img id="snake_thumb.jpg" class="card-img-top w-100 h-30" src="images/snake_thumb.jpg" alt="Placeholder">
								<div id="Snake" class="card-body text-center">
									<h5 class="card-title"><b>SNAKE</b></h5>
									<p id="Snake-text" class="card-text">Welcome to the classic game of Snake, your goal is to grow your snake by eating as many dots as possible without running into any obstacles or your own tail. Are you ready to slither your way to victory?
										<br> Click play to have a go!<br><br></p>
									<a href="Games/snake/main.html" id=Snake class="btn btn-info">Play</a>
								</div>
							</div>
						</div>
						<!--------------------  Bootstrap Table  -------------------->
						<div class="col gy-2">
							<div class="shadow-lg p-3 mb-5 bg-body rounded">
							<img id="noughts_thumb.jpg" class="card-img-top w-100 h-30" src="images/noughts_n_crosses.jpg" alt="Placeholder">
								<div id="GameX" class="card-body text-center">
									<h5 class="card-title"><b>Noughts & Crosses</b></h5>
									<p id="GameX-text" class="card-text">Welcome to the multiplayer version of Noughts and Crosses, also known as Tic-Tac-Toe. This is a game of strategy and skill, where two players take turns placing their X's and O's on 
										a 3x3 grid, trying to get three in a row horizontally, vertically, or diagonally. Can you outsmart your opponent and claim victory?<br><br></p>
									<a href="Games/noughts_and_crosses/index.html" id=noughts_and_crosses class="btn btn-info">Play</a>
								</div>
							</div>
						</div>
						<!--------------------  Bootstrap Card  -------------------->
						<div class="col gy-2">
							<div class="shadow-lg p-3 mb-5 bg-body rounded">
							<img id="GameX-img" class="card-img-top w-100 h-30" src="Games/the_cube/images/cube_2.png" alt="Placeholder">
								<div id="GameX" class="card-body text-center">
									<h5 class="card-title"><b>The Cube</b></h5>
									<p id="GameX-text" class="card-text">Trapped in a maze of ever changing interconnected cube-shaped rooms, your only chance of survival is to successfully navigate your way through the maze to find a way out. 
										One wrong turn lead you straight back to the start. Can you escape the cube?</p>
									<a href="Games/the_cube/index.html" id=the_cube class="btn btn-info">Play</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
	<!--------------------  JavaScript CDNs  -------------------->
	<script src="js/jquery-3.6.0.js"></script>
	<script src="js/Main.js"></script>
</html>