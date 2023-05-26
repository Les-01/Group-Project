<?php

?>

<html>

<!-- ********************* LOGIN MODAL START ********************* -->

    <form action="../Process_Files/login_process.php" method="POST">   
      <div class="modal fade" id="login" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-center" id="modal-title">Sign In Here</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> <!-- btn-close makes a cross and bootstrap knows where to put it within the div. data-bs-dismiss will dismiss the modal -->
            </div>
      
                <div class="modal-body text-center">
                  <p>Please fill both fields</p>

                  <input type="text" class="form-control" id="test-email" name="Username" placeholder="Username">
                  <br>
                  <input type="password" class="form-control" id="test-email" name="Password" placeholder="Password">
                  <br>  
    
                  <div class="modal-footer item-align center">
                    <button class="w-100 btn btn-lg btn-primary bg-success border border-success-subtle">Login</button>
                  </div>
                  <div class="text-center">
                    <a class="btn btn-primary bg-success border border-success-subtle text-center" data-bs-toggle="modal" data-bs-target="#forgotten_password">Forgotten Password</a>
                  </div>
                  <!-- <a href="#forgotten_password" id=forgotten_password class="btn btn-primary bg-success border border-success-subtle ">Fogotten Password?</a> -->
                </div> 
          </div>
        </div>
      </div>
    </form>
  

<!-- ********************* LOGIN MODAL END ********************* -->

<!-- ********************* ACCESS LOGIN MODAL START ********************* -->

    <form action="Process_Files/login_process.php" method="POST">   
      <div class="modal fade" id="access_login" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-center" id="modal-title">You are not signed in, please sign in here</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> <!-- btn-close makes a cross and bootstrap knows where to put it within the div. data-bs-dismiss will dismiss the modal -->
            </div>
      
                <div class="modal-body text-center">
                  <p>Please fill both fields</p>

                  <input type="text" class="form-control" id="Username" name="Username" placeholder="Username">
                  <br>
                  <input type="password" class="form-control" id="Password" name="Password" placeholder="Password">
                  <br>  
    
                  <div class="modal-footer item-align center">
                    <button class="w-100 btn btn-lg btn-primary bg-success border border-success-subtle">Login</button>
                  </div>
                  <div class="text-center">
                    <a class="btn btn-primary bg-success border border-success-subtle text-center" data-bs-toggle="modal" data-bs-target="#forgotten_password">Forgotten Password</a>
                  </div>
            </div> 
          </div>
        </div>
      </div>
    </form>
  

<!-- ********************* ACCESS LOGIN MODAL END ********************* -->


<!-- ********************* REMOVE MODAL START ********************* -->

    <form action="Process_Files/removal_process.php" method="POST">   
      <div class="modal fade" id="remove" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-center" id="modal-title">Are you sure you wish to remove your account?</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> <!-- btn-close makes a cross and bootstrap knows where to put it within the div. data-bs-dismiss will dismiss the modal -->
            </div>
      
                <div class="modal-body text-center">
                  <p>Please fill <b>ALL</b> fields! <br> Case sensitive</p>

                  <input type="text" class="form-control" id="Username" name="username" placeholder="Username">
                  <br>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                  <br>  
                  <input type="password" class="form-control" id="repassword" name="repassword" placeholder="Retype Password">
                  <br>
                 
    
                  <div class="modal-footer item-align center">
                    <button class="w-100 btn btn-lg btn-primary bg-danger border border-success-subtle">Confirm</button>
                  </div>
                </div>
          </div>
        </div>
      </div>
    </form>
  

<!-- ********************* REMOVE MODAL END ********************* -->


<!-- ********************* FORGOTTEN PASSWORD MODAL START ********************* -->

    <form action="Process_Files/forgotten_password_process.php" method="POST">   
      <div class="modal fade" id="Forgotten_Password" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modal-title">Update Password</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> <!-- btn-close makes a cross and bootstrap knows where to put it within the div. data-bs-dismiss will dismiss the modal -->
            </div>
      
                <div class="modal-body text-center">
                  <p>Please fill <b>ALL</b> fields</p>

                  <input type="text" class="form-control" id="Username" name="Username" placeholder="Username">
                  <br>
                  <input type="text" class="form-control" id="Fname" name="Fname" placeholder="First Name">
                  <br>
                  <input type="email" class="form-control" id="User_Email" name="Email" placeholder="Email">
                  <br>
                  <input type="password" class="form-control" id="NewPassword" name="Password" placeholder="New Password">
                  <br>
                  <input type="password" class="form-control" id="NewPassword2" name="Password2" placeholder="Retype Password">
                  <br>
    
                  <div class="modal-footer item-align center">
                    <button class="w-100 btn btn-lg btn-primary bg-success border border-success-subtle">Update</button>
                  </div>
                </div>
          </div>
        </div>
      </div>
    </form>
  

<!-- ********************* FORGOTTEN PASSWORD MODAL END ********************* -->


<!-- ********************* CHANGE USERNAME MODAL START ********************* -->

    <form action="Process_Files/uchange_process.php" method="POST">   
      <div class="modal fade" id="username_change" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modal-title">Change Username</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> <!-- btn-close makes a cross and bootstrap knows where to put it within the div. data-bs-dismiss will dismiss the modal -->
            </div>
      
                <div class="modal-body text-center">
                  <p>Please fill <b>ALL</b> fields</p>

                  <input type="text" class="form-control" id="new_uname" name="new_uname" placeholder="New Username">
                  <br>
                  <input type="text" class="form-control" id="uname" name="uname" placeholder="Current Username">
                  <br>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                  <br>
    
                  <div class="modal-footer item-align center">
                    <button class="w-100 btn btn-lg btn-primary bg-success border border-success-subtle">Update</button>
                  </div>
                </div>
          </div>
        </div>
      </div>
    </form>
  

<!-- ********************* CHANGE USERNAME MODAL END ********************* -->


<!-- ********************* CHANGE EMAIL MODAL START ********************* -->

    <form action="Process_Files/echange_process.php" method="POST">   
      <div class="modal fade" id="email_change" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modal-title">Change Email</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> <!-- btn-close makes a cross and bootstrap knows where to put it within the div. data-bs-dismiss will dismiss the modal -->
            </div>
      
                <div class="modal-body text-center">
                  <p>Please fill <b>ALL</b> fields</p>

                  <input type="email" class="form-control" id="new_email" name="new_email" placeholder="New Email">
                  <br>
                  <input type="text" class="form-control" id="uname" name="uname" placeholder="Username">
                  <br>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                  <br>
    
                  <div class="modal-footer item-align center">
                    <button class="w-100 btn btn-lg btn-primary bg-success border border-success-subtle">Update</button>
                  </div>
                </div>
          </div>
        </div>
      </div>
    </form>
  

<!-- ********************* CHANGE EMAIL MODAL END ********************* -->


<!-- ********************* CHANGE FNAME MODAL START ********************* -->

    <form action="Process_Files/fchange_process.php" method="POST">   
      <div class="modal fade" id="fname_change" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modal-title">Change First Name</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> <!-- btn-close makes a cross and bootstrap knows where to put it within the div. data-bs-dismiss will dismiss the modal -->
            </div>
      
                <div class="modal-body text-center">
                  <p>Please fill <b>ALL</b> fields</p>

                  <input type="text" class="form-control" id="new_fname" name="new_fname" placeholder="New First Name">
                  <br>
                  <input type="text" class="form-control" id="uname" name="uname" placeholder="Username">
                  <br>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                  <br>
    
                  <div class="modal-footer item-align center">
                    <button class="w-100 btn btn-lg btn-primary bg-success border border-success-subtle">Update</button>
                  </div>
                </div>
          </div>
        </div>
      </div>
    </form>
  

<!-- ********************* CHANGE FNAME MODAL END ********************* -->

<!-- ********************* CHANGE SNAME MODAL START ********************* -->

    <form action="Process_Files/schange_process.php" method="POST">   
      <div class="modal fade" id="sname_change" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modal-title">Change Surname</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> <!-- btn-close makes a cross and bootstrap knows where to put it within the div. data-bs-dismiss will dismiss the modal -->
            </div>
      
                <div class="modal-body text-center">
                  <p>Please fill <b>ALL</b> fields</p>

                  <input type="text" class="form-control" id="new_sname" name="new_sname" placeholder="New Surname">
                  <br>
                  <input type="text" class="form-control" id="uname" name="uname" placeholder="Username">
                  <br>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                  <br>
    
                  <div class="modal-footer item-align center">
                    <button class="w-100 btn btn-lg btn-primary bg-success border border-success-subtle">Update</button>
                  </div>
                </div>
          </div>
        </div>
      </div>
    </form>
  

<!-- ********************* CHANGE SNAME MODAL END ********************* -->

<!-- ********************* CHANGE PASSWORD MODAL START ********************* -->

    <form action="Process_Files/pchange_process.php" method="POST">   
      <div class="modal fade" id="password_change" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modal-title">Change Password</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> <!-- btn-close makes a cross and bootstrap knows where to put it within the div. data-bs-dismiss will dismiss the modal -->
            </div>
      
                <div class="modal-body text-center">
                  <p>Please fill <b>ALL</b> fields</p>

                  <input type="password" class="form-control" id="new_pword" name="new_pword" placeholder="New Password">
                  <br>
                  <input type="password" class="form-control" id="new_pword2" name="new_pword2" placeholder="Retype New Password">
                  <br>
                  <input type="text" class="form-control" id="uname" name="uname" placeholder="Username">
                  <br>
                  <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                  <br>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                  <br>
    
                  <div class="modal-footer item-align center">
                    <button class="w-100 btn btn-lg btn-primary bg-success border border-success-subtle">Update</button>
                  </div>
                </div>
          </div>
        </div>
      </div>
    </form>
  

<!-- ********************* CHANGE PASSWORD MODAL END ********************* -->

<!-- ********************* IMAGE UPLOAD MODAL START ********************* -->

       
      <div class="modal fade" id="img_upload" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header" style="align-items: center; text-center">
              <h5 class="modal-title text-center" id="modal-title">Upload your profile picture</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> <!-- btn-close makes a cross and bootstrap knows where to put it within the div. data-bs-dismiss will dismiss the modal -->
            </div>
      <form action="Process_Files/img_change_Process.php" method="post" enctype="multipart/form-data">
                <div class="modal-body text-center">
                  <p>Please select the image you wish to upload:</p>
                  File Name:<br><input type="text" name="Image_Title" id="Image_Title"><br><br>
                  <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
                  
    
                  <div class="modal-footer item-align center">
                    <button class="w-100 btn btn-lg btn-primary bg-success border border-success-subtle">Upload</button>
                  </div>
                  </form>
                  <!-- <a href="#forgotten_password" id=forgotten_password class="btn btn-primary bg-success border border-success-subtle ">Fogotten Password?</a> -->
                </div> 
          </div>
        </div>
      </div>
    
  

<!-- ********************* IMAGE UPLOAD MODAL END ********************* -->


<!-- ************************** FAQ - COMING SOON ************************** -->
<div class="modal fade" id="FAQ" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header" style="align-items: center; text-center"> <h1>FAQ - COMING SOON</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> <!-- btn-close makes a cross and bootstrap knows where to put it within the div. data-bs-dismiss will dismiss the modal -->
            </div>
<div class="bgimg">
  <div class="middle  bg-info-subtle border border-primary-subtle rounded-3 text-center">
    
    <h3>Work In Progress! <br> Available Soon</h3>
    <p>We need to go over these questions, change and add some.</p>
    <ul style="text-align: left;">
      <li>Q: Why should I sign up to this website? </li>
      <li>A: So you can play games on your browser...for FREE! </li><br>
      <li>Q: How do I sign up? </li>
      <li>A: Click the 'Register' button along the top navigation bar. </li><br>
      <li>Q: How do I change my profile picture? </li>
      <li>A: Just simply click on your image when on the 'Profile' page. </li><br>  
      <li>Q: How did you come up with the idea for this site?</li>
      <li>A: We both like games and we thought it would be interesting to bring the past to the future, retro games being played on a browser. </li><br>
      <li>Q: What does this website have to offer?</li>
      <li>A: Games, a place to show off your retro gaming skills by competing to try and beat the high score! </li><br>
      <li>Q: How do I update my details? </li>
      <li>A: Simply go to your profile page and click the 'Edit' button beside the information you wish to amend. </li><br>
      <li>Q: How does the 'Gamer Score' get calculated? </li>
      <li>A: Short answer, it doesn't...yet, this is actually a feature that will be coming, very soon. </li><br>
      <li>Q: Will more games be added? </li>
      <li>A: YES! However, it DOES take time to write the code for these games and then intergrate it into the website.</li><br>
      
    </ul>
  </div>
</div>
</div>
</div>
</div>
<!-- ************************** FAQ - COMING SOON ************************** -->
  
  
  
 <!-- ************************** ABOUT - COMING SOON ************************** -->
<div class="modal fade" id="ABOUT" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content" style="align-text: center; text-center">
            <div class="modal-header"><h1>ABOUT - COMING SOON</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> <!-- btn-close makes a cross and bootstrap knows where to put it within the div. data-bs-dismiss will dismiss the modal -->
            </div>

<div class="bgimg">
  <div class="middle  bg-info-subtle border border-primary-subtle rounded-3 text-center">
    
    <h2>Under construction <br> Available in a few weeks</h2>
    <p>
      This website is a joint collaboration between Charles Skudder and Les Grint. <br>
      We have worked tirelessly to bring this website together and to bring you, <br>
      the user a great entertainment platform for gaming. It doesn't matter where you are, who you are, or what you are, so long as you have an internet connection we're sure you'll find a game that you'll enjoy! <br>
      If you don't, then feel free to reach out to us with your suggestions and we will endeavour to try our best! <br>
      If you encounter any issues, bugs, or have questions, be sure to check out our FAQ page <a href="faq.php">HERE</a> as we may have already answered your question.
      If we haven't then let us know via the <a href="contact_us.php">Contact Us</a> page.
      <br>
      Click the 'Games' tab on the navigation bar to browse the games already available, alternatively just click <a href="games.php">here</a>.<br>
      Happy gaming! <br><br>
      Latest update:<br>
      <ul>
      <li>- A scoreboard - (so we can have a leaderboard which will allow our users to see where they rank based on their skill points earned <br> by playing the games)</li><br>
      <li>- Warning functions and blacklisting capabilities, this is for the who wish to use and abuse.</li><br>
      <li>- The Cube game. Why not try your luck and see if you can escape The Cube!</li><br>
      <li>- Error fixes and stability updates.</li><br>
      <li>- Created limitations to game access, you now need to be a logged in user to gain access to play. <br> This is an attempt to stop non-users from breaking your record!</li><br>
      </ul>
      <br>
      Still to come:<br> 
      <ul>
         
         <li>- A Chat page - (a place that users can come together and share gaming tips and help each other to reach higher scores)</li>
         <li>- New games - (We are currently looking into a first person shooter style game)</li>
      </ul>
      <br> 
    </p>
  </div>
</div>
</div>
</div>
</div>
<!-- ************************** ABOUT - COMING SOON ************************** -->

<!-- ************************** CONTACT US - COMING SOON ************************** -->
<div class="modal fade" id="CONTACT_US" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content" style="align-text: center; text-center">
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> <!-- btn-close makes a cross and bootstrap knows where to put it within the div. data-bs-dismiss will dismiss the modal -->
            </div>

<div class="bgimg">
  <div class="middle  bg-info-subtle border border-primary-subtle rounded-3 text-center">
  <div class="title text-center"><h1>CONTACT US</h1>
  <hr>
  <p>Please feel free to contact us in regard to any errors, crashes or feedback you may have.
  <br> Please also feel free to give any suggestions that you think that we could implement to enhance your website experience.
  <br> You can email us at: <h5>support@highersphere.co.uk</h5></p>
</div>

  </div>
</div>
</div>
</div>
</div>

<!-- ************************** CONTACT US - COMING SOON ************************** -->





</html>


