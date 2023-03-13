<?php



session_start(); // This line starts the session and this will be included on every page.

  include("../config/conn.php");
  include("../config/functions.php");



if ($_SERVER['REQUEST_METHOD'] == "POST") 

{
    //This means something was posted.
    $Username = $_POST['Username']; // This creates a username variable which will provide the info from the user.
    $Fname = $_POST['Fname'];
    $Sname = $_POST['Sname'];
    $Email = $_POST['Email'];
    $Password = md5($_POST['Password']);
    $Password2 = md5($_POST['Password2']);


    $query = "SELECT * FROM `user_tbl` WHERE `Username` LIKE '".$Username."'"; // The backwards quotations are different to the usual ones, however these are selected from the button to the left of the 1 key on the keyboard.  This line is also creating a $sql variable

    $result = mysqli_query($con, $query); // memres = member result

    $row_count = $result ->num_rows;

            if($row_count == 1)
            {
                //header('Location: ../error.php');
            echo "$Username Already Exists! <br> Please Log in.";
        
                }

                elseif($row_count >=2)
                {
                    echo "!!WARNING!! Duplicate Accounts Held On Database.";
                
                }

                        elseif($row_count == 0)
                        {                
                            
                            if(!empty($Username) && !empty($Email) && !empty($Fname) && !empty($Sname) && !empty($Password) && !empty($Password2))
                            {  

                        if($Password == $Password2){
                                    
                                //$query = "insert into user_tbl (Username, Email, Password) values ('$Username', '$User_Email', '$User_Password')";
                                $query = "INSERT INTO `user_tbl` (`User_ID`, `Username`, `Fname`, `Sname`, `Email`, `Gamer_Score`, `Tier`, `Password`) VALUES (NULL, '".$Username."', '".$Fname."', '".$Sname."', '".$Email."', '0', 'User', '".$Password."')";

                                mysqli_query($con, $query);
                                //echo $query;
                                header("location: ../index.php");
                                die;
                                }

                                else{
                                    echo "Passwords don't match, please check and try again.";
                                } 
                                
                                }
                                else
                                {
                                        echo "Please populate ALL fields";
                                            
                                }
                            }
                            
} 

   
?>