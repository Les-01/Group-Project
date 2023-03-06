<?php



session_start(); // This line starts the session and this will be included on every page.

  include("../config/conn.php");
  include("../config/functions.php");



if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //This means something was posted.
    $Username = $_POST['Username']; // This creates a username variable which will provide the info from the user.
    $User_Fname = $_POST['Fname'];
    $User_Sname = $_POST['Sname'];
    $User_Email = $_POST['Email'];
    $User_Password = md5($_POST['Password']);
    $User_Password2 = md5($_POST['Password2']);
    
 if ($User_Password == $User_Password2){  

if (!empty($Username) && !empty($User_Email) && !empty($User_Password)) 
    {
               
        //$query = "insert into user_tbl (Username, Email, Password) values ('$Username', '$User_Email', '$User_Password')";
        $query = "INSERT INTO `user-tbl` (`User_ID`, `Username`, `Fname`, `Sname`, `Email`, `Rank`, `Password`) VALUES (NULL, '".$Username."', '".$User_Fname."', '".$User_Sname."', '".$User_Email."', 'User', '".$User_Password."')";

        mysqli_query($con, $query);
        //echo $query;
        header("location: ../index.php");

        die;

    } 
    else
    {
        echo "failed!";
        //header("location: ../Account/Account_Creation_Failed.php");
        
    }
    

    
// echo $User_Name, $User_Fname, $User_Sname, $User_Cnumber,  $User_Town, $User_Email, $User_Pword;
} 
}   
?>