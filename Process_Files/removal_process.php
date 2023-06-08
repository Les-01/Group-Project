
<?php //This line opens the PHP

session_start(); // This line will start a session and hold all the information of the user until the session is ended either by logging out or closing the browser.

include ("../config/conn.php"); //This is an include line that will include the con file which is essentially a key (holiding the username and password to access the database) without this inclusion the webpage will not load correctly.
include ("../config/functions.php"); // This is another include line and includes the functions list, these functions are vital to the smooth operation of the webpage.
$_SESSION['Username']; // This is capturing the Username from the active session
$varUsername = $_SESSION['Username']; // This is putting the Username from the active session into a variable called 'varUsername'


$Username = $_POST['username']; // This is putting the Username that has been posted from the previous page into a variable 'Username'
$Password = $_POST['password']; // This is putting the Password that has been posted from the previous page into a variable 'password'
$RePassword = $_POST['repassword']; // This is putting the Retyped Password that has been posted from the previous page into a variable 'repassword'

if (!empty($Username) && !empty($Password) && !empty($RePassword)) // This line here is checking that the fields aren't empty. '!' means not. so the method '!empty($username)' is saying field 'Username' is not empty.
    { //This opens the 'if' statement

      
       if($Password == $RePassword) //This line is checking that the password and the repassword are the same before progressing onto the next stage.
       { //This opens the 'if' statement
        
        if($Username == $varUsername) //This is checking that the username the user has input on the previous page is the same as the one they are logged in with. This is to ensure the user can only delete thier own account.
        { //This opens the 'if' statement
            $sql = "DELETE FROM user_tbl where Username = '".$varUsername."'"; // This line is deleting from the user table the user information from the row that matches with the username that is attached to the active session.

            $result = $con->query($sql);
            header("location: ../index3.php"); // This will redirect the user back to the landing page
            session_destroy(); // This will kill the session and prevent the user from being able to access any information from the previous page once navigated away.
            die("Account Deleted Successfully!"); // This will print a message and stops the script.

        }else //This is an 'else' statement that happens if the parameters are met in the 'if' statement.
        { //This opens the 'else' statement
              echo "Username, email or Password Incorrect, please try again!"; //This line is showing what will be displayed on the screen for the user if the paramters above aren't met. 'echo' means to print out or show the line of text that preceeds the echo.
        } //This closes the 'else' statement
        
       }else //This is another 'else' statement that is actioned based on the previous 'if' statements parameters arent met.
        { //This opens the 'else' statement
        echo "Passwords don't match! Please check and try again."; //This line is showing what will be displayed on the screen for the user if the paramters above aren't met. 'echo' means to print out or show the line of text that preceeds the echo.
         header("location: ../games.php");
        } //This closes the 'else' statement
      
    } //This closes the 'if' statement
    else //This is another 'else' statement that is actioned based on the previous 'if' statements parameters not being met.
    { //This opens the 'else' statement
        
        echo "Please populate all fields!"; //This line is showing what will be displayed on the screen for the user if the paramters above aren't met. 'echo' means to print out or show the line of text that preceeds the echo.
        header("location: ../profile.php"); // This will redirect the user back to the landing page
        
        
    } //This closes the 'else' statement


?> <!-- This line closes the PHP -->