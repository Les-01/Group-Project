<?php //This opens the php section, this is here incase any php code needs to be placed in this section

?> <!-- This closes the php section -->

<html> <!-- This opens the HTML section -->

<!-- ********************* LOGIN MODAL START ********************* -->

    <form action="../Process_Files/login_process.php" method="POST"> <!-- This is a form div nad as you can see the action links to another process page which will be triggered upon user clicking the button --> 
      <div class="modal fade" id="login" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true"> <!-- This is a new div with the class and id etc included -->
        <div class="modal-dialog"> <!-- This is a new div with the class info -->
          <div class="modal-content"> <!-- Another div with the modal content -->
            <div class="modal-header"> <!-- another div that has the modals header section where the title will go -->
              <h5 class="modal-title text-center" id="modal-title">Sign In Here</h5> <!-- This is the modal title that will be shown to the user -->
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> <!-- btn-close makes a cross icon placed in the top right of the modal and will dismiss the modal if clicked -->
            </div> <!-- This closes the header div -->
      
                <div class="modal-body text-center"> <!-- Another div with the modal's body section -->
                  <p>Please fill both fields</p> <!-- This is a paragraph and displays a message with a hint to the user. -->

                  <input type="text" class="form-control" id="test-email" name="Username" placeholder="Username"> <!-- This is an input div, and waits for the correct input to be entered into the box that will be displayed to the user -->
                  <br> <!-- Page break -->
                  <input type="password" class="form-control" id="test-email" name="Password" placeholder="Password"> <!-- This is an input div, and waits for the correct input to be entered into the box that will be displayed to the user -->
                  <br> <!-- Page break -->
    
                  <div class="modal-footer item-align center"> <!-- This is a new div for the footer of the modal -->
                    <button class="w-100 btn btn-lg btn-primary bg-success border border-success-subtle">Login</button> <!-- This is the button that is placed inside the footser section of the modal -->
                  </div> <!-- This closes the footer div-->
                  <div class="text-center"> <!-- This opens another div for the last submit button outwith the footer -->
                    <a class="btn btn-primary bg-success border border-success-subtle text-center" data-bs-toggle="modal" data-bs-target="#forgotten_password">Forgotten Password</a> <!-- This is another button set underneath the the submittal button and is a hyperlink that can be clicked on by the user if they have forgotten their password-->
                  </div> <!-- This closes the div -->
                </div> <!-- This closes the modal body div -->
          </div> <!-- This closes the modal content div-->
        </div> <!-- This closes the modal dialog div -->
      </div> <!-- This closes the next div  -->
    </form> <!-- This closes the form -->
  

<!-- ********************* LOGIN MODAL END ********************* -->

<!-- ********************* ACCESS LOGIN MODAL START ********************* -->

    <form action="Process_Files/login_process.php" method="POST"> <!-- This is a form div nad as you can see the action links to another process page which will be triggered upon user clicking the button -->  
      <div class="modal fade" id="access_login" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true"> <!-- This is a new div with the class and id etc included -->
        <div class="modal-dialog"> <!-- This is a new div with the class info -->
          <div class="modal-content"> <!-- Another div with the modal content  -->
            <div class="modal-header"> <!-- another div that has the modals header section where the title will go -->
              <h5 class="modal-title text-center" id="modal-title">You are not signed in, please sign in here</h5> <!-- This advised the user that they are not signed in -->
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> <!--  btn-close makes a cross icon placed in the top right of the modal and will dismiss the modal if clicked -->
            </div> <!-- This closes the header div -->
      
                <div class="modal-body text-center"> <!-- Another div with the modal's body section -->
                  <p>Please fill both fields</p> <!-- This is a paragraph and displays a message with a hint to the user. -->

                  <input type="text" class="form-control" id="Username" name="Username" placeholder="Username"> <!-- This is an input div, and waits for the correct input to be entered into the box that will be displayed to the user -->
                  <br> <!-- Page break -->
                  <input type="password" class="form-control" id="Password" name="Password" placeholder="Password"> <!-- This is an input div, and waits for the correct input to be entered into the box that will be displayed to the user -->
                  <br> <!-- Page break -->  
    
                  <div class="modal-footer item-align center"> <!-- This is a new div for the footer of the modal -->
                    <button class="w-100 btn btn-lg btn-primary bg-success border border-success-subtle">Login</button> <!-- This is the button that is placed inside the footser section of the modal -->
                  </div> <!-- This closes the footer div -->
                  <div class="text-center"> <!-- This opens another div for the last submit button outwith the footer -->
                    <a class="btn btn-primary bg-success border border-success-subtle text-center" data-bs-toggle="modal" data-bs-target="#forgotten_password">Forgotten Password</a> <!-- This is another button set underneath the the submittal button and is a hyperlink that can be clicked on by the user if they have forgotten their password -->
                  </div> <!-- This opens another div for the last submit button outwith the footer -->
            </div> <!-- This closes the modal body div-->
          </div> <!-- This closes the modal content div  -->
        </div> <!-- This closes the modal dialog div -->
      </div> <!-- This closes the next div -->
    </form> <!-- This closes the form -->
  

<!-- ********************* ACCESS LOGIN MODAL END ********************* -->


<!-- ********************* REMOVE MODAL START ********************* -->

    <form action="Process_Files/removal_process.php" method="POST"> <!-- This is a form div nad as you can see the action links to another process page which will be triggered upon user clicking the button -->  
      <div class="modal fade" id="remove" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true"> <!-- This is a new div with the class and id etc included -->
        <div class="modal-dialog"> <!-- This is a new div with the class info -->
          <div class="modal-content"> <!-- Another div with the modal content  -->
            <div class="modal-header"> <!-- another div that has the modals header section where the title will go -->
              <h5 class="modal-title text-center" id="modal-title">Are you sure you wish to remove your account?</h5> <!-- This advises the user that they are about to delete their account -->
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> <!--  btn-close makes a cross icon placed in the top right of the modal and will dismiss the modal if clicked -->
            </div> <!-- This closes the header div -->
      
                <div class="modal-body text-center"> <!-- Another div with the modal's body section -->
                  <p>Please fill <b>ALL</b> fields! <br> Case sensitive</p> <!-- This is a paragraph and displays a message with a hint to the user. -->

                  <input type="text" class="form-control" id="Username" name="username" placeholder="Username"> <!-- This is an input div, and waits for the correct input to be entered into the box that will be displayed to the user -->
                  <br> <!-- Page break -->
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password"> <!-- This is an input div, and waits for the correct input to be entered into the box that will be displayed to the user -->
                  <br> <!-- Page break -->  
                  <input type="password" class="form-control" id="repassword" name="repassword" placeholder="Retype Password"> <!-- This is an input div, and waits for the correct input to be entered into the box that will be displayed to the user -->
                  <br> <!-- Page break -->                 
    
                  <div class="modal-footer item-align center"> <!-- This is a new div for the footer of the modal -->
                    <button class="w-100 btn btn-lg btn-primary bg-danger border border-success-subtle">Confirm</button> <!-- This is the button that is placed inside the footser section of the modal -->
                  </div> <!-- This closes the footer div -->
                </div> <!-- This closes the modal body div-->
          </div> <!-- This closes the modal content div -->
        </div> <!-- This closes the modal dialog div -->
      </div> <!-- This closes the next div -->
    </form> <!-- This closes the form -->
  

<!-- ********************* REMOVE MODAL END ********************* -->


<!-- ********************* FORGOTTEN PASSWORD MODAL START ********************* -->

    <form action="Process_Files/forgotten_password_process.php" method="POST"> <!-- This is a form div nad as you can see the action links to another process page which will be triggered upon user clicking the button -->  
      <div class="modal fade" id="Forgotten_Password" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true"> <!-- This is a new div with the class and id etc included -->
        <div class="modal-dialog"> <!-- This is a new div with the class info -->
          <div class="modal-content"> <!-- Another div with the modal content  -->
            <div class="modal-header"> <!-- another div that has the modals header section where the title will go -->
              <h5 class="modal-title" id="modal-title">Update Password</h5> <!-- This advised the user that they are not signed in -->
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> <!--  btn-close makes a cross icon placed in the top right of the modal and will dismiss the modal if clicked -->
            </div> <!-- This closes the header div -->
      
                <div class="modal-body text-center"> <!-- Another div with the modal's body section -->
                  <p>Please fill <b>ALL</b> fields</p> <!-- This is a paragraph and displays a message with a hint to the user. -->

                  <input type="text" class="form-control" id="Username" name="Username" placeholder="Username"> <!-- This is an input div, and waits for the correct input to be entered into the box that will be displayed to the user -->
                  <br> <!-- Page break -->
                  <input type="text" class="form-control" id="Fname" name="Fname" placeholder="First Name"> <!-- This is an input div, and waits for the correct input to be entered into the box that will be displayed to the user -->
                  <br> <!-- Page break -->
                  <input type="email" class="form-control" id="User_Email" name="Email" placeholder="Email"> <!-- This is an input div, and waits for the correct input to be entered into the box that will be displayed to the user -->
                  <br> <!-- Page break -->
                  <input type="password" class="form-control" id="NewPassword" name="Password" placeholder="New Password"> <!-- This is an input div, and waits for the correct input to be entered into the box that will be displayed to the user -->
                  <br> <!-- Page break -->
                  <input type="password" class="form-control" id="NewPassword2" name="Password2" placeholder="Retype Password"> <!-- This is an input div, and waits for the correct input to be entered into the box that will be displayed to the user -->
                  <br> <!-- Page break -->
    
                  <div class="modal-footer item-align center"> <!-- This is a new div for the footer of the modal -->
                    <button class="w-100 btn btn-lg btn-primary bg-success border border-success-subtle">Update</button> <!-- This is the button that is placed inside the footser section of the modal -->
                  </div> <!-- This closes the footer div -->
                </div> <!-- This closes the modal body div-->
          </div> <!-- This closes the modal content div -->
        </div> <!-- This closes the modal dialog div -->
      </div> <!-- This closes the next div --> 
    </form> <!-- This closes the form -->
  

<!-- ********************* FORGOTTEN PASSWORD MODAL END ********************* -->


<!-- ********************* CHANGE USERNAME MODAL START ********************* -->

    <form action="Process_Files/uchange_process.php" method="POST"> <!-- This is a form div nad as you can see the action links to another process page which will be triggered upon user clicking the button -->   
      <div class="modal fade" id="username_change" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true"> <!-- This is a new div with the class and id etc included -->
        <div class="modal-dialog"> <!-- This is a new div with the class info -->
          <div class="modal-content"> <!-- Another div with the modal content  -->
            <div class="modal-header"> <!-- another div that has the modals header section where the title will go -->
              <h5 class="modal-title" id="modal-title">Change Username</h5> <!-- This advised the user that they are not signed in -->
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> <!--  btn-close makes a cross icon placed in the top right of the modal and will dismiss the modal if clicked -->
            </div> <!-- This closes the header div -->
      
                <div class="modal-body text-center"> <!-- Another div with the modal's body section -->
                  <p>Please fill <b>ALL</b> fields</p> <!-- This is a paragraph and displays a message with a hint to the user. -->

                  <input type="text" class="form-control" id="new_uname" name="new_uname" placeholder="New Username"> <!-- This is an input div, and waits for the correct input to be entered into the box that will be displayed to the user -->
                  <br> <!-- Page break -->
                  <input type="text" class="form-control" id="uname" name="uname" placeholder="Current Username"> <!-- This is an input div, and waits for the correct input to be entered into the box that will be displayed to the user -->
                  <br> <!-- Page break -->
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password"> <!-- This is an input div, and waits for the correct input to be entered into the box that will be displayed to the user -->
                  <br> <!-- Page break -->
    
                  <div class="modal-footer item-align center"> <!-- This is a new div for the footer of the modal -->
                    <button class="w-100 btn btn-lg btn-primary bg-success border border-success-subtle">Update</button> <!-- This is the button that is placed inside the footser section of the modal -->
                  </div> <!-- This closes the footer div -->
                </div> <!-- This closes the modal body div-->
          </div> <!-- This closes the modal content div -->
        </div> <!-- This closes the modal dialog div -->
      </div> <!-- This closes the next div -->
    </form> <!-- This closes the form -->
  

<!-- ********************* CHANGE USERNAME MODAL END ********************* -->


<!-- ********************* CHANGE EMAIL MODAL START ********************* -->

    <form action="Process_Files/echange_process.php" method="POST"> <!-- This is a form div nad as you can see the action links to another process page which will be triggered upon user clicking the button -->    
      <div class="modal fade" id="email_change" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true"> <!-- This is a new div with the class and id etc included -->
        <div class="modal-dialog">  is a new div with the class and id etc included -->
        <div class="modal-dialog"> <!-- This is a new div with the class info -->
          <div class="modal-content"> <!-- Another div with the modal content  -->
            <div class="modal-header"> <!-- another div that has the modals header section where the title will go -->
              <h5 class="modal-title" id="modal-title">Change Email</h5> <!-- This advised the user that they are not signed in -->
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> <!--  btn-close makes a cross icon placed in the top right of the modal and will dismiss the modal if clicked -->
            </div> <!-- This closes the header div -->
      
                <div class="modal-body text-center"> <!-- Another div with the modal's body section -->
                  <p>Please fill <b>ALL</b> fields</p> <!-- This is a paragraph and displays a message with a hint to the user. -->

                  <input type="email" class="form-control" id="new_email" name="new_email" placeholder="New Email"> <!-- This is an input div, and waits for the correct input to be entered into the box that will be displayed to the user -->
                  <br> <!-- Page break -->
                  <input type="text" class="form-control" id="uname" name="uname" placeholder="Username"> <!-- This is an input div, and waits for the correct input to be entered into the box that will be displayed to the user -->
                  <br> <!-- Page break -->                  
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password"> <!-- This is an input div, and waits for the correct input to be entered into the box that will be displayed to the user -->
                  <br> <!-- Page break -->
                  
    
                  <div class="modal-footer item-align center"> <!-- This is a new div for the footer of the modal -->
                    <button class="w-100 btn btn-lg btn-primary bg-success border border-success-subtle">Update</button> <!-- This is the button that is placed inside the footser section of the modal -->
                  </div> <!-- This closes the footer div -->
                </div> <!-- This closes the modal body div-->
          </div> <!-- This closes the modal content div -->
        </div> <!-- This closes the modal dialog div -->
      </div> <!-- This closes the next div -->
    </form> <!-- This closes the form -->
  

<!-- ********************* CHANGE EMAIL MODAL END ********************* -->


<!-- ********************* CHANGE FNAME MODAL START ********************* -->

    <form action="Process_Files/fchange_process.php" method="POST"> <!-- This is a form div nad as you can see the action links to another process page which will be triggered upon user clicking the button -->   
      <div class="modal fade" id="fname_change" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true"> <!-- This is a new div with the class and id etc included -->
        <div class="modal-dialog"> <!-- This is a new div with the class info -->
          <div class="modal-content"> <!-- Another div with the modal content  -->
            <div class="modal-header"> <!-- another div that has the modals header section where the title will go -->
              <h5 class="modal-title" id="modal-title">Change First Name</h5> <!-- This advised the user that they are not signed in -->
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> <!--  btn-close makes a cross icon placed in the top right of the modal and will dismiss the modal if clicked -->
            </div> <!-- This closes the header div -->
      
                <div class="modal-body text-center"> <!-- Another div with the modal's body section -->
                  <p>Please fill <b>ALL</b> fields</p> <!-- This is a paragraph and displays a message with a hint to the user. -->

                  <input type="text" class="form-control" id="new_fname" name="new_fname" placeholder="New First Name"> <!-- This is an input div, and waits for the correct input to be entered into the box that will be displayed to the user -->
                  <br> <!-- Page break -->
                  <input type="text" class="form-control" id="uname" name="uname" placeholder="Username"> <!-- This is an input div, and waits for the correct input to be entered into the box that will be displayed to the user -->
                  <br> <!-- Page break -->
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password"> <!-- This is an input div, and waits for the correct input to be entered into the box that will be displayed to the user -->
                  <br> <!-- Page break -->
    
                  <div class="modal-footer item-align center"> <!-- This is a new div for the footer of the modal -->
                    <button class="w-100 btn btn-lg btn-primary bg-success border border-success-subtle">Update</button> <!-- This is the button that is placed inside the footser section of the modal -->
                 </div> <!-- This closes the footer div -->
                </div> <!-- This closes the modal body div-->
          </div> <!-- This closes the modal content div -->
        </div> <!-- This closes the modal dialog div -->
      </div> <!-- This closes the next div -->
    </form> <!-- This closes the form -->
  

<!-- ********************* CHANGE FNAME MODAL END ********************* -->

<!-- ********************* CHANGE SNAME MODAL START ********************* -->

    <form action="Process_Files/schange_process.php" method="POST"> <!-- This is a form div nad as you can see the action links to another process page which will be triggered upon user clicking the button -->  
      <div class="modal fade" id="sname_change" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true"> <!-- This is a new div with the class and id etc included -->
        <div class="modal-dialog"> <!-- This is a new div with the class info -->
          <div class="modal-content"> <!-- Another div with the modal content  -->
            <div class="modal-header"> <!-- another div that has the modals header section where the title will go -->
              <h5 class="modal-title" id="modal-title">Change Surname</h5> <!-- This advised the user that they are not signed in -->
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> <!--  btn-close makes a cross icon placed in the top right of the modal and will dismiss the modal if clicked -->
            </div> <!-- This closes the header div -->
      
                <div class="modal-body text-center"> <!-- Another div with the modal's body section -->
                  <p>Please fill <b>ALL</b> fields</p> <!-- This is a paragraph and displays a message with a hint to the user. -->

                  <input type="text" class="form-control" id="new_sname" name="new_sname" placeholder="New Surname"> <!-- This is an input div, and waits for the correct input to be entered into the box that will be displayed to the user -->
                  <br> <!-- Page break -->
                  <input type="text" class="form-control" id="uname" name="uname" placeholder="Username"> <!-- This is an input div, and waits for the correct input to be entered into the box that will be displayed to the user -->
                  <br> <!-- Page break -->
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password"> <!-- This is an input div, and waits for the correct input to be entered into the box that will be displayed to the user -->
                  <br> <!-- Page break -->
    
                  <div class="modal-footer item-align center"> <!-- This is a new div for the footer of the modal -->
                    <button class="w-100 btn btn-lg btn-primary bg-success border border-success-subtle">Update</button> <!-- This is the button that is placed inside the footser section of the modal -->
                  </div> <!-- This closes the footer div -->
                </div> <!-- This closes the modal body div-->
          </div> <!-- This closes the modal content div -->
        </div> <!-- This closes the modal dialog div -->
      </div> <!-- This closes the next div -->
    </form> <!-- This closes the form -->
  

<!-- ********************* CHANGE SNAME MODAL END ********************* -->

<!-- ********************* CHANGE PASSWORD MODAL START ********************* -->

    <form action="Process_Files/pchange_process.php" method="POST"> <!-- This is a form div nad as you can see the action links to another process page which will be triggered upon user clicking the button -->   
      <div class="modal fade" id="password_change" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true"> <!-- This is a new div with the class and id etc included -->
        <div class="modal-dialog"> <!-- This is a new div with the class info -->
          <div class="modal-content"> <!-- Another div with the modal content  -->
            <div class="modal-header"> <!-- another div that has the modals header section where the title will go -->
              <h5 class="modal-title" id="modal-title">Change Password</h5> <!-- This advised the user that they are not signed in -->
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> <!--  btn-close makes a cross icon placed in the top right of the modal and will dismiss the modal if clicked -->
            </div> <!-- This closes the header div -->
      
                <div class="modal-body text-center"> <!-- Another div with the modal's body section -->
                  <p>Please fill <b>ALL</b> fields</p> <!-- This is a paragraph and displays a message with a hint to the user. -->

                  <input type="password" class="form-control" id="new_pword" name="new_pword" placeholder="New Password"> <!-- This is an input div, and waits for the correct input to be entered into the box that will be displayed to the user -->
                  <br> <!-- Page break -->
                  <input type="password" class="form-control" id="new_pword2" name="new_pword2" placeholder="Retype New Password"> <!-- This is an input div, and waits for the correct input to be entered into the box that will be displayed to the user -->
                  <br> <!-- Page break -->
                  <input type="text" class="form-control" id="uname" name="uname" placeholder="Username"> <!-- This is an input div, and waits for the correct input to be entered into the box that will be displayed to the user -->
                  <br> <!-- Page break -->
                  <input type="text" class="form-control" id="email" name="email" placeholder="Email"> <!-- This is an input div, and waits for the correct input to be entered into the box that will be displayed to the user -->
                  <br> <!-- Page break -->
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password"> <!-- This is an input div, and waits for the correct input to be entered into the box that will be displayed to the user -->
                  <br> <!-- Page break -->
    
                  <div class="modal-footer item-align center"> <!-- This is a new div for the footer of the modal -->
                    <button class="w-100 btn btn-lg btn-primary bg-success border border-success-subtle">Update</button> <!-- This is the button that is placed inside the footser section of the modal -->
                  </div> <!-- This closes the footer div -->
                </div> <!-- This closes the modal body div-->
          </div> <!-- This closes the modal content div -->
        </div> <!-- This closes the modal dialog div -->
      </div> <!-- This closes the next div -->
    </form> <!-- This closes the form -->
  
<!-- ********************* CHANGE PASSWORD MODAL END ********************* -->


<!-- ********************* IMAGE UPLOAD MODAL START ********************* -->
       
      <div class="modal fade" id="img_upload" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true"> <!-- This is a new div with the class and id etc included -->
        <div class="modal-dialog"> <!-- This is a new div with the class info -->
          <div class="modal-content"> <!-- Another div with the modal content  -->
            <div class="modal-header" style="align-items: center; text-center"> <!-- another div that has the modals header section where the title will go -->
              <h5 class="modal-title text-center" id="modal-title">Upload your profile picture</h5> <!-- This advised the user that they are not signed in -->
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> <!--  btn-close makes a cross icon placed in the top right of the modal and will dismiss the modal if clicked -->
            </div> <!-- This closes the header div -->

      <form action="Process_Files/img_change_Process.php" method="post" enctype="multipart/form-data"> <!-- This is a form div nad as you can see the action links to another process page which will be triggered upon user clicking the button -->
                <div class="modal-body text-center"> <!-- Another div with the modal's body section -->
                  <p>Please select the image you wish to upload:</p> <!-- This is a paragraph and displays a message with a hint to the user. -->
                  File Name:<br><input type="text" name="Image_Title" id="Image_Title"><br><br> <!-- This is a box that the users will need to fill in in order to submit the form, this is wherre the user writes the name of their chosen file. -->
                  <input type="file" name="fileToUpload" id="fileToUpload"><br><br> <!-- This is a button and uploads the selected file -->
                  
    
                  <div class="modal-footer item-align center"> <!-- This is a new div for the footer of the modal -->
                    <button class="w-100 btn btn-lg btn-primary bg-success border border-success-subtle">Upload</button> <!-- This is the button that is placed inside the footser section of the modal -->
                  </div> <!-- This closes the footer div -->
                  </form> <!-- This closes the form -->
                  <!-- <a href="#forgotten_password" id=forgotten_password class="btn btn-primary bg-success border border-success-subtle ">Fogotten Password?</a> -->
                </div> <!-- This closes the modal content div -->
          </div> <!-- This closes the modal dialog div -->
        </div> <!-- This closes the next div -->

<!-- ********************* IMAGE UPLOAD MODAL END ********************* -->


<!-- ************************** FAQ - COMING SOON ************************** -->

<div class="modal fade" id="FAQ" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true"> <!-- This is a new div with the class and id etc included -->
        <div class="modal-dialog"> <!-- This is a new div with the class info -->
          <div class="modal-content"> <!-- Another div with the modal content  -->
            <div class="modal-header" style="align-items: center; text-center"> <h1>FAQ</h1> <!-- another div that has the modals header section where the title will go -->
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> <!--  btn-close makes a cross icon placed in the top right of the modal and will dismiss the modal if clicked -->
            </div> <!-- This closes the header div -->
<div class="bgimg"> <!-- This is a new div for the background image -->
  <div class="middle  bg-info-subtle border border-primary-subtle rounded-3 text-center"> <!-- This is another div -->
    
    <h3>Frequently Asked Questions<br></h3> <!-- This is the title of the modal -->
    
    <ul style="text-align: left;"> <!-- This is an unordered list start -->
      <li>Q: Why should I sign up to this website? </li> <!-- This is a list element -->
      <li>A: So you can play games on your browser...for FREE! </li><br> <!-- This is a list element -->
      <li>Q: How do I sign up? </li> <!-- This is a list element -->
      <li>A: Click the 'Register' button along the top navigation bar. </li><br> <!-- This is a list element -->
      <li>Q: How do I change my profile picture? </li> <!-- This is a list element -->
      <li>A: Just simply click on your image when on the 'Profile' page. </li><br>  <!-- This is a list element --> 
      <li>Q: How did you come up with the idea for this site?</li> <!-- This is a list element -->
      <li>A: We both like games and we thought it would be interesting to bring the past to the future, retro games being played on a browser. </li><br> <!-- This is a list element -->
      <li>Q: What does this website have to offer?</li> <!-- This is a list element -->
      <li>A: Games, a place to show off your retro gaming skills by competing to try and beat the high score! </li><br> <!-- This is a list element -->
      <li>Q: How do I update my details? </li> <!-- This is a list element -->
      <li>A: Simply go to your profile page and click the 'Edit' button beside the information you wish to amend. </li><br> <!-- This is a list element -->
      <li>Q: How does the 'Gamer Score' get calculated? </li> <!-- This is a list element -->
      <li>A: Short answer, it doesn't...yet, this is actually a feature that will be coming, very soon. </li><br> <!-- This is a list element -->
      <li>Q: Will more games be added? </li> <!-- This is a list element -->
      <li>A: YES! However, it DOES take time to write the code for these games and then intergrate it into the website.</li><br> <!-- This is a list element -->
      
    </ul> <!-- This closes the unordered list -->
  </div> <!-- This closes the div -->
</div> <!-- This closes the background image div  -->
</div> <!-- This closes the modal content div -->
</div> <!-- This closes the modal dialog div -->
</div> <!-- This closes the main div -->
<!-- ************************** FAQ - COMING SOON ************************** -->
  
  
 <!-- ************************** ABOUT - COMING SOON ************************** -->
<div class="modal fade" id="ABOUT" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true"> <!-- This is a new div with the class and id etc included -->
        <div class="modal-dialog modal-lg"> <!-- This is a new div with the class info -->
          <div class="modal-content" style="align-text: center; text-center"> <!-- Another div with the modal content  -->
            <div class="modal-header"><h1>ABOUT</h1> <!-- another div that has the modals header section where the title will go -->
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> <!--  btn-close makes a cross icon placed in the top right of the modal and will dismiss the modal if clicked -->
            </div> <!-- This closes the header div -->

<div class="bgimg"> <!-- This is a new div for the background image -->
  <div class="middle  bg-info-subtle border border-primary-subtle rounded-3 text-center"> <!-- This is another div -->
    
    <h2>Under construction <br> Available in a few weeks</h2> <!-- This is the title of the modal -->
    <p> <!-- This is the opening of a paragraph, the below is a little bit of information that is displayed on the page for the users to see -->
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

      <ul> <!-- This starts an unordwered list -->
      <li>- A scoreboard - (so we can have a leaderboard which will allow our users to see where they rank based on their skill points earned <br> by playing the games)</li><br> <!-- This is an element in the list -->
      <li>- Warning functions and blacklisting capabilities, this is for the who wish to use and abuse.</li><br> <!-- This is an element in the list -->
      <li>- The Cube game. Why not try your luck and see if you can escape The Cube!</li><br> <!-- This is an element in the list -->
      <li>- Error fixes and stability updates.</li><br> <!-- This is an element in the list -->
      <li>- Created limitations to game access, you now need to be a logged in user to gain access to play. <br> This is an attempt to stop non-users from breaking your record!</li><br> <!-- This is an element in the list -->
      </ul> <!-- This closes thr unordered list -->

      <br> <!-- Page Break -->
      Still to come:<br> <!-- This displays to the user a message followed by a page break --> 
        
      <ul> <!-- This starts an unordered list -->
         <li>- A Chat page - (a place that users can come together and share gaming tips and help each other to reach higher scores)</li> <!-- This is an element in the list -->
         <li>- New games - (We are currently looking into a first person shooter style game)</li> <!-- this is an element within the list-->
      </ul> <!-- This closes the unordered list -->

  <br> <!-- Page break -->
  </p> <!-- This is the closing bracket of the paragraph -->
  </div> <!-- This closes the inner div -->
</div> <!-- This closes the background image div  -->
</div> <!-- This closes the modal content div -->
</div> <!-- This closes the modal dialog div -->
</div> <!-- This closes the main div -->
<!-- ************************** ABOUT - COMING SOON ************************** -->

<!-- ************************** CONTACT US - COMING SOON ************************** -->
<div class="modal fade" id="CONTACT_US" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true"> <!-- This is a new div with the class and id etc included -->
        <div class="modal-dialog modal-lg"> <!-- This is a new div with the class info -->
          <div class="modal-content" style="align-text: center; text-center"> <!-- Another div with the modal content  -->
            <div class="modal-header"> <!-- another div that has the modals header section where the title will go -->
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> <!--  btn-close makes a cross icon placed in the top right of the modal and will dismiss the modal if clicked -->
            </div><!-- This closes the header div -->

<div class="bgimg"> <!-- This is a new div for the background image -->
  <div class="middle  bg-info-subtle border border-primary-subtle rounded-3 text-center"> <!-- This is another div -->
  <div class="title text-center"><h1>CONTACT US</h1> <!-- This advised the user that they are not signed in -->
  
  <p>Please feel free to contact us in regard to any errors, crashes or feedback you may have. <!-- This is a paragraph that is displayed for the user -->
  <br> Please also feel free to give any suggestions that you think that we could implement to enhance your website experience. <!-- This is a paragraph that is displayed for the user -->
  <br> You can email us at: <h5>support@highersphere.co.uk</h5></p> <!-- This is a paragraph that is displayed for the user -->
</div> <!-- This closes the div -->

  </div> <!-- This closes the div -->
</div> <!-- This closes the background image div  -->
</div> <!-- This closes the modal content div -->
</div> <!-- This closes the modal dialog div -->
</div> <!-- This closes the main div -->

<!-- ************************** CONTACT US - COMING SOON ************************** -->


</html> <!-- This closes off the HTML section -->


