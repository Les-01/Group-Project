<?php

session_start();

// ********************* INCLUDE FILES ********************* 
include("Config/conn.php");
include("Config/functions.php");
//include("Misc_Files/liveBG.php");
//include("Navbars/general_navbar.php");
// ********************* INCLUDE FILES *********************

//$User_Data = check_login($con);
if(($User_Data = check_login($con)) == true)
{
navbar_check($con);
$_SESSION['Username'] = $User_Data['Username'];
$_SESSION['Tier'] = $User_Data['Tier'];
}
else
{
  include("Navbars/General_navbar.php");
}

?>


<!-- ********************* BOOTSTRAP ********************* -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha382-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha382-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<!-- ********************* BOOTSTRAP ********************* -->


<!-- ********************* MY CSS ********************* -->
<link rel="stylesheet" href="css/styles.css">
<!-- ********************* MY CSS ********************* -->

<head>

</head>


<body>

<!-- ***************** Cards in a better layout below ****************** -->
<div class="responsive row gy-2"> <!-- g is for gutter and y is for the axis that it has been placed -->
<div class="row row-cols-2 row-cols-md-3 g-5"> <!-- Md is the number of columns on the page, g is the gutter between each element/card-->

	<div class="col gy-2">
		<div class="shadow-lg p-3 mb-5 bg-body rounded"> <!-- bg is for background -->
			<img id="placeholder-img" class="card-img-top w-100 h-30" src="images/placeholder.jpg" alt="Placeholder">

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
<!-- ********************* End of Better Layout ********************* -->



</body>

<!-- ************************* JQuery CDN *************************** -->
 <script src="js/jquery-3.6.0.js"></script>
 <script src="js/Main.js"></script>
 


</html>