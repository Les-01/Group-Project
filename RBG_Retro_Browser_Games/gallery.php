<?php
session_start();
// ********************* INCLUDE FILES ********************* 
include ("Config/conn.php");
include("Config/functions.php");
// ********************* INCLUDE FILES *********************

$User_Data = check_login($con); // This line is checking that a user is logged in.
navbar_check($con); // This line is checking what rank the user is (general, user, or admin) then includes the navbar based upon that rank.

?>

<!-- ********************* MY CSS ********************* -->
<link rel="stylesheet" href="css/styles.css">
<link rel="stylesheet" href="css/gamingbg.css">
<!-- ********************* MY CSS ********************* -->

<!-- ********************* BOOTSTRAP ********************* -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/styles.css">
<!-- ********************* BOOTSTRAP ********************* -->

<head>


</head>


<body>

<!-- ***************** Cards in a better layout below ****************** -->

<div class="row row-cols-1 row-cols-md-3 g-4">

	<div class="col">
		<div class="shadow-lg p-4 mb-5 bg-body rounded">
			<img id="wolf-img" class="card-img-top w-100 h-75" src="img/wolf.jpg" alt="Picture of a Wolf">

			<div id="wolf" class="card-body">
				<h5 class="card-title">Wolf</h5>
				<p id="wolf-text" class="card-text">A headshot of a majestic white wolf. The wolf is an amazing creature, they are extremely intelligent too. <strong>Click the image for more information</strong>.</p>
				<a href="https://en.wikipedia.org/wiki/Wolf" id=wolf-butn class="btn btn-primary">More Info</a>
			</div>
		</div>
	</div>

	<div class="col">
		<div class="shadow-lg p-4 mb-5 bg-body rounded">
				<img id="wolf-img2" class="card-img-top w-100 h-75" src="img/wolf_growl.jpg" alt="Wolf Baring Teeth">

			<div id="wolf2" class="card-body">
				<h5 class="card-title">Growling Wolf</h5>
				<p id="wolf-text2" class="card-text">This wolf is showing his teeth as a warning to stay back, or as a sign of preparing to attack!<strong>Click the image for more information</strong></p>
				<a href="https://en.wikipedia.org/wiki/Wolf" id=wolf-butn2 class="btn btn-primary">More Info</a>
			</div>
		</div>
	</div>

	<div class="col">
		<div class="shadow-lg p-4 mb-5 bg-body rounded">
			  <img id="wolf-img3" class="card-img-top w-100 h-75" src="img/wolf_sparring.jpg" alt="Two Wolves Fighting">

			<div id="wolf3" class="card-body">
				<h5 class="card-title">Wolves Sparring</h5>
				<p id="wolf-text3" class="card-text">Here, the alpha-male is showing the beta who is in charge.Although they fight these animals are great team workers.<strong>Click the image for more information</strong></p>
				<a href="https://en.wikipedia.org/wiki/Wolf" id=wolf-butn3 class="btn btn-primary">More Info</a>
			</div>
		</div>
	</div>

	<div class="col">
		<div class="shadow-lg mb-5 p-4 bg-body rounded">
				<img id="wolf-img4" class="card-img-top w-100 h-75" src="img/Howling Wolf.jpg" alt="Picture of a wolf howling">

			<div id="wolf4" class="card-body">
				<h5 class="card-title">Howling Wolf</h5>
				<p id="wolf-text4" class="card-text">Here is a picture of a wolf howling in the wild. Wolves howl to communicate to one and other and their howls can be heard over a great distance.<strong>Click the image for more information</strong></p>
				<a href="https://en.wikipedia.org/wiki/Wolf" id=wolf-butn4 class="btn btn-primary">More Info</a>
			</div>
		</div>
	</div>

	<div class="col">
		<div class="shadow-lg p-4 mb-5 bg-body rounded">
				<img id="wolf-img5" class="card-img-top w-100 h-100" src="img/wolf_in_snow.jpg" alt="Picture of a wolf in the snow">

			<div id="wolf5" class="card-body">
				<h5 class="card-title">Taking A Rest</h5>
				<p id="wolf-text5" class="card-text">This wolf is taking a rest in the snow after making a kill during a successful hunt.<strong>Click the image for more information</strong></p>
				<a href="https://en.wikipedia.org/wiki/Wolf" id=wolf-butn5 class="btn btn-primary">More Info</a>
			</div>
		</div>
	</div>

	<div class="col">
		<div class="shadow-lg p-4 mb-5 bg-body rounded">
				<img id="wolf-img6" class="card-img-top w-100 h-100" src="img/wolf_2.jpg" alt="Picture of a black wolf in snow">

			<div id="wolf6" class="card-body">
				<h5 class="card-title">Black Wolf In Snow</h5>
				<p id="wolf-text6" class="card-text">A picture of a black wolf walking through the snow, possibly scouting ahead for the pack.<strong>Click the image for more information</strong></p>
				<a href="https://en.wikipedia.org/wiki/Wolf" id=wolf-butn6 class="btn btn-primary">More Info</a>
			</div>
		</div>
	</div>

	<div class="col">
		<div class="shadow-lg p-4 mb-5 bg-body rounded">
			  <img id="wolf-img7" class="card-img-top w-100 h-100" src="img/wolf_pups.jpg" alt="Three Wolf Puppies">

			<div id="wolf7" class="card-body">
					<h5 class="card-title">Wolf Pups</h5>
					<p id="wolf-text7" class="card-text">Although extremely cute, many have made the mistake of trying to rear one as a domesticated animal like a dog, unfortunately they grow to big and are very hard to keep....best to leave them in the wild!<strong>Click the image for more information</strong></p>
					<a href="https://en.wikipedia.org/wiki/Wolf" id=wolf-butn7 class="btn btn-primary">More Info</a>
			</div>
		</div>
	</div>

	<div class="col">
		<div class="shadow-lg p-4 mb-5 bg-body rounded">
				<img id="wolf-img8" class="card-img-top w-100 h-100" src="img/wolf_pack.jpg" alt="Pack Of Wolves">

			<div id="wolf8" class="card-body">
				<h5 class="card-title">Wolf Pack</h5>
				<p id="wolf-text8" class="card-text">Here is a wolf pack, they hunt in numbers and are lead by an alpha. Wolves are so advanced at hunting that they will always try and encircle their prey so that the hunt can't escape.<strong>Click the image for more information</strong></p>
				<a href="https://en.wikipedia.org/wiki/Wolf" id=wolf-butn8 class="btn btn-primary">More Info</a>
			</div>
		</div>
	</div>

	<div class="col">
		<div class="shadow-lg p-4 mb-5 bg-body rounded">
			  <img id="wolf-img9" class="card-img-top w-100 h-100" src="img/placeholder.jpg" alt="Placeholder">

			<div id="wolf9" class="card-body">
					<h5 class="card-title">Place Holder</h5>
					<p id="wolf-text9" class="card-text">This is here to represent where an image would go.<strong>Click the image for more information</strong></p>
					<a href="https://en.wikipedia.org/wiki/Wolf" id=wolf-butn9 class="btn btn-primary">More Info</a>
			</div>
		</div>
	</div>

</div>

<!-- ********************* End of Better Layout ********************* -->



</body>
<!-- ***************DO NOT REMOVE BOOTSTRAP JS CDN************ -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
<!-- ************************* JQuery CDN *************************** -->
<script src="js/jquery-3.6.0.js"></script>
<script src="js/Main.js"></script>
<script src="js/gamingbg.js"></script>


</html>