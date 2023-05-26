<?php
	// This starts the session.
	session_start();
	// Link to 'config/conn.php' containing the database connection code and 'functions.php' containing all the application functions.
	include("config/conn.php");
	include("config/functions.php");
	// 'IF' statement to determine if user is logged in to assign navbar file based on user 'tier'.
	if(($User_Data = access_login($con)) == true)
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
		
	</head>
	<body>
		<!--------------------  Main Page Divs  -------------------->
		
		<div class="games_main" style="align-items: justify-content-center;">		
			
				<!--------------------  Bootstrap Column Seperator  -------------------->
				<div class="responsive row p-5" style="align-items: center;"> 
					<div class="row row-cols-2 row-cols-md-3 g-5">
						<!--------------------  Bootstrap Card  -------------------->
						
						<div class="col p-1">
							<div class="p-3 mt-3 ms-5 mb-5 border border-warning border-3 rounded-3 bg-body rounded" style="color: #a3c; height: 95%;">
							<h3 class="card-title text-center"><br><b>SNAKE</b></h3><br>
							<img id="snake_thumb.jpg" class="card-img-top w-100" src="images/snake_thumb.jpg" alt="Placeholder">
								<div id="Snake" class="card-body text-center">
									
									<p id="Snake-text" class="card-text"><br>Welcome to the classic game of Snake, your goal is to grow your snake by eating as many dots as possible without running into any obstacles or your own tail. Are you ready to slither your way to victory?
										<br><br> Click play to have a go!</p><br>
									<a href="Games/snake/main.html" id=Snake class="btn btn-warning w-100" style="visibility: <?php access_check($con) ?>;">Play</a>
								</div>
							</div>
						</div>

						<!--------------------  Bootstrap Table  -------------------->
						<div class="col p-3">
							<div class="p-3 mt-3 ms-5 mb-5 border border-warning border-4 rounded-3 bg-body rounded" style="color: #a3c; height: 95%;"> <!-- 'ms' is margin side, 'p' is padding 'mt' is margin top, 'mb' is margin bottom, 'bg' is background, 'col' is column, 'w' is width, 'h' is height. -->
							<h3 class="card-title text-center"><b><br>Noughts & Crosses</b></h3><br>
							<img id="noughts_thumb.jpg" class="card-img-top w-100" src="images/noughts_n_crosses.jpg" alt="Placeholder">
								<div id="Noughts_N_Crosses" class="card-body text-center">
									
									<p id="Noughts_N_Crosses-text" class="card-text"><br>Welcome to the multiplayer version of Noughts and Crosses, also known as Tic-Tac-Toe. This is a game of strategy and skill, where two players take turns placing their X's and O's on 
										a 3x3 grid, trying to get three in a row horizontally, vertically, or diagonally. Can you outsmart your opponent and claim victory?<br><br></p><br><br>
									<a href="Games/noughts_and_crosses/index.html" id=noughts_and_crosses class="btn btn-outline-white btn-warning w-100" style="visibility: <?php access_check($con) ?>;">Play</a>
								</div>
							</div>
						</div>
						<!--------------------  Bootstrap Card  -------------------->
						<div class="col p-3">
							<div class="p-3 mt-3 ms-5 mb-5 border border-warning border-3 rounded-3 bg-body rounded" style="color: #a3c; height: 95%;">
							<h3 class="card-title text-center"><b><br>The Cube</b></h3><br>
							<img id="The_Cube-img" class="card-img-top w-100" src="images/cube2.jpg" alt="Image of a cube maze">
								<div id="The_Cube" class="card-body text-center">
									
									<p id="The_Cube-text" class="card-text"><br>Trapped in a maze of ever changing interconnected cube-shaped rooms, your only chance of survival is to successfully navigate your way through the maze to find a way out. 
										One wrong turn lead you straight back to the start. Can you escape the cube?</p><br>
									<a href="Games/the_cube/index.html" id=the_cube class="btn btn-outline-white btn-warning w-100" style="visibility: <?php access_check($con) ?>;">Play</a>
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