<?php

?>

<html>

<!-- ********************* LOGIN MODAL START ********************* -->

    <form action="Process_Files/login_process.php" method="POST">   
      <div class="modal fade" id="login" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
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
  

<!-- ********************* LOGIN MODAL END ********************* -->

<!-- ********************* UPDATE MODAL START ********************* -->

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
                  <a class="btn" href="">Forgotten Password</a>
                  <a href="Process_Files/Forgotten_Password.php" id=forgotten_password class="btn btn-primary bg-success border border-success-subtle ">Fogotten Password?</a>
                </div>
          </div>
        </div>
      </div>
    </form>
  

<!-- ********************* UPDATE MODAL END ********************* -->

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

    <form action="Process_Files/pchange_process.php" method="POST">   
      <div class="modal fade" id="Forgotten_Password" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modal-title">Update Password</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> <!-- btn-close makes a cross and bootstrap knows where to put it within the div. data-bs-dismiss will dismiss the modal -->
            </div>
      
                <div class="modal-body">
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















</html>


