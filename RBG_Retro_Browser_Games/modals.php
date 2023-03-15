<?php

?>

<html>

<!-- ********************* LOGIN MODAL START ********************* -->

    <form action="Process_Files/login_process.php" method="POST">   
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
                  <label>
                      <input type="checkbox" value="remember-me" name="remember_me"> Remember me
                  </label>
    
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

<!-- ********************* UPDATE MODAL START (redundant) ********************* -->

    <form action="Process_Files/update_process.php" method="POST">   
      <div class="modal fade" id="update" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modal-title">Make Changes to an account</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> <!-- btn-close makes a cross and bootstrap knows where to put it within the div. data-bs-dismiss will dismiss the modal -->
            </div>
      
                <div class="modal-body">
                  <p>Double check all details</p>
                  <p>Only <b>ONE</b> change at a time!</p>
                  
                  <input type="text" class="form-control" id="Username" name="Username" placeholder="Current Username">
                  <br>
                  <input type="text" class="form-control" id="NewUsername" name="NewUsername" placeholder="New Username">
                  <br>
                  <input type="text" class="form-control" id="NewFname" name="NewFname" placeholder="New First Name">
                  <br>    
                  <input type="text" class="form-control" id="NewSname" name="NewSname" placeholder="New Second Name">
                  <br>
                  <input type="email" class="form-control" id="NewEmail" name="NewEmail" placeholder="New Email">
                  <br>
                  <input type="text" class="form-control" id="NewRank" name="NewRank" placeholder="New Rank">
                  <br>
                  <input type="password" class="form-control" id="NewPassword" name="NewPassword" placeholder="New Password">
                  <br>
                  <div class="modal-footer item-align center">
                    <button class="w-100 btn btn-lg btn-primary bg-success border border-success-subtle">Process</button>
                  </div>  
                </div>
          </div>
        </div>
      </div>
    </form>
  

<!-- ********************* UPDATE MODAL END (redundant) ********************* -->

<!-- ********************* REMOVE MODAL START ********************* -->

    <form action="Process_Files/login_process.php" method="POST">   
      <div class="modal fade" id="remove" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modal-title">Sign In Here</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> <!-- btn-close makes a cross and bootstrap knows where to put it within the div. data-bs-dismiss will dismiss the modal -->
            </div>
      
                <div class="modal-body">
                  <p>Please fill both fields</p>

                  <input type="text" class="form-control" id="test-email" name="Username" placeholder="Username">
                  <br>
                  <input type="password" class="form-control" id="test-email" name="Password" placeholder="Password">
                  <br>  
                  <label>
                      <input type="checkbox" value="remember-me" name="remember_me"> Remember me
                  </label>
    
                  <div class="modal-footer item-align center">
                    <button class="w-100 btn btn-lg btn-primary bg-success border border-success-subtle">Login</button>
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

<!-- ********************* Not working.... PROFILE MODAL START ********************* -->

    <form action="Process_Files/login_process.php" method="POST">   
      <div class="modal fade" id="profile" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title text-center" id="modal-title">Sign In Here</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> <!-- btn-close makes a cross and bootstrap knows where to put it within the div. data-bs-dismiss will dismiss the modal -->
            </div>
      
                <div class="modal-body text-center">
              
          <br>
    <a><b>Username: </b><?php echo $User_Data['Username']; ?></a> <a class="button btn" data-bs-toggle="modal" data-bs-target="#Username_Edit">Edit</a> 
    <br>
    <a><b>Email: </b><?php echo $User_Data['Email']; ?></a> <a class="button btn" data-bs-toggle="modal" data-bs-target="#Email_Edit">Edit</a>
    <br>
    <a><b>First Name: </b><?php echo $User_Data['Fname']; ?></a> <a class="button btn" data-bs-toggle="modal" data-bs-target="#Fname_Edit">Edit</a>
    <br>
    <a><b>Second Name: </b><?php echo $User_Data['Sname']; ?></a> <a class="button btn" data-bs-toggle="modal" data-bs-target="#Sname_Edit">Edit</a>
    <br>
    <a><b>Gamer Score: </b><?php echo $User_Data['Gamer_Score']; ?></a> <a class="button btn" data-bs-toggle="modal" data-bs-target="#Username_Edit">Edit</a>
    <br>
    <a><b>Password: ********** </b></a> <a class="button btn" data-bs-toggle="modal" data-bs-target="#Password_Edit">Edit</a>


                  </div> 
          </div>
        </div>
      </div>
    </form>
  

<!-- ********************* PROFILE MODAL END ********************* -->


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

                  <input type="email" class="form-control" id="new_sname" name="new_sname" placeholder="New Surname">
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














</html>


