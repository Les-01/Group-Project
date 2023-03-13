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

    <form action="Process_Files/pchange_process.php" method="POST">   
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

<!-- ********************* PROFILE MODAL START ********************* -->

    <form action="Process_Files/login_process.php" method="POST">   
      <div class="modal fade" id="profile" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header"><h4>Profile</h4>
              <h5 class="modal-title" id="modal-title">Sign In Here</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> <!-- btn-close makes a cross and bootstrap knows where to put it within the div. data-bs-dismiss will dismiss the modal -->
            </div>
      
                <div class="modal-body">
                  <section class="vh-100" style="background-color: #f4f5f7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-6 mb-4 mb-lg-0">
        <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">
            <div class="col-md-4 gradient-custom text-center text-white"
              style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"
                alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
              <h5>Marie Horwitz</h5>
              <p>Web Designer</p>
              <i class="far fa-edit mb-5"></i>
            </div>
            <div class="col-md-8">
              <div class="card-body p-4">
                <h6>Information</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Email</h6>
                    <p class="text-muted">info@example.com</p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Phone</h6>
                    <p class="text-muted">123 456 789</p>
                  </div>
                </div>
                <h6>Projects</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Recent</h6>
                    <p class="text-muted">Lorem ipsum</p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Most Viewed</h6>
                    <p class="text-muted">Dolor sit amet</p>
                  </div>
                </div>
                <div class="d-flex justify-content-start">
                  <a href="#!"><i class="fab fa-facebook-f fa-lg me-3"></i></a>
                  <a href="#!"><i class="fab fa-twitter fa-lg me-3"></i></a>
                  <a href="#!"><i class="fab fa-instagram fa-lg"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
                  
    
                  <div class="modal-footer item-align center">
                    <button class="w-100 btn btn-lg btn-primary bg-success border border-success-subtle">Login</button>
                  </div>
                </div>
          </div>
        </div>
      </div>
    </form>
  

<!-- ********************* PROFILE MODAL END ********************* -->















</html>


