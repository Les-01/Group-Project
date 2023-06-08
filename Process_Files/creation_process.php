<?php //This line is opening the PHP



session_start(); // This line starts the session and this will be included on every page.

  include("../config/conn.php"); //This is an inclusion to include the con file which is important as it holds the key to the database.
  include("../config/functions.php"); //This line is an inclusion to include the functions file, this file is important in order for the webpage to load correctly.



if ($_SERVER['REQUEST_METHOD'] == "POST") //this is an 'if' statement and checks to make sure that there is a connection to the server and that information has been posted from the previous page.

{ //This opens the 'if' statement
    //This means something was posted.
    $Username = $_POST['Username']; // This creates a username variable which will provide the info from the user.
    $Fname = $_POST['Fname']; //This line is creating a new variable called 'Fname' and will hold the first name that has been posted from the previous pages form.
    $Sname = $_POST['Sname']; //This line is creating a new variable called 'Sname' and will hold the surname that has been posted from the previous pages form.
    $Email = $_POST['Email']; //This line is creating a new variable called 'email' and will hold the email that has been posted from the previous pages form.
    $Password = md5($_POST['Password']); //This line is creating a variable called 'password' and is holding md5 encrypted password the posted from the previous pages form.
    $Password2 = md5($_POST['Password2']); //This line is creating a variable called 'password2' and is holding md5 encrypted password the posted from the previous pages form.


    $query = "SELECT * FROM `user_tbl` WHERE `Username` LIKE '".$Username."'"; // The backwards quotations are different to the usual ones, however these are selected from the button to the left of the 1 key on the keyboard.  This line is also creating a $sql variable

    $result = mysqli_query($con, $query); // memres = member result

    $row_count = $result ->num_rows; // This line is creating a variable called 'row_count' this is the combination of checking the database for the credentials above and then checking how many rows match these credentials. The below code is then run.

            if($row_count == 1) //This line is saying that if the row count is equal to 1 then there is already an account on the database and the below code will then run which advises the user of this and then they can go back and try signing in.
            { //This opens the 'if' statement
                
            
            echo '<script type="text/javascript">'; //This line is opening a script
            echo ' alert("Username already exists!")'; //This is the alert that will be displayed on the screen
            echo '</script>'; //This is the closure of the script

            ?> <!-- This line is closing the PHP temporarily -->
            <h1>Usernme in use, choose another or sign in.</h1> <!-- This line will be printed on screen using the h1 font size advising the user that this username is either in use or they already have an account. -->
            <h2>Click <button type="button" value="Go back!" onclick="history.back()">HERE</button> to go back and try again.</h2><!-- This line will be printed out using the h2 font size so the user can see what to do. I have included a button to allow the user to go back to the previous page and try logging in. -->
            <?php // This line is reopening PHP

            
        
                }//This closes the 'if' statement

                elseif($row_count >=2) //This line is saying that if the row count is equal to 2 then there is duplicate accounts somehow and the below code will run which also directs the user to the contact us page so they can contact support and get the issue resolved.
                {//This opens the 'if' statement
                    echo '<script type="text/javascript">'; //This line is opening a script
                    echo ' alert("!!WARNING!! Duplicate Accounts, contact support!.")'; //This is the alert that will be displayed on the screen
                    echo '</script>'; //This is the closure of the script

                    ?> <!-- This line is closing the PHP temporarily -->
                        Click <a class="btn" href="../contact_us.php/">HERE</a> to contact us. <!-- This line includes a button to allow the user to go straight to the 'contact us' page to contact support. -->
                    <?php // This line is reopening PHP
                
                } //This closes the 'elseif' statement

                        elseif($row_count == 0) //This line is saying if the row count is equal to zero then there is not already an account on the database, so the system will then run the below code which will register an account.
                        {  //This opens the 'if' statement              
                            
                            if(!empty($Username) && !empty($Email) && !empty($Fname) && !empty($Sname) && !empty($Password) && !empty($Password2)) //This line is making sure that none of the form input fields are empty, if they are then the below code will be skipped and the system will move onto the 'else' statement. If the paramters ARE met then the system will run through the below code.
                            {  //This opens the 'if' statement

                        if($Password == $Password2){ //This line is checking that password and password2 are the same, if they are not then the below script will be skipped and the system will move onto the 'else' statement.
                                    
                                
                                $query = "INSERT INTO `user_tbl` (`User_ID`, `Username`, `Fname`, `Sname`, `Email`, `Gamer_Score`, `Tier`, `Password`) VALUES (NULL, '".$Username."', '".$Fname."', '".$Sname."', '".$Email."', '0', 'User', '".$Password."')"; //This line will input all the posted infor from the previous pages form and input them in the corresponding locations within the database table.

                                mysqli_query($con, $query); //This line is creating a variable 'mysqli_query, which combines the con file and the above variable 'query'
                                //echo $query;
                                header("location: ../index2.php"); // this line will redirect the user to index 2 which is the same as index, but has a loaded pop-up that will be displayed to advise the user they have successfully registered an account. (this was a work around as I couldn't find a way to get a pop-up to be posted to another page)
                                die; //This kills the running code
                                } //This closes the 'if' statement

                                else{//This opens the 'else' statement
                                    ?> <!-- This line is closing the PHP temporarily -->
                                    <h1>Passwords don't match, please check and try again.</h1> <!-- This line will be printed out using the font size h1 and will be advising the user that they need to check their credentials. --> 
                                    <h2>Click <button type="button" value="Go back!" onclick="history.back()">HERE</button> to go back and try again.</h2> <!-- This line will be printed out using the h2 font size so the user can see what to do. I have included a button to allow the user to go back to the previous page and try again. -->
                                    <?php // This line is reopening PHP
                                    
                                    echo '<script type="text/javascript">'; //This line is opening a script
                                    echo ' alert("Password or Username incorrect!")'; //This is the alert that will be displayed on the screen
                                    echo '</script>'; //This is the closure of the script
                                    
                                    
                                } //This closes the 'else' statement 
                                
                                } //This closes the 'if' statement
                                else
                                { //This opens the 'else' statement
                                    ?><!-- This line is closing the PHP temporarily -->
                                        <h1>Please populate <b>ALL</b> fields</h1> <!-- This line will be printed out using the font size h1 and will be advising the user that they need to populate all fields. -->             
                                        <h2>Click <button type="button" value="Go back!" onclick="history.back()">HERE</button> to go back and try again.</h2> <!-- This line will be printed out using the h2 font size so the user can see what to do. I have included a button to allow the user to go back to the previous page and try again. -->
                                    <?php // This line is reopening PHP
                                            
                                } //This closes the 'else' statement
                            }//This closes the 'elseif' statement
                            
} //This closes the 'if' statement

   
?> <!-- This is closing the PHP for the final time -->