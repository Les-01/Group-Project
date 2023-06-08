<?php //This opens the php


// ********************* INCLUDE FILES ********************* 
include("modals.php"); //This is an inclusion line that includes the modals.php
// ********************* INCLUDE FILES *********************

?><!-- This closes the php -->

<html lang="en" data-bs-theme="dark"> <!-- This line is opening the html, choosing the language and setting the theme of the page -->  
<head> <!-- This opens the head section -->  
<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- This is creating the viewport parameters which sets the scale of the page based upon the device the user is viewing the content on. meta tags are used to add parameters to a page or even descriptions and author names, text in a meta won't be dsiplayed.-->



  <!-- ************************** NAVBAR START ************************** -->

<nav class="navbar navbar-expand-lg navbar-dark bg-warning"> <!-- This line creates a div called nav, this holds the parameters for the div including themes -->
    <div class="container"> <!-- This opens a new div within the nav div and uses the class 'container' which is a css held within the bootstrap css files -->
      <a class="navbar-brand fs-3" href="index.php"><strong>R.B.Gaming (Admin) </strong></a> <!-- This creates a link that the user can click which takes them back to the home/landing page (index). -->

      <!-- ************** THIS IS THE HAMBURGER BUTTON ********** -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation"> <!-- This creates a button that puts all the navbar buttons into a hamburger menu. -->
        <span class="navbar-toggler-icon"></span> <!-- This line creates a toggle option for the hamburger, the user clicks on the hamburger menu and the options drop down and then when they click it again they will be hidden once more. -->
      </button> <!-- This closes the button -->
      <!-- ************* END OF HAMBURGER BUTTON *********** -->

      <div class="collapse navbar-collapse" id="navbarsExample07"><!-- This line creates a new div within the nav div and sets the parameters -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0"><!-- This line is creating an unordered list div and setting the parameters and theme etc.. -->
          <li class="nav-item"><!-- This line creates a line within the list -->
            <a class="nav-link" aria-current="page" href="profile.php"><B>Profile</B></a><!-- This is the link that users can click to navigate to the 'Profile' page -->
          </li><!-- This closes the line -->
          <li class="nav-item"> <!-- This line creates a line within the list -->
            <a class="nav-link" href="games.php"><B>Games</B></a><!-- This is the link that users can click to navigate to the 'Games' page -->
          </li><!-- This closes the line -->
          <li class="nav-item"><!-- This line creates a line within the list -->
            <a class="nav-link" href="highscores.php"><B>Highscores</B></a><!-- This is the link that users can click to navigate to the 'Highscores' page -->
          </li><!-- This closes the line -->
          <li class="nav-item"><!-- This line creates a line within the list -->
            <a class="nav-link" href="Process_Files/logout_process.php"><B>Logout</B></a><!-- This is the link that users can click to navigate to the 'Logout' page -->
          </li><!-- This closes the line -->

          <!-- ************* DROPDOWN BUTTON START *********** -->
          <li class="nav-item dropdown"><!-- This line creates a list -->
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false"><B>More</B></a><!-- This is the link that users can click to navigate to the 'More' page -->
            
            <ul class="dropdown-menu"><!-- This opens a new unordered list -->
              <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#ABOUT"><b>About</b></a></li><!-- This creates a line within the new list that is linked to the 'modals' page. the data-bs-target is the id of the paragraph of code within the modal page. when the user clicks the link the 'about' page will pop up. -->
              <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#FAQ"><b>FAQ</b></a></li><!-- This creates a line within the new list that is linked to the 'modals' page. the data-bs-target is the id of the paragraph of code within the modal page. when the user clicks the link the 'FAQ' page will pop up. -->
              <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#CONTACT_US"><b>Contact Us</b></a></li><!-- This creates a line within the new list that is linked to the 'modals' page. the data-bs-target is the id of the paragraph of code within the modal page. when the user clicks the link the 'Contact Us' page will pop up. -->
            </ul><!-- This closes the unordered list -->
          </li><!-- This closes the list of items -->
          <!-- ************* DROPDOWN BUTTON END *********** -->

          <!-- ************* ADMIN DROPDOWN BUTTON START *********** -->
        <li class="nav-item dropdown"><!-- This creates a new list of items -->
           <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false"><B>Admin Tools</B></a><!-- This creates a link called 'Admin Tools' which the user can click. -->
          <ul class="dropdown-menu"><!-- This creates an unordered list within a dropdown box -->
              <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#remove"><B>Remove</B></a></li><!-- This line creates a link that can be clicked and a modal will be opened linked via the data-bs-target --> 
              <li><a class="dropdown-item" href=../test_page.php><B>Test Page</B></a></li><!-- This is another list item that is a link and navigates the user to the tets_page when clicked. -->
            </ul><!-- This closes the unordered list -->
          </li> <!-- This closes the list of items -->
          <!-- ************* ADMIN DROPDOWN BUTTON END *********** -->
        
        </ul> <!-- This closes the beginning unordered list --> 
      </div> <!-- This closes the div -->
    </div> <!-- This closes the div -->
  </nav> <!-- This closes the nav div -->

<!-- ************* NAVBAR BANNER START *********** -->
<div class="p-3 fs-1 text-warning-emphasis bg-warning-subtle border border-warning-subtle rounded-3 text-center"><!--This line creates a new div with included parameters -->
<b>Retro Browser Gaming</b><!-- This is a line that will be displayed to the user <b> means in bold -->  
<br><!-- This is a page break which will drop the code a line -->
  <div class="fs-4">Logged in as: <b><?php echo $_SESSION['Username']; ?></b></div><!-- This creates a new div which has an injection of php that gathers information from the database and displays it for the user -->
</div><!-- This closes the div -->
<!-- ************* NAVBAR BANNER END *********** -->

<!-- ************************** NAVBAR END ************************** -->

<!-- ************************** BACKGROUND INCLUDE ************************** -->
<?php include("Misc_Files/gamingbg.php"); ?> <!-- This is an injection of php which is adding an additional inclusion file -->
<!-- ************************** BACKGROUND INCLUDE ************************** -->

</head> <!-- This closes the head section -->

<body> <!-- This opens the body section -->








</body> <!-- This closes the body section -->



</html> <!-- This closes the html section -->