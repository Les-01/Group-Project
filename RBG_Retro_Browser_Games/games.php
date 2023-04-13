<?php

session_start();

// ********************* INCLUDE FILES ********************* 
include("config/conn.php");
include("config/functions.php");
// ********************* INCLUDE FILES *********************

if(($User_Data = check_login($con)) == true)
{
navbar_check($con);
$_SESSION['Username'] = $User_Data['Username'];
$_SESSION['Tier'] = $User_Data['Tier'];
}
else
{
  include("Navbars/general_navbar.php");
}

bg_check2($con);

?>
<title>Games Library</title>

<!-- ********************* BOOTSTRAP ********************* -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha382-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha382-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<!-- ********************* BOOTSTRAP ********************* -->


<!-- ********************* MY CSS ********************* -->
<link rel="stylesheet" href="css/styles.css">
<!-- ********************* MY CSS ********************* -->
<style>
    body {	
    background-image: url("Images/high_back.png"); 	
}

    div.games_main {	
		width: 1345px;
		height: auto;
		margin: 5em auto;
		padding: 50px;
		background-color: #E8E1C7;
		border-radius: 1em;		
}	

</style>
<head>

</head>


<body>
<div class="games_main">		
        <div class="wrapper">     

<!-- ***************** Cards in a better layout below ****************** -->
<div class="responsive row gy-2"> <!-- g is for gutter and y is for the axis that it has been placed -->
<div class="row row-cols-2 row-cols-md-3 g-5"> <!-- Md is the number of columns on the page, g is the gutter between each element/card-->

	<div class="col gy-2">
		<div class="shadow-lg p-3 mb-5 bg-body rounded"> <!-- bg is for background -->
			<img id="snake_thumb.jpg" class="card-img-top w-100 h-30" src="images/snake_thumb.jpg" alt="Placeholder">

			<div id="Snake" class="card-body text-center">
				<h5 class="card-title"><b>SNAKE</b></h5>
				<p id="Snake-text" class="card-text">This game is an old classic, eat all the food, don't hit the walls or yourself... Good luck! 
					<br> Click play to have a go!</p>
				<a href="Games/snake/main.html" id=Snake class="btn btn-info">Play</a>
			</div>
		</div>
	</div>

	<div class="col gy-2">
		<div class="shadow-lg p-3 mb-5 bg-body rounded">
			<img id="noughts_thumb.jpg" class="card-img-top w-100 h-30" src="images/noughts_n_crosses.jpg" alt="Placeholder">

			<div id="GameX" class="card-body text-center">
				<h5 class="card-title"><b>Noughts & Crosses</b></h5>
				<p id="GameX-text" class="card-text">This game is good ol' Noughts & Crosses, or as some may know it 'Tic-Tac-Toe'!! Grab a friend and see who wins...</p>
				<a href="Games/noughts_and_crosses/index.html" id=noughts_and_crosses class="btn btn-info">Play</a>
			</div>
		</div>
	</div>

	<div class="col gy-2">
		<div class="shadow-lg p-3 mb-5 bg-body rounded">
			<img id="GameX-img" class="card-img-top w-100 h-30" src="Games/the_cube/images/cube_2.png" alt="Placeholder">

			<div id="GameX" class="card-body text-center">
				<h5 class="card-title"><b>The Cube</b></h5>
				<p id="GameX-text" class="card-text">Can you escape from the Cube</p>
				<a href="Games/the_cube/index.html" id=the_cube class="btn btn-info">Play</a>
			</div>
		</div>
	</div>

	<div class="col gy-2">
		<div class="shadow-lg p-3 mb-5 bg-body rounded">
			<img id="GameX-img" class="card-img-top w-100 h-30" src="images/placeholder.jpg" alt="Placeholder">

			<div id="GameX" class="card-body text-center">
				<h5 class="card-title"><b>Game Name</b></h5>
				<p id="GameX-text" class="card-text">This game is an old classic blah blah blahh Click play to have a go!</p>
				<a href="#" id=GameX class="btn btn-info">Play</a>
			</div>
		</div>
	</div>

	<div class="col gy-2">
		<div class="shadow-lg p-3 mb-5 bg-body rounded">
			<img id="GameX-img" class="card-img-top w-100 h-30" src="images/placeholder.jpg" alt="Placeholder">

			<div id="GameX" class="card-body text-center">
				<h5 class="card-title"><b>Game Name</b></h5>
				<p id="GameX-text" class="card-text">This game is an old classic blah blah blahh Click play to have a go!</p>
				<a href="#" id=GameX class="btn btn-info">Play</a>
			</div>
		</div>
	</div>

	<div class="col gy-2">
		<div class="shadow-lg p-3 mb-5 bg-body rounded">
			<img id="GameX-img" class="card-img-top w-100 h-30" src="images/placeholder.jpg" alt="Placeholder">

			<div id="GameX" class="card-body text-center">
				<h5 class="card-title"><b>Game Name</b></h5>
				<p id="GameX-text" class="card-text">This game is an old classic blah blah blahh Click play to have a go!</p>
				<a href="#" id=GameX class="btn btn-info">Play</a>
			</div>
		</div>
	</div>

</div>
</div>
</div>
</div>
<!-- ********************* End of Better Layout ********************* -->



</body>

<!-- ************************* JQuery CDN *************************** -->
 <script src="js/jquery-3.6.0.js"></script>
 <script src="js/Main.js"></script>
 


</html>