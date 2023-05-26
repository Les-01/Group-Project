<?php //This line is starting the PHP

session_start(); // This is starting the start of the session

// ********************* INCLUDE FILES ********************* 
include ("../config/conn.php"); //This is an inclusion that includes the con file, this is essentially a key and the webpaage will not run without this. 
include("../config/functions.php"); //This is an inclusion that includes the functions file.
include("../modals.php"); //This is an inclusion that includes the modals file.
// ********************* INCLUDE FILES *********************

?>

<!-- ********************* BOOTSTRAP ********************* -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/styles.css">
<!-- ********************* BOOTSTRAP ********************* -->
<!-- The above section has all the CSS files for the entire website. -->

<html lang="en" data-bs-theme="dark"> <!-- This line is setting the language type for this html document to english and then setting the webpage theme to dark colour scheme -->


<head> <!-- This is the head section -->

</head> <!-- This closes the head section -->

<body class="text-center" style="display: flex; align-items: center;" > <!-- This line is setting the parameters for the body section -->


<!-- ********************* REGISTRY FORM START ********************* -->

<div class="container text-center"> <!-- This line is starting a div class with the parameters inside -->
  <div class="row align-items-center"> <!-- This line is starting a div class with parameters inside -->  
    <div class="col"> <!-- This line is starting a div class with the parameters inside -->
      <main class="form-signin w-100 m-auto" style="max-width: 500;"> <!-- This line is starting a div class called main, with the parameters inside -->
  <form action="../Process_Files/creation_process.php" method="POST"> <!-- This line is the starting of a form with an action which means the user will be redirected to the page that is listed in the action -->

    <img class="mb-4" src="../Images/Retro_games_logo.png" alt="Retro Games Logo" width="200" height="200"> <!-- This line is adding an image, the parameter first, 'mb' means margin bottom, 'src' means source of where the image is located, 'alt' means alternative this is text that will be shown if the image fils to load. The next 2 parameters are the height and width of the image. -->
    
    <h1 class="h3 mb-3 fw-normal"><b>Please fill out below fields</b></h1> <!-- This line is the heading line based on the parameters, 'h' meaning height, 'mb' margin bottom again and the 'fw' font width. '<b>' mkes the words between this syntax will be made bold, then we have the words used in the heading. -->

    <div class="form-floating"> <!-- This is a new class starting and with parameters -->
      <input type="text" class="form-control" id="floatingInput" required minlength="4" name="Username" placeholder="Username"> <!-- This is an input box that the user would need to populate. The parameters are then set. 'placeholder' is what will be shown in the input box. Required means that information has to be put into the box and the minlength means that there is a minimum length of characters that need to be input. -->
      <label for="floatingInput">Create a Username</label> <!-- This is a label that will show above the input box, then the title comes next -->
    </div><!-- This is closing the div -->
    <br><!-- This is a page break -->
    <div class="form-floating"><!-- This is the start of a new div and the class is the parameter -->
      <input type="text" class="form-control" id="floatingInput" required minlength="3" name="Fname" placeholder="First Name"> <!-- This is an input box that the user would need to populate. The parameters are then set. 'placeholder' is what will be shown in the input box. Required means that information has to be put into the box and the minlength means that there is a minimum length of characters that need to be input. -->
      <label for="floatingInput">First Name</label><!-- This is a label that will show above the input box, then the title comes next -->
    </div><!-- This is closing the div -->
    <br><!-- This is a page break -->
    <div class="form-floating"><!-- This is the start of a new div and the class is the parameter -->
      <input type="text" class="form-control" id="floatingInput" required minlength="5" name="Sname" placeholder="Surname"><!-- This is an input box that the user would need to populate. The parameters are then set. 'placeholder' is what will be shown in the input box. Required means that information has to be put into the box and the minlength means that there is a minimum length of characters that need to be input. -->
      <label for="floatingInput">Surname</label><!-- This is a label that will show above the input box, then the title comes next -->
    </div><!-- This is closing the div -->
    <br><!-- This is a page break -->
    <div class="form-floating"><!-- This is the start of a new div and the class is the parameter -->
      <input type="email" class="form-control" id="floatingPassword" required minlength="7" name="Email" placeholder="123@example.com"><!-- This is an input box that the user would need to populate. The parameters are then set. 'placeholder' is what will be shown in the input box. -->
      <label for="floatingPassword">Email</label><!-- This is a label that will show above the input box, then the title comes next -->
    </div><!-- This is closing the div -->
    <br><!-- This is a page break -->
    <div class="form-floating"><!-- This is the start of a new div and the class is the parameter -->
      <input type="password" class="form-control" id="floatingPassword" required minlength="8" name="Password" placeholder="Password"><!-- This is an input box that the user would need to populate. The parameters are then set. 'placeholder' is what will be shown in the input box. Required means that information has to be put into the box and the minlength means that there is a minimum length of characters that need to be input. -->
      <label for="floatingPassword">Password</label><!-- This is a label that will show above the input box, then the title comes next -->
    </div><!-- This is closing the div -->
    <br><!-- This is a page break -->
    <div class="form-floating"><!-- This is the start of a new div and the class is the parameter -->
      <input type="password" class="form-control" id="floatingPassword" required minlength="8" name="Password2" placeholder="Password"><!-- This is an input box that the user would need to populate. The parameters are then set. 'placeholder' is what will be shown in the input box. Required means that information has to be put into the box and the minlength means that there is a minimum length of characters that need to be input. -->
      <label for="floatingPassword">Retype-Password</label><!-- This is a label that will show above the input box, then the title comes next -->
    </div><!-- This is closing the div -->
    <br><!-- This is a page break -->

    <div class="checkbox mb-3"><!-- This is the start of a new div and the class is the parameter -->
    </div><!-- This is closing the div -->
    <button class="w-100 btn btn-lg btn-primary bg-success border border-success-subtle" type="submit">Register</button><!-- This line is a button followed by the name of the button which will be displayed in the button -->
    
  </form><!-- This is the end of the form -->
  <button class="w-100 btn btn-lg btn-primary bg-success border border-success-subtle" data-bs-toggle="modal" data-bs-target="#login">Login Instead</button><!-- This line is a button followed by the name of the button which will be displayed in the button -->
  <p class="mt-5 mb-3">By clicking 'Register' I agree to be respecful to all users of the website and will refrain from using any inappropriate language and/or images that may offend others on my account. I am aware that if I violate these rules, I could be banned from the website. </p> <!-- This is a disclaimer I added to the bottom of the registry page which will allow admin users to give behaviour warnings or even blacklist users. -->
  <p class="mt-5 mb-3 text-muted">&copy; 2023</p><!-- This is just an extra line 'p' means paragraph. the parameters follow and then i just made the copyright sign and then the year to make the page look a bit more official -->
</main><!-- This closes the 'main' section --> 
    </div><!-- This closes the div -->
    
  </div><!-- This closes the div -->
</div><!-- This closes the div -->
<!-- ********************* REGISTRY FORM END ********************* -->




</body><!-- This closes the 'body' section -->

</html><!-- This closes the 'HTML' section -->